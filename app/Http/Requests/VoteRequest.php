<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class VoteRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:vote',
            'avg_percent' => 'required',
//            'sharing_id'=> 'required'


        ];
    }

    public function messages()
    {

        return [
            'email.required' => 'يرجى ادخال البريد الإلكتروني',
            'email.unique' => ' لا يمكن التصويت لنفس المشاركة أكثر من مرة من نفس البريد الإلكتروني',
            'email.email'=>'هذا  البريد الإلكتروني غير صالح',
            'name.required' => 'يرجى ادخال الإسم',

        ];
    }
}
