<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       if ($this->user_id == auth()->user()->id) {
        return true;
       } else {
        return false;
       }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
       $rules = [
        'title' => 'required',
        'slug' => 'required',
        'status' => 'required|in:1,2',
       ];

       if ($this->status == 2){
            $rules = array_merge ($rules, [
                'category_id' => 'required',
                'extract' => 'required',
                'body' => 'required',
                'file'=>'file|image|nullable'
             ]);
        }

        return $rules;
    }
}
