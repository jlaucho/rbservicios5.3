<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ticketRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'id_usuario' =>'required',
            'comentarioServicio'=>'max:245'
        ];
    }
    public function messages()
    {
        return [
            'id_usuario.required' => 'Usuario Requerido',
            'comentarioServicio.max' => 'No debe exceder los :max caracteres',
        ];
    }
}
