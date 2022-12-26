@extends('admin.layouts.master')
@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif

    <div class="p-form">
        <div class="form-top mb-2">
            <span>कर्तिर्नु पर्ने बिबरन  </span>
            <span>सम्पति कर अशुलि </span>
        </div>
   

    <div class="row mt-3 px-1">
        <div class="col-12">
            {{-- nepali  --}}
            <div class="d-flex mt-4">
                <p class="form-title">
                    येश् आर्थिक वर्श 
                </p>
            </div>

            <div class="d-flex mt-3 w-100">
                <div class="inp">
                    <label for="nname">सम्पती कर </label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp">
                    <label for="nname">द्वन्द/जरिवना</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">छुट/मिनहा  </label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">बिवरन रकम </label>
                    <input type="text" name="last_name_eng" placeholder="0" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">अन्य थप </label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">जम्मा रकम </label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname">तिरेको रकम  </label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
            </div>

            <div class="d-flex mt-3 w-100">
                <div class="inps">
                    <label for="nname">तिर्नुपर्ने बाकी रकम</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
            </div>
            
        </div>

        <div class="d-flex mt-4 w-100">
            <div class="col-12">
                {{-- nepali  --}}
                <div class="d-flex mt-4">
                    <p class="form-title">
                        बक्व्योता रकम 
                    </p>
                </div>
    
                <div class="d-flex mt-3 w-100">
                    <div class="inps">
                        <label for="nname">आर्थिक वर्श</label>
                        <input type="text" name="last_name_eng" id="nname">
                    </div>
    
                    <div class="inps">
                        <label for="nname">देखी</label>
                        <input type="text" name="last_name_eng" id="nname">
                    </div>
                    <div class="inps">
                        <label for="nname">सम्म को बक्व्योता रकम</label>
                        <input type="text" name="last_name_eng" id="nname">
                    </div>
                    <div class="inps">
                        <label for="nname">बक्व्योता तिरेको </label>
                        <input type="text" name="last_name_eng" placeholder="0" id="nname">
                    </div>

                </div>
    
                <div class="d-flex mt-3 w-100">
                    <div class="inps">
                        <label for="nname">बक्व्योता थप </label>
                        <input type="text" name="last_name_eng" id="nname">
                    </div>
                    <div class="inps">
                        <label for="nname">द्वन्द/जरिवना</label>
                        <input type="text" name="last_name_eng" id="nname">
                    </div>
                    <div class="inps">
                        <label for="nname">तिर्नुपर्ने बाकी रकम</label>
                        <input type="text" name="last_name_eng" id="nname">
                    </div>
                    <div class="inps">
                        <label for="nname">तिर्नुपर्ने बाकी रकम</label>
                        <input type="text" name="last_name_eng" id="nname">
                    </div>
                </div>
                <div class="d-flex mt-3 w-100">
                    <div class="inps">
                        <label for="nname">येश आ.बा सम्म तिर्न बकी रकम</label>
                        <input type="text" name="last_name_eng" id="nname">
                    </div>
                    <div class="inps">
                        <label for="nname">भुक्तनी को मध्यम</label>
                        <select id="" name="proffession"">
                            <option name="proffession" value="कृपया छान्नुहोस..." disabled selected>कृपया छान्नुहोस...</option>
                            <option name="proffession" value="हिन्दु">नगद</option>
                            <option name="proffession" value="बौद्ध">चेक</option>
                            <option name="proffession" value="बौद्ध">इसेवा वा खल्ती</option>
                        </select>
                    </div>
                    <div class="inps">
                        <label for="nname">तिरेको मिती</label>
                        <input type="date" name="last_name_eng" id="nname">
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container">
            <div class="col-md-12 text-center mt-5">
                <button type="submit" class="btn btn-primary btn">कर अशुली </button>
            </div>
        </div>

    </div>

    </div>
@endsection
