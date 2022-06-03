<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utilities\Toggle;
use App\Http\Controllers\Utilities\Upload;
use App\Models\Book;
use App\Models\Category;
use App\Models\Lang;
use Illuminate\Http\Request;
use Validator;

class BookController extends Controller
{
    //
    public function index()
    {
        $book = Book::with('Category')->get();
        return view('admin.site.book.index')
            ->with('item', $book);

    }
    public function create($id = null)
    {
        $lang = Lang::where('is_active', 1)->get();
        $cat = Category::where('is_active', 1)->get();
        $book = Book::whereId($id)->first();
        return view('admin.site.book.create')
            ->with('data', $book)
            ->with('category', $cat)
            ->with('langs', $lang);

    }
    public function store(Request $request)
    {
        // dd($request->input('version')??0);
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'min:5'],
            'description' => ['required', 'min:10'],
            'image' => ['nullable', 'image', 'mimes:jpg,png,jpeg,gif,svg'],
            'lang' => ['required', 'exists:langs,lang'],
            'date' => ['required', 'date','before_or_equal:Today'],
            'auther' => ['required', 'min:3', 'max:20'],
            'publisher' => ['required', 'min:3', 'max:20'],
            'file' => ['nullable', 'mimes:pdf'],
            'category_id' => ['required', 'exists:categories,id'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $result = Book::updateOrCreate(['id' => $request->id], [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image' => $request->hasFile('image') ? $this->upload_img($request->file('image')) : ($request->input('logo') ? explode('/', $request->input('logo'))[5] : "default.png"),
                'lang' => $request->input('lang'),
                'auther' => $request->input('auther'),
                'date' => $request->input('date'),
                'publisher' => $request->input('publisher'),
                'file' => $request->hasFile('file') ? $this->upload_file($request->file('file'), $request->input('title')) : ($request->input('oldFile') ? explode('/', $request->input('oldFile'))[5] : "default.png"),
                'category_id' => $request->input('category_id'),
            ]);
            if ($result) {
                return redirect()->back()->with(['success' => 'تم العملية  بنجاح   ']);
            }

            return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

        }
    }

    public function toggle($id)
    {
        $result = Toggle::toggle(new Book, $id);
        if ($result) {
            return redirect()->back()->with(['success' => 'تم العملية  بنجاح']);
        }

        return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

    }
    public function upload_img($file_img)
    {
        $path = '/images/book/';
        return Upload::upload($file_img, $path);

    }
    public function upload_file($file_img, $title)
    {
        $path = '/images/bookFile/';
        return Upload::file($file_img, $path, $title);

    }
}
