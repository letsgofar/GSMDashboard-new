<?php

namespace App\Http\Controllers;

use App\Moduladvanced;
use Illuminate\Http\Request;

class ModuladvancedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moduladvanced = Moduladvanced::all();
        return view('modul/moduladvanced', ['advanceds'=>$moduladvanced]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Moduladvanced  $moduladvanced
     * @return \Illuminate\Http\Response
     */
    public function show(Moduladvanced $moduladvanced)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Moduladvanced  $moduladvanced
     * @return \Illuminate\Http\Response
     */
    public function edit(Moduladvanced $moduladvanced)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Moduladvanced  $moduladvanced
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moduladvanced $moduladvanced)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Moduladvanced  $moduladvanced
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moduladvanced $moduladvanced)
    {
        //
    }
}
