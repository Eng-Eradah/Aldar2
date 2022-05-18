<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Lang;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Utilities\Toggle;
use App\Http\Controllers\Utilities\Upload;

class EventController extends Controller
{
    //
    public function index()
    {
        $goal = Event::get();
        return view('admin.site.event.index')
            ->with('data',$goal);

    }
    public function create($id=null)
    {
        $lang = Lang::where('is_active',1)->get();
        $goal = Event::whereId($id)->first();
        return view('admin.site.event.create')
        ->with('data',$goal)
        ->with('langs',$lang);

    }
    public function store(Request $request,$id = null)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'min:5'],
            'description' => ['required','min:10'],
            'image' => ['nullable','image','mimes:jpg,png,jpeg,gif,svg'],
            'lang' => ['required','exists:langs,lang'],

        ]);
        if ($validator->fails()) {
            
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
        $result=Event::updateOrCreate(['id'=>$request->id],[
         'title'=>$request->input('title'),
         'description'=>$request->input('description'),
         'image' => $request->hasFile('image') ? $this->upload_img($request->file('image')) : ($request->input('logo') ? explode('/', $request->input('logo'))[5] : "default.png"),
         'lang'=>$request->input('lang'),
        ]);
        if ($result) {
            return redirect()->back()->with(['success' => 'تم العملية  بنجاح   ']);
        }

        return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);
   
            }
    }
       
       public function toggle($id)
       {
           $result = Toggle::toggle(new Event, $id);
           if ($result) {
               return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
           }
   
           return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);
   
       }
       public function upload_img($file_img)
    {
        $path = '/images/event/';
        return Upload::upload($file_img, $path);

    }
}
