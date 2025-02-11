<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Page</title>

    <link rel="stylesheet" href="{{asset('./css/common.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('./css/fixed.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/home-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('./responsive/about-responsive.css')}}" />


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
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" id="active-nav"
                                        href="/about"><img class="nav-img" src="{{asset('./icon/about.png')}}" width="19"
                                            alt="" />&nbsp;<span>About</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page"
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
                                    <span class="fs-2">Hi,</span>
                                    <span>
                                        This Is <span class="clr-bl">Graphicode</span>
                                        <span class="clr-org">India</span></span>
                                </p>

                                <!-- Short Intro Section -->
                                @foreach ($abouts as $about)
                                <p class="fs-6" style="text-align: justify; opacity: 0.75">
                                    {!! $about->desc_one !!}
                                </p>
                                @endforeach

                                <!-- Numbers Section -->
                                <div class="numbers-containerr mt-5 mb-5" style="display: flex; align-items: center; justify-content: space-between; ">
                                    <div class="">
                                        <div class="d-flex align-items-center gap-3">
                                            @foreach ($nums as $num)
                                            <div class="numbers-items">
                                                <p class="m-0 fw-bold fs-1">{{ $num->n_num }}+</p>
                                                <p class="m-0 fw-semibold opacity-75">
                                                    {{ $num->n_title }}
                                                </p>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="btn-conatiner d-flex justify-content-end align-items-center">
                                        @foreach ($videos as $video)
                                        <a href="mailto:{{$video->contact}}" class="btn btn-danger fw-semibold">
                                            <p class="m-0 av-btn">
                                                <img src="./img/24-7.gif" width="40" alt="" class="rounded" />
                                                <span>Available for Collaboration</span>
                                            </p>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Information Section -->
                                <div class="d-flex flex-column gap-3 mt-4">
                                    @foreach ($abouts as $about)
                                    <p style="text-align: justify; opacity: 0.75" class="fs-9 mt-4">
                                        {!! $about->desc_two !!}
                                    </p>

                                    <p style="text-align: justify; opacity: 0.75" class="fs-9 mt-4">
                                        {{!! $about->desc_three !!}}
                                    </p>
                                    @endforeach
                                </div>

                                <!-- Partners Section -->
                                <div class="row">
                                    <section class="main-section col-12 mt-4">
                                        <div class="shadow border p-3">
                                            <div class="inner-items-center">
                                                <span class="fw-bold fs-4 col-6 service-title-text">Our Partners</span>

                                            </div>

                                            <div class="scr" style="overflow: hidden">
                                                <div class="partners-container mt-2 mb-2 d-flex align-items-center gap-3">
                                                    @foreach($partners as $partner)
                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="{{ asset('storage/' . $partner->partner_logo) }}" alt="" width="120" style="height: auto; max-height: 80px; object-fit: contain;" />
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <!-- Specialized Fields start========================================================================================== -->
                                <section class="main-section col-12 mt-4">
                                    <div class="shadow border p-3">
                                        <div class="inner-items-center">
                                            <span class="fw-bold fs-4 col-6 service-title-text">Our Specialized
                                                Fields</span>
                                            <a href="/services/#specialized" class="fw-bold fs-6 col-6 clr-bl text-end" style="cursor: pointer; text-decoration: none">
                                                See All
                                                <img src="./icon/arrow.png" alt="" width="20" />
                                            </a>
                                        </div>

                                        <div class="sp-container p-4 align-items-center gap-3 mt-2 mb-2">

                                            <!-- card 1 -->
                                            @foreach ($spInfo as $info)
                                            <div class="p-2" style="background: #cecdd891; border-radius: 10px">
                                                <div style="border-radius: 5px"
                                                    class="img-container bg-white p-2 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('storage/' . $info->logo) }}" width="40" alt="" />
                                                </div>

                                                <div class="card-content mt-2">
                                                    <p class="fw-bold text-center clr-bl m-0">{{ $info->title }}</p>
                                                </div>
                                            </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </section>
                                <!-- Specialized Fields End========================================================================================== -->

                                <!-- Projects start========================================================================================== -->
                                <section class="main-section col-12 mt-4">
                                    <div class="shadow border p-3">
                                        <div class="inner-items-center">
                                            <span class="fw-bold fs-4 col-6 service-title-text">Our Projects</span>
                                            <span class="fw-bold fs-6 col-6 clr-bl text-end" style="cursor: pointer">
                                                See All
                                                <img src="./icon/arrow.png" alt="" width="20" />
                                            </span>
                                        </div>

                                        <div class="projects-container mt-2 mb-2">
                                            <!-- card 1 -->
                                            <div style="
                            overflow: hidden;
                            border-radius: 10px;
                            width: 100%;
                          ">
                                                <div style="
                              border-radius: 10px;
                              display: flex;
                              animation: scroll 2s ease-in-out infinite;
                            " class="img-scroll-container bg-white">
                                                    @foreach($projects as $project)
                                                    <img src="{{ asset('storage/' . $project->image) }}" class="image-fluid" style="width: 100%" alt="" />
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Projects End========================================================================================== -->

                                <!-- FAQ -->
                                <section class="main-section mt-4">
                                    <div class="shadow border p-3">
                                        <div class="text-end faq-title">
                                            <span class="fw-bold fs-4 service-title-text">Frequently Asked
                                                Questions</span>
                                        </div>

                                        <div class="accordian-main gap-3 mt-2" style="padding: 16px;">
                                            <div style="background: #cecdd891; border-radius: 15px; padding: 16px;">
                                                <!-- Accordions -->
                                                <div class="accordion" id="accordionExample">


                                                    @foreach($faqs as $index => $faq)
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                                            <button class="accordion-button collapsed fs-6 fw-semibold" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                                                aria-expanded="false" aria-controls="collapse{{ $index }}">
                                                                {{ $faq->question }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                                            aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong>{{ $faq->answer }}</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
    <script src="{{asset('./js/scroll-project.js')}}"></script>
    <script src="{{asset('./js/scroll-partner.js')}}"></script>
</body>

</html>