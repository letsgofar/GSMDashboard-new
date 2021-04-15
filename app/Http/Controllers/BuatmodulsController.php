<?php

namespace App\Http\Controllers;

use App\Buatmodul;
use Illuminate\Http\Request;

class BuatmodulsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modul/createmodul');
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
        $createmodul = new Buatmodul;

        $createmodul->kategori = $request->kategori;
        $createmodul->level = $request->level;
        $createmodul->tingkat_sekolah = $request->tingkat_sekolah;
        $createmodul->judul_modul = $request->judul_modul;
        $createmodul->deskripsi_modul = $request->deskripsi;
        $createmodul->tantangan = $request->tantangan;
        $createmodul->url_video = $request->url_video;
        $createmodul->url_dokumen = $request->url_dokumen;
        $createmodul->url_gambar = $request->url_gambar;

        $createmodul->save();
        return redirect('/modul/createmodul')->with('status', 'Data Berhasil Disimpan !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buatmodul  $buatmodul
     * @return \Illuminate\Http\Response
     */
    public function show(Buatmodul $buatmodul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buatmodul  $buatmodul
     * @return \Illuminate\Http\Response
     */
    public function edit(Buatmodul $buatmodul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buatmodul  $buatmodul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buatmodul $buatmodul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buatmodul  $buatmodul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buatmodul $buatmodul)
    {
        //
    }
}
