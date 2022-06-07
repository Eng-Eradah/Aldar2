<?php

namespace App\Http\Controllers\Front;

use App\Models\Book;
use App\Models\ConfigureSystem;
use App\Models\Donor;
use App\Models\Event;
use App\Models\Goal;
use App\Models\Job;
use App\Models\Service;
use Illuminate\Support\Facades\App;
use App\Mail\ContactMail;
use Mail;

class HomeController extends BaseController
{
    //
    public function index()
    {
        $locale = App::currentLocale();
        $Service = Service::where(['is_active' => 1, 'lang' => $locale])->take(4)->get();
        $artilce = Event::where(['is_active' => 1, 'lang' => $locale])->take(3)->get();
        $goal = Goal::where(['is_active' => 1, 'lang' => $locale])->take(3)->get();
        $donor = Donor::where(['is_active' => 1, 'lang' => $locale])->get();
        $config = ConfigureSystem::where('title', 'AboutUs')->where(['is_active' => 1, 'lang' => $locale])->get();
        $Strategy = ConfigureSystem::where('title', 'Strategy')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Scope = ConfigureSystem::where('title', 'Scope')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Brife = ConfigureSystem::where('title', 'Brife')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Mission = ConfigureSystem::where('title', 'Mission')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Vision = ConfigureSystem::where('title', 'Vision')->where(['is_active' => 1, 'lang' => $locale])->first();
        $count = ConfigureSystem::where('title', '<>', 'AboutUs')->where(['is_active' => 1, 'lang' => $locale])->count();

        return view('front.site.index')->with([
            'config' => $config, 'Service' => $Service, 'donors' => $donor, 'count' => $count,
            'Vision' => $Vision, 'Mission' => $Mission, 'Brife' => $Brife,
            'Scope' => $Scope, 'Strategy' => $Strategy, 'events' => $artilce, 'goals' => $goal]);
    }

    public function goal()
    {
        $locale = App::currentLocale();
        $goal = Goal::where(['is_active' => 1, 'lang' => $locale])->paginate(3);

        return view('front.site.goal')->with(['goals' => $goal]);
    }
    public function service()
    {
        $locale = App::currentLocale();
        $Service = Service::where(['is_active' => 1, 'lang' => $locale])->paginate(9);

        return view('front.site.service')->with(['Service' => $Service]);
    }
    public function about()
    {
        $locale = App::currentLocale();
        $config = ConfigureSystem::where('title', 'AboutUs')->where(['is_active' => 1, 'lang' => $locale])->get();

        return view('front.site.about')->with(['config' => $config]);
    }
    public function event()
    {
        $locale = App::currentLocale();
        $artilce = Event::where(['is_active' => 1, 'lang' => $locale])->paginate(9);

        return view('front.site.event')->with(['events' => $artilce]);
    }
    public function eventDetails($id)
    {
        $locale = App::currentLocale();
        $artilce = Event::where(['is_active' => 1, 'lang' => $locale, 'id' => $id])->first();
        $artilces = Event::where(['is_active' => 1, 'lang' => $locale])->inRandomOrder()->limit(4)->get();

        return view('front.site.event_details')->with(['event' => $artilce, 'events' => $artilces]);
    }
    public function library($id = null)
    {
        $locale = App::currentLocale();
        if ($id) {
            $book = Book::with('Category')->where(['is_active' => 1, 'lang' => $locale])->when($id, function ($q, $id) {
                return $q->where('category_id', $id);
            })->paginate(6);
        } else {
            $book = Book::with('Category')->where(['is_active' => 1, 'lang' => $locale])->where('category_id', '<>', 1)->paginate(6);
        }
        return view('front.site.book')->with(['books' => $book]);

    }
    public function bookDetails($id)
    {
        $locale = App::currentLocale();
        $artilce = Book::where(['is_active' => 1, 'lang' => $locale, 'id' => $id])->first();
        $artilces = Book::where(['is_active' => 1, 'lang' => $locale])->inRandomOrder()->limit(4)->get();

        return view('front.site.book_details')->with(['book' => $artilce, 'books' => $artilces]);
    }

    public function download($id)
    {

        $book = Book::whereId($id)->first();
        $book->download_count++;
        $book->save();
        // return redirect()->route($id);
        return redirect($book->file);
    }
    public function job()
    {

        $job = Job::where(['is_active' => 1])->paginate(6);

        return view('front.site.job')->with(['item' => $job]);

    }
    public function jobDetails($id)
    {
        $locale = App::currentLocale();
        $artilce = Job::where(['is_active' => 1, 'id' => $id])->first();
        $artilces = Job::where(['is_active' => 1])->inRandomOrder()->limit(4)->get();

        return view('front.site.job_details')->with(['item' => $artilce, 'items' => $artilces]);
    }

    public function contact(){
        return view('front.site.contact');
    }

    public function saveContact(Request $request)
    {

        $details = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "subject" => $request->subject,
            "message" => $request->message,
        ];
        Mail::to("contact@cvyemen.com")->send(new ContactMail($details));
        return redirect()->back()->with(['success' => __('website.sendEmail')]);

    }
}
