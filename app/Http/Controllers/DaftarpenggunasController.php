<?php

namespace App\Http\Controllers;

use App\Daftarpengguna;
use Illuminate\Http\Request;

class DaftarpenggunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarpengguna = Daftarpengguna::all();
        return view("listuser", ['pengguna'=>$daftarpengguna]);
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
     * @param  \App\Daftarpengguna  $daftarpengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Daftarpengguna $daftarpengguna)
    {
        return view('detailuser', ['user' => $daftarpengguna]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Daftarpengguna  $daftarpengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftarpengguna $daftarpengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Daftarpengguna  $daftarpengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftarpengguna $daftarpengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Daftarpengguna  $daftarpengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftarpengguna $daftarpengguna)
    {
        //
    }
}
