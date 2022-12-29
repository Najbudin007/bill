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
        $request->validate([
            'gaupalika' => 'required',
            'ward_no' => 'required',
        ]);

        $data =  new jaggadarta();

        $data->gaupalika = $request->gaupalika;
        $data->ward_no = $request->ward_no;
        $data->p_ward_no = $request->p_ward_no;
        $data->kitta_no = $request->kitta_no;
        $data->moth_no = $request->moth_no;
        $data->sit_no = $request->sit_no;
        $data->naskha_no = $request->naskha_no;
        $data->place = $request->place;
        $data->quality = $request->quality;
        $data->nature = $request->nature;
        $data->road = $request->road;
        $data->road_quality = $request->road_quality;
        $data->prapti_type = $request->prapti_type;
        $data->prapta_date = $request->prapta_date;
        $data->kharid_mulya = $request->kharid_mulya;
        $data->prati_ikai_mulya = $request->prati_ikai_mulya;
        $data->under_mulyankan = $request->under_mulyankan;
        $data->natural_disaster = $request->natural_disaster;
        $data->mulyankan_rate = $request->mulyankan_rate;
        $data->malpot_rate = $request->malpot_rate;
        $data->jagga_mapan_ikai = $request->jagga_mapan_ikai;
        // Land Details
        $data->bigha = $request->bigha;
        $data->kattha = $request->kattha;
        $data->dhur = $request->dhur;
        $data->kanwa = $request->road;
        $data->kanwain = $request->kanwain;
        $data->hector = $request->hector;
        $data->acer = $request->acer;
        $data->meter = $request->meter;

        $data->save();
        return redirect()->route('karasuli.create');
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
