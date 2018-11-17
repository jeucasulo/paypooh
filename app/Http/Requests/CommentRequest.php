<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
				'body'=>'required|max:200',
				'status'=>'required|max:20',
				'active'=>'required|max:20',
				'user_id'=>'required|max:20',
				'topic_id'=>'required|max:20',

			];
		}
		public function messages()
		{
			return [
				'body.required'=>'Campo requerido',
				'body.max'=>'O campo Nome deve ter no maximo 20 caracteres',
				'status.required'=>'Campo requerido',
        'status.max'=>'O campo Nome deve ter no maximo 20 caracteres',
				'active.required'=>'Campo requerido',
        'active.max'=>'O campo Nome deve ter no maximo 20 caracteres',
				'user_id.required'=>'Campo requerido',
        'user_id.max'=>'O campo Nome deve ter no maximo 20 caracteres',
				'topic_id.required'=>'Campo requerido',
				'topic_id.max'=>'O campo Nome deve ter no maximo 20 caracteres',

			];
		}
//rules options: max:number|min:number|email|unique:posts|bail|nullable|date
}
