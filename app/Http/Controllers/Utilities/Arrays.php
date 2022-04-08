<?php

namespace App\Http\Controllers\Utilities;

use App\Http\Controllers\Controller;
use Arr;
use Illuminate\Http\Request;

class Arrays extends Controller
{
    //

    /**
     * Expands arrays with keys that have dot notation
     *
     * @param array $array
     *
     * @return array
     */
    public static function expandDotNotationKeys(array $array)
    {
        $result = [];
        foreach ($array as $key => $value) {
            Arr::set($result, $key, $value);
        }

        return $result;
    }
}
