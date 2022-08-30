<?php

namespace App\Http\Requests\projects;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjcetRequest extends FormRequest
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
            'name'=>['required','string','max:255','min:2'],
            'dascription'=>['required','string'],
            'start_date'=>['required'],
            'end_date'=>['required'],
        ];
    }
}
