@extends('admin.layouts.master')
@section('content')
    <div>
        <div class="form-top mb-2">
            <span>करदाताको विवरण</span>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="d-flex">
                    <div class="inps mr-3">
                        <label for="nname" class="required-label">कोड:</label>
                        <input type="text" id="nname">
                    </div>

                    <div class="inps mr-3">
                        <label for="nname">आन्तरिक संकेत नं:</label>
                        <input type="text" id="nname">
                    </div>
                    <div class="inps mr-3">
                        <label for="nname" class="required-label">पुरानो कोड:</label>
                        <input type="text" id="nname">
                    </div>
                    <div class="inps mr-3">
                        <label for="nname">स्थिति:</label>
                        <input type="date" id="nname">
                    </div>

                </div>
                <div class="d-flex mt-2">
                    <div class="inps mr-3">
                        <label for="nname" class="required-label">नाम:</label>
                        <input type="text" id="nname">
                    </div>

                    <div class="inps mr-3">
                        <label for="nname">Name:</label>
                        <input type="text" id="nname">
                    </div>
                    <div class="inps mr-3">
                        <label for="nname" class="required-label">करदाताको किसिम:</label>
                        <input type="text" id="nname">
                    </div>


                </div>
            </div>
            <div class="col-md-2"><button class=" btn btn-sm btn-success">Submit</button></div>
        </div>

        <div class="col-md-12 mt-4 buttons">
            <div class="flex">
              <a href="{{route('personalBivaran.create')}}"><button class="btn btn-success btn-sm"> <i class="ri-add-circle-line"></i> नया प्रबिस्टी</button></a>  
               <a href="{{route('personalBivaran.index')}}"><button class="btn btn-primary btn-sm"> <i class="ri-restart-fill"></i> पुर्न लोड</button></a> 
                <a href=""><button class="btn btn-sm btn-dark"><i class="ri-printer-line"></i> मुद्रन गर्नुहोस</button></a>
            </div>
        </div>
        <hr>

        <div class="tables mt-3">
            <table class="table table-striped">
                <tr class="theading">
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                    <th>sdf</th>
                </tr>
                <tr>
                    <td></td>
                    <td>asdas</td>
                    <td>asdas</td>
                    <td>asdas</td>
                    <td>asdas</td>
                    <td>asdas</td>
                    <td>asdas</td>
                    <td>asdas</td>
                    <td>asdas</td>
                    <td>asdas</td>
                    <td>asdas</td>
                    <td>asdas</td>
                    <td>asdas</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
