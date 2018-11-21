<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlatformRequest extends FormRequest
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
      //    	'name', 'desc', 'integration', 'ec', 'pp','active','details','img'

        return [
          'name' => 'required|unique:platforms,name|max:25',
          'desc' => 'required|max:25',
          'integration' => 'required|max:25',
          'ec' => 'required|max:25',
          'pp' => 'required|max:25',
          'active' => 'required|max:25',
          'details' => 'required|max:250',
          'img' => 'required',
          'order' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'O campo Nome é obrigatório',
          'name.max' => 'O campo Nome deve ter no maximo 25 caracteres',
          'name.unique' => 'Plataforma já inserida',
          'desc.required' => 'O campo Descrição é obrigatório',
          'desc.max' => 'O campo Descrição deve ter no maximo   25 caracteres',
          'integration.required' => 'O campo Integração é obrigatório',
          'integration.max' => 'O campo Integração deve ter no maximo   25 caracteres',
          'ec.required' => 'O campo EC é obrigatório',
          'ec.max' => 'O campo EC deve ter no maximo   25 caracteres',
          'pp.required' => 'O campo PP é obrigatório',
          'pp.max' => 'O campo PP deve ter no maximo   25 caracteres',
          'active.required' => 'O campo Ativo é obrigatório',
          'active.max' => 'O campo Ativo deve ter no maximo   25 caracteres',
          'details.required' => 'O campo Detalhes é obrigatório',
          'details.max' => 'O campo Detalhes deve ter no maximo   25 caracteres',
          'img.required' => 'O campo Imagem é obrigatório',
          'img.max' => 'O campo Imagem deve ter no maximo   25 caracteres',
          'order.required' => 'O campo Imagem é obrigatório',
          'order.integer' => 'O campo Ordem deve ser um número'
        ];
      }
}
