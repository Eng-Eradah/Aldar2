<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //

    public function index(){
        return view('admin.login');
    }

 
    public function checkUser(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'error' => 'بعض الحقول غير مكتملة او ادخلت بصورة خاطئة',

            ]);
        }

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with([
                'error' => 'البريد الالكتروني او كلمة المرور غير صحيحة',

            ]);
            
        }

        if(Auth::user()->hasRole('admin'))
        return redirect()->route('configure');
        elseif(Auth::user()->hasRole('lawyer'))
        return redirect()->route('reports');
        elseif(Auth::user()->hasRole('user'))
        return redirect()->route('userReport');
        else
        return redirect()->route('/');



    }

  
     public function logout  (){

    Auth::logout();
    return view('admin.login');
 }
}

