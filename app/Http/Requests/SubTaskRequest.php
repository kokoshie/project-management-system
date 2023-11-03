<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class SubTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // `main_task_id`, `name`, `priority`, `status`, `start_date`, `end_date`
        return [
            'main_task_id' => 'required','this feild is required',
            'name' => 'required',
            'priority' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ];
    }
   
 
/**
 * Get the "after" validation callables for the request.
 */
    // public function after(): array
    // {
    //     return [
    //         function (Validator $validator) {
    //             if ($this->somethingElseIsInvalid()) {
    //                 $validator->errors()->add(
    //                     'name',
    //                     'Something is wrong with this field!'
    //                 );
    //             }
    //         }
    //     ];
    // }

    
}
