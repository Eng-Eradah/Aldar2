<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Utilities\Toggle;
use App\Models\Lang;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $goal = Service::get();
        return view('admin.site.service.index')
            ->with('goal', $goal);

    }
    public function create($id=null)
    {
        $lang = Lang::where('is_active',1)->get();
        $goal = Service::whereId($id)->first();
        return view('admin.site.service.create')
        ->with('langs',$lang)
        ->with('data',$goal);

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'min:5'],
            'descrption' => ['required','min:10'],
            'lang' => ['required'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result=Service::updateOrCreate(['id'=>$request->id],[
         'title'=>$request->input('title'),
         'text'=>$request->input('descrption'),
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
           $result = Toggle::toggle(new Service, $id);
           if ($result) {
               return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
           }
   
           return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);
   
       }
}
