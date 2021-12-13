<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class offerRequest extends FormRequest
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
        //'name'=>'required|max:100|unique:offers,name',
            // 'details'=>'required',
        return [
            'name_ar'=>'required|max:100|unique:offers,name_ar',
            'name_en'=>'required|max:100|unique:offers,name_en',
            'price'=>'required|numeric',
            'details_ar'=>'required',
            'details_en'=>'required',
        ];
    }

    public function messages()
    {
        // 'name.required'=>trans('messages.offerNameRequired'),
        //             'name.unique'=>__('messages.offerNameUnique'),
        //             'name.max'=>__('messages.offerNameMax'),
        // 'details.required'=>__('messages.offerDetailsRequired'),
        return [
                    
                    'name_ar.required'=>trans('messages.offerNameRequired'),
                    'name_ar.unique'=>__('messages.offerNameUnique'),
                    'name_ar.max'=>__('messages.offerNameMax'),
                    'name_en.required'=>trans('messages.offerNameRequired'),
                    'name_en.unique'=>__('messages.offerNameUnique'),
                    'name_en.max'=>__('messages.offerNameMax'),
                    'price.required'=>__('messages.offerPriceRequired'),
                    'price.numeric'=>__('messages.offerPriceNumeric'),
                    'details_ar.required'=>__('messages.offerDetailsRequired'),
                    'details_en.required'=>__('messages.offerDetailsRequired'),
                ];
    }
}
