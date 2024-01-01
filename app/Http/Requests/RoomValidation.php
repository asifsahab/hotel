<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomValidation extends FormRequest
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
            'city' => 'required',
            'category' => 'required',
            'hotelname' => 'required',
            'price' => 'required|integer|min:1',
            'room' => 'required|integer|min:1',
            'person' => 'required|integer|min:1',
            'checkin' => 'required',
            'checkout' => 'required',
            'address' => 'required',
            'status' => 'required',
            'description' => 'required',
        ];
    }
    protected $stopOnFirstFailure = true;
}
