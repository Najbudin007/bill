@extends('admin.layouts.master')
@section('content')
    <style>
        .delete-icon {
            cursor: pointer;
        }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
                                    <option value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                                    <option value="ADV - विज्ञापन कर">ADV - विज्ञापन कर </option>
                                    <option value="ADV - वेव्साय कर">ADV - वेव्साय कर</option>
                                    <option value="ADV - घर जग्गा"> ADV -घर जग्गा</option>
                                    <option value="ADV - सम्पती कर">ADV - सम्पती कर</option>
                                    <option value="ADV - अन्री कर">ADV - अन्री कर</option>
                                    <option value="ADV - वाहल कर">ADV - वाहल कर</option>
                                    <option value="ADV - वाहल कर">ADV - वाहल कर</option>
                                    <option value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                                    <option value="थाहा नभएको र लागू नहुने">थाहा नभएको र लागू नहुने</option>
                                </select>
                            </div>
                            <!--
                                <div class="inps">
                                    <label for="nname">कर्दाता सन्केत</label>
                                    <input type="number" name="kar_data_sanket" class="px-2" id="nname"
                                        value="{{ random_int(0, 999999) }}">
                                </div>
                                <div class="inps">
                                    <label for="nname" class="required-label">कर दर्ताको पुरा नाम</label>
                                    <input type="text" name="fullname" id="nname">
                                </div>
                                <!-- <div class="inps">
                                    <label for="nname">कर्दाता</label>
                                    <input type="text" name="kardata" id="nname">
                                </div> -->

                        </div>

                        <div class="d-flex mt-3 w-100">
                            <div class="inps">
                                <label for="nname">प्रदेश्</label>
                                <!-- <input type="text" value="" name="pradesh" id="nname"> -->
                                <select class="js-example-disabled-results">
                                    <option value="one">मधेश प्रदेश</option>
                                    <option value="two">बागमती प्रदेश </option>
                                    <option value="three">गण्डकी प्रदेश </option>
                                    <option value="three">कोशी प्रदेश </option>
                                    <option value="three">लुम्बिनी प्रदेश </option>
                                    <option value="three">कर्णाली प्रदेश </option>
                                    <option value="three">सुदूरपश्चिम प्रदेश </option>
                                </select>
                            </div>
                            <div class="inps">
                                <label type='text' for="nname">जिल्ला</label>
                                <!-- <select class="js-example-disabled-results">
                                        <option value="one">रौतहट</option>
                                        <option value="two" >Second (disabled)</option>
                                        <option value="three">Third</option>
                                        </select> -->

                                <select id="nname" class="js-example-disabled-results" required name="temp_district">
                                    <option value="" selected="selected">रौतहट</option>
                                    <option value="अछाम">अछाम</option>
                                    <option value="अर्घाखाँची">अर्घाखाँची</option>
                                    <option value="बाग्लुंग">बाग्लुंग</option>
                                    <option value="बैतडी">बैतडी</option>
                                    <option value="बझांग">बझांग</option>
                                    <option value="बाजुरा">बाजुरा</option>
                                    <option value="बाँके">बाँके</option>
                                    <option value="बारा">बारा</option>
                                    <option value="बर्दिया">बर्दिया</option>
                                    <option value="भक्तपुर">भक्तपुर</option>
                                    <option value="भोजपुर">भोजपुर</option>
                                    <option value="चितवन">चितवन</option>
                                    <option value="डडेल्धुरा">डडेल्धुरा</option>
                                    <option value="दैलेख">दैलेख</option>
                                    <option value="दाङ">दाङ</option>
                                    <option value="दार्चुला">दार्चुला</option>
                                    <option value="धादिंग">धादिंग</option>
                                    <option value="धनकुटा">धनकुटा</option>
                                    <option value="धनुषा">धनुषा</option>
                                    <option value="दोलखा">दोलखा</option>
                                    <option value="डोल्पा">डोल्पा</option>
                                    <option value="डोटी">डोटी</option>
                                    <option value="गोर्खा">गोर्खा</option>
                                    <option value="गुल्मी">गुल्मी</option>
                                    <option value="हुम्ला">हुम्ला</option>
                                    <option value="इलाम">इलाम</option>
                                    <option value="जाजरकोट">जाजरकोट</option>
                                    <option value="झापा">झापा</option>
                                    <option value="जुम्ला">जुम्ला</option>
                                    <option value="कैलाली">कैलाली</option>
                                    <option value="कालिकोट">कालिकोट</option>
                                    <option value="कंचनपुर">कंचनपुर</option>
                                    <option value="कपिलवस्तु">कपिलवस्तु</option>
                                    <option value="कास्की">कास्की</option>
                                    <option value="काठमाडौँ">काठमाडौँ</option>
                                    <option value="काभ्रेपलान्चोक">काभ्रेपलान्चोक</option>
                                    <option value="खोटांग">खोटांग</option>
                                    <option value="ललितपुर">ललितपुर</option>
                                    <option value="लम्जुंग">लम्जुंग</option>
                                    <option value="महोत्तरी">महोत्तरी</option>
                                    <option value="मकवानपुर">मकवानपुर</option>
                                    <option value="मनाङ">मनाङ</option>
                                    <option value="मोरंग">मोरंग</option>
                                    <option value="मुगु">मुगु</option>
                                    <option value="मुस्ताङ">मुस्ताङ</option>
                                    <option value="म्याग्दी">म्याग्दी</option>
                                    <option value="नवलपरासी">नवलपरासी</option>
                                    <option value="नुवाकोट">नुवाकोट</option>
                                    <option value="ओखाल्धुंगा">ओखाल्धुंगा</option>
                                    <option value="पाल्पा">पाल्पा</option>
                                    <option value="पांचथर">पांचथर</option>
                                    <option value="पर्बत">पर्बत</option>
                                    <option value="पर्सा">पर्सा</option>
                                    <option value="प्युठान">प्युठान</option>
                                    <option value="रामेछाप">रामेछाप</option>
                                    <option value="रसुवा">रसुवा</option>
                                    <option value="रौतहट">रौतहट</option>
                                    <option value="रोल्पा">रोल्पा</option>
                                    <option value="रुकुम">रुकुम</option>
                                    <option value="रुपन्देही">रुपन्देही</option>
                                    <option value="सल्यान">सल्यान</option>
                                    <option value="संखुवासभा">संखुवासभा</option>
                                    <option value="सप्तरी">सप्तरी</option>
                                    <option value="सर्लाही">सर्लाही</option>
                                    <option value="सिन्धुली">सिन्धुली</option>
                                    <option value="सिन्धुपाल्चोक">सिन्धुपाल्चोक</option>
                                    <option value="सिराहा">सिराहा</option>
                                    <option value="सोलुखुम्बु">सोलुखुम्बु</option>
                                    <option value="सुनसरी">सुनसरी</option>
                                    <option value="सुर्खेत">सुर्खेत</option>
                                    <option value="स्यांग्जा">स्यांग्जा</option>
                                    <option value="तनहु">तनहु</option>
                                    <option value="ताप्लेजुंग">ताप्लेजुंग</option>
                                    <option value="तेर्हथुम">तेर्हथुम</option>
                                    <option value="उदयपुर">उदयपुर</option>
                                </select>
                            </div>
                            <div class="inps">
                                <label for="nname">गा.पा ना.पा</label>
                                <input type="text" value="ईशनाथ नगरपालिका" name="municipality" id="nname">
                            </div>
                            <div class="inps">
                                <label for="nname" class="required-label">वडा न:</label>
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
                                    <option value="01-विविध तथा नगदि संकलन केन्द्र">01-विविध तथा नगदि संकलन केन्द्र
                                    </option>
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
                                <input type="text" name="bill_number" value="{{ random_int(0, 9999) }}"
                                    id="nname">
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
                        प्रबिस्टी</button><br><br>

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
            </div>
            <th>परिमाण</th>
        </div>
        <th>रकम</th>
        </div>
        <th>कैफियत</th>

        </tr>
        <tr>
            <td><i class="ri-delete-bin-line text-danger delete-icon"></i></td>
            <td>1</td>
            <td class="dar_rate">
                <select class="js-example-disabled-results" name="dar_rate_srishak[]" id="">
                    <option value="" disabled selected>छान्नुहोस्</option>
                    <option value="सम्पती कर">सम्पती कर</option>
                    <option value="घरवहाल कर">घरवहाल कर</option>
                    <option value="सवारी साधन कर">सवारी साधन कर</option>
                    <option value="सवारी साधन पटके कर">सवारी साधन पटके कर</option>
                    <option value="विज्ञापन कर">विज्ञापन कर</option>
                    <option value=" व्यबसाय कर"> व्यबसाय कर</option>
                    <option value="सम्पत्ती मुल्यांकन सेवा शुल्क ५० लाख भन्दा माथी १ करोड सम्म">सम्पत्ती मुल्यांकन सेवा
                        शुल्क ५० लाख भन्दा माथी १ करोड सम्म</option>
                    <option value="तालावन्दी बहाल कोठा खोल्न सेवा शुल्क दस्तुर">तालावन्दी बहाल कोठा खोल्न सेवा शुल्क दस्तुर
                    </option>
                    <option value="फोहरमैला संकलन अनुमति दस्तुर ">फोहरमैला संकलन अनुमति दस्तुर </option>
                    <option value="सम्पत्ती मुल्यांकन सेवा शुल्क ५ लाख सम्मको">सम्पत्ती मुल्यांकन सेवा शुल्क ५ लाख सम्मको
                    </option>
                    <option value="घर जग्गा अन्तर्गत १० लाखसम्मको मूल्याङ्कनमा कर नलाग्नेमा सेवा शुल्क">घर जग्गा अन्तर्गत
                        १० लाखसम्मको मूल्याङ्कनमा कर नलाग्नेमा सेवा शुल्क</option>
                    <option value="फोहरमैला संकलन नविकरण">फोहरमैला संकलन नविकरण</option>
                    <option value="सम्पत्ती मुल्यांकन सेवा शुल्क १ करोड भन्दा माथी">सम्पत्ती मुल्यांकन सेवा शुल्क १ करोड
                        भन्दा माथी</option>
                    <option value="उजुरी रोक्का सम्वन्धि धरौटी (सार्वजनिक सरोकार विषय बाहेक)">उजुरी रोक्का सम्वन्धि धरौटी
                        (सार्वजनिक सरोकार विषय बाहेक)</option>
                    <option value="सम्पत्ती मुल्यांकन सेवा शुल्क प्रती हजार १ का दरले">सम्पत्ती मुल्यांकन सेवा शुल्क प्रती
                        हजार १ का दरले</option>
                    <option value="सम्पत्ती मुल्यांकन सेवा शुल्क ५ लाख देखी १० लाख सम्म">सम्पत्ती मुल्यांकन सेवा शुल्क ५
                        लाख देखी १० लाख सम्म</option>
                    <option value="सवारी साधन पार्किङ्घ शुल्क">सवारी साधन पार्किङ्घ शुल्क</option>
                    <option value="नक्सा पास दस्तुर (वर्ग फिटका आधारमा)">नक्सा पास दस्तुर (वर्ग फिटका आधारमा)</option>
                    <option value="घर नक्सा पास किताव">घर नक्सा पास किताव</option>
                    <option value="नक्सा प्रतिलिपि">नक्सा प्रतिलिपि</option>
                    <option value="नक्सा निवेदन">नक्सा निवेदन</option>
                    <option value="सटर भएका घरको हकमा ">सटर भएका घरको हकमा </option>
                    <option value="घरनक्सा अभिलेख गर्दा मापदण्ड विपरित झ्याल, ढोका, वरन्डा भए">घरनक्सा अभिलेख गर्दा मापदण्ड
                        विपरित झ्याल, ढोका, वरन्डा भए</option>
                    <option value="घर नक्सा नियमित">घर नक्सा नियमित</option>
                    <option value="नक्सा परिमार्जन ">नक्सा परिमार्जन </option>
                    <option value="नक्सा पास दस्तुर">नक्सा पास दस्तुर</option>
                    <option value="घर निर्माण सम्पन्न">घर निर्माण सम्पन्न</option>
                    <option value="नक्सा नविकरण">नक्सा नविकरण</option>
                    <option value="नक्सा सेवा शुल्क">नक्सा सेवा शुल्क</option>
                    <option value="टहरा निर्माण भएको प्रमाणित">टहरा निर्माण भएको प्रमाणित</option>
                    <option value="साधारण नक्सा पास दस्तुर">साधारण नक्सा पास दस्तुर</option>
                    <option value="व्यापारिक, उद्योग">व्यापारिक, उद्योग</option>
                    <option value="घर नक्साको फिल्ड रेखाङ्कन तथा बिथ लगत नगरपालिकाबाट गराएमा">घर नक्साको फिल्ड रेखाङ्कन तथा
                        बिथ लगत नगरपालिकाबाट गराएमा</option>
                    <option value="कम्पाउण्ड वाल प्रति रनिङ्ग फिट">कम्पाउण्ड वाल प्रति रनिङ्ग फिट</option>
                    <option value="घरको मोहडा परिवर्तन">घरको मोहडा परिवर्तन</option>
                    <option value="स्वीकृती विना भवन निर्माण कार्य गरेमा">स्वीकृती विना भवन निर्माण कार्य गरेमा</option>
                    <option value="घर नक्सा नियमित ">घर नक्सा नियमित </option>
                    <option value="घरनक्सा अभिलेख ">घरनक्सा अभिलेख </option>
                    <option value="नक्सा नामसारी">नक्सा नामसारी</option>
                    <option value="नक्सा नामसारी ३ पुस्ते भित्र ">नक्सा नामसारी ३ पुस्ते भित्र </option>
                    <option value="डिलरसिप सिफारिस प्रति सिफारिस">डिलरसिप सिफारिस प्रति सिफारिस</option>
                    <option value="घरबाटो सिफारिस">घरबाटो सिफारिस</option>
                    <option value="अन्य सिफारिस">अन्य सिफारिस</option>
                    <option value="उद्योग धारा विजुली जडान सिफारिस प्रति सिफारिस">उद्योग धारा विजुली जडान सिफारिस प्रति
                        सिफारिस</option>
                    <option value="चारकिल्ला प्रमाणित">चारकिल्ला प्रमाणित</option>
                    <option value="नाम थर संसोधन प्रति सिफारिस">नाम थर संसोधन प्रति सिफारिस</option>
                    <option value="मोहि लगत कट्टा प्रति आना अन्यको हकमा">मोहि लगत कट्टा प्रति आना अन्यको हकमा</option>
                    <option value="विर्ता जग्गा दर्ता÷नामसारी प्रति धुर ">विर्ता जग्गा दर्ता÷नामसारी प्रति धुर </option>
                    <option value="वसोवास प्रमाणित दस्तुर">वसोवास प्रमाणित दस्तुर</option>
                    <option value="व्यवसाय ठाउंसारी">व्यवसाय ठाउंसारी</option>
                    <option value="व्यवसाय वन्द सिफारिस">व्यवसाय वन्द सिफारिस</option>
                    <option value="अविवाहित प्रमाणित सिफारिस  अंग्रेजी भाषमा">अविवाहित प्रमाणित सिफारिस अंग्रेजी भाषमा
                    </option>
                    <option value="घरजग्गा नामासारी सिफारिस">घरजग्गा नामासारी सिफारिस</option>
                    <option value="जन्म मिति प्रमाणित सिफारिस अंग्रेजी भाषमा">जन्म मिति प्रमाणित सिफारिस अंग्रेजी भाषमा
                    </option>
                    <option value="आदिवासी जनजाती दलित आदि सम्वन्धि सिफारिस">आदिवासी जनजाती दलित आदि सम्वन्धि सिफारिस
                    </option>
                    <option value="चलचित्र छायाँकन अन्य मुलुकको लागी">चलचित्र छायाँकन अन्य मुलुकको लागी</option>
                    <option value="घरेलु तथा साना उद्योग कार्यालयमा सिफारिस प्रति सिफारिस  साना घरेलु ७ लाख सम्मका">घरेलु
                        तथा साना उद्योग कार्यालयमा<br> सिफारिस प्रति सिफारिस <br> साना घरेलु ७ लाख सम्मका</option>
                    <option value="अन्य प्रयोजनको लागि सेवा शुल्क">अन्य प्रयोजनको लागि सेवा शुल्क</option>
                    <option value="अन्य अंग्रेजी सिफारिस दस्तुर">अन्य अंग्रेजी सिफारिस दस्तुर</option>
                    <option value="जोत कायम र नामसारी प्रति धुर">जोत कायम र नामसारी प्रति धुर</option>
                    <option value="ज.ध. पुर्जामा घर जनाउने प्रति सिफारिस">ज.ध. पुर्जामा घर जनाउने प्रति सिफारिस</option>
                    <option value="सर्जमिन सूचना, मुचुल्क टाँस (व्यक्तिगतं प्रयोजनका लागि) ">सर्जमिन सूचना, मुचुल्क टाँस
                        (व्यक्तिगतं प्रयोजनका लागि) </option>
                    <option value="तिनपुस्ते फोटो टाँस ंसिफारिस">तिनपुस्ते फोटो टाँस ंसिफारिस</option>
                    <option value="चलचित्र छायाँकन स्वदेशीको लागी ">चलचित्र छायाँकन स्वदेशीको लागी </option>
                    <option value="विदेशमा अध्ययन गर्न जाने विद्यार्थी प्रयोजनको लागि सेवा शुल्क">विदेशमा अध्ययन गर्न जाने
                        विद्यार्थी प्रयोजनको लागि सेवा शुल्क</option>
                    <option value="अविवाहित प्रमाणित सिफारिस  नेपाली भाषामा">अविवाहित प्रमाणित सिफारिस नेपाली भाषामा
                    </option>
                    <option value="विकास निर्माण तथा उपभोक्ता समितिसंग सम्वन्धित सिफारिसहरु">विकास निर्माण तथा उपभोक्ता
                        समितिसंग सम्वन्धित सिफारिसहरु</option>
                    <option value="घरेलु तथा साना उद्योग कार्यालयमा सिफारिस प्रति सिफारिस  कृषि÷पश">घरेलु तथा साना उद्योग
                        कार्यालयमा सिफारिस प्रति सिफारिस कृषि÷पश</option>
                    <option value="घरेलु तथा साना उद्योग कार्यालयमा सिफारिस प्रति सिफारिस मझौला ८ लाख देखि २० लाख सम्मक">
                        घरेलु तथा साना उद्योग कार्यालयमा सिफारिस प्रति सिफारिस मझौला ८ लाख देखि २० लाख सम्मक</option>
                    <option value="धारा विजुली जडान सिफारिस प्रति सिफारिस">धारा विजुली जडान सिफारिस प्रति सिफारिस</option>
                    <option value="उद्योग चारकिल्ला प्रमाणित प्रति धुर">उद्योग चारकिल्ला प्रमाणित प्रति धुर</option>
                    <option value="आय स्रोत प्रमाणीत ( प्रति हजार रु १ का दरले)">आय स्रोत प्रमाणीत ( प्रति हजार रु १ का
                        दरले)</option>
                    <option value="विदेशमा अध्ययन गर्न जाने विद्यार्थी (३० लाख सम्म)">विदेशमा अध्ययन गर्न जाने विद्यार्थी
                        (३० लाख सम्म)</option>
                    <option value="विदेशमा अध्ययन गर्न जाने विद्यार्थी (५० लाख भन्दा माथी १ करोड सम्म)">विदेशमा अध्ययन गर्न
                        जाने विद्यार्थी (५० लाख भन्दा माथी १ करोड सम्म)</option>
                    <option value="विदेशमा अध्ययन गर्न जाने विद्यार्थी (१ करोड भन्दा माथि)">विदेशमा अध्ययन गर्न जाने
                        विद्यार्थी (१ करोड भन्दा माथि)</option>
                    <option value="लालपुर्जा प्रतिलिपी प्रति सिफारिस">लालपुर्जा प्रतिलिपी प्रति सिफारिस</option>
                    <option value="चारकिल्ला प्रमाणित (१० धुर घडेरी सम्म )">चारकिल्ला प्रमाणित (१० धुर घडेरी सम्म )
                    </option>
                    <option value="चारकिल्ला प्रमाणित (१० धुर घडेरी भन्दा माथी )">चारकिल्ला प्रमाणित (१० धुर घडेरी भन्दा
                        माथी )</option>
                    <option value="चारकिल्ला प्रमाणित (खेतीयोग्य जग्गाको हकमा ५ कठ्ठा सम्म)">चारकिल्ला प्रमाणित (खेतीयोग्य
                        जग्गाको हकमा ५ कठ्ठा सम्म)</option>
                    <option value="चारकिल्ला प्रमाणित (खेतीयोग्य जग्गाको हकमा ५ कठ्ठा भन्दा माथी)">चारकिल्ला प्रमाणित
                        (खेतीयोग्य जग्गाको हकमा ५ कठ्ठा भन्दा माथी)</option>
                    <option value="घरबाटो सिफारिस (कच्चि मोटर बाटो )">घरबाटो सिफारिस (कच्चि मोटर बाटो )</option>
                    <option value="घरबाटो सिफारिस (पक्की मोटर बाटो )">घरबाटो सिफारिस (पक्की मोटर बाटो )</option>
                    <option value="घरबाटो सिफारिस (कालोपत्रे सडक )">घरबाटो सिफारिस (कालोपत्रे सडक )</option>
                    <option value="जन्म मिति प्रमाणित सिफारिस नेपाली भाषामा">जन्म मिति प्रमाणित सिफारिस नेपाली भाषामा
                    </option>
                    <option value="व्यक्तिगत घटना दर्ता">व्यक्तिगत घटना दर्ता</option>
                    <option value="नाता कायम दस्तुर नेपाली भाषामा">नाता कायम दस्तुर नेपाली भाषामा</option>
                    <option value="नाता कायम दस्तुर  अंग्रेजी भाषम">नाता कायम दस्तुर अंग्रेजी भाषम</option>
                    <option value="नक्सा डिजाईनर सूचिकृत फारम">नक्सा डिजाईनर सूचिकृत फारम</option>
                    <option value="आय स्रोत प्रमाणीत दस्तुर अन्य प्रयोजनका लागि">आय स्रोत प्रमाणीत दस्तुर अन्य प्रयोजनका
                        लागि</option>
                    <option value="अन्य प्रमाणित दस्तुर">अन्य प्रमाणित दस्तुर</option>
                    <option value="प्राविधिक भवन डिजाइन इजाजत पत्र नविकरण वार्षिक  “ख” वर्ग ">प्राविधिक भवन डिजाइन इजाजत
                        पत्र नविकरण वार्षिक “ख” वर्ग </option>
                    <option value="लालपुर्जा प्रतिलिपी प्रति सिफारिस">लालपुर्जा प्रतिलिपी प्रति सिफारिस</option>
                    <option value="अन्य दस्तुर ">अन्य दस्तुर </option>
                    <option value="सवारी साधन, मेशिनरी औजार, उपकरण दस्तुर">सवारी साधन, मेशिनरी औजार, उपकरण दस्तुर</option>
                    <option value="उजुरी रोक्का निवेदन">उजुरी रोक्का निवेदन</option>
                    <option value="प्राविधिक भवन डिजाइन इजाजत पत्र नविकरण वार्षिक “क” वर्ग ">प्राविधिक भवन डिजाइन इजाजत
                        पत्र नविकरण वार्षिक “क” वर्ग </option>
                    <option value="प्रतिलिपी माग÷प्रमाणित दस्तुर ">प्रतिलिपी माग÷प्रमाणित दस्तुर </option>
                    <option value="जोत कायम र नामसारी ५ कठ्ठा सम्म">जोत कायम र नामसारी ५ कठ्ठा सम्म</option>
                    <option value="निवेदन">निवेदन</option>
                    <option value="अन्य कर">अन्य कर</option>
                    <option value="जोत कायम र नामसारी ५ कठ्ठा भन्दा माथी">जोत कायम र नामसारी ५ कठ्ठा भन्दा माथी</option>
                    <option value="ढुंगा तथा जल विहार अनुमती">ढुंगा तथा जल विहार अनुमती</option>
                    <option value="आय स्रोत प्रमाणीत दस्तुर विदेशमा अध्ययन गर्न जानेको लागि">आय स्रोत प्रमाणीत दस्तुर
                        विदेशमा अध्ययन गर्न जानेको लागि</option>
                    <option value="प्राविधिक भवन डिजाइन इजाजत पत्र">प्राविधिक भवन डिजाइन इजाजत पत्र</option>
                    <option value="उ॰स गठन">उ॰स गठन</option>

                </select>
            </td>
            <form>

                <td><input type="text" id="num1" name="rate[]"></td>
                <td><input type="text" id="num2" name="quantity[]"></td>
                <td><input type="text" id="result" name="result" readonly></td>
                <td><input type="text" name="kaifiyat[] "></td>

            </form>
        </tr>
        <script>
            var num1 = document.getElementById("num1");
            var num2 = document.getElementById("num2");
            var result = document.getElementById("result");

            num1.addEventListener("input", multiply);
            num2.addEventListener("input", multiply);


            function multiply() {
                if (!isNaN(num1.value) && !isNaN(num2.value)) {
                    result.value = num1.value * num2.value;
                } else {
                    result.value = "Inputs are not numbers";
                }
            }
            $(document).ready(function() {

                var $disabledResults = $(".js-example-disabled-results");
                $disabledResults.select2();
            });
        </script>

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
                <button type="submit" class="btn btn-primary btn">कर अशुली</button>
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
                    <select class="js-example-disabled-results"  id="" style >
                                <option value="" disabled selected>छान्नुहोस्</option>
                                <option value="सम्पती कर">सम्पती कर</option>
                                <option value="घरवहाल कर">घरवहाल कर</option>
                                <option value="सवारी साधन कर">सवारी साधन कर</option>
                                <option value="सवारी साधन पटके कर">सवारी साधन पटके कर</option>
                                <option value="विज्ञापन कर">विज्ञापन कर</option>
                                <option value=" व्यबसाय कर"> व्यबसाय कर</option>
                                <option value="सम्पत्ती मुल्यांकन सेवा शुल्क ५० लाख भन्दा माथी १ करोड सम्म">सम्पत्ती मुल्यांकन सेवा शुल्क ५० लाख भन्दा माथी १ करोड सम्म</option>
                                <option value="तालावन्दी बहाल कोठा खोल्न सेवा शुल्क दस्तुर">तालावन्दी बहाल कोठा खोल्न सेवा शुल्क दस्तुर</option>
                                <option value="फोहरमैला संकलन अनुमति दस्तुर ">फोहरमैला संकलन अनुमति दस्तुर </option>
                                <option value="सम्पत्ती मुल्यांकन सेवा शुल्क ५ लाख सम्मको">सम्पत्ती मुल्यांकन सेवा शुल्क ५ लाख सम्मको</option>
                                <option value="घर जग्गा अन्तर्गत १० लाखसम्मको मूल्याङ्कनमा कर नलाग्नेमा सेवा शुल्क">घर जग्गा अन्तर्गत १० लाखसम्मको मूल्याङ्कनमा कर नलाग्नेमा सेवा शुल्क</option>
                                <option value="फोहरमैला संकलन नविकरण">फोहरमैला संकलन नविकरण</option>
                                <option value="सम्पत्ती मुल्यांकन सेवा शुल्क १ करोड भन्दा माथी">सम्पत्ती मुल्यांकन सेवा शुल्क १ करोड भन्दा माथी</option>
                                <option value="उजुरी रोक्का सम्वन्धि धरौटी (सार्वजनिक सरोकार विषय बाहेक)">उजुरी रोक्का सम्वन्धि धरौटी (सार्वजनिक सरोकार विषय बाहेक)</option>
                                <option value="सम्पत्ती मुल्यांकन सेवा शुल्क प्रती हजार १ का दरले">सम्पत्ती मुल्यांकन सेवा शुल्क प्रती हजार १ का दरले</option>
                                <option value="सम्पत्ती मुल्यांकन सेवा शुल्क ५ लाख देखी १० लाख सम्म">सम्पत्ती मुल्यांकन सेवा शुल्क ५ लाख देखी १० लाख सम्म</option>
                                <option value="सवारी साधन पार्किङ्घ शुल्क">सवारी साधन पार्किङ्घ शुल्क</option>
                                <option value="नक्सा पास दस्तुर (वर्ग फिटका आधारमा)">नक्सा पास दस्तुर (वर्ग फिटका आधारमा)</option>
                                <option value="घर नक्सा पास किताव">घर नक्सा पास किताव</option>
                                <option value="नक्सा प्रतिलिपि">नक्सा प्रतिलिपि</option>
                                <option value="नक्सा निवेदन">नक्सा निवेदन</option>
                                <option value="सटर भएका घरको हकमा ">सटर भएका घरको हकमा </option>
                                <option value="घरनक्सा अभिलेख गर्दा मापदण्ड विपरित झ्याल, ढोका, वरन्डा भए">घरनक्सा अभिलेख गर्दा मापदण्ड विपरित झ्याल, ढोका, वरन्डा भए</option>
                                <option value="घर नक्सा नियमित">घर नक्सा नियमित</option>
                                <option value="नक्सा परिमार्जन ">नक्सा परिमार्जन </option>
                                <option value="नक्सा पास दस्तुर">नक्सा पास दस्तुर</option>
                                <option value="घर निर्माण सम्पन्न">घर निर्माण सम्पन्न</option>
                                <option value="नक्सा नविकरण">नक्सा नविकरण</option>
                                <option value="नक्सा सेवा शुल्क">नक्सा सेवा शुल्क</option>
                                <option value="टहरा निर्माण भएको प्रमाणित">टहरा निर्माण भएको प्रमाणित</option>
                                <option value="साधारण नक्सा पास दस्तुर">साधारण नक्सा पास दस्तुर</option>
                                <option value="व्यापारिक, उद्योग">व्यापारिक, उद्योग</option>
                                <option value="घर नक्साको फिल्ड रेखाङ्कन तथा बिथ लगत नगरपालिकाबाट गराएमा">घर नक्साको फिल्ड रेखाङ्कन तथा बिथ लगत नगरपालिकाबाट गराएमा</option>
                                <option value="कम्पाउण्ड वाल प्रति रनिङ्ग फिट">कम्पाउण्ड वाल प्रति रनिङ्ग फिट</option>
                                <option value="घरको मोहडा परिवर्तन">घरको मोहडा परिवर्तन</option>
                                <option value="स्वीकृती विना भवन निर्माण कार्य गरेमा">स्वीकृती विना भवन निर्माण कार्य गरेमा</option>
                                <option value="घर नक्सा नियमित ">घर नक्सा नियमित </option>
                                <option value="घरनक्सा अभिलेख ">घरनक्सा अभिलेख </option>
                                <option value="नक्सा नामसारी">नक्सा नामसारी</option>
                                <option value="नक्सा नामसारी ३ पुस्ते भित्र ">नक्सा नामसारी ३ पुस्ते भित्र </option>
                                <option value="डिलरसिप सिफारिस प्रति सिफारिस">डिलरसिप सिफारिस प्रति सिफारिस</option>
                                <option value="घरबाटो सिफारिस">घरबाटो सिफारिस</option>
                                <option value="अन्य सिफारिस">अन्य सिफारिस</option>
                                <option value="उद्योग धारा विजुली जडान सिफारिस प्रति सिफारिस">उद्योग धारा विजुली जडान सिफारिस प्रति सिफारिस</option>
                                <option value="चारकिल्ला प्रमाणित">चारकिल्ला प्रमाणित</option>
                                <option value="नाम थर संसोधन प्रति सिफारिस">नाम थर संसोधन प्रति सिफारिस</option>
                                <option value="मोहि लगत कट्टा प्रति आना अन्यको हकमा">मोहि लगत कट्टा प्रति आना अन्यको हकमा</option>
                                <option value="विर्ता जग्गा दर्ता÷नामसारी प्रति धुर ">विर्ता जग्गा दर्ता÷नामसारी प्रति धुर </option>
                                <option value="वसोवास प्रमाणित दस्तुर">वसोवास प्रमाणित दस्तुर</option>
                                <option value="व्यवसाय ठाउंसारी">व्यवसाय ठाउंसारी</option>
                                <option value="व्यवसाय वन्द सिफारिस">व्यवसाय वन्द सिफारिस</option>
                                <option value="अविवाहित प्रमाणित सिफारिस  अंग्रेजी भाषमा">अविवाहित प्रमाणित सिफारिस  अंग्रेजी भाषमा</option>
                                <option value="घरजग्गा नामासारी सिफारिस">घरजग्गा नामासारी सिफारिस</option>
                                <option value="जन्म मिति प्रमाणित सिफारिस अंग्रेजी भाषमा">जन्म मिति प्रमाणित सिफारिस अंग्रेजी भाषमा</option>
                                <option value="आदिवासी जनजाती दलित आदि सम्वन्धि सिफारिस">आदिवासी जनजाती दलित आदि सम्वन्धि सिफारिस</option>
                                <option value="चलचित्र छायाँकन अन्य मुलुकको लागी">चलचित्र छायाँकन अन्य मुलुकको लागी</option>
                                <option value="घरेलु तथा साना उद्योग कार्यालयमा सिफारिस प्रति सिफारिस  साना घरेलु ७ लाख सम्मका">घरेलु तथा साना उद्योग कार्यालयमा<br> सिफारिस प्रति सिफारिस <br> साना घरेलु ७ लाख सम्मका</option>
                                <option value="अन्य प्रयोजनको लागि सेवा शुल्क">अन्य प्रयोजनको लागि सेवा शुल्क</option>
                                <option value="अन्य अंग्रेजी सिफारिस दस्तुर">अन्य अंग्रेजी सिफारिस दस्तुर</option>
                                <option value="जोत कायम र नामसारी प्रति धुर">जोत कायम र नामसारी प्रति धुर</option>
                                <option value="ज.ध. पुर्जामा घर जनाउने प्रति सिफारिस">ज.ध. पुर्जामा घर जनाउने प्रति सिफारिस</option>
                                <option value="सर्जमिन सूचना, मुचुल्क टाँस (व्यक्तिगतं प्रयोजनका लागि) ">सर्जमिन सूचना, मुचुल्क टाँस (व्यक्तिगतं प्रयोजनका लागि) </option>
                                <option value="तिनपुस्ते फोटो टाँस ंसिफारिस">तिनपुस्ते फोटो टाँस ंसिफारिस</option>
                                <option value="चलचित्र छायाँकन स्वदेशीको लागी ">चलचित्र छायाँकन स्वदेशीको लागी </option>
                                <option value="विदेशमा अध्ययन गर्न जाने विद्यार्थी प्रयोजनको लागि सेवा शुल्क">विदेशमा अध्ययन गर्न जाने विद्यार्थी प्रयोजनको लागि सेवा शुल्क</option>
                                <option value="अविवाहित प्रमाणित सिफारिस  नेपाली भाषामा">अविवाहित प्रमाणित सिफारिस  नेपाली भाषामा</option>
                                <option value="विकास निर्माण तथा उपभोक्ता समितिसंग सम्वन्धित सिफारिसहरु">विकास निर्माण तथा उपभोक्ता समितिसंग सम्वन्धित सिफारिसहरु</option>
                                <option value="घरेलु तथा साना उद्योग कार्यालयमा सिफारिस प्रति सिफारिस  कृषि÷पश">घरेलु तथा साना उद्योग कार्यालयमा सिफारिस प्रति सिफारिस  कृषि÷पश</option>
                                <option value="घरेलु तथा साना उद्योग कार्यालयमा सिफारिस प्रति सिफारिस मझौला ८ लाख देखि २० लाख सम्मक">घरेलु तथा साना उद्योग कार्यालयमा सिफारिस प्रति सिफारिस मझौला ८ लाख देखि २० लाख सम्मक</option>
                                <option value="धारा विजुली जडान सिफारिस प्रति सिफारिस">धारा विजुली जडान सिफारिस प्रति सिफारिस</option>
                                <option value="उद्योग चारकिल्ला प्रमाणित प्रति धुर">उद्योग चारकिल्ला प्रमाणित प्रति धुर</option>
                                <option value="आय स्रोत प्रमाणीत ( प्रति हजार रु १ का दरले)">आय स्रोत प्रमाणीत ( प्रति हजार रु १ का दरले)</option>
                                <option value="विदेशमा अध्ययन गर्न जाने विद्यार्थी (३० लाख सम्म)">विदेशमा अध्ययन गर्न जाने विद्यार्थी (३० लाख सम्म)</option>
                                <option value="विदेशमा अध्ययन गर्न जाने विद्यार्थी (५० लाख भन्दा माथी १ करोड सम्म)">विदेशमा अध्ययन गर्न जाने विद्यार्थी (५० लाख भन्दा माथी १ करोड सम्म)</option>
                                <option value="विदेशमा अध्ययन गर्न जाने विद्यार्थी (१ करोड भन्दा माथि)">विदेशमा अध्ययन गर्न जाने विद्यार्थी (१ करोड भन्दा माथि)</option>
                                <option value="लालपुर्जा प्रतिलिपी प्रति सिफारिस">लालपुर्जा प्रतिलिपी प्रति सिफारिस</option>
                                <option value="चारकिल्ला प्रमाणित (१० धुर घडेरी सम्म )">चारकिल्ला प्रमाणित (१० धुर घडेरी सम्म )</option>
                                <option value="चारकिल्ला प्रमाणित (१० धुर घडेरी भन्दा माथी )">चारकिल्ला प्रमाणित (१० धुर घडेरी भन्दा माथी )</option>
                                <option value="चारकिल्ला प्रमाणित (खेतीयोग्य जग्गाको हकमा ५ कठ्ठा सम्म)">चारकिल्ला प्रमाणित (खेतीयोग्य जग्गाको हकमा ५ कठ्ठा सम्म)</option>
                                <option value="चारकिल्ला प्रमाणित (खेतीयोग्य जग्गाको हकमा ५ कठ्ठा भन्दा माथी)">चारकिल्ला प्रमाणित (खेतीयोग्य जग्गाको हकमा ५ कठ्ठा भन्दा माथी)</option>
                                <option value="घरबाटो सिफारिस (कच्चि मोटर बाटो )">घरबाटो सिफारिस (कच्चि मोटर बाटो )</option>
                                <option value="घरबाटो सिफारिस (पक्की मोटर बाटो )">घरबाटो सिफारिस (पक्की मोटर बाटो )</option>
                                <option value="घरबाटो सिफारिस (कालोपत्रे सडक )">घरबाटो सिफारिस (कालोपत्रे सडक )</option>
                                <option value="जन्म मिति प्रमाणित सिफारिस नेपाली भाषामा">जन्म मिति प्रमाणित सिफारिस नेपाली भाषामा</option>
                                <option value="व्यक्तिगत घटना दर्ता">व्यक्तिगत घटना दर्ता</option>
                                <option value="नाता कायम दस्तुर नेपाली भाषामा">नाता कायम दस्तुर नेपाली भाषामा</option>
                                <option value="नाता कायम दस्तुर  अंग्रेजी भाषम">नाता कायम दस्तुर  अंग्रेजी भाषम</option>
                                <option value="नक्सा डिजाईनर सूचिकृत फारम">नक्सा डिजाईनर सूचिकृत फारम</option>
                                <option value="आय स्रोत प्रमाणीत दस्तुर अन्य प्रयोजनका लागि">आय स्रोत प्रमाणीत दस्तुर अन्य प्रयोजनका लागि</option>
                                <option value="अन्य प्रमाणित दस्तुर">अन्य प्रमाणित दस्तुर</option>
                                <option value="प्राविधिक भवन डिजाइन इजाजत पत्र नविकरण वार्षिक  “ख” वर्ग ">प्राविधिक भवन डिजाइन इजाजत पत्र नविकरण वार्षिक  “ख” वर्ग </option>
                                <option value="लालपुर्जा प्रतिलिपी प्रति सिफारिस">लालपुर्जा प्रतिलिपी प्रति सिफारिस</option>
                                <option value="अन्य दस्तुर ">अन्य दस्तुर </option>
                                <option value="सवारी साधन, मेशिनरी औजार, उपकरण दस्तुर">सवारी साधन, मेशिनरी औजार, उपकरण दस्तुर</option>
                                <option value="उजुरी रोक्का निवेदन">उजुरी रोक्का निवेदन</option>
                                <option value="प्राविधिक भवन डिजाइन इजाजत पत्र नविकरण वार्षिक “क” वर्ग ">प्राविधिक भवन डिजाइन इजाजत पत्र नविकरण वार्षिक “क” वर्ग </option>
                                <option value="प्रतिलिपी माग÷प्रमाणित दस्तुर ">प्रतिलिपी माग÷प्रमाणित दस्तुर </option>
                                <option value="जोत कायम र नामसारी ५ कठ्ठा सम्म">जोत कायम र नामसारी ५ कठ्ठा सम्म</option>
                                <option value="निवेदन">निवेदन</option>
                                <option value="अन्य कर">अन्य कर</option>
                                <option value="जोत कायम र नामसारी ५ कठ्ठा भन्दा माथी">जोत कायम र नामसारी ५ कठ्ठा भन्दा माथी</option>
                                <option value="ढुंगा तथा जल विहार अनुमती">ढुंगा तथा जल विहार अनुमती</option>
                                <option value="आय स्रोत प्रमाणीत दस्तुर विदेशमा अध्ययन गर्न जानेको लागि">आय स्रोत प्रमाणीत दस्तुर विदेशमा अध्ययन गर्न जानेको लागि</option>
                                <option value="प्राविधिक भवन डिजाइन इजाजत पत्र">प्राविधिक भवन डिजाइन इजाजत पत्र</option>
                                <option value="उ॰स गठन">उ॰स गठन</option>

                            </select>
                    </td>
                    <td><input type="number" value="1" name="rate[]"></td>
                    <td><input type="number" value="1" name="quantity[]"></td>
                    <td><input type="text" value="1"></td> 
                    <td><input type="text" value="1" name="kaifiyat[]"></td>

                </tr>
            `);
                    var num1 = document.getElementById("num1");
                    var num2 = document.getElementById("num2");
                    var result = document.getElementById("result");

                    num1.addEventListener("input", multiply);
                    num2.addEventListener("input", multiply);

                    function multiply() {
                        if (!isNaN(num1.value) && !isNaN(num2.value)) {
                            result.value = num1.value * num2.value;
                        } else {
                            result.value = "Inputs are not numbers";
                        }
                    }
                    var $disabledResults = $(".js-example-disabled-results");
                    $disabledResults.select2();
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
