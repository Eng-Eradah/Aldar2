<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\Lang;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Utilities\Toggle;
use App\Http\Controllers\Utilities\Upload;

class DonorController extends Controller
{
    public function index()
    {
        $goal = Donor::get();
        return view('admin.site.Donor.index')
            ->with('goal',$goal);

    }
    public function create($id=null)
    {
        $lang = Lang::where('is_active',1)->get();
        $goal = Donor::whereId($id)->first();
        return view('admin.site.Donor.create')
        ->with('data',$goal)
        ->with('langs',$lang);

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required','min:5'],
            'image' => ['nullable','image','mimes:jpg,png,jpeg,gif,svg'],
            'lang' => ['required'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result=Donor::updateOrCreate(['id'=>$request->id],[
         'name'=>$request->input('name'),
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
           $result = Toggle::toggle(new Donor, $id);
           if ($result) {
               return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
           }
   
           return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);
   
       }
       public function upload_img($file_img)
    {
        $path = '/images/Donor/';
        return Upload::upload($file_img, $path);

    }
}
