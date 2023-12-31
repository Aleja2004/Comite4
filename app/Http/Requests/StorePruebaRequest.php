<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePruebaRequest extends FormRequest
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
            'pru_tipo' => 'required',
            'pru_descripcion' => 'required',
            'pru_fecha' => 'required',
            'pru_url' => 'required',
            'sol_id' => 'required'
        ];
    }
}