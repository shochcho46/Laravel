<?php

namespace App\Http\Controllers;

use App\Mail\MyMail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {


        $email = $request->emailormobile;


        $credentialsemail = array("email"=>$email, "password"=> $request->password,);
        $credentialsmobile = array("mobile"=>$email, "password"=> $request->password,);

        if ((Auth::attempt($credentialsemail)) ||(Auth::attempt($credentialsmobile)) ) {


            $user = Auth::user();

            if (($user->status == "blacklist")) {
                return back()->with('fail', 'This accout is black listed');
            }

            if (($user->type == "normal")) {
                return redirect()->route('register.home');
            }
            if (($user->type == "superadmin") || ($user->type == "subadmin") || ($user->type == "admin")) {
                return redirect()->route('admin.home');
            }

            else
            {
                return back()->with('fail', 'Wrong credentials');
            }

        }


        else{
            return back()->with('fail', 'Wrong credentials');
        }
    }


    public function forget()
    {
        return view('layouts.common.auth.forget');
    }

    public function resetpassword(Request $request)
    {
        set_time_limit(0);
       $user =  User::where('email',$request->emailormobile)
                ->orWhere('mobile',$request->emailormobile)->first();
                if(empty($user))
                {

                    return back()->with('fail', 'User Not found');
                }

                else
                {
                    $rand =  rand(100, 1000000);

                    $user->resetcode =  $rand ;
                    $user->save();
                    $details = [
                        'code' => $rand,
                    ];

                    Mail::to($user->email)->send(new MyMail($details));

                    return view('layouts.common.auth.resetpass',compact('user'));
                }

    }


    public function confirmpass(Request $request)
    {

        $data = $this->forgetValidate();
        $user = User::where('resetcode',$request->resetcode)
                ->first();


        if($user->resetcode == $request->resetcode)
        {
            $data['password'] = Hash::make($request->password);
            $user->password =  $data['password'];
            $user->save();

            return redirect()->route('normal.login')->with('update', 'Password Update Successfull');

        }

        else
        {
            return redirect()->route('normal.login')->with('fail', 'Reset code not valid');
        }


    }




    public function logout()
    {
        Auth::logout();
        return redirect()->route('normal.home');
    }


    public function forgetValidate()
    {

        $data = request()->validate([

            'resetcode' => 'required',
           'password' => 'required|min:8|confirmed',


        ]);

        return $data;

    }


}
