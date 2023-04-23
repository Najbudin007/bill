<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>बिल</title>
    <link rel="stylesheet" href="{{ asset('css/bill.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="container border ">
        <div class="header mt-5">
            <div class="logo">
                <img src="{{ asset('images/sar.png') }}" style="height: 100px;width:100px;obect-fit:cover;" alt="">
            </div>
            <div class="center">
                <p>इशनाथ नगरपालिका</p>
<<<<<<< HEAD
=======
                <p>नगर कार्यपालिका को कार्यालय </p>
>>>>>>> 81d96866a80cf3a6a2835014498cc41294f89ca4
                <p>रौतहट, मधेश प्रदेश, नेपाल</p>
                <p class="title">नगदी/प्रप्ती रसिद कार्यालय प्रती </p>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-5">
            <div>
                <p>बिधुतिय करोबार संकेत नम्बर : 1234567890oijhgfe567esrdfg775567</p>

                <p>रसिद न  : {{$bills['id']}}</p>

            </div>

            <div>
                <p> कर्यलया कोड न  : 23456789 </p>
                <p>आय वर्ष  : @php
                    $year = date('Y');
                    $month = date('m');
                    $day = date('d');
                    $date = Bsdate::eng_to_nep($bills['created_at']->year ?? $year, $bills['created_at']->month ?? $month, $bills['created_at']->day ?? $day);
                @endphp
                    /
                    <?php
                    if ($date['year'] == '&#2408;&#2406;&#2413;&#2415;') {
                        echo '२०८०';
                    } else {
                        echo '२०८१';
                    }
                    ?> </p>
                <p>मिती : @php

                    echo $date['date'] . ' ' . $date['nmonth'] . ' ' . $date['year'];
                @endphp </p>

            </div>
        </div>
        {{-- <center class="text-bold">(Jagga mapan ekaai adasda dasdasd asdasd asdasda dasdasd)</center> --}}
        <table class="table table-bordered mt-3">
            <tr>
                <th>क्र.स </th>
                <th style="width: 80px">संकेत नं :</th>
                <th style="width: 180px">विवरन </th>
                <th> बापत / प्रयोजन </th>
                <th>रकम रु  </th>
                <th style="width: 150px">प्रप्ती को मध्याम </th>
                <th style="width: 70px;height:50px">चेक वा अन्य नं:</th>
            </tr>
            @foreach ($bill as $key => $bil)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $bills['sanket'] }}</td>
                    <td>{{ $bil['kaifiyat'] }}</td>
                    <td>{{ $bil['dar_rate_srishak'] }}</td>
                    <td>{{ $bil['total'] }}</td>

                    <td>नगद</td>
                    <td></td>
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td></td>
                <td colspan="2">जम्मा :</td>
                <td>{{ $bills['total'] }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="7">कैफियत: {{ $bills['kaifiyat1'] }}</td>

            </tr>
        </table>
        <div class="mt-5">
            <div class="row">
                <div class="col-4">
                    <p>सही: </p>
                    <p>स्थानिय लेखा नं :</p>
                    <p>प्रीन्ट मिती : @php

                        echo $date['date'] . ' ' . $date['nmonth'] . ' ' . $date['year'];
                    @endphp </p>
                </div>
                <div class="col-4">
                    <p>बुझाउने को सही </p>
                    <p>नाम : {{ $bills['created_by'] }}</p>
                </div>
                <div class="col-4">
                    <p>दर्जा :</p>
                    <p>कर्मचारी सांकेत नं :</p>
                    <p>प्रीन्ट गर्ने को नाम : {{ $bills['created_by'] }}</p>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD

    <script>
        window.print();
    </script>
=======
    <script>

       
          window.print();
        
            </script>
>>>>>>> 81d96866a80cf3a6a2835014498cc41294f89ca4
</body>

</html>