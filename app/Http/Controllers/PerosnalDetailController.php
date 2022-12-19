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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'sometimes',
        ]);

        $data =  new perosnalDetail();

        $data->name = $request->name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;
        $data->Dob_bs = $request->Dob_bs;
        $data->Dob_ad = $request->Dob_ad;
        $data->name_eng = $request->name_eng;
        $data->middle_name_eng = $request->middle_name_eng;
        $data->last_name_eng = $request->last_name_eng;
        $data->gender = $request->gender;
        $data->religion = $request->religion;
        $data->proffession = $request->proffession;
        $data->native_language = $request->native_language;
        $data->country = $request->country;
        $data->nationality = $request->nationality;
        $data->weight = $request->weight;
        $data->file_no = $request->file_no;
        $data->disability = $request->disability;
        // Relatives Details
        $data->relativeDetails = $request->relativeDetails;
        // permnanet Address
        $data->zone = $request->zone;
        $data->district = $request->district;
        $data->vdc_municipality = $request->vdc_municipality;
        $data->p_ward_no = $request->p_ward_no;
        $data->roadname = $request->roadname;
        $data->tolename = $request->tolename;
        $data->house_no = $request->house_no;
        $data->tolename = $request->tolename;
        // temporary Address
        $data->temp_zone = $request->temp_zone;
        $data->temp_district = $request->temp_district;
        $data->temp_vdc_municipality = $request->temp_vdc_municipality;
        $data->temp_ward_no = $request->temp_ward_no;
        $data->temp_roadname = $request->temp_roadname;
        $data->temp_tolename = $request->temp_tolename;
        $data->temp_house_no = $request->temp_house_no;
        // contact Details
        $data->phone = $request->phone;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->mailing_address = $request->mailing_address;
        // citizenShip Details
        $data->citizenship_number = $request->citizenship_number;
        $data->c_issue_date_nep = $request->c_issue_date_nep;
        $data->c_issue_date_eng = $request->c_issue_date_eng;
        $data->c_district = $request->c_district;
        // Passport Details
        $data->passport_number = $request->passport_number;
        $data->p_issue_date_eng = $request->p_issue_date_eng;
        $data->p_issue_date_nep = $request->p_issue_date_nep;
        $data->p_district = $request->p_district;
        // voterId Details
        $data->voter_id_number = $request->voter_id_number;
        $data->v_issue_date_nep = $request->v_issue_date_nep;
        $data->v_issue_date_eng = $request->v_issue_date_eng;
        $data->v_district = $request->v_district;
        $data->sthai_lekha_number = $request->sthai_lekha_number;
         // other Details
        $data->other_detail = $request->other_detail;
        $data->description = $request->description;

        $data-> save();
        return redirect()->back()->with('msg','Perosnal Details Added');
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
