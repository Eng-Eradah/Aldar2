<?php

namespace App\Http\Controllers\Utilities;

use App\Http\Controllers\Controller;
use Arr;
use Illuminate\Http\Request;
use Validator;
use Lang;
use Illuminate\Validation\Rule;

class Validation extends Controller
{
    //

    /**
     * Expands arrays with keys that have dot notation
     *
     * @param array $array
     *
     * @return array
     */

     //validate guid category
     public static function GuidRules(Request $request)
     {
       
       $messages = [
         'required' => Lang::get('validation.required'),
         'exists'=> Lang::get('validation.exists'),
         'string' => Lang::get('validation.string'),
         'max'=> Lang::get('validation.max'),
         'min' =>  Lang::get('validation.min'),
         'numeric' => Lang::get('validation.numeric'),
         'digits'=> Lang::get('validation.digits'),       
         'starts_with' => Lang::get('validation.starts_with'),        
         'array' => Lang::get('validation.array'),       
         'nullable' => Lang::get('validation.nullable')
       ];
       $validator = Validator::make($request->all(), [
         'name_ar' => 'required|min:3', 
         'name_en' => 'required|min:3', 
         'parent' => 'required'    
       ],$messages);
     
       return $validator;
     }
   //validate address
    public static function addressRules(Request $request)
    {
      
      $messages = [
        'required' => Lang::get('validation.required'),
        'exists'=> Lang::get('validation.exists'),
        'string' => Lang::get('validation.string'),
        'max'=> Lang::get('validation.max'),
        'min' =>  Lang::get('validation.min'),
        'numeric' => Lang::get('validation.numeric'),
        'digits'=> Lang::get('validation.digits'),       
        'starts_with' => Lang::get('validation.starts_with'),        
        'array' => Lang::get('validation.array'),       
        'nullable' => Lang::get('validation.nullable')
      ];
      $validator = Validator::make($request->all(), [
        'address' => 'required|min:5|max:70', 
        'phone' => 'required|starts_with:+|min:6', 
        'alt_phone' => 'nullable|starts_with:+|min:6', 
        'city_id' => 'required',     
        'lat' => 'required',     
        'lng' => 'required'     
      ],$messages);
    
      return $validator;
    }

    //validate profile
    public static function ProfileRules(Request $request)
    {
      
      $messages = [
        'required' => Lang::get('validation.required'),
        'exists'=> Lang::get('validation.exists'),
        'string' => Lang::get('validation.string'),
        'max'=> Lang::get('validation.max'),
        'min' =>  Lang::get('validation.min'),
        'numeric' => Lang::get('validation.numeric'),
        'digits'=> Lang::get('validation.digits'),       
        'starts_with' => Lang::get('validation.starts_with'),        
        'array' => Lang::get('validation.array'),       
        'nullable' => Lang::get('validation.nullable')
      ];
      $validator = Validator::make($request->all(), [
        'display_major' => 'required', 
        'name_ar' => 'required|min:3', 
        'alias' => 'required|min:3', 
        'email' => 'required|email| ',Rule::unique('email')->ignore($request->id),
        'bio' => 'required|min:5', 
        'phone' => 'required|starts_with:+|min:6', 
        'alt_phone' => 'nullable|starts_with:+|min:6', 
        
        'website' => 'url|nullable',     
        'facebook' => 'url|nullable',     
        'twitter' => 'url|nullable',     
        'instgram' => 'url|nullable',     
        'youtube' => 'url|nullable',     
        'linkedin' => 'url|nullable'    
       
      ],$messages);
    
      return $validator;
    }
    public static function albumRules(Request $request)
      {
        
        $messages = [
          'required' => Lang::get('validation.required'),
          'exists'=> Lang::get('validation.exists'),
          'string' => Lang::get('validation.string'),
          'max'=> Lang::get('validation.max'),
          'min' =>  Lang::get('validation.min'),
          'numeric' => Lang::get('validation.numeric'),
          'digits'=> Lang::get('validation.digits'),       
          'starts_with' => Lang::get('validation.starts_with'),        
          'array' => Lang::get('validation.array'),       
          'nullable' => Lang::get('validation.nullable')
        ];
        $validator = Validator::make($request->all(), [
          'title' => 'required|min:5|max:70', 
          'cover' => 'required' 
        
        ],$messages);
      
        return $validator;
      } 
}