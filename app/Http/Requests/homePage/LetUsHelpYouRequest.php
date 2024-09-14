<?php

namespace App\Http\Requests\homePage;

use Illuminate\Foundation\Http\FormRequest;

class LetUsHelpYouRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'let-us-help-you_heading'=>'required',
            'let-us-help-you_para'=>'required',
            'feature_heading.*'=>'required',
            'feature_icon.*'=>'required|image|mimes:jpeg,jpg,png,gif,svg',
            'feature_paragraph.*'=>'required',
        ];
    }
}
