<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Slaider;
use App\Models\Lang;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Utilities\Toggle;
use App\Http\Controllers\Utilities\Upload;

class SliderController extends Controller
{
    //
    public function index()
    {
        $goal = Slaider::get();
        return view('admin.site.slider.index')
            ->with('goal',$goal);

    }
    public function create($id=null)
    {
        $lang = Lang::get();
        $goal = Slaider::whereId($id)->first();
        return view('admin.site.slider.create')
        ->with('data',$goal)
        ->with('langs',$lang);

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mainTitle' => ['required', 'min:5'],
            'subTitle' => ['required','min:10'],
            'image' => ['required'],
            'lang' => ['required'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result=Slaider::updateOrCreate(['id'=>$request->id],[
         'main_title'=>$request->input('mainTitle'),
         'sub_title'=>$request->input('subTitle'),
         'image'=>$request->hasFile('image') ? $this->upload_img($request->file('image')) : "default.png",
         'lang'=>$request->input('lang'),
        ]);
        if ($result) {
            return redirect()->back()->with(['success' => 'تم انشاء القسم بنجاح']);
        }

        return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);
   
            }
    }
       
       public function toggle($id)
       {
           $result = Toggle::toggle(new Slaider, $id);
           if ($result) {
               return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
           }
   
           return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);
   
       }
       public function upload_img($file_img)
    {
        $path = '/images/silder/';
        return Upload::upload($file_img, $path);

    }
}
