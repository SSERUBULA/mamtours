<?php

namespace App\Http\Controllers;

use App\Models\main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    // public function mains()
    // {
    //     $mains = main::all();
    //     return view('mains', compact('mains'));
    // }
    public function mains()
{
    $user = auth()->user();
    if (!$user || !$user->is_admin) {
        abort(403);
    }

    $mains = main::all();
        return view('mains', compact('mains'));
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
        $mains = new main();
        $mains->Full_Name = $request->input('name');
        $mains->Telephone = $request->input('number');
        $mains->Address = $request->input('address');
        $mains->Car = $request->input('car');
        $mains->save();
        return redirect()->route('contactus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\main  $main
     * @return \Illuminate\Http\Response
     */
    public function show(main $main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mains = main::find($id);
        return view('edit',compact('mains'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\main  $main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, main $main,$id)
    {
        $mains = main::find($id);
        $mains->Full_Name = $request->name;
        $mains->Telephone = $request->number;
        $mains->Address = $request->address;
        $mains->Car = $request->car;
        $mains->save();
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\main  $main
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $main = Main::findorFail($id);
        $main->delete();
        return redirect()->route('dashboard');
    }
}
