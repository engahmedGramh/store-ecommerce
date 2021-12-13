<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Requests\offerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    //
    public function getOffers(){
        //return Offer::get();
        return Offer::select('id','name_ar')->get();
    }
    public function store(offerRequest $request){
        // Offer::create([
        //     'name'=>'offers3',
        //     'price'=>'205',
        //     'details'=>'offers details',
        // ]);

        // validate data befor insert to databease
       
        // $ruls=$this->getRuls();
        // $messages=$this->getMessages();
        // $validator=Validator::make($request->all(),$ruls,$messages);
        // if($validator->fails()){
        //     //return $validator->errors();
        //     // return first error just
        //     // return $validator->errors()->first();
        //     // when have erorr redirct to form
        //     return redirect()->back()->withErrors($validator)->withInput($request->all());
        // }
        // insert data
        Offer::create([
            
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'price'=>$request->price,
            
            'details_ar'=>$request->details_ar,
            'details_en'=>$request->details_en,
        ]);
        //return $request;
        //return 'Sucsses seved data !.';
        return redirect()->back()->with(['success'=>'تم اضافة العرض بنجاح !. ']);
       
    }
    public function create(){
     return view('offers.create');
    }

    public function getAllOffers(){
       $offers= Offer::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name','price','details_'.LaravelLocalization::getCurrentLocale().' as details')->get(); //return c
        return view('offers.all',compact('offers'));
    }

    // protected function getMessages(){
    //     return  $messages=[
    //         'name.required'=>trans('messages.offerNameRequired'),
    //         'name.unique'=>__('messages.offerNameUnique'),
    //         'name.max'=>__('messages.offerNameMax'),
    //         'price.required'=>__('messages.offerPriceRequired'),
    //         'price.numeric'=>__('messages.offerPriceNumeric'),
    //         'details.required'=>__('messages.offerDetailsRequired'),
    //     ];
    // }
    // protected function getRuls(){
    //     return  $ruls=[
    //         'name'=>'required|max:100|unique:offers,name',
    //         'price'=>'required|numeric',
    //         'details'=>'required',
    //     ];
    // }
}
