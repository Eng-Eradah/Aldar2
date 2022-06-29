<?php

namespace App\Http\Controllers\Front;

use App\Mail\ContactMail;
use App\Models\Book;
use App\Models\ConfigureSystem;
use App\Models\Donor;
use App\Models\Event;
use App\Models\Goal;
use App\Models\Job;
use App\Models\Service;
use App\Models\JobDetails;
use Illuminate\Support\Facades\App;
use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Utilities\Upload;
use Validator;

class HomeController extends BaseController
{
    //
    public function index()
    {
        $locale = App::currentLocale();
        $Service = Service::where(['is_active' => 1, 'lang' => $locale])->take(3)->get();
        $artilce = Event::where(['is_active' => 1, 'lang' => $locale])->take(3)->get();
        $goal = Goal::where(['is_active' => 1, 'lang' => $locale])->take(3)->get();
        $donor = Donor::where(['is_active' => 1, 'lang' => $locale])->get();
        $config = ConfigureSystem::where('title', 'AboutUs')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Strategy = ConfigureSystem::where('title', 'Strategy')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Scope = ConfigureSystem::where('title', 'Scope')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Brife = ConfigureSystem::where('title', 'Brife')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Mission = ConfigureSystem::where('title', 'Mission')->where(['is_active' => 1, 'lang' => $locale])->first();
        $Vision = ConfigureSystem::where('title', 'Vision')->where(['is_active' => 1, 'lang' => $locale])->first();
        $count = ConfigureSystem::where('title', '<>', 'AboutUs')->where(['is_active' => 1, 'lang' => $locale])->count();
        $count2 = ConfigureSystem::where('title', 'AboutUs')->where(['is_active' => 1, 'lang' => $locale])->count();

        return view('front.site.index')->with([
            'config' => $config, 'Service' => $Service, 'donors' => $donor, 'count' => $count, 'count2' => $count2,
            'Vision' => $Vision, 'Mission' => $Mission, 'Brife' => $Brife,
            'Scope' => $Scope, 'Strategy' => $Strategy, 'events' => $artilce, 'goals' => $goal]);
    }

    public function goal()
    {
        $locale = App::currentLocale();
        $goal = Goal::where(['is_active' => 1, 'lang' => $locale])->paginate(3);

        return view('front.site.goal')->with(['goals' => $goal]);
    }
    public function donor()
    {
        $locale = App::currentLocale();
        $donor = Donor::where(['is_active' => 1, 'lang' => $locale])->get();

        return view('front.site.donor')->with(['donor' => $donor]);
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

    public function contact()
    {
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
    public function apply($id)
    {
        $artilce = Job::where(['is_active' => 1, 'id' => $id])->first();

        return view('front.site.apply')->with(['id' => $id]);
    }
    public function applyJob(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:5'],
            'address' => ['required', 'min:5'],
            'email' => ['required', 'email'],
            'phone' => ['required','numeric','digits:9'],
            'degree' => ['required' ],
            'birth_date' => ['required', 'date' ],
            'date' => ['required', 'date' ],
            'experience' => ['required', 'min:1', 'max:20'],
            'information' => ['nullable', 'min:3'],
            'cv' => ['required', 'mimes:pdf'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result = JobDetails::updateOrCreate(['job_id' => $id], [
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'cv' => $request->hasFile('cv') ?? $this->upload_img($request->file('cv')) ,
                'name' => $request->input('name'),
                'address' => $request->input('address'),
                'birth_date' => $request->input('birth_date'),
                'degree' => $request->input('degree'),
                'experience' => $request->input('experience'),
                'information' => $request->input('information'),
                'date' => $request->input('date'),
            ]);
            if ($result) {
                return redirect()->back()->with(['success' => 'تم العملية  بنجاح   ']);
            }

            return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

        }
    }
    public function upload_img($file_img)
    {
        $path = '/images/cv/';
        return Upload::upload($file_img, $path);

    }
}
