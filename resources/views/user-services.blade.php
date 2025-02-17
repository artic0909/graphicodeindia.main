<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services- Graphicode India</title>


    <link rel="stylesheet" href="{{asset('./css/common.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/fixed.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/home-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/about-responsive.css')}}" />


    <!-- seo for services -->
    @foreach($services as $service)
    <meta name="description" content="{{ $service->title }}">
    <meta name="keywords" content="services, web development, web design, app development, app design, software company, software development, digital solutions, all kinds of services, logo design, graphic design, branding, brochure design service, business cards design, banners design compamny, Search Engine Optimization, seo optimize, seo optimize company, search engine optimize company, technical support company, tech support, tech support company, poster design company, graphicode india, mission, vision, GraphicodeIndia, Graphicode India, graphicodeindia.com, graphicodeindia.in, graphicodeindia.org, graphicodeindia.net">

    <meta property="og:title" content="{{ $service->title }}">
    <meta property="og:description" content="{{ $service->title }}">
    <meta property="og:url" content="{{ url('/services') }}">
    <meta name="twitter:title" content="Graphicode India">
    <meta name="twitter:description" content="{{ $service->title }}">
    @endforeach


    <!-- seo for fixed section -->
    @foreach($videos as $video)
    <meta name="description" content="{{ $video->desc }}">
    <meta name="keywords" content="services, web development, web design, app development, app design, software company, software development, digital solutions, all kinds of services, logo design, graphic design, branding, brochure design service, business cards design, banners design compamny, Search Engine Optimization, seo optimize, seo optimize company, search engine optimize company, technical support company, tech support, tech support company, poster design company, graphicode india, mission, vision, GraphicodeIndia, Graphicode India, graphicodeindia.com, graphicodeindia.in, graphicodeindia.org, graphicodeindia.net, welcome to graphicode india">

    <meta property="og:description" content="{{ $video->desc }}">
    <meta property="og:url" content="{{ url('/services') }}">
    <meta name="twitter:title" content="Graphicode India">
    <meta name="twitter:description" content="{{ $video->desc }}">
    <meta name="twitter:email" content="{{ $video->email }}">
    <meta name="twitter:phone" content="{{ $video->contact }}">
    @endforeach



    <!-- seo for specialization-->
    @foreach($spInfo as $info)
    <meta name="description" content="{{ $info->title }}">
    <meta name="keywords" content="services, web development, web design, app development, app design, software company, software development, digital solutions, all kinds of services, logo design, graphic design, branding, brochure design service, business cards design, banners design compamny, Search Engine Optimization, seo optimize, seo optimize company, search engine optimize company, technical support company, tech support, tech support company, poster design company, graphicode india, mission, vision, GraphicodeIndia, Graphicode India, graphicodeindia.com, graphicodeindia.in, graphicodeindia.org, graphicodeindia.net, welcome to graphicode india">

    <meta property="og:title" content="{{ $info->title }}">
    <meta property="og:description" content="{{ $info->title }}">
    <meta property="og:url" content="{{ url('/services') }}">
    <meta name="twitter:title" content="{{ $info->title }}">
    <meta name="twitter:description" content="{{ $info->title }}">
    @endforeach


    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon"> -->

</head>

