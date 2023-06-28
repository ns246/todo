<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ChangePasswordRequest extends FormRequest
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
          'current_password' => ['required', 'current_password'],
					'password' => ['required', Password::defaults(), 'confirmed'],
        ];
    }

		public function attributes(){
			return [
				'current_password' => '現在のパスワード',
				'password' => '新しいパスワード',
			];
		}
}
