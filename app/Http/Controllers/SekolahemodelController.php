<?php

namespace App\Http\Controllers;

use App\Sekolahemodel;
use Illuminate\Http\Request;

class SekolahemodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolahemodel= Sekolahemodel::having('label_gsm', "Sekolah E-Model")->get();
        return view('sekolah/sekolahemodel', ['emodel'=>$sekolahemodel]);
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
     * @param  \App\Sekolahemodel  $sekolahemodel
     * @return \Illuminate\Http\Response
     */
    public function show(Sekolahemodel $sekolahemodel)
    {
        return view('sekolah/sekolahemodeldetail', ['emodel' => $sekolahemodel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sekolahemodel  $sekolahemodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekolahemodel $sekolahemodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sekolahemodel  $sekolahemodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sekolahemodel $sekolahemodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sekolahemodel  $sekolahemodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekolahemodel $sekolahemodel)
    {
        //
    }
}