<body>
    <!-- Loader Start===================================================================== -->
    <div class="loader-container">
        <div class="loader"></div>
    </div>
    <!-- Loader End===================================================================== -->

    <!-- Main Contrainer Start=========================================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-12">





                <!-- Navbar Start===================================================-->
                <nav class="navbar navbar-expand-lg navbar-light bg-white navbar_container shadow border p-3">
                    <div class="container">
                        <a class="navbar-brand d-flex align-items-center" href="/">
                            <img src="{{ asset('./img/logo.png') }}" alt="Graphicode India Logo" class="me-2 nav-logo" height="32" />
                            <span class="fw-bold fs-4 clr-bl">Graphicode</span>&nbsp;
                            <span class="fw-bold fs-4 clr-org"> India</span>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarDefault">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2 align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center text-secondary" aria-current="page"
                                        href="/"><img class="nav-img" src="{{asset('./icon/home.png')}}" width="19"
                                            alt="" />&nbsp;<span>Home</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page"
                                        href="/about"><img class="nav-img" src="{{asset('./icon/about.png')}}" width="19"
                                            alt="" />&nbsp;<span>About</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" id="active-nav"
                                        href="/services"><img class="nav-img" src="{{asset('./icon/services.png')}}" width="22"
                                            alt="" />&nbsp;<span>Services</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page"
                                        href="/projects"><img class="nav-img" src="{{asset('./icon/projects.png')}}" width="18"
                                            alt="" />&nbsp;<span>Projects</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page"
                                        href="/blogs"><img class="nav-img" src="{{asset('./icon/blogs.png')}}" width="20"
                                            alt="" />&nbsp;<span>Blogs</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold hide inner-items-center" aria-current="page"
                                        href="/contact"><img class="nav-img" src="{{asset('./icon/contactus.png')}}" width="23"
                                            alt="" />&nbsp;<span>Contact</span></a>
                                </li>

                                <li class="nav-item btn-org">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page"
                                        href="mailto:">Let's Talk &nbsp;
                                        <img class="nav-img hide" src="{{asset('./icon/arrow-talk.png')}}" width="15" alt="" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End======================================================-->







                <!-- Service + Video start========================================================================================== -->
                <div class="row service2-row">









                    <!-- Services Section Start======================================================-->
                    <section class="main-section col-8 mt-4">
                        <div class="shadow border p-4">
                            <div>
                                <!-- Title Section -->
                                <p class="fw-bold fs-3">
                                    <span class="fs-3">Services We <span class="clr-org">Offered</span></span>
                                </p>

                                <!-- Short Intro Section -->
                                <p class="fs-6" style="text-align: justify; opacity: 0.75">
                                    <strong>Bringing Your Ideas to Life – Unlock the Potential of
                                        Your Vision with Graphicode India's Expert Design and
                                        Development Services!🚀🖥️</strong>
                                </p>

                                <!-- Services============================ -->
                                <div class="infoo">
                                    <p class="fw-bold mt-5">
                                        <span class="fs-4 service-title-text">🌏 We Provide Services</span>
                                    </p>

                                    <div class="card-container p-3 gap-3">
                                        @foreach ($services as $service)
                                        <!-- card 1 -->
                                        <div class="p-4 pb-0" style="background: #cecdd891; border-radius: 15px">
                                            <div style="border-radius: 10px"
                                                class="img-container bg-white p-3 d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('storage/' . $service->image) }}" width="86" alt="" />
                                            </div>

                                            <div class="card-content mt-2">
                                                <p class="fw-bold fs-6 text-center">
                                                    {{ $service->title }}
                                                </p>
                                            </div>
                                        </div>
                                        @endforeach


                                    </div>
                                </div>

                                <!-- Specialized Fields start========================================================================================== -->
                                <section class="main-section col-12 mt-4" id="specialized">
                                    <div class="shadow border p-3">
                                        <div class="">
                                            <span class="fw-bold fs-4 service-title-text">🌏 Our Specialized Fields</span>
                                        </div>

                                        <div class="filter-buttons buttons2 mt-4">
                                            <div class="btnss-2 d-flex align-items-center flex-wrap gap-2">
                                                <button id="all" class="btn btn-danger2 all-btn">All</button>
                                                @foreach($categories as $category)
                                                <button id="{{$category->category}}" class="btn btn-danger hidee">
                                                    {{$category->category}}
                                                </button>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="filter-result-show sp-container row p-4 align-items-center gap-3 mt-2 mb-2">
                                            <!-- card 1 -->
                                            @foreach($spInfo as $info)
                                            <div class="p-2" data-category="{{ is_object($info->category) ? $info->category->category : $info->category }}"
                                                style="background: #cecdd891; border-radius: 10px">
                                                <div style="border-radius: 5px"
                                                    class="img-container bg-white p-2 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('storage/' . $info->logo) }}" width="40" alt="" />
                                                </div>

                                                <div class="card-content mt-2">
                                                    <p class="fw-bold text-center clr-bl m-0">{{$info->title}}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                                <!-- Specialized Fields End========================================================================================== -->
                            </div>
                        </div>
                    </section>
                    <!-- Services Section End======================================================-->










                    <!-- Fixed Section Start====================================================== -->
                    <section class="video-fixed-section col-4 mt-4">
                        <div class="shadow border p-3 video-fixed-section2 vfs-inner">
                            <div style="border-radius: 10px"
                                class="img-container bg-white pt-2 d-flex justify-content-center align-items-center">
                                <video src="./Video/demoo.mp4" autoplay muted loop class="border video-part img-fluid"
                                    style="border-radius: 15px"></video>
                            </div>

                            <div class="card-content mt-2 p-3">
                                <p class="fw-bold fs-4 text-start m-0 video-title">
                                    👋Welcome To <span class="clr-bl">Graphicode</span>
                                </p>
                                @foreach ($videos as $video)
                                <p class="fs-6 m-0 video-desc" style="text-align: justify">
                                    {{ $video->desc }}
                                </p>
                                @endforeach
                            </div>

                            <div class="buttons video-buttons p-3 d-flex justify-content-between">
                                @foreach($videos as $video)
                                <a href="https://wa.me/{{ $video->contact }}" class="btn btn-danger btns-1 fw-semibold p-3 px-4"><img src="{{asset('./icon/whatsapp.png')}}" width="20"
                                        alt="" />
                                    Whatsapp</a>
                                <a href="tel:{{ $video->contact }}" class="btn btn-org-01 btns-2 fw-semibold p-3 px-4"><img src="{{asset('./icon/call.png')}}" width="20"
                                        alt="" /> Make a
                                    Call</a>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <!-- Fixed Section End====================================================== -->









                </div>
                <!-- Service + Video End========================================================================================== -->








                <!-- =============================Footer Section Start====================================================================== -->
                <footer class="row mt-5 mb-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="footer-logo">
                                    <img src="{{asset('./img/logo.png')}}" width="40" alt="" />
                                    <p class="opacity-75 footer-text">
                                        <span class="clr-bl fs-5">©</span> 2025 All rights
                                        reserved by <span class="clr-org fs-4">♥</span> Graphicode
                                        India
                                    </p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="footer-links">
                                    <ul class="footer-ul d-flex justify-content-end align-items-center gap-3">
                                        <li>
                                            <a href="/privacy-policy" style="
                            text-decoration: none;
                            color: black;
                            opacity: 0.75;
                          ">Privacy <span class="hidee"> & Policy</span></a>
                                        </li>
                                        <li>
                                            <a href="/services" style="
                            text-decoration: none;
                            color: black;
                            opacity: 0.75;
                          ">Services</a>
                                        </li>
                                        <li>
                                            <a href="/contact" style="
                            text-decoration: none;
                            color: black;
                            opacity: 0.75;
                          ">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- =============================Footer Section End====================================================================== -->









                <!-- ====================================Fixed Shapes Start================================================================ -->
                <img src="{{asset('./icon/8967136.webp')}}" class="fixed-robot" alt="" style="
              position: fixed;
              top: 80px;
              width: 300px;
              left: 0;
              filter: drop-shadow(1px 1px 1px rgba(199, 201, 204, 0.747));
            " />
                <img src="{{asset('./icon/8992340.webp')}}" class="fixed-shape" alt=""
                    style="position: fixed; bottom: 80px; width: 150px; right: 0" />
                <!-- ====================================Fixed Shapes End================================================================ -->
            </div>
        </div>
    </div>
    <!-- Main Contrainer End=========================================================================== -->

    <!--JS -->
    <script src="{{asset('./js/loader.js')}}"></script>
    <script src="{{asset('./js/filter.js')}}"></script>
</body>

</html>