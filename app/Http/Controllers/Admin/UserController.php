<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utilities\Upload;
use App\Mail\WelcomeEmail;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Validator;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::with('roles')->whereHas('roles')->get();
        return view('admin.site.user.index')
            ->with('item', $user);

    }
    public function create($id = null)
    {
        $user = User::with('roles')->where('is_active', 1)->whereId($id)->first();
        $role = Role::get();
        return view('admin.site.user.create')
            ->with('data', $user)
            ->with('role', $role);

    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email', 'unique:users,email'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg'],

        ]);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $password = Str::random(8);
            $result = User::updateOrCreate(['id' => $request->id], [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'profile_photo_path' => $request->hasFile('image') ? $this->upload_img($request->file('image')) : ($request->input('logo') ? explode('/', $request->input('logo'))[5] : "default.png"),
                'password' => Hash::make($password),
                'two_factor_secret' => $password,
                'remember_token' => $request->input('_token'),

            ]);
            if ($result) {
                $result->attachRole($request->input('role'));

                $data = ([
                    'name' => $request->input('name'),
                    'password' => $password,
                    'email' => $request->input('email'),
                    'activation_link' => URL::to('/') . '/virefiy_email' . '/' . $request->input('_token'),
                ]);
                Mail::to($request->input('email'))->send(new WelcomeEmail($data));

                return redirect()->back()->with(['success' => 'تم العملية  بنجاح   ']);
            }

            return redirect()->back()->with(['error' => 'فشلت العملية يرجى التأكد من صحة البيانات المدخلة']);

        }
    }
    public function verifyEmail($token)
    {
        $user = User::where('remember_token', $token)->get()->first();
        $user->email_verified_at = Carbon::now()->toDateTimeString();
        $result = $user->save();
        if ($result) {
            return redirect()->route('configure')->with(['success' => 'تم تفعيل حسابك بنجاح ']);
        }

    }
    public function upload_img($file_img)
    {
        $path = '/images/user/';
        return Upload::upload($file_img, $path);

    }
}
