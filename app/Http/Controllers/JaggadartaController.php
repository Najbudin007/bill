<?php

namespace App\Http\Controllers;

use App\Models\jaggadarta;
use Illuminate\Http\Request;

class JaggadartaController extends Controller
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
        return view('admin.biwaran.jaggadarta');
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
     * @param  \App\Models\jaggadarta  $jaggadarta
     * @return \Illuminate\Http\Response
     */
    public function show(jaggadarta $jaggadarta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jaggadarta  $jaggadarta
     * @return \Illuminate\Http\Response
     */
    public function edit(jaggadarta $jaggadarta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jaggadarta  $jaggadarta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jaggadarta $jaggadarta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jaggadarta  $jaggadarta
     * @return \Illuminate\Http\Response
     */
    public function destroy(jaggadarta $jaggadarta)
    {
        //
    }
}
