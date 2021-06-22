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
        $moduladvanced= Moduladvanced::having('level', "Advanced")->get();
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
        return view('modul/editmoduladvanced', ['moduladvanced'=>$moduladvanced]);
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
        Moduladvanced::where('id', $moduladvanced->id)
        ->update([
            'kategori'=> $request->kategori,
            'level'=> $request->level,
            'tingkat_sekolah'=> $request->tingkat_sekolah,
            'judul_modul'=> $request->judul_modul,
            'deskripsi_modul'=> $request->deskripsi_modul,
            'tantangan'=> $request->tantangan,
            'url_video'=> $request->url_video,
            'url_dokumen'=> $request->url_dokumen,
            'url_gambar'=> $request->url_gambar,
        ]);

        return redirect('/modul/moduladvanced');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Moduladvanced  $moduladvanced
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moduladvanced $moduladvanced)
    {
        Moduladvanced::destroy($moduladvanced->id);
        return redirect('/modul/moduladvanced');
    }
}
