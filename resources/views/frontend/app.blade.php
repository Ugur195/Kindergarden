<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"/>
    <link rel="icon" href="{{asset('frontendCssJs/asset/images/bagcamiz icon.png')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="{{asset('frontendCssJs/asset/scss/style.css')}}"/>
    @yield('css')
    <title>Bağçamız</title>
</head>

<body>

<div id="proqres">
    <span id="progress_item">&#x1F815;</span>
</div>
<nav>
    <div class="container ">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-3 col-2 col-md-2">
                <a href="{{url('/')}}"><img src="{{asset('frontendCssJs/asset/images/bagcamiz logo-03 1.png')}}" alt=""/></a>
            </div>
            <div class="col-lg-9 col-9 " id="response_class">
                <ul class="nav-menu">

                    <li class="nav-item">
                        <a href="{{url('about_us')}}" class="nav-link">Haqqımızda</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('contact_us')}}" class=" nav-link">Əlaqə</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('frontend.vacancies')}}" class=" nav-link">Vakansiya</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('frontend.kindergardens')}}" class=" nav-link">Bağçalarımız</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('frontend.workers')}}" class="nav-link">Xıdmətlərimiz</a>
                    </li>

                    <li data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a href="http://"></a><img src="{{asset('frontendCssJs/asset/images/Vector.png')}}" alt=""
                                                   class="vector"/>
                    </li>

                </ul>
                <div class="navigation">
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


@yield('content')

<footer>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-2">
                <img id="bagca_footer" src="{{asset('frontendCssJs/asset/images/bagcamiz logo-03 1.png')}}" alt=""/>
            </div>
            <div class="col-lg-2 col-sm-6 col-6">
                <div class="footer_link">
                    <ul>
                        <li><a href="haqqimizda.html">Haqqımızda</a></li>
                        <li><a href="bagca_info.html">Bağçalarımız</a></li>
                        <li><a href="">Xidmətlərimiz</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-6">
                <div class="footer_link">
                    <ul>
                        <li><a href="geyim_magazaları.html">Magaza</a></li>
                        <li><a href="eylence_merkezi.html">Əyləncə</a></li>
                        <li><a href="">Xidmətlərimiz</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-6">
                <div class="registration">
                    <p>Qeydiyyat</p>
                    <p>Daxil olun</p>
                    <p>Hesab yaradın</p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-6">
                <div class="vakansiya">
                    <p>Vakansiya</p>
                    <p>İş axtarıram</p>
                    <p>İşçi axtarıram</p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="position">
                    <form>
                        <input type="text" placeholder="Email göndər"/>

                        <div>
                            <img src="{{asset('frontendCssJs/asset/images/ox.png')}}" alt=""/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="social_icon">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-lg-4 mt-5 col-sm-6 col-6">
                    <p>© 2021 Bagcam.az Bütün hüquqlar qorunur</p>
                </div>
                <div class="col-lg-8 col-sm-6 mt-5 col-6">
                    <a href="http://"><img src="{{asset('frontendCssJs/asset/images/Vector (2).png')}}" alt=""/></a>
                    <a href="http://"><img src="{{asset('frontendCssJs/asset/images/Vector (3).png')}}" alt=""/></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="loader">
    <img src="https://media.tenor.com/guhB4PpjrmUAAAAC/loading-loading-gif.gif" alt=""/>
</div>
<div id="modal">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container justify-content: center;">
                        <div class="row justify-content: center;">
                            <h2>Mənim hesabım</h2>
                            <div class="col-lg-7 col-sm-12">
                                <div class="modal_form">
                                    <form>
                                        <h3>Qeydiyyatdan keç</h3>
                                        <input type="text" placeholder="Ad"/>
                                        <input type="text" placeholder="Soyad"/>
                                        <input type="text" placeholder="E-mail"/>
                                        <input type="text" placeholder="Şifrə"/>
                                        <input type="text" placeholder="Mobile"/>
                                        <input type="text" placeholder="Ş\V-FİN kodunuzu qeyd edin"/>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5 mt-5 col-sm-12">
                                <div class="left_item mt-5">
                                    <img src="{{asset('frontendCssJs/asset/images/image 53.png')}}" alt=""/>
                                    <button id="js_tag">Qeydiyyatdan keç</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="{{asset('frontendCssJs/asset/js/app.js')}}"></script>
<script src="{{asset('frontendCssJs/asset/js/Mock.js?v='.time())}}"></script>
<script src="{{asset('frontendCssJs/asset/js/maskinput.js?v='.time())}}"></script>
@yield('js')
</body>
</html>
