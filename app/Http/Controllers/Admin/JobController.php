<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utilities\Toggle;
use App\Models\Job;
use App\Models\Lang;
use App\Models\JobDetails;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;

class JobController extends Controller
{
    //
    public function index($id=null)
    {
        //where('start_date','<',Carbon::now())->where('end_date','>',Carbon::now())
        $Job = Job::when($id, function ($query, $id) {
            // dd($query->whereDate('end_date','<=',now()->toDateString()));
            return $query->whereDate('end_date','<',now()->toDateString());
        })->get();
        if($id)
        return view('admin.site.Jobs.index')
            ->with('item', $Job)
            ->with('id',$id);
        else
        return view('admin.site.Jobs.index')
            ->with('item', $Job);

    }
    public function Employment($id)
    {
        //where('start_date','<',Carbon::now())->where('end_date','>',Carbon::now())
        $Job = JobDetails::where('job_id',$id)->get();
        
        return view('admin.site.Jobs.employment')
            ->with('item', $Job);

    }
    public function create($id = null)
    {
        $lang = Lang::where('is_active', 1)->get();
        $Job = Job::whereId($id)->first();
        return view('admin.site.Jobs.create')
            ->with('langs', $lang)
            ->with('data', $Job);

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'min:5'],
            'descrption' => ['required', 'min:10'],
            'start_date' => ['required', 'date','after_or_equal:Today'],
            'end_date' => ['required', 'date', 'after:start_date'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result = Job::updateOrCreate(['id' => $request->id], [
                'requirment' => $request->input('descrption'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'title' => $request->input('title'),

            ]);
            if ($result) {
                return redirect()->back()->with(['success' => 'تم العملية  بنجاح   ']);
            }

            return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

        }
    }

    public function toggle($id)
    {
        $result = Toggle::toggle(new Job, $id);
        if ($result) {
            return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
        }

        return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

    }
}
