<?php

namespace App\Http\Controllers;

use App\Listkupon;
use Illuminate\Http\Request;

class ListkuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listkupon = Listkupon::all();
        return view("kupon/listkupon", ['kupon'=>$listkupon]);
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
     * @param  \App\Listkupon  $listkupon
     * @return \Illuminate\Http\Response
     */
    public function show(Listkupon $listkupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listkupon  $listkupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Listkupon $listkupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listkupon  $listkupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listkupon $listkupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listkupon  $listkupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listkupon $listkupon)
    {
        Listkupon::destroy($listkupon->id);
        return redirect('/kupon/listkupon');
    }
}
