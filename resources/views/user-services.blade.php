<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services Page</title>


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
                                        <!-- card 1 -->
                                        <div class="p-4 pb-0" style="background: #cecdd891; border-radius: 15px">
                                            <div style="border-radius: 10px"
                                                class="img-container bg-white p-3 d-flex justify-content-center align-items-center">
                                                <img src="./icon/website.png" width="86" alt="" />
                                            </div>

                                            <div class="card-content mt-2">
                                                <p class="fw-bold fs-6 text-center">
                                                    Website Development
                                                </p>
                                            </div>
                                        </div>

                                        <!-- card 2 -->
                                        <div class="p-4 pb-0" style="background: #cecdd891; border-radius: 15px">
                                            <div style="border-radius: 10px"
                                                class="img-container bg-white p-3 d-flex justify-content-center align-items-center">
                                                <img src="./icon/appdevelopment.png" width="86" alt="" />
                                            </div>

                                            <div class="card-content mt-2">
                                                <p class="fw-bold fs-6 text-center">
                                                    App Development
                                                </p>
                                            </div>
                                        </div>

                                        <!-- card 3 -->
                                        <div class="p-4 pb-0" style="background: #cecdd891; border-radius: 15px">
                                            <div style="border-radius: 10px"
                                                class="img-container bg-white p-3 d-flex justify-content-center align-items-center">
                                                <img src="./icon/logode.png" width="86" alt="" />
                                            </div>

                                            <div class="card-content mt-2">
                                                <p class="fw-bold fs-6 text-center">
                                                    Brands Logo Design
                                                </p>
                                            </div>
                                        </div>

                                        <!-- card 4 -->
                                        <div class="p-4 pb-0" style="background: #cecdd891; border-radius: 15px">
                                            <div style="border-radius: 10px"
                                                class="img-container bg-white p-3 d-flex justify-content-center align-items-center">
                                                <img src="./icon/SEO.png" width="86" alt="" />
                                            </div>

                                            <div class="card-content mt-2">
                                                <p class="fw-bold fs-6 text-center">
                                                    Search Engine Optimization
                                                </p>
                                            </div>
                                        </div>

                                        <!-- card 4 -->
                                        <div class="p-4 pb-0" style="background: #cecdd891; border-radius: 15px">
                                            <div style="border-radius: 10px"
                                                class="img-container bg-white p-3 d-flex justify-content-center align-items-center">
                                                <img src="./icon/business-card.png" width="86" alt="" />
                                            </div>

                                            <div class="card-content mt-2">
                                                <p class="fw-bold fs-6 text-center">
                                                    Business Card Design
                                                </p>
                                            </div>
                                        </div>

                                        <!-- card 4 -->
                                        <div class="p-4 pb-0" style="background: #cecdd891; border-radius: 15px">
                                            <div style="border-radius: 10px"
                                                class="img-container bg-white p-3 d-flex justify-content-center align-items-center">
                                                <img src="./icon/video-edition.png" width="86" alt="" />
                                            </div>

                                            <div class="card-content mt-2">
                                                <p class="fw-bold fs-6 text-center">Video Editing</p>
                                            </div>
                                        </div>

                                        <!-- card 4 -->
                                        <div class="p-4 pb-0" style="background: #cecdd891; border-radius: 15px">
                                            <div style="border-radius: 10px"
                                                class="img-container bg-white p-3 d-flex justify-content-center align-items-center">
                                                <img src="./icon/social-media.png" width="86" alt="" />
                                            </div>

                                            <div class="card-content mt-2">
                                                <p class="fw-bold fs-6 text-center">
                                                    Content Marketing
                                                </p>
                                            </div>
                                        </div>

                                        <!-- card 4 -->
                                        <div class="p-4 pb-0" style="background: #cecdd891; border-radius: 15px">
                                            <div style="border-radius: 10px"
                                                class="img-container bg-white p-3 d-flex justify-content-center align-items-center">
                                                <img src="./icon/graphic-designer.png" width="86" alt="" />
                                            </div>

                                            <div class="card-content mt-2">
                                                <p class="fw-bold fs-6 text-center">Graphic Design</p>
                                            </div>
                                        </div>

                                        <!-- card 4 -->
                                        <!-- <div
                                        class="p-4 pb-0"
                                        style="background: #cecdd891; border-radius: 15px"
                                      >
                                        <div
                                          style="border-radius: 10px"
                                          class="img-container bg-white p-3 d-flex justify-content-center align-items-center"
                                        >
                                          <img src="./icon/poster.png" width="86" alt="" />
                                        </div>
                    
                                        <div class="card-content mt-2">
                                          <p class="fw-bold fs-6 text-center">
                                            Poster, Banner Design
                                          </p>
                                        </div>
                                      </div> -->
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
                                                <button id="webdev" class="btn btn-danger hidee">
                                                    Website Development
                                                </button>
                                                <button id="appdev" class="btn btn-danger hidee">
                                                    App Development
                                                </button>
                                                <button id="logod" class="btn btn-danger hidee">
                                                    Brands Logo Design
                                                </button>
                                                <button id="seo" class="btn btn-danger hidee">SEO</button>
                                                <button id="cardd" class="btn btn-danger hidee">
                                                    Business Card Design
                                                </button>
                                                <button id="videoedit" class="btn btn-danger hidee">
                                                    Video Editing
                                                </button>
                                                <button id="contentmark" class="btn btn-danger hidee">
                                                    Content Marketing
                                                </button>
                                                <button id="graphicd" class="btn btn-danger hidee">
                                                    Graphic Design
                                                </button>
                                            </div>
                                        </div>

                                        <div class="filter-result-show sp-container row p-4 align-items-center gap-3 mt-2 mb-2">
                                            <!-- card 1 -->
                                            <div class="p-2" data-category="webdev"
                                                style="background: #cecdd891; border-radius: 10px">
                                                <div style="border-radius: 5px"
                                                    class="img-container bg-white p-2 d-flex justify-content-center align-items-center">
                                                    <img src="./icon/figma.png" width="40" alt="" />
                                                </div>

                                                <div class="card-content mt-2">
                                                    <p class="fw-bold text-center clr-bl m-0">Figma</p>
                                                </div>
                                            </div>

                                            <div class="p-2" data-category="webdev"
                                                style="background: #cecdd891; border-radius: 10px">
                                                <div style="border-radius: 5px"
                                                    class="img-container bg-white p-2 d-flex justify-content-center align-items-center">
                                                    <img src="./icon/laravel.png" width="40" alt="" />
                                                </div>

                                                <div class="card-content mt-2">
                                                    <p class="fw-bold text-center clr-bl m-0">
                                                        Laravel
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="p-2" data-category="webdev"
                                                style="background: #cecdd891; border-radius: 10px">
                                                <div style="border-radius: 5px"
                                                    class="img-container bg-white p-2 d-flex justify-content-center align-items-center">
                                                    <img src="./icon/php.png" width="40" alt="" />
                                                </div>

                                                <div class="card-content mt-2">
                                                    <p class="fw-bold text-center clr-bl m-0">PHP</p>
                                                </div>
                                            </div>

                                            <div class="p-2" data-category="webdev"
                                                style="background: #cecdd891; border-radius: 10px">
                                                <div style="border-radius: 5px"
                                                    class="img-container bg-white p-2 d-flex justify-content-center align-items-center">
                                                    <img src="./icon/React.webp" width="40" alt="" />
                                                </div>

                                                <div class="card-content mt-2">
                                                    <p class="fw-bold text-center clr-bl m-0">
                                                        React JS
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="p-2" data-category="webdev"
                                                style="background: #cecdd891; border-radius: 10px">
                                                <div style="border-radius: 5px"
                                                    class="img-container bg-white p-2 d-flex justify-content-center align-items-center">
                                                    <img src="./icon/nodejs.png" width="40" alt="" />
                                                </div>

                                                <div class="card-content mt-2">
                                                    <p class="fw-bold text-center clr-bl m-0">
                                                        Node JS
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="p-2" data-category="graphicd"
                                                style="background: #cecdd891; border-radius: 10px">
                                                <div style="border-radius: 5px"
                                                    class="img-container bg-white p-2 d-flex justify-content-center align-items-center">
                                                    <img src="./icon/illustrator.png" width="40" alt="" />
                                                </div>

                                                <div class="card-content mt-2">
                                                    <p class="fw-bold text-center clr-bl m-0">AI</p>
                                                </div>
                                            </div>
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
                                <p class="fs-6 m-0 video-desc" style="text-align: justify">
                                    Graphicode India, established two years ago, is a trusted
                                    provider of innovative digital solutions. Our skilled team
                                    specializes in delivering custom software, creative design
                                    services, and IT support, ensuring client satisfaction and
                                    exceptional results.
                                </p>
                            </div>

                            <div class="buttons video-buttons p-3 d-flex justify-content-between">
                                <a href="" class="btn btn-danger btns-1 fw-semibold p-3 px-4"><img
                                        src="./icon/whatsapp.png" width="20" alt="" />
                                    Whatsapp</a>
                                <a href="" class="btn btn-org-01 btns-2 fw-semibold p-3 px-4"><img src="./icon/call.png"
                                        width="20" alt="" /> Make a
                                    Call</a>
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
                                    <img src="./img/logo.png" width="40" alt="" />
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
                                            <a href="#" style="
                            text-decoration: none;
                            color: black;
                            opacity: 0.75;
                          ">Privacy <span class="hidee"> & Policy</span></a>
                                        </li>
                                        <li>
                                            <a href="#" style="
                            text-decoration: none;
                            color: black;
                            opacity: 0.75;
                          ">Services</a>
                                        </li>
                                        <li>
                                            <a href="#" style="
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
                <img src="./icon/8967136.webp" class="fixed-robot" alt="" style="
              position: fixed;
              top: 80px;
              width: 300px;
              left: 0;
              filter: drop-shadow(1px 1px 1px rgba(199, 201, 204, 0.747));
            " />
                <img src="./icon/8992340.webp" class="fixed-shape" alt=""
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