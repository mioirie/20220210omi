<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'id' => 'required',
            'fullname' => 'required',
            'gender' => 'required|in:男性,女性',
            'email' => 'required|email',
            'postcode' => 'required|zipcode',
            'address' => 'required',
            'building_name' => 'nullable',
            'opinion'=> 'required|max:120',
            'created_at' => 'date'|nullable,
            'updated_at' => 'date'|nullable,//
        ];
    }

    
}
