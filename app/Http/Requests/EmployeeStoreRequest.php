<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Employee;
use JWTAuth;

class EmployeeStoreRequest extends FormRequest
{
    public function prepareForValidation()
    {
        $this->merge(['user_id' => JWTAuth::toUser()->id]);
    }
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
        return  Employee::VALIDATE_RULES;
    }
}
