@extends('admin.layouts.master')
@section('content')
    <style>
        .delete-icon {
            cursor: pointer;
        }
    </style>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif

    <form action="{{ route('personalBivaran.store') }}" method="POST" enctype="multipart/form-data">
        <div class="p-form">
            @if (session()->has('msg'))
                <div class="alert alert-success">
                    {{ session()->get('msg') }}
                </div>
            @endif
            <div class="form-top mb-2">
                <span>आय रसिद </span>
                <span>कर अशुलि </span>
            </div>


            <div class="row px-1">
                @csrf
                <div class="d-flex w-100">
                    <div class="col-12">
                        {{-- nepali  --}}
                        <div class="d-flex mt-4">
                            <p class="form-title">
                                प्रयोगकर्ता/करदाता
                            </p>
                        </div>

                        <div class="d-flex mt-3 w-100">
                            <div class="inps">
                                <label for="nname">कर को प्रकार </label>
                                <select id="" name="kar_ko_prakar">
                                    <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                                    <option value="ADV - विज्ञापन कर">ADV - विज्ञापन कर </option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                                </select>
                            </div>

                            <div class="inps">
                                <label for="nname">कर्दाता सन्केत</label>
                                <input type="number" name="kar_data_sanket" class="px-2" id="nname"
                                    value="{{ random_int(0, 999999) }}">
                            </div>
                            <div class="inps">
                                <label for="nname" class="required-label">पुरा नाम</label>
                                <input type="text" name="fullname" id="nname">
                            </div>
                            <div class="inps">
                                <label for="nname">कर्दाता</label>
                                <input type="text" name="kardata" id="nname">
                            </div>

                        </div>

                        <div class="d-flex mt-3 w-100">
                            <div class="inps">
                                <label for="nname">प्रदेश्</label>
                                <input type="text" value="मधेश प्रदेश" name="pradesh" id="nname">
                            </div>
                            <div class="inps">
                                <label for="nname">जिल्ला</label>
                                <input type="text" value="रौतहट" name="district" id="nname">
                            </div>
                            <div class="inps">
                                <label for="nname">गा.पा ना.पा</label>
                                <input type="text" value="माधव नारायण नगरपालिका" name="municipality" id="nname">
                            </div>
                            <div class="inps">
                                <label for="nname" class="required-label">वाडा न:</label>
                                <input type="text" name="ward_no" id="nname">
                            </div>

                        </div>
                        <div class="d-flex mt-3 w-100">
                            <div class="inps">
                                <label for="nname">मोबाईल</label>
                                <input type="text" name="mobile" id="nname">
                            </div>
                        </div>


                        <div class="d-flex mt-4">
                            <p class="form-title">
                                रसिद वितरण
                            </p>
                        </div>
                        <div class="d-flex mt-1 w-100">
                            <div class="inps">
                                <label for="nname" class="required-label">सन्कलन काउन्टर </label>
                                <select id="" name="counter">
                                    <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                                    <option value="01-विविध तथा नगदि संकलन केन्द्र">01-विविध तथा नगदि संकलन केन्द्र</option>
                                    <option value="02-मालपोत संकलन केन्द्र">02-मालपोत संकलन केन्द्र</option>
                                </select>
                            </div>

                            <div class="inps">
                                <label for="nname" class="required-label">रसिद प्रकार</label>
                                <select id="" name="bill_type">
                                    <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                                    <option value="नगद">नगद</option>
                                    <option value="चेक">चेक</option>
                                    <option value="इसेवा वा खल्ती">इसेवा वा खल्ती</option>
                                </select>
                            </div>
                            <div class="inps">
                                <label for="nname">रसिद न :</label>
                                <input type="text" name="bill_number" id="nname">
                            </div>
                            <div class="inps">
                                <label for="nname" class="required-label">साहयक मोड्युल</label>
                                <input type="text" value="01 - आन्तरिक आय खाता" name="sahayak_module" id="nname">
                            </div>
                        </div>

                        <div class="d-flex mt-3 w-100">
                            <div class="inps">
                                <label for="nname">आ.रसिद न्</label>
                                <input type="text" name="antarik_rashid_no" id="nname">
                            </div>
                            <div class="inps">
                                <label for="nname">भुक्तनी मध्यम</label>
                                <select id="" name="payment_mtehod">
                                    <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                                    <option value="नगद">नगद</option>
                                    <option value="चेक">चेक</option>
                                    <option value="इसेवा वा खल्ती">इसेवा वा खल्ती</option>
                                </select>
                            </div>
                            <div class="inps">
                                <label for="nname">मुद्रा</label>
                                <input type="text" name="mudra" id="nname">
                            </div>
                            <div class="inps">
                                <label for="nname" class="required-label">मिती</label>
                                <input type="text" name="date" id="nepali-datepicker"
                                    placeholder="मिती छान्नुहोस...">
                            </div>

                        </div>

                        <div class="mt-2 px-1">
                            <div class="d-flex mt-4">
                                <div class="inp w-50">
                                    <label for="nname" class="required-label">कैफियत</label>
                                    <textarea type="text" class="form-control" name="kaifiyat1" id="nname"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div>

            <div class="col-md-12 mt-4 buttons">
                <div class="flex">
                    <button class="btn btn-success btn-sm" id="button" type="button"> <i
                            class="ri-add-circle-line"></i>
                        नया
                        प्रबिस्टी</button>

                    {{-- <a href="{{ route('personalBivaran.index') }}"><button class="btn btn-primary btn-sm"> <i
                            class="ri-restart-fill"></i> पुर्न लोड</button></a>

                <a href=""><button class="btn btn-sm btn-dark"><i class="ri-printer-line"></i> मुद्रन
                        गर्नुहोस</button></a> --}}
                </div>
            </div>
            <hr>

            <div class="tables mt-3">
                <table class="table table-striped" id="table">
                    <tr class="theading">
                        <th></th>
                        <th>क्र.स.</th>
                        <th>दररेट शीर्षक</th>
                        <th>प्रति एकाई दर</th>
                        <th>परिमाण</th>
                        {{-- <th>रकम</th> --}}
                        <th>कैफियत</th>
                    </tr>
                    <tr>
                        <td><i class="ri-delete-bin-line text-danger delete-icon"></i></td>
                        <td>1</td>
                        <td>
                            <select name="dar_rate_srishak[]" id="">
                                <option value="" disabled selected>Please Select</option>
                                <option value="सम्पती कर">सम्पती कर</option>
                                <option value="बक्यौता मालपोत/भुमिकर">बक्यौता मालपोत/भुमिकर</option>
                                <option value="">सम्पती कर</option>
                            </select>
                        </td>
                        <td><input type="number" value="1" name="rate[]"></td>
                        <td><input type="number" value="1" name="quantity[]"></td>
                        {{-- <td><input type="text" value="1"></td> --}}
                        <td><input type="text" value="1" name="kaifiyat[]"></td>

                    </tr>
                </table>
                <div class="d-flex mt-5 w-100 justify-content-end">
                    <div class="inps">
                        <label for="nname">जम्मा रकम:</label>
                        <input type="text" disabled id="nname">
                    </div>

                    <div class="inps">
                        <label for="nname">अक्षेरुपी:</label>
                        <input type="text" disabled id="nname">
                    </div>
                </div>
                <div class="d-flex mt-3 w-100 ">
                    <div class="inps">
                        <label for="nname">बैंक भौचर</label>
                        <input type="text" disabled id="nname" value="bank account">
                    </div>

                    <div class="inps">
                        <label for="nname">नगद:</label>
                        <input type="number" name="nagad" id="nname">
                    </div>
                    <div class="inps">
                        <label for="nname">फिर्ता रकम:</label>
                        <input type="text" disabled id="nname">
                    </div>
                    <div class="inps">
                        <label for="nname">प्रयोगकर्ता::</label>
                        <input type="text" disabled id="nname">
                    </div>
                </div>
                <h5 class="mt-3">चेक विवरण</h5>
                <div class="d-flex mt-3 w-100 ">
                    <div class="inps">
                        <label for="nname">मिति:</label>
                        <input type="date" disabled id="nname" value="bank account">
                    </div>

                    <div class="inps">
                        <label for="nname">बैंकको नाम:</label>
                        <input type="text" disabled id="nname">
                    </div>

                </div>
                <div class="d-flex mt-3 w-100 mb-5 pb-5 ">
                    <div class="inps">
                        <label for="nname">चेक नं:</label>
                        <input type="date" disabled id="nname" value="bank account">
                    </div>

                    <div class="inps ">
                        <label for="nname">चेक रकम:</label>
                        <input type="text" disabled id="nname">
                    </div>

                </div>

                <div class="container">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn">कर अशुली </button>
                    </div>
                </div>
            </div>

        </div>
        <form>
            <script type="text/javascript">
                window.onload = function() {
                    var mainInput = document.getElementById("nepali-datepicker");
                    mainInput.nepaliDatePicker();
                };
            </script>
            <script>
                var btn = document.getElementById("button");
                var table = document.getElementById("table");
                var i = 1;
                btn.addEventListener("click", function() {
                    i++;
                    table.insertAdjacentHTML("beforeend", `
              <tr>
                    <td><i class="ri-delete-bin-line text-danger delete-icon"></i></td>
                    <td>${i}</td>
                    <td>
                        <select name="dar_rate_srishak[]" id="">
                            <option value="" disabled selected>Please Select</option>
                            <option value="सम्पती कर">सम्पती कर</option>
                            <option value="बक्यौता मालपोत/भुमिकर">बक्यौता मालपोत/भुमिकर</option>
                            <option value="">सम्पती कर</option>
                        </select>
                    </td>
                    <td><input type="number" value="1" name="rate[]"></td>
                    <td><input type="number" value="1" name="quantity[]"></td>
                    {{-- <td><input type="text" value="1"></td> --}}
                    <td><input type="text" value="1" name="kaifiyat[]"></td>

                </tr>
            `);
                    var rbtn = document.querySelectorAll('.delete-icon');
                    rbtn.forEach(btns => {
                        btns.addEventListener('click', function(e) {
                            console.log("Asd");
                            e.target.parentElement.parentElement.remove();
                        })
                    });
                });
                var rbtn = document.querySelectorAll('.delete-icon');
                rbtn.forEach(btns => {
                    btns.addEventListener('click', function(e) {
                        console.log("Asd");
                        e.target.parentElement.parentElement.remove();
                    })
                });
            </script>

        @endsection
