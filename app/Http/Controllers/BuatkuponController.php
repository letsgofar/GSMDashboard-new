<?php

namespace App\Http\Controllers;

use App\Buatkupon;
use Illuminate\Http\Request;

class BuatkuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kupon/createkupon');
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
        $createkupon = new Buatkupon;

        $createkupon->kode_kupon = $request->kode_kupon;
        $createkupon->nama_kupon = $request->nama_kupon;
        $createkupon->kuota_kupon = $request->kuota_kupon;
        $createkupon->expired = $request->expired;

        $createkupon->save();
        return redirect('/kupon/createkupon')->with('status', 'Data Berhasil Disimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buatkupon  $buatkupon
     * @return \Illuminate\Http\Response
     */
    public function show(Buatkupon $buatkupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buatkupon  $buatkupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Buatkupon $buatkupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buatkupon  $buatkupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buatkupon $buatkupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buatkupon  $buatkupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buatkupon $buatkupon)
    {
        //
    }
}
