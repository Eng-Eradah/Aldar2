<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utilities\Toggle;
use App\Http\Controllers\Utilities\Upload;
use App\Models\Lang;
use App\Models\Report;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class ReportController extends Controller
{
    //
    public function index()
    {
        $book = Report::with('user:id,name')->where('lawyer_id',Auth::user()->id)->get();
        return view('admin.site.report.index')
            ->with('item', $book);

    }
    public function create($id = null)
    {
        $user = User::where('is_active', 1)->whereHas('roles', function ($role) {
            $role->where('name', '=', Role::USER);
        })->get();
        $book = Report::whereId($id)->first();
        return view('admin.site.report.create')
            ->with('data', $book)
            ->with('users', $user);

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'min:5'],
            'report' => ['required', 'min:10'],
            'image' => ['nullable', 'mimes:pdf'],

            'user_id' => ['required', 'exists:users,id'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result = Report::updateOrCreate(['id' => $request->id], [
                'title' => $request->input('title'),
                'report' => $request->input('report'),
                'file' => $request->hasFile('image') ? $this->upload_img($request->file('image'),$request->input('title')) : ($request->input('logo') ? explode('/', $request->input('logo'))[5] : "default.png"),
                'lawyer_id' => 12,
                'user_id' => $request->input('user_id'),
            ]);
            if ($result) {
                return redirect()->back()->with(['success' => 'تم العملية  بنجاح   ']);
            }

            return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

        }
    }

    public function toggle($id)
    {
        $result = Toggle::toggle(new Report, $id);
        if ($result) {
            return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
        }

        return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

    }
    public function upload_img($file_img,$title)
    {
        $path = '/images/report/';
        return Upload::file($file_img, $path,$title);

    }
}
