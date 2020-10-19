<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SharingRequest extends FormRequest

{

    public function authorize()
    {
       return true ;

    }



    public function rules()
    {
        return ['name' => 'required',

            'Prof_name' => 'required|numeric:sharing',
            'nationality' => 'required',
            'management' => 'required',
            'edulevel' => 'required',
            'school' => 'required',
            'class' => 'required',

            'mobile' => 'required|numeric:sharing',
            'email'=>'required|email',
            'areashare' => 'required',
            'sharesort' => 'required',
           'photo' => ' mimes:jpg,png,jpeg,gif,svg,psd',
           'video' => 'mimes:mp4,mkv,oga,ogv,ogg,webm ',
            'abyat'  =>'file|mimes:pdf,text,application/msword',
             'blog'  =>'file|mimes:pdf,text,application/mswordd',
            'stories'  =>'file|mimes:pdf,text,application/msword',

            'design'  =>'mimes:jpg,png,jpeg,gif,svg,psd',

            'enfo'  =>'mimes:jpg,png,jpeg,gif,svg,psd',

            'elqa'  =>'mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',

            'motion'  =>'mimes:mp4,mkv,oga,ogv,ogg,webm',

            'volunt'  =>'file|mimes:pdf,text,application/msword',

            'drawing'  =>'mimes:jpg,png,jpeg,gif,svg,psd',

            'line'  =>'mimes:jpg,png,jpeg,gif,svg,psd'








        ];
    }






    public function messages()
    {

        return [
            'name.required' => ('يرجى ادخال اسم المشارك'),
            'Prof_name.required' => ('يرجى ادخال السجل المهني  '),
            'nationality.required' => 'يرجى ادخال الجنسية ',
//            'email.required' => 'هذا البريد الإلكتروني مستخدم من قبل ',
            'email.required'=>'يجب إدخال البريد الإلكتروني',
            'email.email'=>'هذا  البريد الإلكتروني غير صالح',

            'mobile.numeric' => 'يجب أن يكون رقم الهاتف صالح للإستخدام',
            'Prof_name.numeric' => 'يجب أن يكون رقم الهوية صالح للإستخدام',

            'mobile.required' => 'رقم الهاتف مطلوب  ' ,
            'edu_area.required' => 'يرجى ادخال المنظمة التعليمية ',

            'school.required' =>  'يرجى إدخال اسم المدرسة',
            'class.required' =>  'يرجى ادخال الصف ',
            'areashare.required' => 'يرجى ادخال المنطقة القائمة بالمشاركة ',
            'sharesort.required' => 'يرجى ادخال نوع المشاركة ',
            'management.required' => 'يجب ادخال المنظمة التعليمية',
            'edulevel.required' => 'يجب إدخال المرحلة التعليمية '






        ];
    }
    }
