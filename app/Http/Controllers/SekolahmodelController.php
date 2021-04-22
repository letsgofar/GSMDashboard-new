<?php

namespace App\Http\Controllers;

use App\Sekolahmodel;
use Illuminate\Http\Request;

class SekolahmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolahmodel= Sekolahmodel::having('label_gsm', "Sekolah Model")->get();
        return view('sekolah/sekolahmodel', ['model'=>$sekolahmodel]);
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
     * @param  \App\Sekolahmodel  $sekolahmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Sekolahmodel $sekolahmodel)
    {
        return view('sekolah/sekolahmodeldetail', ['model' => $sekolahmodel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sekolahmodel  $sekolahmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekolahmodel $sekolahmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sekolahmodel  $sekolahmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sekolahmodel $sekolahmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sekolahmodel  $sekolahmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekolahmodel $sekolahmodel)
    {
        //
    }
}
