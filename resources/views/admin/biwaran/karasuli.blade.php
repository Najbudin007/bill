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
    </div>

    <div class="row mt-3 px-1">
        <div class="col-12">
            {{-- nepali  --}}
            <div class="d-flex mt-4">
                <p class="form-title">
                    येश् आर्थिक वर्श 
                </p>
            </div>

            <div class="d-flex mt-4 w-100">
                <p class="pr-3" style="margin-right: 19px;font-size: 15px;font-weight: 500;min-width: 85px;">
                    जम्मा क्षेत्रफल
                </p>

                <div class="inp">
                    <label for="nname" class="mb-2">विघा</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>

                <div class="inp">
                    <label for="nname" class="mb-2">कठा</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="mb-2">कन्वा</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="mb-2">कन्वाइन</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="mb-2">रोपनि</label>
                    <input type="text" name="last_name_eng" id="nname">
                </div>
                <div class="inp">
                    <label for="nname" class="mb-2">आना</label>
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
