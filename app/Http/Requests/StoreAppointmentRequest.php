<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
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
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:50'],
            'modelcar' =>['max:100'],
            'data' => ['required'],
            'ora' => ['required'],

        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'Il campo nome è obbligatorio',
            'surname.required' => 'Il campo cognome è obbligatorio',
            'modelcar.max' => 'Il modello auto può contenere massimo 100 caratteri',
            'data.required' => 'Il campo data è obbligatorio',
            'ora.required' => 'Il campo ora è obbligatorio',
        ];
    }
}
