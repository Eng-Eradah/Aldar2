<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\ConfigureSystem;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Utilities\Toggle;

class ConfigureController extends Controller
{
    //
    public function index()
    {
        $about = ConfigureSystem::where('title','AboutUs')->first();
        $Brife = ConfigureSystem::where('title','Brife')->first();
        $Vision = ConfigureSystem::where('title','Vision')->first();
        $Mission = ConfigureSystem::where('title','Mission')->first();
        $Scope = ConfigureSystem::where('title','Scope')->first();
        $Strategy = ConfigureSystem::where('title','Strategy')->first();
        return view('admin.site.configure.index')
            ->with('about', $about)
            ->with('Brife', $Brife)
            ->with('Vision', $Vision)
            ->with('Mission', $Mission)
            ->with('Scope', $Scope)
            ->with('Strategy', $Strategy);

    }
    public function create($type)
    {
        $goal = ConfigureSystem::where('title',$type)->first();
        return view('admin.site.configure.create')
        ->with('type',$type)
        ->with('data',$goal);

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'min:5'],
            'descrption' => ['required','min:10'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result=ConfigureSystem::updateOrCreate(['title'=>$request->title],[
         'title'=>$request->input('title'),
         'description'=>$request->input('descrption'),
        ]);
        if ($result) {
            return redirect()->back()->with(['success' => 'تم انشاء القسم بنجاح']);
        }

        return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);
   
            }
    }
}
