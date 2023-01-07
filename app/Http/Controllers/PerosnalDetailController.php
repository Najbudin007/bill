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
        $bill = [];
        $total = 0;
        if ($request->rate && $request->quantity) {
            foreach ($request->rate as $key => $first) {
                if (isset($request->quantity[$key])) {
                    $bill[$key]["rate"] = $first;
                    $bill[$key]["quantity"] = $request->quantity[$key];
                    $bill[$key]["kaifiyat"] = $request->kaifiyat[$key] ?? "null";
                    $bill[$key]["dar_rate_srishak"] = $request->dar_rate_srishak[$key] ?? "null";
                    $bill[$key]["total"] = $request->quantity[$key] * $first;
                    $total += $request->quantity[$key] * $first;
                }
            }
        }

        $firta = $request->nagad - $total;
        $data->firta = abs($firta);
        $data->total = $total;
        $data->dar_rate_srishak = $request->dar_rate_srishak;
        $data->kaifiyat1 = $request->kaifiyat1;
        $data->prati_ekai_dar = $request->prati_ekai_dar;
        $data->parimad = $request->parimad;
        $data->kaifiyat = $request->kaifiyat;
        $data->nagad = $request->nagad;
        $data->save();
        $bills = [];
        $bills["total"] = abs($total);
        $bills["firta"] = abs($firta);
        $bills["kaifiyat1"] = $request->kaifiyat1;
        $bills["nagad"] = abs($request->nagad);
        $bills["sanket"] = $request->kar_data_sanket;
        // dd($bill);
        return view("admin.bill.bill", ["bill" => $bill, "bills" => $bills]);
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
