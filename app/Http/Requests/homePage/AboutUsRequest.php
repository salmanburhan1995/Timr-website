<?php

namespace App\Http\Requests\homePage;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
            'about_heading'=>'required',
            'let-us-help-you_para'=>'required',
            'about_cta_text'=>'required',
            'about_cta_link'=>'required',
            'highlighted_feature2_heading'=>'required',
            'highlighted_feature2_para'=>'required',
            'highlighted_feature1_para'=>'required',
            'highlighted_feature1_heading'=>'required'
        ];
    }
}
