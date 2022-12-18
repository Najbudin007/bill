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
</head>

<body>
    <div class="navbars  text-white flex-fill">
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
    </div>
    <div class="d-flex below-nav">
        <div class="sidebar">
            <div style="display: block;position: relative;">
                <ul>
                    <li>
                        <i class="ri-line-chart-line"></i>
                        <ul class="inner-ul">
                            <li><a href="#">कर सम्बन्धि विवरण</a></li>
                            <li><a href="{{ route('personalBivaran.create') }}">करदाताको विवरण</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="ri-bookmark-line"></i>
                        <ul class="inner-ul">
                            <li><a href="#">अन्य विवरण</a></li>
                            <li><a href="#">खारेज करदाताको विवरण</a></li>
                            <li><a href="#">सम्पति मुल्यांकन रोक्का / फुकुवा विवरण</a></li>
                            <li><a href="#">सिफारिस</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="ri-bill-line"></i>
                        <ul class="inner-ul">
                            <li><a href="#">रसिद ब्यबस्थापन</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="ri-printer-line"></i>
                        <ul class="inner-ul">
                            <li><a href="#">प्रतिवेदन</a></li>
                            <li>
                                <div class="dropdown">
                                    <button class=" dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        करदाताको प्रतिवेदन
                                    </button>
                                    <ul class="dropdown-menu sidebar-dropdown-menu ">
                                        <li><a class="dropdown-item" href="#">वडागत आम्दानी विवरण</a></li>
                                        <li><a class="dropdown-item" href="#">साबिक र हालको आर्थिक वर्षको सम्पति
                                                करको
                                                तुलनात्मक प्रतिबेदन</a></li>
                                        <li><a class="dropdown-item" href="#">वडागत Data Entry को विवरण</a></li>
                                        <li><a class="dropdown-item" href="#">दुई लाख भन्दा माथिको करदाताहरुको
                                                विवरण</a></li>
                                        <li><a class="dropdown-item" href="#">करदाताको विस्तृत बिबरण</a></li>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class=" dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        संकलन केन्द्रले बुझाउनुपर्ने प्रतिबेदनहरु </button>
                                    <ul class="dropdown-menu sidebar-dropdown-menu ">
                                        <li><a class="dropdown-item" href="#">संकलन केन्द्रले बुझाउनुपर्ने
                                                प्रतिबेदनहरु</a></li>
                                        <li><a class="dropdown-item" href="#">रसिद नम्बर अनुसार आय संकलनको
                                                बिबरण</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">रसिद नम्बर अनुसार आय संकलनको बिबरण
                                                (नयाँ)</a></li>
                                        <li><a class="dropdown-item" href="#">संकलन केन्द्र अनुसारको सारांश
                                                प्रतिवेदन</a></li>
                                        <li><a class="dropdown-item" href="#">आय शीर्षक अनुसार आय संकलनको
                                                सारांश</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">आय शीर्षक अनुसारको विस्तृत आय
                                                विवरण</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">संकलन केन्द्रले बुझाउने
                                                प्रतिबेदन</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">दर रेट अनुसारको सारांश प्रतिबेदन</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">दर रेट अनुसारको आय संकलनको
                                                सारांश</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">रद्द भएका रसिदहरुको विवरण</a></li>
                                </div>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content mx-3 my-2 bg-white h-100 w-100">
            @yield('content')
        </div>
    </div>
</body>

</html>
