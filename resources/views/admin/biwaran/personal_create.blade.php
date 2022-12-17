@extends('admin.layouts.master')
@section('content')
    <div class="w-100 p-form">
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
                    <input type="checkbox" name="" id="" class="m-auto">
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

        

    </div>
@endsection
