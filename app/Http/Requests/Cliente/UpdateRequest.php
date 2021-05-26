<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'nombre'=>'required|string|max:255',
            'dni'=>'required|string|min:8|unique:clientes,dni,'. $this->route('cliente')->id.'|max:8',
            'ruc'=>'required|string|min:11|unique:clientes,ruc,'. $this->route('cliente')->id.'|max:11',
            'direccion'=>'nullable|string|max:255',
            'telefono'=>'required|min:9|unique:clientes,telefono,'. $this->route('cliente')->id.'|max:9|',
            'email'=>'required|email:rfc,dns|string|unique:clientes,email,'. $this->route('cliente')->id.'|max:255',

        ];
    }
    public function messages()
    {
        return [
            'nombre.required'=>'Este campo es requerido.',
            'nombre.string'=>'El valor no es correcto.',
            'nombre.max'=>'Solo se permite 255 caracteres.',


            'dni.required'=>'Este campo es requerido.',
            'dni.string'=>'El valor no es correcto.',
            'dni.max'=>'Solo se permite 255 caracteres.',
            'dni.min'=>'Solo se permite 255 caracteres.',
            'dni.unique'=>'Ya se encuentra registrado.',



            'ruc.required'=>'Este campo es requerido.',
            'ruc.string'=>'El valor no es correcto.',
            'ruc.max'=>'Solo se permite 11 caracteres.',
            'ruc.min'=>'Se requiere de 11 caracteres.',
            'ruc.unique'=>'Ya se encuentra registrado.',


            'direccion.string'=>'El valor no es correcto.',
            'direccion.max'=>'Solo se permite 255 caracteres.',


            'telefono.required'=>'Este campo es requerido.',
            'telefono.string'=>'El valor no es correcto.',
            'telefono.max'=>'Solo se permite 9 caracteres.',
            'telefono.min'=>'Se requiere de 9 caracteres.',
            'telefono.unique'=>'Ya se encuentra registrado.',

            'email.required'=>'Este campo es requerido.',
            'email.email'=>'No es un correo electrónico.',
            'email.string'=>'El valor no es correcto.',
            'email.max'=>'Solo se permite 255 caracteres.',
            'email.unique'=>'Ya se encuentra registrado.'
        ];
    }
}