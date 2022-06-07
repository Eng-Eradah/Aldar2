<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Lang;
use App\Models\Slaider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class BaseController extends Controller
{
    //
    public function __construct()
    {
        $locale = App::currentLocale();

        $langs = Lang::where('is_active', 1)->select('lang')->get();
        $Slider = Slaider::where(['is_active' => 1, 'lang' => $locale])->get();

        // dd($langs);
        view()->share('lang', $langs);
        view()->share('Sliders' , $Slider);

    }
}
