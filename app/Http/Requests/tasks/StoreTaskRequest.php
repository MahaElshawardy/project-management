<?php

namespace App\Http\Requests\tasks;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'name'=>['required','string','max:256','min:2'],
            'dascription'=>['required','min:10','string'],
            'start_date'=>['required'],
            'end_date'=>['required'],
            // 'assigner_to_id '=>['required'],
            // 'assigner_id '=>['required'],
            // 'task_parent_id '=>['required'],
        ];
    }
}
