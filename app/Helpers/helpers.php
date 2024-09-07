<?php
// app/helpers.php

use App\Services\TranslationService;
use Illuminate\Support\Facades\Cache;

function translateContent($content, TranslationService $translationService)
{
    $lang = session('locale', 'en');

    // If $lang is 'en', return the original content immediately
    if ($lang === 'en') {
        return $content;
    }

    // Create a unique cache key based on the language and content
    $cacheKey = 'translations.' . $lang . '.' . md5(json_encode($content));

    // Check if the translations are cached
    if (Cache::has($cacheKey)) {
        return Cache::get($cacheKey);
    }

    // If $content is an array, translate each item
    if (is_array($content)) {
        $translatedContent = [];
        foreach ($content as $key => $text) {
            $translatedContent[$key] = $translationService->translate($text, $lang);
        }
    } else {
        // Translate the single string
        $translatedContent = $translationService->translate($content, $lang);
    }

    // Cache the translated content for future use
    Cache::put($cacheKey, $translatedContent, now()->addHours(48));

    return $translatedContent;
}


if (!function_exists('translateContent')) {

    /*function translateContent($content, TranslationService $translationService)
    {
        $lang = session('locale','en');
        // If $lang is 'en', return the original content immediately
        if ($lang === 'en') {
            return $content;
        }
        // Check if $content is an array or a string and handle accordingly
        if (is_array($content)) {
            foreach ($content as $key => $text) {
                $content[$key] = $translationService->translate($text, $lang);
            }
            return $content; // Return the translated array
        } else {
            return $translationService->translate($content, $lang); // Return the translated string
        }
    }*/

}
