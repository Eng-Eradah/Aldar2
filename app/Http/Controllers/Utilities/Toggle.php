<?php

namespace App\Http\Controllers\Utilities;

use App\Http\Controllers\Controller;
use Arr;
use Illuminate\Http\Request;
class Toggle extends Controller
{
    //

    /**
     * Expands arrays with keys that have dot notation
     *
     * @param array $array
     *
     * @return array
     */
    public static function  toggle($table,$id){
        $category=$table::find($id);
        $category->is_active*=-1;
        $result=$category->save();
        return $result;
         }
}