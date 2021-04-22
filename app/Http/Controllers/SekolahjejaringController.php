<?php

namespace App\Http\Controllers;

use App\Sekolahjejaring;
use Illuminate\Http\Request;

class SekolahjejaringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolahjejaring = Sekolahjejaring::having('label_gsm', "Sekolah Jejaring")->get();
        return view('sekolah/sekolahjejaring', ['jejaring' => $sekolahjejaring]);
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
     * @param  \App\Sekolahjejaring  $sekolahjejaring
     * @return \Illuminate\Http\Response
     */
    public function show(Sekolahjejaring $sekolahjejaring)
    {
        return view('sekolah/sekolahjejaringdetail', ['jejaring' => $sekolahjejaring]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sekolahjejaring  $sekolahjejaring
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekolahjejaring $sekolahjejaring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sekolahjejaring  $sekolahjejaring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sekolahjejaring $sekolahjejaring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sekolahjejaring  $sekolahjejaring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekolahjejaring $sekolahjejaring)
    {
        //
    }
}
