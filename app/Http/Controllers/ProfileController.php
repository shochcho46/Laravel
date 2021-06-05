<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('blacklist');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();

        if(Auth::user()->type == "normal")
        {
            return view('layouts.register.profile.show',compact('user'));
        }



        if (($user->type == "subadmin") || ($user->type == "admin") || ($user->type == "superadmin"))
        {
            return view('layouts.admin.profile.show',compact('user'));
        }

        else
        {
            return redirect()->route('logout');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $user = Auth::user();

        $profile = Profile::where('user_id',$user->id)->get();
        $data = $this->validatePersonalRequest();
        $data['user_id'] = $user->id;

        if (count($profile)>0) {

            $upprofile = Profile::where('user_id', $user->id)->first();
            $upprofile->update($data);

            return back()->with('success', 'Data Update Successful');

        } else {

            Profile::firstOrCreate(
                [
                    'user_id' => $user->id,
                    'gender' => $data['gender'],
                    'birthday' => $data['birthday'],
                    'address' => $data['address'],

                ]
            );

            return back()->with('success', 'Data Store Successful');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }


    public function profilepic(Request $request, User $user)
    {
        //
        $data = $this->validateRequestPicture();

        if ($request->hasFile('location')) {

            $baseurl = url('/');

            $images = $request->file('location');

            $extension = $images->extension();
            $filename = time() . '.' . $extension;
            $path = $images->storeAs('profile', $filename, 'public');
            $fullpathurl = $baseurl . '/storage/' . $path;
            $data['location'] =  $fullpathurl;

            $user = User::find(Auth::user()->id);

            $user->update($data);

            return back()->with('success', 'Profile picture  Updated');

        } else {
            return back()->with('fail', 'Profile Picture Upload fail');
        }

    }


    public function validateRequestPicture()
    {
        if (request()->hasFile('location')) {

            $data = request()->validate([

                'location' => 'max:2048|dimensions:max_width=1920,max_height=1080',
            ]);
        }

        return $data;

    }


    public function password(Request $request, User $user)
    {

        $authuser = Auth::user();
        $password = $request->oldpassword;
        if (Hash::check($password, $authuser->password)) {
            $data = $this->validatePassRequest();
            $newpass = $request->password;
            $data['password'] = Hash::make($newpass);

            $usernew = User::find(Auth::user()->id);
            $usernew->update($data);

            return back()->with('success', 'Password change Successful');
        } else {
            return back()->with('fail', 'Old Password is not correct');
        }

    }

    public function validatePassRequest()
    {
        $user = Auth::user();
        $data = request()->validate([

            'email' => [

                Rule::unique('users')->ignore($user->id),
            ],
            'mobile' => [

                Rule::unique('users')->ignore($user->id),
            ],

            'password' => 'required|min:8|confirmed',
            'oldpassword' => 'required|min:8',
            'name' => 'required',

        ]);

        return $data;

    }


    public function validatePersonalRequest()
    {

        $data = request()->validate([

            'birthday' => 'required',
            'gender' => 'required',
            'address' => 'required|min:8',

        ]);

        return $data;

    }
}
