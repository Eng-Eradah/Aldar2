<?php

namespace App\Http\Controllers\Utilities;

use App\Http\Controllers\Controller;
use Arr;
use Illuminate\Http\Request;
class Upload extends Controller
{
    
    
   public static  function upload($file_img,$path)
    {

        $destinationPath= public_path() .$path;
        $file_name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $file_img->getClientOriginalExtension();
        $file_img->move($destinationPath, $file_name);

        return $file_name;
    }
    public static  function file($file_img,$path,$title)
    {

        $destinationPath= public_path() .$path;
        $file_name =$title. "." . $file_img->getClientOriginalExtension();
        $file_img->move($destinationPath, $file_name);

        return $file_name;
    }
}