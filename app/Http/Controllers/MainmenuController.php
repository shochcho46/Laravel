<?php

namespace App\Http\Controllers;

use App\Models\Mainmenu;
use Illuminate\Http\Request;

class MainmenuController extends Controller
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
        return view('layouts.admin.mainmenu.list');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.admin.mainmenu.create');
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

        Mainmenu::create($data);

        return back()->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function show(Mainmenu $mainmenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Mainmenu $mainmenu)
    {
        //
        $data = $mainmenu;
        return view('layouts.admin.mainmenu.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mainmenu $mainmenu)
    {
        //
        $data = $this->validateRequest();
        $mainmenu->update($data);
        return redirect()->route('mainmenu.index')->with('update', 'Data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mainmenu $mainmenu)
    {
        //
        if($mainmenu->submenus()->count())
        {
            return back()->with('fail', 'This menu can not be deleted . You can disable it ');
        }
        $mainmenu->delete();
        return back()->with('success', 'Data Deleted');
    }

    public function validateRequest()
    {

        $data = request()->validate([

            'main_name' => 'required',
            'serial' => 'required',
            'status' => 'required',

        ]);

        return $data;

    }

    public function active(Request $request, Mainmenu $mainmenu)
    {

        $mainmenu->status = "active";
        $mainmenu->save();
        return back()->with('update','One Menu Active');
    }

    public function disable(Request $request, Mainmenu $mainmenu)
    {

        $mainmenu->status = "disable" ;
        $mainmenu->save();
        return back()->with('warning','One Menu Disable');
    }

    public function disablelist()
    {
        //
        return view('layouts.admin.mainmenu.disablelist');
    }

}
