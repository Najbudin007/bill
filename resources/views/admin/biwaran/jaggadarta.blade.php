@extends('admin.layouts.master')
@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif

    <div class="p-form">
        <div class="form-top mb-2">
            <span>जग्गा दर्ता </span>
            <span>व्यक्तिगत जग्गा दर्ता विवरण</span>
        </div>
    </div>

    <div class="row mt-3 px-1">
        <div class="col-12">
            {{-- nepali  --}}
            <div class="d-flex w-100">
                <div class="inp">
                    <label for="nname" class="required-label">साबिको गा.बि.स / ना.पा</label>
                    <input type="text" name="name" id="nname">
                </div>

                <div class="inp">
                    <label for="nname">सा. वडा न.</label>
                    <input type="text" name="middle_name" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">हालको वडा न</label>
                    <input type="text" name="last_name" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">कित्ता न :</label>
                    <input type="text" name="Dob_bs" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">मोठ न :</label>
                    <input type="text" name="Dob_ad" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">सिट न :</label>
                    <input type="text" name="Dob_ad" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">नक्सा न :</label>
                    <input type="text" name="Dob_ad" id="nname">
                </div>
            </div>

            <div class="d-flex mt-4 w-100">
                <div class="inp">
                    <label for="nname">जग्गा रहेको स्थान </label>
                    <input type="text" name="Dob_ad" id="nname">
                </div>

                <div class="inp">
                    <label for="nname"> जग्गा को गुनस्तर </label>
                    <input type="text" name="middle_name_eng" id="nname">
                </div>

                <div class="inp">
                    <label for="nname" class="required-label">जग्गा को प्रकृती</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp">
                    <label for="nname" class="required-label">जग्गा को गुनस्तर</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp">
                    <label for="nname">सडक ?</label>
                    <div class="d-flex">
                        <label for="cha">छ</label>
                        <input type="checkbox" name="disability" value="छ " id="cha" class="m-auto mt-2">
                        <label for="chaina">छैन</label>
                        <input type="checkbox" name="disability" value="छैन" id="chaina" class="m-auto mt-2">
                    </div>
                </div>

                {{-- <div class="inp">
                    <label for="nname" class="required-label">सडक को गुनस्तर</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp">
                    <label for="nname" class="required-label">सडक</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div> --}}
            </div>


            <div class="d-flex mt-4">
                <div class="inp">
                    <label for="nname">प्रप्ति को प्रकार्</label>
                    <select id="" name="proffession"">
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
                    <label for="nname">प्रप्ति को मिति  </label>
                    <input type="date" name="last_name_eng" id="nname">
                </div>

                <div class="inp">
                    <label for="nname">प्रप्त मिति</label>
                    <input type="date" name="last_name_eng" id="nname">
                </div>

                <div class="inp">
                    <label for="nname">खरिद् मुल्य </label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp">
                    <label for="nname">प्रति इकाइ मुल्य</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp">
                    <label for="nname">स्वघोशाना मुल्य</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

            </div>

            <div class="d-flex mt-4 w-100">
                <div class="inp">
                    <label for="nname" class="required-label">मुल्यन्कन् मा समबेश् </label>
                    <select id="" name="proffession"">
                        <option name="proffession" value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                        <option name="proffession" value="हो">हो </option>
                        <option name="proffession" value="होइन">होइन </option>
                        <option name="proffession" value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                    </select>
                </div>

                <div class="inp">
                    <label for="nname" class="required-label">प्रक्रतिक् प्रकोप् बाटा क्षति भयेको </label>
                    <select id="" name="proffession"">
                        <option name="proffession" value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                        <option name="proffession" value="हो">हो </option>
                        <option name="proffession" value="होइन">होइन </option>
                        <option name="proffession" value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                    </select>
                </div>
            </div>

            <div class="d-flex mt-4 w-100">
                <div class="inp">
                    <label for="nname" class="required-label">मुल्कन्यन् दर्</label>
                    <select id="" name="proffession"">
                        <option name="proffession" value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                        <option name="proffession" value="हो">हो </option>
                        <option name="proffession" value="होइन">होइन </option>
                        <option name="proffession" value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                    </select>
                </div>

                <div class="inp">
                    <label for="nname" class="required-label">मल्पोत् को दर् </label>
                    <select id="" name="proffession"">
                        <option name="proffession" value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                        <option name="proffession" value="हो">हो </option>
                        <option name="proffession" value="होइन">होइन </option>
                        <option name="proffession" value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                    </select>
                </div>

                <div class="inp">
                    <label for="nname" class="required-label">जग्गा मापन् इकाऐ</label>
                    <select id="" name="proffession"">
                        <option name="proffession" value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                        <option name="proffession" value="हो">हो </option>
                        <option name="proffession" value="होइन">होइन </option>
                        <option name="proffession" value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                    </select>
                </div>
            </div>

            <div class="d-flex mt-4">
                <p class="form-title">
                    जग्गा को जम्मा क्षेत्रफल
                </p>
            </div>

                
            <div class="d-flex mt-4 w-100">
                <p class="pr-3" style="margin-right: 19px;font-size: 15px;font-weight: 500;min-width: 85px;">
                    जम्मा क्षेत्रफल
                </p>

                <div class="inp1">
                    <label for="nname" class="mb-2">विघा</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <label for="nname" class="mb-2">कठा</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <label for="nname" class="mb-2">धुर</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                    <label for="nname" class="mb-2">कन्वा</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                    <label for="nname" class="mb-2">कन्वाइन</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                    <label for="nname" class="mb-2">रोपनि</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                    <label for="nname" class="mb-2">आना</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                    <label for="nname" class="mb-2">पैसा</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                    <label for="nname" class="mb-2">दाम्</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                    <label for="nname" class="mb-2">हेक्टर</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                    <label for="nname" class="mb-2">एकर </label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                    <label for="nname" class="mb-2">वर्ग मिटर </label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

            </div>

            <div class="d-flex mt-3 w-100">
                <p class="pr-3" style="margin-right: 19px;font-size: 15px;font-weight: 500;min-width: 85px;">
                    मुल्यन्कन् नहुने 
                </p>
                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp1">
                   
                    <input type="text" name="last_name_eng" id="nname">
                </div>

            </div>

            <div class="d-flex  w-100">
                <p class="pr-3" style="margin-right: 19px;font-size: 15px;font-weight: 500;min-width: 85px;">
                    मुल्यन्कन् हुने 
                </p>
                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                
                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp1">
                    <input type="text" name="last_name_eng" id="nname">
                </div>

            </div>
        </div>

        <div class="container">
            <div class="col-md-12 text-center mt-5">
                <button type="submit" class="btn btn-success btn-sm">सुरक्षित गर्नुहोस्</button>
            </div>
        </div>

    </div>
@endsection
