<?php

namespace App\Http\Controllers;

use App\Models\perosnalDetail;
use Illuminate\Http\Request;

class PerosnalDetailController extends Controller
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
        return view('admin.biwaran.personal_create');
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
     * @param  \App\Models\perosnalDetail  $perosnalDetail
     * @return \Illuminate\Http\Response
     */
    public function show(perosnalDetail $perosnalDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perosnalDetail  $perosnalDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(perosnalDetail $perosnalDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perosnalDetail  $perosnalDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perosnalDetail $perosnalDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perosnalDetail  $perosnalDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(perosnalDetail $perosnalDetail)
    {
        //
    }
}
