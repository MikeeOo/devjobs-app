<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobRequest extends FormRequest
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
            'name' => 'required|min:2|unique:companies|max:255',

            'title' => 'required|min:2|max:255',
            //            'location' => 'required|min:2|max:255',

            'email' => 'required|email|unique:companies|max:255',
            'website' => 'required|url:http,https|unique:companies|max:255',
            'logo' => 'required|image|mimes:png,gif,jpeg,jpg',
            //            'logo' => 'required|min:2|max:255',
            'body' => 'required|min:2',
        ];
    }
}
