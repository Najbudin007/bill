@extends('admin.layouts.master')
@section('content')
    <div class="p-form">
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
                        <input type="text" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">बीचको नाम</label>
                        <input type="text" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">थर</label>
                        <input type="text" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">जन्म मिति(बि.स)</label>
                        <input type="date" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname">जन्म मिति(इ.स)</label>
                        <input type="date" id="nname">
                    </div>
                </div>
                <div class="d-flex mt-2">
                    <div class="inp">
                        <label for="nname" class="required-label">Name</label>
                        <input type="text" id="nname">
                    </div>

                    <div class="inp">
                        <label for="nname">Middle Name </label>
                        <input type="text" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">Surname</label>
                        <input type="text" id="nname">
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">लिङ्ग</label>
                        <select name="" id="">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option value="पुरुष">पुरुष</option>
                            <option value="महिला">महिला</option>
                            <option value="तेस्रो लिङ्गी">तेस्रो लिङ्गी</option>
                        </select>
                    </div>
                    <div class="inp">
                        <label for="nname">धर्म</label>
                        <select name="" id="">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option value="हिन्दु">हिन्दु</option>
                            <option value="बौद्ध">बौद्ध</option>
                            <option value="मुस्लिम">मुस्लिम</option>
                            <option value="क्रिश्चियन">क्रिश्चियन</option>
                            <option value="किरान्त">किरान्त</option>
                            <option value="बोन">बोन</option>
                            <option value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>

                    </div>
                </div>
                <div class="d-flex mt-2">
                    <div class="inp">
                        <label for="nname">पेशा</label>
                        <select name="" id="">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option value="हिन्दु">हिन्दु</option>
                            <option value="बौद्ध">बौद्ध</option>
                            <option value="मुस्लिम">मुस्लिम</option>
                            <option value="क्रिश्चियन">क्रिश्चियन</option>
                            <option value="किरान्त">किरान्त</option>
                            <option value="बोन">बोन</option>
                            <option value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>
                    </div>

                    <div class="inp">
                        <label for="nname">मातृभाषा </label>
                        <select name="" id="">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option value="हिन्दु">हिन्दु</option>
                            <option value="बौद्ध">बौद्ध</option>
                            <option value="मुस्लिम">मुस्लिम</option>
                            <option value="क्रिश्चियन">क्रिश्चियन</option>
                            <option value="किरान्त">किरान्त</option>
                            <option value="बोन">बोन</option>
                            <option value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>
                    </div>
                    <div class="inp">
                        <label for="nname" class="required-label">देश</label>
                        <select name="" id="">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option value="हिन्दु">हिन्दु</option>
                            <option value="बौद्ध">बौद्ध</option>
                            <option value="मुस्लिम">मुस्लिम</option>
                            <option value="क्रिश्चियन">क्रिश्चियन</option>
                            <option value="किरान्त">किरान्त</option>
                            <option value="बोन">बोन</option>
                            <option value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>
                    </div>
                    <div class="inp">
                        <label for="nname">राष्ट्रियता</label>
                        <select name="" id="">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option value="पुरुष">पुरुष</option>
                            <option value="महिला">महिला</option>
                            <option value="तेस्रो लिङ्गी">तेस्रो लिङ्गी</option>
                        </select>
                    </div>
                    <div class="inp">
                        <label for="nname">फाइल तौल</label>
                        <select name="" id="">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option value="हिन्दु">हिन्दु</option>
                            <option value="बौद्ध">बौद्ध</option>
                            <option value="मुस्लिम">मुस्लिम</option>
                            <option value="क्रिश्चियन">क्रिश्चियन</option>
                            <option value="किरान्त">किरान्त</option>
                            <option value="बोन">बोन</option>
                            <option value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>

                    </div>
                    <div class="inp">
                        <label for="nname">फाइल नम्बर</label>
                        <select name="" id="">
                            <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option value="हिन्दु">हिन्दु</option>
                            <option value="बौद्ध">बौद्ध</option>
                            <option value="मुस्लिम">मुस्लिम</option>
                            <option value="क्रिश्चियन">क्रिश्चियन</option>
                            <option value="किरान्त">किरान्त</option>
                            <option value="बोन">बोन</option>
                            <option value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                        </select>

                    </div>
                    <div class="inp">
                        <label for="nname">अपाङ्ग हो ?</label>
                        <input type="checkbox" name="" id="" class="m-auto">

                    </div>
                </div>
            </div>
            <div class="col-2">image</div>
        </div>
        <div class="mt-3 mb-1">
            <p class="form-title">
                नातेदारको विवरण
            </p>
            <div class="d-flex">
                <div class="check-inp mx-5">
                    <input type="checkbox" name="" id="dad" class="m-auto">
                    <label for="nname">बाबु </label>

                </div>
                <div class="check-inp mx-5">
                    <input type="checkbox" name="" id="" class="m-auto">
                    <label for="nname">आमा</label>

                </div>
                <div class="check-inp mx-5">
                    <input type="checkbox" name="" id="" class="m-auto">
                    <label for="nname">हजुर बुबा </label>

                </div>
                <div class="check-inp mx-5">
                    <input type="checkbox" name="" id="" class="m-auto">
                    <label for="nname">पति/पत्नि </label>

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
                    <label for="nname">वडा न.</label>
                    <input type="text" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">सडकको नाम</label>
                    <input type="text" id="nname">
                </div>
            </div>
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
                अस्थायी ठेगाना
            </p>
            <div class="d-flex mt-2">
                <p class="form-titl mx-1">
                    साबिक
                </p>
                <div class="inp">
                    <label for="nname">अंचल</label>
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
                    <label for="nname">वडा न.</label>
                    <input type="text" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">सडकको नाम</label>
                    <input type="text" id="nname">
                </div>
            </div>
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
                    <input type="number" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">मोवाइल</label>
                    <input type="text" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">इमेल</label>
                    <input type="email" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">पत्राचार गर्ने ठेगाना</label>
                    <input type="text" id="nname">
                </div>

            </div>
        </div>
        <div class="px-1">
            <p class="form-title mt-2">
                नागरिकता </p>
            <div class="d-flex mt-2">

                <div class="inp">
                    <label for="nname" class="required-label">नागरिकता नं.</label>
                    <input type="number" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जारी मिती(बि.स)</label>
                    <input type="date" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जारी मिती(इ.स)</label>
                    <input type="date" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">जिल्ला</label>
                    <input type="text" id="nname">
                </div>

            </div>
        </div>
        <div class="px-1">
            <p class="form-title mt-2">
                मतदाता </p>
            <div class="d-flex mt-2">

                <div class="inp">
                    <label for="nname">परिचय पत्र नं.</label>
                    <input type="number" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जारी मिती(बि.स)</label>
                    <input type="date" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जारी मिती(इ.स)</label>
                    <input type="date" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">जिल्ला</label>
                    <input type="text" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">स्थायी लेखा नं.</label>
                    <input type="text" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="required-label">अन्य बिबरण</label>
                    <input type="text" id="nname">
                </div>

            </div>
        </div>
        <div class="mt-2 px-1">

            <div class="d-flex mt-2">

                <div class="inp w-50">
                    <label for="nname">कैफियत</label>
                    <input type="text" id="nname">
                </div>


            </div>
        </div>
        <button class="btn btn-success d-flex mx-auto mt-5">सुरक्षित गर्नुहोस्</button>
    </div>
@endsection

@section('scripts')
    <script>
        var dad = document.getElementById("dad");
        console.log(dad.value);
        console.log("dad.value");
    </script>
@endsection
