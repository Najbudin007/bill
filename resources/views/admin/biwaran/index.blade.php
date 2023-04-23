@extends('admin.layouts.master')
@section('content')
    <div>

        <div class="form-top mb-2">
            <span>करदाताको विवरण</span>
        </div>
        <form action="{{ route('loadDataBetweenDate') }}" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="col-md-10">
                    <div class="d-flex">
                        <div class="inps mr-3">
                            <label for="nname" class="required-label">नाम:</label>
                            <input type="text" id="nname" class="px-2" value="{{ auth()->user()->name }}" disabled>
                        </div>

                        <div class="inps mr-3">
                            <label for="nname">सुरु मिती:</label>
                            <input type="text"  id="nepali-datepicker" name="start_date" placeholder="मिती छान्नुहोस...">
                          
                        </div>

                        <div class="inps mr-3">
                            <label for="nname">समाप्त मिती :</label>
                            <input type="text"  id="nepali-datepicker1" name="end_date" placeholder="मिती छान्नुहोस...">
                        </div>
                        <button class=" btn btn-sm btn-success">सुरक्षित गर्न्हुस </button>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </form>
        <div class="col-md-12 mt-4 buttons">
            <div class="flex">
                <a href="{{ route('personalBivaran.create') }}"><button class="btn btn-success btn-sm"> <i
                            class="ri-add-circle-line"></i> नया प्रबिस्टी</button></a>
                <a href="{{ route('personalBiwaranLoad') }}"><button class="btn btn-primary btn-sm"> <i
                            class="ri-restart-fill"></i> पुर्न लोड</button></a>
                <a href=""><button class="btn btn-sm btn-dark"><i class="ri-printer-line"></i> मुद्रन
                        गर्नुहोस</button></a>
            </div>
        </div>
        <hr>

        <div class="tables mt-3">
            <table class="table table-striped">
                <tr class="theading">
                    <th>क्र.स.</th>
                    <th>रसिद नं.</th>
                    <th>मिति</th>
                    <th>करदाता संकेत</th>
                    <th>नाम</th>
                    <th>ठेगाना</th>
                    <th>नगद रकम</th>
                    <th>जम्मा रकम</th>
                    <th>काउन्टर</th>
                    <th>सिफारिस नं</th>
                    <th>कैफियत</th>
                  
                </tr>
                @if (isset($datas))
                    @foreach ($datas as $key => $data)
                        <tr>
                            <td><a href="{{ route('getBill', $data->id) }}"><button
                                        class="btn btn-sm btn-success">Bill</button></a></td>
                            <td>{{$data->bill_number}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->kar_data_sanket}}</td>
                            <td>{{$data->fullname}}</td>
                            <td>{{$data->municipality}}</td>
                            <td>{{$data->nagad}}</td>
                            <td>{{$data->total}}</td>
                            <td>{{$data->counter}}</td>
                            <td>{{$data->kaifiyat1}}</td>
                            <td>{{$data->kaifiyat1}}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>

    @section('scripts')
    <script type="text/javascript">
        window.onload = function() {
            var mainInput = document.getElementById("nepali-datepicker");
            mainInput.nepaliDatePicker();
        };
        window.onload = function() {
            var mainInput = document.getElementById("nepali-datepicker1");
            mainInput.nepaliDatePicker();
        };
    </script>
    @endsection
@endsection
