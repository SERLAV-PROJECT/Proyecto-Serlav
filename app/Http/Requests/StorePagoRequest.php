<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Foundation\Http\FormRequest;

class StorePagoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "valor"  => 'required|min:4500|numeric',
            "factura_id" => 'required|exists:factura,id',
        ];
    }

    public function messages()
    {
        return [
            
            'valor.required' => 'Valor obligatorio',
            'valor.max' => 'El valor máximo es 15000',
            'valor.min' => 'El valor minimo es 4500',

            'factura_id.exists' => 'Factura no existe',
            'factura_id.required' => 'Factura Obligatoria',
        ];
    }

}
