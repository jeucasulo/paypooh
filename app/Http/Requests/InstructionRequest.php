<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructionRequest extends FormRequest
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
          'title' => 'required|unique:instructions,name|max:25',
          'body' => 'required|max:250',
          'img' => 'required',
          'status' => 'required|max:25',
          'active' => 'required|max:25',
          'user_id' => 'required|max:25',
          'platform_id' => 'required|max:25',
        ];
    }
    public function messages()
    {
        return [
          'title.required' => 'O campo Nome é obrigatório',
          'title.max' => 'O campo Nome deve ter no maximo 25 caracteres',
          'title.unique' => 'Instrução já inserida',
          'body.required' => 'O campo Descrição é obrigatório',
          'body.max' => 'O campo Descrição deve ter no maximo 250 caracteres',
          'img.required' => 'O campo Imagem é obrigatório',
          'img.max' => 'O campo Imagem deve ter no maximo   25 caracteres',
          'order.required' => 'O campo Imagem é obrigatório',
          'order.integer' => 'O campo Ordem deve ser um número',
          'status.required' => 'O campo Integração é obrigatório',
          'status.max' => 'O campo Integração deve ter no maximo   25 caracteres',
          'active.required' => 'O campo Ativo é obrigatório',
          'active.max' => 'O campo Ativo deve ter no maximo   25 caracteres',
          'user_id.required' => 'O campo EC é obrigatório',
          'user_id.max' => 'O campo EC deve ter no maximo   25 caracteres',
          'platform_id.required' => 'O campo PP é obrigatório',
          'platform_id.max' => 'O campo PP deve ter no maximo   25 caracteres',
        ];
      }
}
