<?php

namespace App\Http\Controllers;

use App\Models\Submenu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('blacklist');
        $this->middleware('superadmin');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('layouts.admin.submenu.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.admin.submenu.create');
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
        $data = $this->validateRequest();
        Submenu::create($data);
        return back()->with('success', 'Data Saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function show(Submenu $submenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Submenu $submenu)
    {
        //
        $data = $submenu;
        return view('layouts.admin.submenu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submenu $submenu)
    {
        //
        $data = $this->validateRequest();
        $submenu->update($data);
        return redirect()->route('submenu.index')->with('update', 'Data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submenu $submenu)
    {
        //
    }

    public function validateRequest()
    {

        $data = request()->validate([

            'sub_name' => 'required',
            'mainmenu_id' => 'required',
            'serial' => 'required',
            'status' => 'required',

        ]);

        return $data;

    }



    public function active(Request $request, Submenu $submenu)
    {

        $submenu->status = "active";
        $submenu->save();
        return back()->with('update','One Menu Active');
    }

    public function disable(Request $request, Submenu $submenu)
    {

        $submenu->status = "disable" ;
        $submenu->save();
        return back()->with('warning','One Menu Disable');
    }

    public function disablelist()
    {
        //
        return view('layouts.admin.submenu.disablelist');
    }



}
