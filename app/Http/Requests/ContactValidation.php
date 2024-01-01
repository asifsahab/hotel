<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactValidation extends FormRequest
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
           'name' => 'required',
           'email' => 'required',
           'subject' => 'required',
           'message' => 'required',
        ];
    }
    public function messages(): array
{
    return [
        'name.required' => 'The Name field is required.',
        'email.required' => 'The Email field is required.',
        'email.email' => 'Enter a valid email address.',
        'subject.required' => 'The Subject field is required.',
        'message.required' => 'The Message field is required.',
    ];
}
protected $stopOnFirstFailure = true;

}
