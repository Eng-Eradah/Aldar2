<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utilities\Toggle;
use App\Models\Category;
use App\Models\Lang;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller
{
    //
    //show cat
    public function index()
    {
        $goal = Category::get();
        return view('admin.site.category.index')
            ->with('goal', $goal);

    }
    public function create($id = null)
    {
        $lang = Lang::where('is_active',1)->get();
        $goal = Category::whereId($id)->first();
        return view('admin.site.category.create')
            ->with('langs', $lang)
            ->with('data', $goal);

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:3'],
           
            'lang' => ['required'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result = Category::updateOrCreate(['id' => $request->id], [
                'name' => $request->input('name'),
                'is_parent' => 1,
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
        $result = Toggle::toggle(new Category, $id);
        if ($result) {
            return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
        }

        return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

    }
}
