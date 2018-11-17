<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
				'name'=>'required|max:20',
				'label'=>'required|max:20'
			];
		}
		public function messages()
		{
			return [
				'name.required'=>'Campo requerido',
				'name.max'=>'O campo Nome deve ter no maximo 20 caracteres',
				'label.required'=>'Campo requerido',
        'label.max'=>'O campo Nome deve ter no maximo 20 caracteres'
			];
		}
//rules options: max:number|min:number|email|unique:posts|bail|nullable|date
}
