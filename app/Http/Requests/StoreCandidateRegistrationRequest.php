<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCandidateRegistrationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|unique:candidates',
            'mobile' => 'required',
            'resume_file' => 'file|required|max:5120|mimes:pdf,doc,docx',
            'gender' => 'required|in:male,female',
            'country_id' => 'required|exists:countries,id'
        ];
    }
}
