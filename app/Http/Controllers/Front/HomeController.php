<?php

namespace App\Http\Controllers\Front;

use App\Models\ConfigureSystem;
use App\Models\Donor;
use App\Models\Event;
use App\Models\Goal;
use App\Models\Service;
use App\Models\Slaider;
use Illuminate\Support\Facades\App;

class HomeController extends BaseController
{
    //
    public function index()
    {
        $locale = App::currentLocale();
        $Slider = Slaider::where(['is_active' => 1, 'lang' => $locale])->get();
        $Service = Service::where(['is_active' => 1, 'lang' => $locale])->take(2)->get();
        $artilce = Event::where(['is_active' => 1, 'lang' => $locale])->take(3)->get();
        $goal = Goal::where(['is_active' => 1, 'lang' => $locale])->take(3)->get();
        $donor = Donor::where(['is_active' => 1, 'lang' => $locale])->get();
        $config = ConfigureSystem::where('title', 'AboutUs')->where(['is_active' => 1, 'lang' => $locale])->get();
        $Strategy = ConfigureSystem::where('title', 'Strategy')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Scope = ConfigureSystem::where('title', 'Scope')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Brife = ConfigureSystem::where('title', 'Brife')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Mission = ConfigureSystem::where('title', 'Mission')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Vision = ConfigureSystem::where('title', 'Vision')->where(['is_active' => 1, 'lang' => $locale])->first();

        return view('front.site.index')->with(['Sliders' => $Slider,
            'config' => $config, 'Service' => $Service, 'donors' => $donor,
            'Vision' => $Vision, 'Mission' => $Mission, 'Brife' => $Brife,
            'Scope' => $Scope, 'Strategy' => $Strategy, 'events' => $artilce, 'goals' => $goal]);
    }

    public function goal()
    {
        $locale = App::currentLocale();
        $Slider = Slaider::where(['is_active' => 1, 'lang' => $locale])->get();
        $goal = Goal::where(['is_active' => 1, 'lang' => $locale])->paginate(9);

        return view('front.site.goal')->with(['Sliders' => $Slider, 'goals' => $goal]);
    }
    public function service()
    {
        $locale = App::currentLocale();
        $Slider = Slaider::where(['is_active' => 1, 'lang' => $locale])->get();
        $Service = Service::where(['is_active' => 1, 'lang' => $locale])->paginate(9);

        return view('front.site.service')->with(['Sliders' => $Slider, 'Service' => $Service]);
    }
    public function about()
    {
        $locale = App::currentLocale();
        $Slider = Slaider::where(['is_active' => 1, 'lang' => $locale])->get();
        $config = ConfigureSystem::where('title', 'AboutUs')->where(['is_active' => 1, 'lang' => $locale])->get();

        return view('front.site.about')->with(['Sliders' => $Slider, 'config' => $config]);
    }
    public function event()
    {
        $locale = App::currentLocale();
        $Slider = Slaider::where(['is_active' => 1, 'lang' => $locale])->get();
        $artilce = Event::where(['is_active' => 1, 'lang' => $locale])->paginate(9);

        return view('front.site.event')->with(['Sliders' => $Slider, 'events' => $artilce]);
    }
    public function eventDetails($id)
    {
        $locale = App::currentLocale();
        $Slider = Slaider::where(['is_active' => 1, 'lang' => $locale])->get();
        $artilce = Event::where(['is_active' => 1, 'lang' => $locale,'id'=>$id])->first();
        $artilces = Event::where(['is_active' => 1, 'lang' => $locale])->inRandomOrder()->limit(4)->get();

        return view('front.site.event_details')->with(['Sliders' => $Slider, 'event' => $artilce,'events' => $artilces]);
    }
}
