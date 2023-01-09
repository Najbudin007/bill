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
                            <label for="nname" class="required-label">Name:</label>
                            <input type="text" id="nname" class="px-2" value="{{ auth()->user()->name }}" disabled>
                        </div>

                        <div class="inps mr-3">
                            <label for="nname">Start Date:</label>
                            <input type="date" id="nname" name="start_date">
                        </div>

                        <div class="inps mr-3">
                            <label for="nname">End Date:</label>
                            <input type="date" id="nname" name="end_date">
                        </div>
                        <button class=" btn btn-sm btn-success">Submit</button>
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
                    {{-- <th>सिफारिस नं</th> --}}
                    <th>कैफियत</th>
                  
                </tr>
                @if (isset($datas))
                    @foreach ($datas as $key => $data)
                        <tr>
                            <td><a href="{{ route('getBill', $data->id) }}"><button
                                        class="btn btn-sm btn-success">Bill</button></a></td>
                            <td>{{ $key + 1 }}</td>          
                            <td>{{$data->bill_number}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->kar_data_sanket}}</td>
                            <td>{{$data->fullname}}</td>
                            <td>{{$data->municipality}}</td>
                            <td>{{$data->total}}</td>
                            <td>{{$data->total}}</td>
                            <td>{{$data->counter}}</td>
                            {{-- <td>asdas</td> --}}
                            <td>{{$data->kaifiyat}}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection
