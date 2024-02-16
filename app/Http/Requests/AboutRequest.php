<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'about_me' => 'required|string',
            'email' => 'required|email|max:255',
            'image' => 'nullable|mimes:png,jpg|max:10240',
            'phone' => 'required|string|max:12',
            'location' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'behance' => 'required|string|max:255',
        ];
    }
}
