<?php

namespace App\Http\Controllers;

use App\Models\karasuli;
use Illuminate\Http\Request;

class KarasuliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.biwaran.karasuli');
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
     * @param  \App\Models\karasuli  $karasuli
     * @return \Illuminate\Http\Response
     */
    public function show(karasuli $karasuli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\karasuli  $karasuli
     * @return \Illuminate\Http\Response
     */
    public function edit(karasuli $karasuli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\karasuli  $karasuli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, karasuli $karasuli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\karasuli  $karasuli
     * @return \Illuminate\Http\Response
     */
    public function destroy(karasuli $karasuli)
    {
        //
    }
}
