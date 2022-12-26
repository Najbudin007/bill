@extends('admin.layouts.master')
@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif

    <div class="p-form">

        @if (session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif

        <form action="{{ route('personalBivaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-top mb-2">
                <span>सम्पत्ति मूल्याङकन</span>
            </div>
            <div class="row mx-1">
                <div class="col-md-9">
                    <h6>करदाताको विवरण</h6>
                    <hr class="mt-0">
                    <div class="inps">
                        <label for="">करदाता संकेत:</label>
                        <input type="text">
                    </div>
                    <h6 class="mt-5">ह्रास कट्टिको तरिका</h6>
                    <hr class="mt-0">
                    <div class="inps">
                        <label for="">वार्षिक समान दरमा ह्रास कट्टि:</label>
                        <input type="radio" class="mx-2" checked disabled>
                    </div>
                    <div class="inps mt-3">
                        <label for="">ह्रास कट्टि दर वर्गीकरण अनुसार ह्रास कट्टि:</label>
                        <input type="radio" class="mx-2" disabled>
                    </div>

                    <h6 class="mt-5">मूल्याङ्कन तथा कर निर्धारण</h6>
                    <hr class="mt-0">
                    <div class="d-flex mt-2">

                        <div class="inps">
                            <label for="nname">पूनःमूल्याङ्कन गर्ने:</label>
                            <input type="checkbox" name="zone" class="mx-2" id="nname">
                        </div>
                        <div class="inps">
                            <select name="" id="">
                                <option value="">gjyhgjgj</option>
                                <option value="">gjyhgjgj</option>
                                <option value="">gjyhgjgj</option>
                            </select>
                        </div>
                        <div class="inps">
                            <label for="nname">बहालवालको नाम:</label>
                            <input type="text" name="vdc_municipality" id="nname">
                        </div>
                        <div class="inps">
                            <label for="nname">व्यवसायको नाम:</label>
                            <input type="text" name="p_ward_no" id="nname">
                        </div>

                    </div>
                    <h6 class="mt-4">मूल्याङ्कन तथा कर निर्धारण BS</h6>
                    <hr class="mt-0">
                    <div class="d-flex mt-2">

                        <div class="inps pr-2">
                            <label for="nname" style="min-width: 100% !important;">पूनःमूल्याङ्कन गर्ने:</label>
                            <input type="checkbox" name="zone" class="mx-2" id="nname">
                        </div>
                        <div class="inps mx-4">
                            <select name="" id="">
                                <option value="">gjyhgjgj</option>
                                <option value="">gjyhgjgj</option>
                                <option value="">gjyhgjgj</option>
                            </select>
                        </div>
                        <div class="inps">
                            <label for="nname">महिना:</label>
                            <input type="text" name="vdc_municipality" id="nname">
                        </div>
                        <div class="inps">
                            <label for="nname">वर्ष सम्म:</label>
                            <input type="text" name="p_ward_no" id="nname">
                        </div>
                        <div class="inps">
                            <label for="nname">महिना:</label>
                            <input type="text" name="p_ward_no" id="nname">
                        </div>

                    </div>
                    <h6 class="mt-4">मूल्याङ्कन तथा कर निर्धारण AD</h6>
                    <hr class="mt-0">
                    <div class="d-flex mt-2">

                        <div class="inps pr-2">
                            <label for="nname" style="min-width: 100% !important;white-space:nowrap;">पूनःमूल्याङ्कन
                                गर्ने वर्ष देखि
                                AD:</label>
                            <input type="checkbox" name="zone" class="mx-2" id="nname">
                        </div>
                        <div class="inps mx-4">
                            <select name="" id="">
                                <option value="">gjyhgjgj</option>
                                <option value="">gjyhgjgj</option>
                                <option value="">gjyhgjgj</option>
                            </select>
                        </div>
                        <div class="inps">
                            <label for="nname">महिना:</label>
                            <input type="text" name="vdc_municipality" id="nname">
                        </div>
                        <div class="inps">
                            <label for="nname">वर्ष सम्म:</label>
                            <input type="text" name="p_ward_no" id="nname">
                        </div>
                        <div class="inps">
                            <label for="nname">महिना:</label>
                            <input type="text" name="p_ward_no" id="nname">
                        </div>

                    </div>
                </div>
                <div class="col-md-3 ">
                    <h6 class="" style="text-align: right">मूल्याङ्कन तथा कर निर्धारण</h6>
                    <hr class="mt-0">
                    <div class="" style="display: flex;flex-direction:column;align-items:end">
                        <div class="inps mt-3">
                            <label for="">सम्पत्ति मूल्याङकन:</label>
                            <input type="radio" class="mx-2">
                        </div>
                        <div class="inps mt-3">
                            <label for="">ह्रास कट्टि दर वर्गीकरण अनुसार ह्रास कट्टि:</label>
                            <input type="radio" class="mx-2" disabled>
                        </div>
                        <div class="inps mt-3">
                            <label for="">व्यवसाय कर निर्धारण:</label>
                            <input type="radio" class="mx-2">
                        </div>
                        <div class="inps mt-3">
                            <label for="">सवारी कर निर्धारण:</label>
                            <input type="radio" class="mx-2">
                        </div>
                        <div class="inps mt-3">
                            <label for="">वहाल कर निधार्रण:</label>
                            <input type="radio" class="mx-2">
                        </div>
                        <div class="inps mt-3">
                            <label for="">BS/AD:</label>
                            <input type="radio" class="mx-2">
                        </div>
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
@endsection
