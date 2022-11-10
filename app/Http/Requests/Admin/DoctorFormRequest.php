<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DoctorFormRequest extends FormRequest
{
    /**
     * Determine if the doctor is authorized to make this request.
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
       $rules= [

            'gender' => [
                'required',
                'string',
                
            ],

            'phone' => [
                'required',
                'regex:/(01)[0-9]{8}/',
                'max:200'
                
            ],

            'doctorName' => [
                'required',
                'string',
                
            ],

           

            'doctordescription' => [
                'required',
                
            ],

            'certificate' => [
                'required',
                'mimes:jpeg,jpg,png'
                
            ],
            'Specialist' => [
                'required',
            ],

            'image_profile' => [
                'required',
                'mimes:jpeg,jpg,png'
            ],

            'availableDate' => [
                'required'
            ],
            'availableTime'=>[
                'required'
            ],
            'doctor_availability' =>[
                'required',
            ],
            'venues'=>[
                'required',
            ],
            

       ];

       return $rules;
    }
}
