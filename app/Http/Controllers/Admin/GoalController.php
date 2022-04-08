<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Goal;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Utilities\Toggle;
use App\Models\Lang;

class GoalController extends Controller
{
    //show goals
    public function index()
    {
        $goal = Goal::get();
        return view('admin.site.goals.goals')
            ->with('goal', $goal);

    }
    public function create($id=null)
    {
        $lang = Lang::get();
        $goal = Goal::whereId($id)->first();
        return view('admin.site.goals.create')
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
            $result=Goal::updateOrCreate(['id'=>$request->id],[
         'title'=>$request->input('title'),
         'text'=>$request->input('descrption'),
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
           $result = Toggle::toggle(new Goal, $id);
           if ($result) {
               return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
           }
   
           return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);
   
       }
}
