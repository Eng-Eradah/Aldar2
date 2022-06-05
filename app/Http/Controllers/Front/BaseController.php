<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Lang;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    //
    public function __construct()
    {
        $langs = Lang::where('is_active', 1)->select('lang')->get();
        // dd($langs);
        view()->share('lang', $langs);

    }
}
