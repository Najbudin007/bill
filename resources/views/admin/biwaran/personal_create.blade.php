@extends('admin.layouts.master')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif

    <div class="p-form">

        @if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif

        <form action="{{route('personalBivaran.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

        <div class="form-top mb-2">
            <span>करदाताको विवरण</span>
            <span>व्यक्तिगत विवरण</span>
        </div>
        <div class="row px-1">
            <div class="col-10">
                {{-- nepali  --}}
                <div class="d-flex">
                    <div class="inp">
                        <label for="nname" class="required-label">नाम</label>
                        <input type="text" name="name" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">बीचको नाम</label>
                        <input type="text" name="middle_name" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">थर</label>
                        <input type="text" name="last_name" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">जन्म मिति(बि.स)</label>
                        <input type="date" name="Dob_bs" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">जन्म मिति(इ.स)</label>
                        <input type="date" name="Dob_ad" id="nname">
                    </div>
                </div>
                <div class="d-flex mt-2">
                    <div class="inp">
                        <label for="nname" class="required-label">Name</label>
                        <input type="text" name="name_eng" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">Middle Name </label>
                        <input type="text" name="middle_name_eng" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">Surname</label>
                        <input type="text" name="last_name_eng" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">लिङ्ग</label>
                        <select  id="" name="gender">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option  value="पुरुष">पुरुष</option>
                            <option  value="महिला">महिला</option>
                            <option  value="तेस्रो लिङ्गी">तेस्रो लिङ्गी</option>
                        </select>
                    </div>
                    <div class="inp">
                        <label for="nname">धर्म</label>
                        <select  id="" name="religion">
                            <option  value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option  value="हिन्दु">हिन्दु</option>
                            <option  value="बौद्ध">बौद्ध</option>
                            <option  value="मुस्लिम">मुस्लिम</option>
                            <option  value="क्रिश्चियन">क्रिश्चियन</option>
                            <option  value="किरान्त">किरान्त</option>
                            <option  value="बोन">बोन</option>
                            <option  value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>

                    </div>
                </div>
                <div class="d-flex mt-2">
                    <div class="inp">
                        <label for="nname">पेशा</label>
                        <select  id="" name="proffession"">
                            <option name="proffession" value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option name="proffession" value="हिन्दु">हिन्दु</option>
                            <option name="proffession" value="बौद्ध">बौद्ध</option>
                            <option name="proffession" value="मुस्लिम">मुस्लिम</option>
                            <option name="proffession" value="क्रिश्चियन">क्रिश्चियन</option>
                            <option name="proffession" value="किरान्त">किरान्त</option>
                            <option name="proffession" value="बोन">बोन</option>
                            <option name="proffession" value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>
                    </div>

                    <div class="inp">
                        <label for="nname">मातृभाषा </label>
                        <select  id="" name="native_language">
                            <option name="native_language" value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option name="native_language" value="हिन्दु">हिन्दु</option>
                            <option name="native_language" value="बौद्ध">बौद्ध</option>
                            <option name="native_language" value="मुस्लिम">मुस्लिम</option>
                            <option name="native_language" value="क्रिश्चियन">क्रिश्चियन</option>
                            <option name="native_language" value="किरान्त">किरान्त</option>
                            <option name="native_language" value="बोन">बोन</option>
                            <option name="native_language" value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">देश</label>
                        <select  id="" name="country">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option name="country" value="हिन्दु">नेपाल</option>
                            <option name="country" value="बौद्ध">भारत</option>
                            <option name="country" value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>
                    </div>
                    <div class="inp">
                        <label for="nname">राष्ट्रियता</label>
                        <select  id="" name="nationality">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option name="nationality" value="नेपाली">नेपाली</option>
                            <option name="nationality" value="भारतीय">भारतीय</option>
                            <option name="nationality" value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>
                    </div>
                    <div class="inp">
                        <label for="nname">फाइल तौल</label>
                        <select  id="" name="weight">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option name="weight"  value="1">1</option>
                            <option name="weight" value="2">2</option>
                            <option name="weight" value="3">3</option>
                            <option name="weight" value="4">4</option>
                            <option name="weight" value="5">5</option>
                        </select>

                    </div>
                    <div class="inp">
                        <label for="nname">फाइल नम्बर</label>
                        <input type="date" name="file_no" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">अपाङ्ग हो ?</label>
                        <input type="checkbox"  name="disability" id="" class="m-auto">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="border img-div" style="overflow: hidden">
                    <div class="d-flex">

                        <button class="btn py-1 btn-sm border" onclick="removeFile()">X</button>
                        <input type="file" id="fl" name="image" accept="image/*" class="m-auto"
                            onchange="loadFile(event)">
                    </div>
                    <div class="w-100 ">

                        <img id="output" style="height: 150px; width:100%; object-fit:cover" />
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-3 mb-1">
            <p class="form-title">
                नातेदारको विवरण
            </p>
            <div class="d-flex">
                <div class="check-inp mx-5">
                    <input type="checkbox"  name="relativeDetails" value="बाबु" id="dad" onchange="changeDad(event)" class="m-auto">
                    <label for="nname">बाबु </label>

                </div>
                <div class="check-inp mx-5">
                    <input type="checkbox"  name="relativeDetails" value="आमा" id="mom" onchange="changeMom(event)" class="m-auto">
                    <label for="nname">आमा</label>

                </div>
                <div class="check-inp mx-5">
                    <input type="checkbox"  name="relativeDetails" value="हजुर बुबा" id="grandfather" onchange="changeGrandfather(event)"
                        class="m-auto">
                    <label for="nname">हजुर बुबा </label>

                </div>
                <div class="check-inp mx-5">
                    <input type="checkbox"  name="relativeDetails" value="पति/पत्नि" id="married" onchange="changeMarried(event)"
                        class="m-auto">
                    <label for="nname">पति/पत्नि </label>

                </div>
            </div>
            <div id="dad-block" class="mt-3 ">
                <div class="d-flex " style="padding-left: 50px; padding-rignt:10px !important">
                    <div class="inp">
                        <label for="nname" class="required-label">बाबुको नाम</label>
                        <input type="text" name="father_name_nep" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">बीचको नाम</label>
                        <input type="text" name="father_middlename_nep" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">थर</label>
                        <input type="text" name="father_lastname_nep" id="nname">
                    </div>

                </div>
                <div class="d-flex " style="padding-left: 50px; padding-rignt:10px !important">
                    <div class="inp">
                        <label for="nname" class="required-label">Father Name</label>
                        <input type="text" name="father_name_eng" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">Middle Name</label>
                        <input type="text" name="father_middlename_eng" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">Last Name</label>
                        <input type="text" name="father_lastname_eng" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">बाबुको पेशा</label>
                        <input type="text" id="nname">
                    </div>

                </div>
            </div>
            <div id="mom-block" class="mt-3 ">
                <div class="d-flex " style="padding-left: 50px; padding-rignt:10px !important">
                    <div class="inp">
                        <label for="nname" class="required-label">आमाको नाम</label>
                        <input type="text" name="mother_name_nep" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">बीचको नाम</label>
                        <input type="text" name="mother_middlename_nep" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">थर</label>
                        <input type="text" name="mother_lastname_nep" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">नाता</label>
                        <input type="text" id="nname">
                    </div>

                </div>
                <div class="d-flex " style="padding-left: 50px; padding-rignt:10px !important">
                    <div class="inp">
                        <label for="nname" class="required-label">Mother Name</label>
                        <input type="text" name="mother_name_eng" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">Middle Name</label>
                        <input type="text" name="mother_middlename_eng" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">Last Name</label>
                        <input type="text" name="mother_lastname_eng" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">आमाको पेशा</label>
                        <input type="text" id="nname">
                    </div>

                </div>
            </div>
            <div id="grandfather-block" class="mt-3 ">
                <div class="d-flex " style="padding-left: 50px; padding-rignt:10px !important">
                    <div class="inp">
                        <label for="nname" class="required-label">हजुरबुवाको नाम</label>
                        <input type="text" name="grandfather_name_nep" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">बीचको नाम</label>
                        <input type="text" name="grandfather_middlename_nep" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">थर</label>
                        <input type="text" name="grandfather_lastname_nep" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">नाता</label>
                        <input type="text" id="nname">
                    </div>

                </div>
                <div class="d-flex " style="padding-left: 50px; padding-rignt:10px !important">
                    <div class="inp">
                        <label for="nname" class="required-label">Grand Father Name</label>
                        <input type="text" name="grandfather_name_eng" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">Middle Name</label>
                        <input type="text" name="grandfather_middlename_eng" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">Last Name</label>
                        <input type="text" name="grandfather_lastname_eng" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">हजुरबुवाको पेशा</label>
                        <input type="text" id="nname">
                    </div>

                </div>
            </div>
            <div id="married-block" class="mt-3 ">
                <div class="d-flex " style="padding-left: 50px; padding-rignt:10px !important">
                    <div class="inp">
                        <label for="nname" class="required-label">पति/पत्नीको नाम</label>
                        <input type="text" name="spouse_name_nep" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">बीचको नाम</label>
                        <input type="text" name="spouse_middlename_nep" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">थर</label>
                        <input type="text" name="spouse_lastname_nep" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">नाता</label>
                        <input type="text" id="nname">
                    </div>

                </div>
                <div class="d-flex " style="padding-left: 50px; padding-rignt:10px !important">
                    <div class="inp">
                        <label for="nname" class="required-label">Spouse Name</label>
                        <input type="text" name="spouse_name_eng" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">Middle Name</label>
                        <input type="text" name="spouse_middlename_eng" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">Last Name</label>
                        <input type="text" name="spouse_lastname_eng" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">पति/पत्नीको पेशा</label>
                        <input type="text" id="nname">
                    </div>

                </div>
            </div>

        </div>

        <div class="px-1">
            <p class="form-title mt-2">
                स्थायी ठेगाना
            </p>
            <div class="d-flex mt-2">
                <p class="form-titl mx-1">
                    साबिक
                </p>
                <div class="inp">
                    <label for="nname">अंचल</label>
                    <input type="text" name="zone" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जिल्ला</label>
                    <input type="text" name="district"" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">गा.बि.स./न.पा.</label>
                    <input type="text"  name="vdc_municipality" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">वडा न.</label>
                    <input type="text"  name="p_ward_no" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">सडकको नाम</label>
                    <input type="text" name="roadname" id="nname">
                </div>
            </div>
            <div class="d-flex mt-2">
                <p class="form-titl mx-1">
                    अस्थायी ठेगाना
                </p>
                <div class="inp">
                    <label for="nname">प्रदेश</label>
                    <input type="text" name="temp_zone" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जिल्ला</label>
                    <input type="text" name="temp_district" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">गा.बि.स./न.पा.</label>
                    <input type="text"  name="temp_vdc_municipality" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">वडा न.</label>
                    <input type="text"  name="temp_ward_no" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">टोलको नाम</label>
                    <input type="text" name="temp_tolename" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">घर नं.</label>
                    <input type="text" name="temp_house_no" id="nname">
                </div>
            </div>
        </div>
        
        <div class="px-1">
           
            <div class="d-flex mt-2">
                <p class="form-titl mx-1">
                    हालको
                </p>
                <div class="inp">
                    <label for="nname">प्रदेश</label>
                    <input type="text" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जिल्ला</label>
                    <input type="text" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">गा.बि.स./न.पा.</label>
                    <input type="text" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">वडा न.</label>
                    <input type="text" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">टोलको नाम</label>
                    <input type="text" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">घर नं.</label>
                    <input type="text" id="nname">
                </div>
            </div>
        </div>

        <div class="px-1">
            <p class="form-title mt-2">
                सम्पर्क बिवरण
            </p>
            <div class="d-flex mt-2">

                <div class="inp">
                    <label for="nname">फोन</label>
                    <input type="number" name="phone" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">मोवाइल</label>
                    <input type="text" name="mobile" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">इमेल</label>
                    <input type="email" name="email" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">पत्राचार गर्ने ठेगाना</label>
                    <input type="text" name="mailing_address" id="nname">
                </div>

            </div>
        </div>

        <div class="px-1">
            <p class="form-title mt-2">
                नागरिकता </p>
            <div class="d-flex mt-2">

                <div class="inp">
                    <label for="nname" class="required-label">नागरिकता नं.</label>
                    <input type="number" name="citizenship_number" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जारी मिती(बि.स)</label>
                    <input type="date" name="c_issue_date_nep" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जारी मिती(इ.स)</label>
                    <input type="date" name="c_issue_date_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">जिल्ला</label>
                    <input type="text" name="c_district" id="nname">
                </div>

            </div>
        </div>

        <div class="px-1">
            <p class="form-title mt-2">
                राहादानी </p>
            <div class="d-flex mt-2">

                <div class="inp">
                    <label for="nname" class="required-label">राहादानी नं.</label>
                    <input type="number" name="passport_number" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जारी मिती(बि.स)</label>
                    <input type="date" name="p_issue_date_nep" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जारी मिती(इ.स)</label>
                    <input type="date" name="p_issue_date_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">जिल्ला</label>
                    <input type="text" name="p_district" id="nname">
                </div>

            </div>
        </div>

        <div class="px-1">
            <p class="form-title mt-2">
                मतदाता </p>
            <div class="d-flex mt-2">

                <div class="inp">
                    <label for="nname">परिचय पत्र नं.</label>
                    <input type="number" name="voter_id_number" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जारी मिती(बि.स)</label>
                    <input type="date" name="v_issue_date_nep" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जारी मिती(इ.स)</label>
                    <input type="date" name="v_issue_date_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">जिल्ला</label>
                    <input type="text" name="v_district" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">स्थायी लेखा नं.</label>
                    <input type="text" name="sthai_lekha_number" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">अन्य बिबरण</label>
                    <input type="text" name="other_detail" id="nname">
                </div>

            </div>
        </div>

        <div class="mt-2 px-1">
            <div class="d-flex mt-5">
                <div class="inp w-50">
                    <label for="nname">कैफियत</label>
                    <textarea type="text" class="form-control" name="description" id="nname"></textarea>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="col-md-12 text-center mt-5">
                <button type="submit" class="btn btn-success btn-sm">सुरक्षित गर्नुहोस्</button>
            </div>
        </div>

    </form>
    </div>
@endsection

@section('scripts')
    <script>
        var d = document.getElementById("dad-block");
        var m = document.getElementById("mom-block");
        var g = document.getElementById("grandfather-block");
        var ma = document.getElementById("married-block");
        d.style.display = "none";
        m.style.display = "none";
        g.style.display = "none";
        ma.style.display = "none";
        var changeDad = function(event) {
            if (event.target.checked == true) {
                d.style.display = "block ";
            } else if (event.target.checked == false) {
                d.style.display = "none ";
            }
        }
        var changeMom = function(event) {
            if (event.target.checked == true) {
                m.style.display = "block ";
            } else if (event.target.checked == false) {
                m.style.display = "none ";
            }
        }
        var changeGrandfather = function(event) {
            if (event.target.checked == true) {
                g.style.display = "block ";
            } else if (event.target.checked == false) {
                g.style.display = "none ";
            }
        }
        var changeMarried = function(event) {
            if (event.target.checked == true) {
                ma.style.display = "block ";
            } else if (event.target.checked == false) {
                ma.style.display = "none ";
            }
        }
    </script>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
    <script>
        var removeFile = function() {
            $(".img-div").load(" .img-div");
        };
    </script>
    <script></script>
@endsection
