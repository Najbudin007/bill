<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Municipality</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.min.css"
        rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="navbars  text-white  ">
        <div class="logo ">
            <a href="/dashboard">
                <img src="{{ asset('images/sar.png') }}" alt="">
            </a>
            <p>
                इशनाथ
                नगरपालिका <br>
                <span>रौतहट, मधेश प्रदेश, नेपाल</span>
            </p>

        </div>
        <div class="nav-right ">
            <div>
                <p>आर्थिक बर्ष</p>
                <p>
                <p> @php
                    $year = date('Y');
                    $month = date('m');
                    $day = date('d');
                    $date = Bsdate::eng_to_nep($year, $month, $day);
                    echo $date['year'];
                @endphp
                    /
                    <?php
                    if ($date['year'] == '&#2408;&#2406;&#2413;&#2415;') {
                        echo '२०८०';
                    } else {
                        echo '२०८१';
                    }
                    ?></p>
            </div>
            <div>
                <p> @php

                    echo $date['date'] . ' ' . $date['nmonth'] . ' ' . $date['year'] . ',' . $date['day'];
                @endphp</p>
                <p>
                    {{ date('D M j , Y') }}
                </p>
            </div>
            <div>
                <p>{{ auth()->user()->name ?? '' }}</p>
                <p>इशनाथ नगरपालिका</p>
            </div>
            <div class="dropdown d-flex">
                <a class="drop-btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="ri-settings-5-line"></i> <i class="ri-arrow-down-s-line"></i> </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">पासवार्ड परिवर्तन गर्ने </a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item">बाहिर जाने</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex below-nav">
        <div class="sidebar">
            <div style="display: block;position: relative;">
                <ul>
                    <li>
                        <i class="ri-line-chart-line"></i>
                        <ul class="inner-ul">
                            <li><a href="#">कर सम्बन्धि विवरण</a></li>
                            <li><a href="{{ route('personalBivaran.index') }}">करदाताको विवरण</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="ri-bookmark-line"></i>
                        {{-- <ul class="inner-ul">
                            <li><a href="#">अन्य विवरण</a></li>
                            <li><a href="#">खारेज करदाताको विवरण</a></li>
                            <li><a href="#">सम्पति मुल्यांकन रोक्का / फुकुवा विवरण</a></li>
                            <li><a href="#">सिफारिस</a></li>
                        </ul> --}}
                    </li>
                    <li>
                        <i class="ri-bill-line"></i>
                        {{-- <ul class="inner-ul">
                            <li><a href="#">रसिद ब्यबस्थापन</a></li>
                        </ul> --}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="content mx-3 my-2 bg-white h-100 w-100">
            @yield('content')
        </div>
    </div>
    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
        integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.min.js"
        type="text/javascript"></script>

</body>

</html>
