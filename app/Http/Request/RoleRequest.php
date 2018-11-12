<?php

  namespace \App\Http\Request;

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
  				'id'=>'required|max:20',
  				'name'=>'required|max:20',
  				'label'=>'required|max:20',
  			];
  		}
  		public function messages()
  		{
  			return [
  				'id.required'=>'Field required',
  				'name.required'=>'Field required',
  				'label.required'=>'Field required',
  			];
  		}
  //rules options: max:number|min:number|email|unique:posts|bail|nullable|date
  }
