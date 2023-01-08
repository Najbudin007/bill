<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill</title>
    <link rel="stylesheet" href="{{ asset('css/bill.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    @php
        $b = Session::get('msg');
        $bill = $b['bill'];
        $bills = $b['bills'];
    @endphp
    <div class="container border ">
        <div class="header ">
            <div class="logo">
                <img src="{{ asset('images/sar.png') }}" alt="">
            </div>
            <div class="center">
                <p>इशनाथ नगरपालिका</p>
                <p>इशनाथ नगरपालिका</p>
                <p>रौतहट, मधेश प्रदेश, नेपाल</p>
                <p class="title">Wealth and land bill (asdasd dasd)</p>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
            <div>
                <p>Bidhutiya kar ko sanket num: 1234567890oijhgfe567esrdfg775567</p>

                <p>rasid no : 123</p>

            </div>
            <div>
                <p>karyalaya code num : 23456789 </p>
                <p>aaya barsha : @php
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
                <p>miti : @php

                    echo $date['date'] . ' ' . $date['nmonth'] . ' ' . $date['year'];
                @endphp </p>

            </div>
        </div>
        <center class="text-bold">(Jagga mapan ekaai adasda dasdasd asdasd asdasda dasdasd)</center>
        <table class="table table-bordered mt-3">
            <tr>
                <th>S.N</th>
                <th style="width: 170px">Sanket Number</th>
                <th>biwaran</th>
                <th>prayojan</th>
                <th>rakam</th>
                <th style="width: 150px">praptiko madhyam</th>
                <th style="width: 150px">check wa aanya num</th>
            </tr>
            @foreach ($bill as $key => $bil)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $bills['sanket'] }}</td>
                    <td>{{ $bil['kaifiyat'] }}</td>
                    <td>{{ $bil['dar_rate_srishak'] }}</td>
                    <td>{{ $bil['total'] }}</td>

                    <td>nagad</td>
                    <td></td>
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td></td>
                <td colspan="2">total:</td>
                <td>{{ $bills['total'] }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="7">Kaifiyat: {{ $bills['kaifiyat1'] }}</td>

            </tr>
        </table>
        <div class="mt-5">
            <div class="row">
                <div class="col-4">
                    <p>sahi: </p>
                    <p>sahi: staniya lekha num </p>
                    <p>print miti: @php

                        echo $date['date'] . ' ' . $date['nmonth'] . ' ' . $date['year'];
                    @endphp </p>
                </div>
                <div class="col-4">
                    <p>bujaune ko sahi</p>
                    <p>name: {{ auth()->user()->name }}</p>
                </div>
                <div class="col-4">
                    <p>darja:</p>
                    <p>darja:karmachari sanket num:</p>
                    <p>print garne ko name: {{ $bills['created_by'] }}</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
