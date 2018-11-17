<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopicRequest extends FormRequest
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
			// 'name', 'info', 'status', 'active', 'platform_id','user_id'

			return [
				'name'=>'required|max:20',
				'info'=>'required|max:200',
				'status'=>'required|max:20',
				'active'=>'required|max:20',
				'platform_id'=>'required|max:20',
				'user_id'=>'required|max:20'

			];
		}
		public function messages()
		{
			return [
				'name.required'=>'Campo requerido',
				'name.max'=>'O campo Nome deve ter no maximo 20 caracteres',
				'info.required'=>'Campo requerido',
        'info.max'=>'O campo Nome deve ter no maximo 200 caracteres',
				'status.required'=>'Campo requerido',
        'status.max'=>'O campo Nome deve ter no maximo 20 caracteres',
				'active.required'=>'Campo requerido',
        'active.max'=>'O campo Nome deve ter no maximo 20 caracteres',
				'platform_id.required'=>'Campo requerido',
        'platform_id.max'=>'O campo Nome deve ter no maximo 20 caracteres',
				'user_id.required'=>'Campo requerido',
        'user_id.max'=>'O campo Nome deve ter no maximo 20 caracteres'
			];
		}
//rules options: max:number|min:number|email|unique:posts|bail|nullable|date
}
