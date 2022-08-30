<?php

namespace App\Http\Requests\employees;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['required','string','max:20','min:2'],
            'email'=>['required','string','email','max:50','min:2','unique:users'],
            'phone'=>['required','max:11','unique:users'],
            'password'=>['required','string','min:8','confirmed'],
            'position'=>['required'],
            'supervisor_id'=>['required'],
            // 'password_confirmation' => ['required','min:8','same:password'],
        ];
    }
}
