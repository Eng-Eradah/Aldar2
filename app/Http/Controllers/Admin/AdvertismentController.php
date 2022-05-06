<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Advertisment;
use App\Models\Lang;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Utilities\Toggle;
use App\Http\Controllers\Utilities\Upload;

class AdvertismentController extends Controller
{
    //
    public function index()
    {
        $goal = Advertisment::get();
        return view('admin.site.advertisment.index')
            ->with('goal',$goal);

    }
    public function create($id=null)
    {
        $lang = Lang::where('is_active',1)->get();
        $goal = Advertisment::whereId($id)->first();
        return view('admin.site.advertisment.create')
        ->with('data',$goal)
        ->with('langs',$lang);

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mainTitle' => ['required', 'min:5'],
            'subTitle' => ['required','min:10'],
            'image' => ['nullable','image','mimes:jpg,png,jpeg,gif,svg'],
            'lang' => ['required'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result=Advertisment::updateOrCreate(['id'=>$request->id],[
         'main_title'=>$request->input('mainTitle'),
         'sub_title'=>$request->input('subTitle'),
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
           $result = Toggle::toggle(new Advertisment, $id);
           if ($result) {
               return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
           }
   
           return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);
   
       }
       public function upload_img($file_img)
    {
        $path = '/images/advertisment/';
        return Upload::upload($file_img, $path);

    }
}
