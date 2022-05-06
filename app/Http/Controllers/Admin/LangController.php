<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Utilities\Toggle;
use App\Models\Category;
use App\Models\Lang;
use Illuminate\Http\Request;
use Validator;
class LangController extends Controller
{
    //
    public function index()
    {
        $Lang = Lang::get();
        return view('admin.site.Lang.index')
            ->with('item', $Lang);

    }
    public function create($id = null)
    {
        $Lang = Lang::whereId($id)->first();
        return view('admin.site.Lang.create') 
            ->with('data', $Lang);

    }
    public function store(Request $request ,$id=null)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:3'],
            'lang' => ['required','min:2','max:3'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result = Lang::updateOrCreate(['id' =>$request->id], [
                'value' => $request->input('name'),
                'lang' => $request->input('lang'),
            ]);
            if ($result) {
                return redirect()->back()->with(['success' => 'تم العملية  بنجاح   ']);
            }

            return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

        }
    }

    public function toggle($id)
    {
        $result = Toggle::toggle(new Lang, $id);
        if ($result) {
            return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
        }

        return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

    }
}
