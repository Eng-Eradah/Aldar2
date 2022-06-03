<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConfigureSystem;
use App\Models\Lang;
use Illuminate\Http\Request;
use Validator;

class ConfigureController extends Controller
{
    //
    public function index()
    {
        $about = ConfigureSystem::where('title', 'AboutUs')->get();
        $Brife = ConfigureSystem::where('title', 'Brife')->get();
        $Vision = ConfigureSystem::where('title', 'Vision')->get();
        $Mission = ConfigureSystem::where('title', 'Mission')->get();
        $Scope = ConfigureSystem::where('title', 'Scope')->get();
        $Strategy = ConfigureSystem::where('title', 'Strategy')->get();
        return view('admin.site.configure.index')
            ->with('about', $about)
            ->with('Brife', $Brife)
            ->with('Vision', $Vision)
            ->with('Mission', $Mission)
            ->with('Scope', $Scope)
            ->with('Strategy', $Strategy);

    }
    public function create($type, $id = null)
    {
        switch ($type) {
            case 'AboutUs':
                $types = "من نحن";
                break;
            case 'Vision':
               $types = "رؤيتنا ";
                break;
            case 'Scope':
                $types = "نطاق عملنا ";
                break;
            case 'Mission':
                $types = "رسالتنا ";
                break;
            case 'Strategy':
                $types = "استراتيجية الدار  ";
                break;
            default:
            $types = "نبذة عنا ";
        }
        $goal = ConfigureSystem::whereId($id)->where('title', $type)->first();
        $lang = Lang::where('is_active', 1)->get();
        return view('admin.site.configure.create')
            ->with('type', $type)
            ->with('types', $types)
            ->with('langs', $lang)
            ->with('data', $goal);

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'min:5'],
            'descrption' => ['required', 'min:10'],
            'lang' => ['required'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result = ConfigureSystem::updateOrCreate(['title' => $request->title, 'lang' => $request->input('lang')], [
                'title' => $request->input('title'),
                'description' => $request->input('descrption'),
                'lang' => $request->input('lang'),
            ]);
            if ($result) {
                return redirect()->back()->with(['success' => 'تم العملية  بنجاح   ']);
            }

            return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

        }
    }
}
