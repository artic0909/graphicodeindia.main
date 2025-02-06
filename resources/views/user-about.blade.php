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
                        <a class="navbar-brand d-flex align-items-center" href="index.html">
                            <img src="./img/logo.png" alt="Graphicode India Logo" class="me-2 nav-logo" height="32" />
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
                                        href="index.html"><img class="nav-img" src="./icon/home.png" width="19"
                                            alt="" />&nbsp;<span>Home</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page" id="active-nav"
                                        href="about.html"><img class="nav-img" src="./icon/about.png" width="19"
                                            alt="" />&nbsp;<span>About</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page"
                                        href="services.html"><img class="nav-img" src="./icon/services.png" width="22"
                                            alt="" />&nbsp;<span>Services</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page"
                                        href="projects.html"><img class="nav-img" src="./icon/projects.png" width="18"
                                            alt="" />&nbsp;<span>Projects</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page"
                                        href="blogs.html"><img class="nav-img" src="./icon/blogs.png" width="20"
                                            alt="" />&nbsp;<span>Blogs</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bold hide inner-items-center" aria-current="page"
                                        href="contact.html"><img class="nav-img" src="./icon/contactus.png" width="23"
                                            alt="" />&nbsp;<span>Contact</span></a>
                                </li>

                                <li class="nav-item btn-org">
                                    <a class="nav-link fw-bold inner-items-center" aria-current="page"
                                        href="contact.html">Let's Talk &nbsp;
                                        <img class="nav-img hide" src="./icon/arrow-talk.png" width="15" alt="" /></a>
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
                                <p class="fs-6" style="text-align: justify; opacity: 0.75">
                                    <strong>Graphicode India is a leading digital solutions
                                        provider🚀,</strong>
                                    specializing in custom Website development🖥️ & Android app
                                    development📱 & Brands logo design & Banners & Poster design
                                    & Brochure & Business Cards design & SEO (Search Engine
                                    Optimization)🔍. Our team of experts is dedicated to
                                    delivering innovative, tailored solutions that elevate
                                    brands and drive business success.
                                </p>

                                <!-- Numbers Section -->
                                <div class="numbers-containerr mt-5 mb-5" style="
                      display: flex;
                      align-items: center;
                      justify-content: space-between;
                    ">
                                    <div class="">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="numbers-items">
                                                <p class="m-0 fw-bold fs-1">21+</p>
                                                <p class="m-0 fw-semibold opacity-75">
                                                    happy Clients
                                                </p>
                                            </div>

                                            <div class="numbers-items">
                                                <p class="m-0 fw-bold fs-1">21+</p>
                                                <p class="m-0 fw-semibold opacity-75">
                                                    Years of Experience
                                                </p>
                                            </div>

                                            <div class="numbers-items">
                                                <p class="m-0 fw-bold fs-1">21+</p>
                                                <p class="m-0 fw-semibold opacity-75">
                                                    Project Completed
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-conatiner d-flex justify-content-end align-items-center">
                                        <a href="" class="btn btn-danger fw-semibold">
                                            <p class="m-0 av-btn">
                                                <img src="./img/24-7.gif" width="40" alt="" class="rounded" />
                                                <span>Available for Collaboration</span>
                                            </p>
                                        </a>
                                    </div>
                                </div>

                                <!-- Information Section -->
                                <div class="d-flex flex-column gap-3 mt-4">
                                    <p style="text-align: justify; opacity: 0.75" class="fs-9 mt-4">
                                        At Graphicode India, we take pride in being a premier
                                        digital solutions provider,
                                        <strong>specializing in custom website development, Android app
                                            development, SEO and a range of creative design
                                            services. From logos and banners to brochures and
                                            business cards, our team delivers unique, high-quality
                                            solutions that empower brands and drive growth.</strong>
                                        With years of experience and a commitment to
                                        affordability, we’ve successfully partnered with
                                        businesses across various industries to bring their
                                        visions to life.
                                    </p>

                                    <p style="text-align: justify; opacity: 0.75" class="fs-9 mt-4">
                                        We believe that creativity and functionality go hand in
                                        hand to create impactful digital experiences. Our approach
                                        combines cutting-edge technology with imaginative design
                                        to deliver solutions that are not only visually stunning
                                        but also highly effective. Whether you need a fully
                                        customized website, an engaging mobile application, or
                                        comprehensive branding materials,
                                        <strong>we ensure every project is tailored to meet your needs,
                                            fit your budget, and exceed expectations. With
                                            negotiable pricing and affordable AMC (Annual
                                            Maintenance Contract) options,</strong>
                                        we make innovative solutions accessible to all businesses.
                                    </p>
                                </div>

                                <!-- Partners Section -->
                                <div class="row">
                                    <section class="main-section col-12 mt-4">
                                        <div class="shadow border p-3">
                                            <div class="inner-items-center">
                                                <span class="fw-bold fs-4 col-6 service-title-text">Our Partners</span>
                                                <span class="fw-bold fs-6 col-6 clr-bl text-end"
                                                    style="cursor: pointer">
                                                    See All
                                                    <img src="./icon/arrow.png" alt="" width="20" />
                                                </span>
                                            </div>

                                            <div class="scr" style="overflow: hidden">
                                                <div
                                                    class="partners-container mt-2 mb-2 d-flex align-items-center gap-3">
                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>

                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>

                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>

                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>

                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>

                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>

                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>

                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>

                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>

                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>

                                                    <div class="partner-item p-2 bg-white border rounded">
                                                        <img src="./icon/logoD.png" alt="" width="120" />
                                                    </div>
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
                                            <span class="fw-bold fs-6 col-6 clr-bl text-end" style="cursor: pointer">
                                                See All
                                                <img src="./icon/arrow.png" alt="" width="20" />
                                            </span>
                                        </div>

                                        <div class="sp-container p-4 align-items-center gap-3 mt-2 mb-2">
                                            <!-- card 1 -->
                                            <div class="p-2" style="background: #cecdd891; border-radius: 10px">
                                                <div style="border-radius: 5px"
                                                    class="img-container bg-white p-2 d-flex justify-content-center align-items-center">
                                                    <img src="./icon/figma.png" width="40" alt="" />
                                                </div>

                                                <div class="card-content mt-2">
                                                    <p class="fw-bold text-center clr-bl m-0">Figma</p>
                                                </div>
                                            </div>

                                            <div class="p-2" style="background: #cecdd891; border-radius: 10px">
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

                                            <div class="p-2" style="background: #cecdd891; border-radius: 10px">
                                                <div style="border-radius: 5px"
                                                    class="img-container bg-white p-2 d-flex justify-content-center align-items-center">
                                                    <img src="./icon/php.png" width="40" alt="" />
                                                </div>

                                                <div class="card-content mt-2">
                                                    <p class="fw-bold text-center clr-bl m-0">PHP</p>
                                                </div>
                                            </div>

                                            <div class="p-2" style="background: #cecdd891; border-radius: 10px">
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

                                            <div class="p-2" style="background: #cecdd891; border-radius: 10px">
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

                                            <div class="p-2" style="background: #cecdd891; border-radius: 10px">
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
                                                    <img src="./img/proj-1.png" style="width: 100%" alt="" />

                                                    <img src="./img/proj2.jpg" style="width: 100%" alt="" />

                                                    <img src="./img/proj-1.png" style="width: 100%" alt="" />
                                                    <img src="./img/proj2.jpg" style="width: 100%" alt="" />

                                                    <img src="./img/proj-1.png" style="width: 100%" alt="" />
                                                    <img src="./img/proj2.jpg" style="width: 100%" alt="" />

                                                    <img src="./img/proj-1.png" style="width: 100%" alt="" />
                                                    <img src="./img/proj2.jpg" style="width: 100%" alt="" />

                                                    <img src="./img/proj-1.png" style="width: 100%" alt="" />
                                                    <img src="./img/proj2.jpg" style="width: 100%" alt="" />

                                                    <img src="./img/proj-1.png" style="width: 100%" alt="" />
                                                    <img src="./img/proj2.jpg" style="width: 100%" alt="" />
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
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button collapsed fs-6 fw-semibold"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne" aria-expanded="false"
                                                                aria-controls="collapseOne">
                                                                Why should I choose Graphicode India for my project?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong>This is the first item's accordion
                                                                    body.</strong>
                                                                It is hidden by default, until the collapse plugin
                                                                adds the appropriate classes that we use to style
                                                                each element. These classes control the overall
                                                                appearance, as well as the showing and hiding via
                                                                CSS transitions. You can modify any of this with
                                                                custom CSS or overriding our default variables. It's
                                                                also worth noting that just about any HTML can go
                                                                within the <code>.accordion-body</code>, though the
                                                                transition does limit overflow.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed fs-6 fw-semibold"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Why should I choose Graphicode India for my project?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong>This is the second item's accordion
                                                                    body.</strong>
                                                                It is hidden by default, until the collapse plugin
                                                                adds the appropriate classes that we use to style
                                                                each element. These classes control the overall
                                                                appearance, as well as the showing and hiding via
                                                                CSS transitions. You can modify any of this with
                                                                custom CSS or overriding our default variables. It's
                                                                also worth noting that just about any HTML can go
                                                                within the <code>.accordion-body</code>, though the
                                                                transition does limit overflow.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed fs-6 fw-semibold"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Why should I choose Graphicode India for my project?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong>This is the third item's accordion
                                                                    body.</strong>
                                                                It is hidden by default, until the collapse plugin
                                                                adds the appropriate classes that we use to style
                                                                each element. These classes control the overall
                                                                appearance, as well as the showing and hiding via
                                                                CSS transitions. You can modify any of this with
                                                                custom CSS or overriding our default variables. It's
                                                                also worth noting that just about any HTML can go
                                                                within the <code>.accordion-body</code>, though the
                                                                transition does limit overflow.
                                                            </div>
                                                        </div>
                                                    </div>
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
    <script src="{{asset('./js/scroll-project.js')}}"></script>
    <script src="{{asset('./js/scroll-partner.js')}}"></script>
</body>

</html>