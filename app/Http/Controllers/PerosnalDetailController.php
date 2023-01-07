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
        return view("admin.biwaran.index");
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

        $data =  new perosnalDetail();

        $data->kar_ko_prakar = $request->kar_ko_prakar;
        $data->kar_data_sanket = $request->kar_data_sanket;
        $data->fullname = $request->fullname;
        $data->kardata = $request->kardata;
        $data->pradesh = $request->pradesh;
        $data->district = $request->district;
        $data->municipality = $request->municipality;
        $data->ward_no = $request->ward_no;
        $data->mobile = $request->mobile;
        $data->counter = $request->counter;
        $data->bill_type = $request->bill_type;
        $data->bill_number = $request->bill_number;
        $data->sahayak_module = $request->sahayak_module;
        $data->antarik_rashid_no = $request->antarik_rashid_no;
        $data->payment_mtehod = $request->payment_mtehod;
        $data->mudra = $request->mudra;
        $data->date = $request->date;
        $data->discription = $request->discription;
        $data->save();
        return redirect()->back()->with('msg', 'Perosnal Details Added');
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
