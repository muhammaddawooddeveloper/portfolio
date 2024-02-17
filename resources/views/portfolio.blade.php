<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="css/portfolio.css"> --}}
    {{-- <link rel="stylesheet" href="{{ ass }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <title>Portfolio tamplate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body id="night">
    <div class="container-fluid night" id="night"  style="background: black">
        {{-- dark mode --}}
        {{-- <div id="night-mode"></div> --}}
        {{-- end of dark mode --}}
        <div id="navbar" class="navbargo" style="max-heigh: ; margin-left:20px;width:200px;">

            <nav class="navbar bg-dark text-center navbar-expan" style="max-height: ;margin-left:20px; ">

                <div class="container" style="display: table-column;margin-top:30px">
                    <img src="img/dawood.jpg" alt="dawood img" id="cv"
                        style="height: 80px; width:80px;border-radius:50%;">
                    <h3 style="color: goldenrod" class="mt-2">Portfolio</h3>

                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#education">Education</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link " href="#contant">contact</a>
                        </li>
                    </ul>
                    <div class="d-fex" id="srch">
                        <input class="form-control " id="searchInput" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="submit" id="btn">Search</button>
                    </div>

                </div>

            </nav>
        </div>
        {{-- hum start --}}
        <div class="humburger">
            <div class="hum"><img src="img/hum.png" width="25px" id="hum" alt="hum"></div>
            <div class="cross"><img src="img/cross.png" alt="cross" width="25px" id="cross"></div>
        </div>
        {{-- hum end --}}

        <div class="container-fluid d-sm-flex  " id="main">
            <div class="sidebar col-sm-3 " style="padding: 10px">
                <div class="text-center">
                    <img src="img/dawood.jpg" alt="dawood img" style="height: 120px; width:120px">
                    <h2 style="margin-top: 20px " class="animated-heading">muhamamd dawood</h2>
                    <p style="margin-top: 20px ">Full stack Develper</p>
                    <div class="d-flex " id="icon">
                        <div class="col-2" id="icons">
                            <a href="https://wa.me/923245369874" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                        <div class="col-2" id="icons">
                            <a href="https://instagram.com/muhammaddawood4017?utm_source=qr&igshid=Z2p1cjk2dXFuMjRy">
                                <i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="col-2" id="icons">

                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>
                        <div class="col-2" id="icons">
                            <a href="https://youtube.com/@user-qc9em9qy3o?si=zqS6ZSX0JS_mrLld"><i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                        <div class="col-2" id="icons">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                        <div class="col-2" id="icons">
                            <i class="fa-brands fa-square-dribbble"></i>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="ro" id="me">
                    <div class=" d-flex " id="flex">
                        <h5 class="">Age: </h5>
                        <p class="" id="p">22</p>
                    </div>
                    <div class="d-flex " id="flex">
                        <h5>Residence:</h5>
                        <p>BD</p>
                    </div>
                    <div class="  d-flex" id="flex">
                        <h5 class="">Freelance:</h5>
                        <p class=" col- " style="color:#FFB400;">Available</p>
                    </div>
                    <div class=" d-flex" id="flex">
                        <h5 class="">Address:</h5>
                        <p class="">Pakistan,layyah</p>
                    </div>

                </div>
                <hr>
                <div class="language">
                    <div>
                        <h2>Language</h2>

                    </div>
                    <div class="d-flex mt-3" style="justify-content: space-between">
                        <p class="h6 col-1  ">urdu</p>
                        <p class="h6 col-1 ">99%</p>
                    </div>
                    <div id="bar">
                        <div class="" id="bar2" style="width: 100%; "></div>
                    </div>

                    <div class="d-flex mt-3" style="justify-content: space-between">
                        <p class="h6 col-1 ">English</p>
                        <p class="h6  col-1 ">80%</p>
                    </div>
                    <div id="bar">
                        <div class="" id="bar2" style="width: 80%; "></div>
                    </div>

                    <div class="d-flex mt-3" style="justify-content: space-between">
                        <p class="h6 col-1 ">Spanish</p>
                        <p class="h6 col-1 ">70%</p>
                    </div>
                    <div id="bar">
                        <div class="" id="bar2" style="width: 70%; "></div>
                    </div>
                    <hr>
                </div>

                <div class="" id="skill">
                    <h2 class="text-left col-1">Skills</h2>
                    <div class="d-flex mt-3" style="justify-content: space-between">
                        <p class="h6 col-1 ">Html</p>
                        <p class="h6 col-1 ">90%</p>
                    </div>
                    <div id="bar">
                        <div class="" id="bar2" style="width: 90%; "></div>
                    </div>
                    <div class="d-flex mt-3" style="justify-content: space-between">
                        <p class="h6 col-1 ">Css</p>
                        <p class="h6  col-1 ">85%</p>
                    </div>
                    <div id="bar">
                        <div class="" id="bar2" style="width: 85%; "></div>
                    </div>
                    <div class="d-flex mt-3" style="justify-content: space-between">
                        <p class="h6 col-1 ">Bootstrap</p>
                        <p class="h6 col-1 ">80%</p>
                    </div>
                    <div id="bar">
                        <div class="" id="bar2" style="width: 80%; "></div>
                    </div>
                    <div class="d-flex mt-3" style="justify-content: space-between">
                        <p class="h6 col-1 ">JS</p>
                        <p class="h6 col-1 ">80%</p>
                    </div>
                    <div id="bar">
                        <div class="" id="bar2" style="width: 80%; "></div>
                    </div>
                    <div class="d-flex mt-3" style="justify-content: space-between">
                        <p class="h6 col-1 ">php</p>
                        <p class="h6  col-1 ">90%</p>
                    </div>
                    <div id="bar">
                        <div class="" id="bar2" style="width: 90%; "></div>
                    </div>
                    <div class="d-flex mt-3" style="justify-content: space-between">
                        <p class="h6 col-1 ">Laravel</p>
                        <p class="h6  col-1 ">90%</p>
                    </div>
                    <div id="bar">
                        <div class="" id="bar2" style="width: 90%; "></div>
                    </div>
                    <div class="d-flex mt-3" style="justify-content: space-between">
                        <p class="h6 col-1 ">Laravel</p>
                        <p class="h6 col-1 ">95%</p>
                    </div>
                    <div id="bar">
                        <div class="" id="bar2" style="width: 95%; "></div>
                    </div>

                </div>
                <hr>
                <div class="extra-skills">
                    <h2>Extra Skills</h2>

                </div>
                <hr>
                <div class="bnt">
                    <div class="bnt">

                        <a href="#cv.pdf" download class="btn btn-outline-warning mb-4">DOWNLOAD CV <i
                            class="fa-solid fa-download"></i></a>
                    </div>
                </div>
            {{-- <hr style="height: 100%; width: 5px"> --}}
            </div>
            {{-- end of side bar --}}
            <div class=" col-sm-8 text-center justify-content-center  align-items-center ms-lg-5 " id="second" >
                <div class="justify-content-center text-center align-items-center apni text-dark " id="apni">
                    <div class="col-md-10 ">
                        <div class="animated-heading text-center align-items-center"  >
                            <h1 class="">I'M MUHAMMAD <span class="blue">DAWOOD</span> </h1>
                            <h1 id="color">full stack <span class="highlight">developer</span></h1>
                        </div>
                        <p class="text-dark">
                            I am a passionate developer proficient in both front-end and back-end technologies.
                            I specialize in creating seamless, user-friendly experiences through my coding expertise.
                            With a keen eye for design and functionality, I strive to build innovative solutions that
                            meet and exceed client expectations.
                        </p>
                        <button class="btn btn-danger hr" id="button">Hire Me <i
                                class="fa-solid fa-right-long"></i>
                        </button>
                    </div>
                </div>
                {{-- services start --}}
                <div class="offset-lg-2 col-lg-8 text-center mt-5 mb-4" id="services">
                    <h1>My services</h1>
                    <p>
                        I offer a range of professional services tailored to meet your needs.
                        From website development and optimization to robust backend solutions,
                        my expertise encompasses creating responsive and scalable applications.
                        With a focus on innovation and quality, I aim to deliver solutions that
                        drive success and elevate user experiences.
                    </p>
                </div>

                <div class="mt-5 d-md-flex text-center " >
                    <div class="col-md-4 text-white  text-center mt-4 "  id="skills">
                        <img src="img/coding.png" alt="" style="">
                        <h4>Web developer</h4>
                        <p class="mb-md-4">blog, E-commerece</p>
                    </div>
                    <div class="col-md-4 text-center ml- mt-4 mr-5"
                        id="skills">
                        <i class="fa-sharp fa-light fa-display-chart-up-circle-currency"></i>
                        <img src="img/illustration.png" alt="">
                        <h4>UI/UX Design</h4>
                        <p class="mb-4">web design</p>
                    </div>
                    <div class="col-md-4 text-center p- mt-4"
                        id="skills">
                        <img src="img/microphone.png" alt="">
                        <h4>Sound Design</h4>
                        <p class="mb-4">Voice over, Beat making</p>
                    </div>
                </div>
                <div class="mt-5 d-md-flex text-center text-dar ">

                    <div class="col-md-4 text-center mt-4" id="skills">
                        <img src="img/game-development.png" alt="">

                        <h4>Game Design</h4>
                        <p class="mb-4">Character Design</p>
                    </div>
                    <div class="col-md-4 text-center mt-4" id="skills">
                        <img src="img/photographer.png" alt="">
                        <h4 class="">Photography</h4>
                        <p class="mb-4 ">potrait, product photography</p>
                    </div>
                    <div class="col-md-4 text-center mt-4 " style="margin-right: px" id="skills">
                        <h4 class="mt-2">Advertising</h4>
                        <p class=" mb-3 ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil,
                            id labore minus doloremque blanditiis non.</p>
                    </div>
                </div>
                <div class="price row text-center mt-5 ">
                    <div class="con offset-lg-1 col-lg-10">
                        <h3>Price Plans</h3>
                        <p>
                            I offer customizable pricing plans tailored to suit your specific needs.
                            Each plan is designed to provide value, ensuring that you receive
                            high-quality solutions at competitive rates. With a focus on transparency
                            and delivering exceptional value, I aim to make the process seamless and
                            rewarding for every client.
                        </p>
                    </div>

                </div>
                <div class="plans d-md-flex text-dark apni" id="plans"  >
                    <div class="col-md-4 text-center mt-5" id="center">
                        <h2 class="mt-5">Silver</h2>
                        <div class="text-center d-flex " id="center">
                            <h1 class=" mt-3" style=" color:black">$0.00</h1>
                            <p style=" margin-top: 40px">/Hour</p>
                        </div>
                        <p>For Most Businesses That Want To Optimize Web Queries </p>
                        <div class="imgd ml-4 offset-1">
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2 ml-3 ">UI Design</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2 ml-3 ">Web Development</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-xmark " id="i"></i><br>
                                <p class="mt-2 ml-3 ">Logo Design</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-xmark " id="i"></i><br>
                                <p class="mt-2  ">Seo Optimization</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-xmark " id="i"></i><br>
                                <p class="mt-2  ">Wordpress Integration</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-xmark " id="i"></i><br>
                                <p class="mt-2  ">5 Websites</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-xmark " id="i"></i><br>
                                <p class="mt-2  ">Unlimited User</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-xmark " id="i"></i><br>
                                <p class="mt-2  ">20 GB Bandwidth</p>
                            </div>
                        </div>
                        <a href="{{ url('/test') }}" class="btn btn-success mt-3">ORDER NOW</a>
                    </div>
                    <div class="col-md-4 text-center mt-5 pw" id="center" >
                        <h5 class="bg-warning">Most Popular</h5>
                        <h2 class="m-4">Gold</h2>
                        <div class="text-center d-flex" id="center">
                            <h1 class="fs-larger" style=" color:black">$50.00</h1>
                            <p class="mt-4">/Hour</p>
                        </div>
                        <p>For Most Businesses That Want To Optimize Web Queries </p>
                        <div class="imgd d-fle ml-4 offset-1">
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2 ml-3 ">UI Design</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2 ml-3 ">Web Development</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2 ml-3 ">Logo Design</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2  ">Seo Optimization</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-xmark " id="i"></i><br>
                                <p class="mt-2  ">Wordpress Integration</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-xmark " id="i"></i><br>
                                <p class="mt-2  ">5 Websites</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-xmark " id="i"></i><br>
                                <p class="mt-2  ">Unlimited User</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-xmark " id="i"></i><br>
                                <p class="mt-2  ">20 GB Bandwidth</p>
                            </div>
                        </div>
                        <button class="btn btn-warning mt-3 mb-3">ORDER NOW</button>
                    </div>
                    <div class="col-md-4 text-center mt-5 pw" id="center">
                        <h2 class="mt-5">Dimond</h2>
                        <div class=" d-flex " id="center">
                            <h1 class="fs-larger  mt-3" style="  color:black">$80.00</h1>
                            <p class="mt" style="margin-left: px; margin-top: 40px">/Hour</p>
                        </div>
                        <p>For Most Businesses That Want To Optimize Web Queries </p>
                        <div class="imgd d-fle ml-4 offset-1">
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2 ml-3 ">UI Design</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2 ml-3 ">Web Development</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2 ml-3 ">Logo Design</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2  ">Seo Optimization</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2  ">Wordpress Integration</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2  ">5 Websites</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2  ">Unlimited User</p>
                            </div>
                            <div class="check ml-3 d-flex">
                                <i class="fa-solid fa-check i" id="i"></i><br>
                                <p class="mt-2  ">20 GB Bandwidth</p>
                            </div>
                        </div>
                        <button class="btn btn-warning mt-3 mb-3">ORDER NOW</button>
                    </div>
                </div>
                <div class="recomendation text-center ">
                    <div class="offset-2 col-8">
                        <h1>Recomendation</h1>
                        <p>
                            I am dedicated to providing top-notch solutions that cater to your unique needs.
                            With a proven track record of delivering high-quality work, I prioritize client
                            satisfaction above all else. My goal is to build long-term relationships based
                            on trust, reliability, and exceptional service. Let my expertise elevate your
                            digital presence and exceed your expectations.
                        </p>
                    </div>
                </div>

                <div class="d-md-flex mb-3 mt-5 mb-4 text-dark">
                    <div class=" col-md-4 mt-5 " id="pw">
                        <div class="d-flex" id="stars">
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                        </div>
                        <h2>Amazing work</h2>
                        <p>"Embarking on this project, I had high expectations, but the outcome far exceeded anything I could have imagined. The level of detail, creativity, and professionalism brought to the table was nothing short of astounding. Every challenge was met with a solution that was not only effective but also innovativen.</p>
                        <div class="james d-flex text-center" style="justify-content: center ; margin-tp: 65px">
                            <div class="img"
                                style="border:2px solid #FFB400; border-radius:50%; overflow:hidden ; max-width:max-content">
                                <img src="img/Gallery-image-2.jpg" alt="img" id="img" height="80px"
                                    width="80px">
                            </div>
                            <div class="">
                                <span>
                                    <h5>james Gouse</h5>
                                    <p>Graphics Designer</p>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class=" col-md-4 mt-5 pw" id="pw">
                        <div class="d-flex" id="stars">
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                        </div>
                        <h2>Amazing work</h2>
                        <p>
                            My commitment to excellence drives every project I undertake.
                            By combining creativity with technical expertise, I strive to
                            deliver work that not only meets but exceeds expectations.
                            I'm dedicated to crafting solutions that stand out, ensuring
                            your project receives the attention and quality it deserves.
                        </p>
                        <div class="james d-flex text-center" style="justify-content: center">
                            <div class="img"
                                style="border:2px solid #FFB400; border-radius:50%; overflow:hidden; max-width:max-content">
                                <img src="img/profile (1).png" alt="" id="img">
                            </div>
                            <div class="text-center mt-3">
                                <span>
                                    <h5>Taina Philips</h5>
                                    <p>Photoghrapher</p>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="great col-md-4 mt-5 pw" id="pw">
                        <div class="d-flex" id="stars">
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                            <i class="fa-solid fa-star i " id="str"></i>
                        </div>
                        <h2>Amazing work</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam explicabo quam natus eum
                            temporanulla ipsam eos eaque quae necessitatibus numquam sapiente optio, earum possimus, ad
                            error cum ut?Doloribus?</p>
                        <div class="james d-flex text-center offset-md-1" style="justify-content: center"
                            style="margin-top: 90px">
                            <div class="img mt-5"
                                style="border:2px solid #FFB400; border-radius:50%; overflow:hidden ; ">
                                <img src="img/profile (2).png" alt="" class="" id="img">
                            </div>
                            <div class="text-center" style="margin-top: 60px">
                                <span>
                                    <h5>Talan Westervelt</h5>
                                    <p>Graphics Designer</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Education text-center " id="education">
                    <div class="col-12">
                        <h2>Education</h2>
                        <p>
                            My educational journey has equipped me with a strong foundation
                            in the field of web develpment and design. Through rigorous coursework
                            and practical experience, I've developed a deep understanding of
                            <u>HTML CSS BOOTSTRAP JAVASCRIPT JQUERY PHP LARAVEL SQL and DATABASE </u>.This knowledge
                            forms the backbone of my expertise, enabling me to approach projects with both theoretical
                            insights and practical
                            proficiency.
                        </p>
                    </div>
                    <div class=" row  mt-5 text-cente " id="pw">
                        <div class="col-md-4  ">
                            <div class=" mt-3 ">
                                <h3>GC University</h3>
                                <div class="d-flex mt-3 text-cente offset-md-" id="cente">
                                    <p class="">student</p>
                                    <p class="bg-warning  " style="margin-left: 10px ; text-align:cente">jan 10 - Dec
                                        2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 col-md-6 set">
                            <h4>Certificate Of Web Training</h4>
                            <p class="mt-3 ">
                                This Certificate of Web Training acknowledges the successful completion of our comprehensive web development and design course. Through a series of rigorous modules, participants have gained a deep understanding of web technologies, including HTML, CSS, JavaScript, and modern frameworks used to create responsive and interactive websites.
                            </p>
                        </div>
                        <hr class="m-auto" style="width: 90% ">
                        <div class=" row ">
                            <div class="col-md-4 ">
                                <div class="col- mt-3">
                                    <h4>Programming Course</h4>
                                    <div class="d-flex mt-3 ">
                                        <p class="">student</p>
                                        <p class="bg-warning  " style="margin-left: 15px ; ">jan 10 - Dec 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-md-7 set">
                                <h3>Certificate Of Web Training</h3>
                                <p class="mt-3">
                                    This Certificate of Web Training certifies that the named participant has successfully completed a specialized course in web development, covering fundamental to advanced topics in programming, design, and application deployment. Throughout this comprehensive training, held from January 10 to December 2023, the participant engaged in hands-on projects and theoretical learning to master the art of building robust, user-friendly websites. This achievement demonstrates not only a commitment to learning and excellence but also readiness to contribute effectively to the technology and web development sectors.
                                </p>
                            </div>
                        </div>
                        <hr class="m-auto" style="width: 90% ">
                        <div class="row ">
                            <div class="col-md-4">
                                <div class=" mt-3">
                                    <h4>Web Developer Course </h4>
                                    <div class="d-flex mt-3 ">
                                        <p class="">student</p>
                                        <p class="bg-warning  " style="margin-left: 15px ;">jan 10 - Dec 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-md-7 set">
                                <h3>Certificate Of Web Training</h3>
                                <p class="mt-3">
                                    Awarded this Certificate of Web Training as a testament to the successful completion of our intensive Web Developer Course, spanning from January 10 to December 2024. Throughout this period, the student demonstrated exceptional dedication to mastering a broad spectrum of web development skills, from front-end design using HTML, CSS, and JavaScript, to back-end programming with technologies such as php , laravel and databases. Projects undertaken have showcased an ability to construct responsive, dynamic websites and applications, marking a significant milestone in the student's journey towards becoming a proficient web developer. This certificate recognizes the hard work, creativity, and technical prowess exhibited in pursuit of this achievement.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history ">
                    <div class="col-12 text-center mt-4">
                        <h2>Work History</h2>
                        <p>Our work history stands as a testament to our unwavering commitment to excellence, innovation, and the pursuit of perfection. Over the years, we have successfully navigated the complexities of our industry, delivering projects that exceed expectations and set new benchmarks. Our journey is marked by countless collaborations with esteemed clients, tackling challenges head-on and turning visionary ideas into tangible realities. Each project has contributed to our rich tapestry of experience, enhancing our skills and deepening our knowledge. We take pride in our ability to adapt, grow, and lead in an ever-evolving landscape, always pushing the boundaries of what is possible. Our work history is not just a record of past achievements; it is a reflection of our passion, dedication, and the enduring relationships we've built along the way.</p>
                    </div>
                    <div class=" row mt-5 " id="pw">
                        <div class="col-md-4">
                            <div class=" mt-3 ">
                                <h4>Lead Web Designer</h4>
                                <div class="d-flex mt-3 ">
                                    <p class="">student</p>
                                    <p class="bg-warning  " style="margin-left: 20px ; ">jan 10 - Dec 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 col-md-7 set">
                            <h3>Certificate Of Web Training</h3>
                            <p class="mt-3">
                                This Certificate of Web Training proudly acknowledges the dedication and achievement of the student in their role as Lead Web Designer from January 10 to December 2024. Throughout this period, the student has demonstrated exceptional skill in web design principles, user experience (UX) optimization, and creative visual communication. By mastering cutting-edge design tools and technologies, collaborating on multidisciplinary teams, and leading projects to successful completion, they have significantly contributed to advancing web aesthetics and functionality. This certificate recognizes their outstanding commitment to professional development and their significant contributions to the field of web design.
                            </p>

                        </div>
                        <hr class="m-auto" style="width: 90% ">

                        <div class=" row mt-">
                            <div class="col-md-4">
                                <div class=" mt-3 ">
                                    <h4>Junoir Web Designer</h4>
                                    <div class="d-flex mt-3 ">
                                        <p class="">student</p>
                                        <p class="bg-warning  " style="margin-left: 20px ; ">jan 10 - Dec 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-md-7 set">
                                <h3>Certificate Of Web Training</h3>
                                <p class="mt-3">
                                    This Certificate of Web Training is awarded to the individual in recognition of their successful completion of the Junior Web Designer program from January 10 to December 2024. Throughout this course, the student has developed foundational skills in web design, including an understanding of basic design principles, HTML, CSS, and introductory JavaScript. Their journey has been marked by a steadfast commitment to learning and growth, showcasing their potential to innovate and excel within the digital design space. This certificate celebrates their achievements and the significant strides they have made towards becoming a skilled web designer.
                                </p>

                            </div>
                        </div>
                        <hr class="m-auto" style="width: 90% ">
                        <div class=" row ">
                            <div class="col-md-4">
                                <div class=" mt-3 ">
                                    <h3>Senior Web Designer</h3>
                                    <div class="d-flex mt-3 ">
                                        <p class="">student</p>
                                        <p class="bg-warning  " style="margin-left: 20px ; ">jan 10 - Dec 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 col-md-7 set">
                                <h3>Certificate Of Web Training</h3>
                                <p class="mt-3">
                                    This Certificate of Web Training proudly acknowledges the successful completion of the Senior Web Designer curriculum by the student, spanning from January 10 to December 2024. This advanced program has honed their skills in sophisticated design methodologies, user experience (UX) optimization, and responsive design techniques. Demonstrating a high level of proficiency in both the creative and technical aspects of web design, the student has shown remarkable capability in leading projects to fruition, innovating with design solutions, and contributing to the evolution of web aesthetics. This certificate is a testament to their dedication, skill, and leadership in the field of web design.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio text-center mt-5" id="portfolio">
                        <h3>Portfolio</h3>
                        <p>Welcome to my portfolio! As a passionate and creative professional with a diverse background in web development. I have dedicated 2 years to honing my skills and delivering high-quality work. Discover a curated collection of my professional work, showcasing a diverse range of projects from innovative UI designs to dynamic web applications and distinctive logo creations. Each project illustrates my commitment to delivering exceptional aesthetic appeal alongside functional excellence. Dive into my portfolio to explore how I blend creativity with technology to solve complex problems and create meaningful digital experiences.</p>

                        <nav class="navbar navbar-expand text-center row ">
                            {{-- <ul class="navbar-nav text-center ">
                                <li class="nav-item"><a class="nav-link" href="#">All Categories</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">UI Design</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Web Tamplate</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Logo</a></li>
                            </ul> --}}
                        </nav>
                    </div>
                    <div id="port">
                        <div class="d-md-flex " id="kk" style="display: fle">
                            <img class=" col-sm-4" src="img/image (5).png" alt="" style="margin-left: 10px">
                            <img class=" col-sm-4 " src="img/image (6).png" alt=""
                                style="margin-left: 10px">
                            <img class="col-sm-4" src="img/image (7).png" alt="" style="margin-left: 10px">
                        </div>
                        <div class="mt-3 d-md-flex" style="" id="kk">
                            <img class="col-md-4 col-xs-4" src="img/image (8).png" alt=""
                                style="margin-left: 10px;">
                            <img class="col-md-4 col-xs-4 " src="img/image (9).png" alt=""
                                style="margin-left: 10px;">
                            <img class="col-md-4 col-xs-4 " src="img/image (10).png" alt=""
                                style="margin-left: 10px;">
                        </div>
                        <div class="d-md-flex mt-2" id="kk">
                            <img class="col-md-4 col-xs-4" src="img/image (11).png" alt=""
                                style="margin-left: 10px;">
                            <img class="col-md-4 col-xs-4 " src="img/image (12).png" alt=""
                                style="margin-left: 10px;">
                            <img class="col-md-4 col-xs-4 " src="img/image (13).png" alt=""
                                style="margin-left: 10px;">
                            {{--
                        </div> --}}
                        </div>

                    </div>
                    <div class="blog mt-5  " id="blog">
                        <div class="text-center ">
                            <div class="col-10 offset-1 mb-5">
                                <h2>Blog</h2>
                                <p>Welcome to our blog, where we dive deep into the latest trends, share insights, and discuss innovations that shape our world. From technology breakthroughs to lifestyle tips, our posts are curated to enlighten, entertain, and inform our diverse audience. Whether you're seeking inspiration, practical advice, or just a good read, our blog strives to offer something valuable for everyone. Join us as we explore a myriad of topics, presenting expert opinions, success stories, and thought-provoking analysis. Here, every article is an opportunity to learn something new and see the world from a fresh perspective.</p>
                            </div>
                            </div>
                            <div class=" mb-5 d-md-flex  " id="kk">
                                <div class="card text-center col-md-4" id="pw">
                                    <div class="card-body">
                                        <img class="" src="img/image.png" alt="" style="width:96%">
                                        <h4>How to Make Webtamplate</h4>
                                        <p class="card-text">Some example text. Some example text.</p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>


                                <div class="card text-center col-md-4" id="pw">
                                    <div class="card-body">
                                        <img class="" src="img/image (6).png" alt=""
                                            style="margin-left: px; width:96%">
                                        <h4>How to Make Webtamplate</h4>
                                        <p class="card-text">Some example text. Some example text.</p>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                                <div class="card text-center col-md-4" id="pw">
                                    <div class="card-body">
                                        <img class="col-md- col-xs" src="img/image (7).png " alt=""
                                            style="margin-left: px; width:96%">
                                        <h4>How to Make Webtamplate</h4>
                                        <p class="card-text">Some example text. Some example text.</p>
                                        <a href="#" class="card-link ">Another link</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        {{--
                </div> --}}
                        {{--
            </div> --}}
                        {{-- start contact page --}}
                        <div class="contact d-md-flex text-dark" id="contant">
                            <div class="for mt- col-md-6 form-container" id="pw">
                                <h3 class="text-white">Leave Us Your Info</h3>
                                <div class=" p-4">
                                    <form action="{{ route('portdata') }}" method="post" id="form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="fullName">Full Name (required)</label>
                                            <input type="text" class="form-control" id="fullName"
                                                name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email (required)</label>
                                            <input type="email" class="form-control" id="email"
                                                name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Your Message</label>
                                            <textarea class="form-control" id="message" name="msg" rows="7"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-warning mt-2">Send Message</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col--md-10"   id="pw">
                                <h3>Contact Information</h3>
                                <div class="add mt- text-center  " style="margin-top: 3px">
                                    <i class="fa-sharp fa-solid fa-location-dot "></i>
                                    <div class="d-fle" id="fle">
                                        <div class="d-flex" id="flex">
                                            <h5>Country:</h5>
                                            <p>pakistan</p>
                                        </div>
                                        <div class="d-flex" id="flex">
                                            <h5>City:</h5>
                                            <p>Layyah</p>
                                        </div>

                                        <div class="d-flex" id="flex">
                                            <h5>streat:</h5>
                                            <p>lalazar Road</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" text-center mt-1 ">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                    <div class=" mt-3 col" id="flex">
                                        <div class="d-flex" id="flex">
                                            <h5>Email:</h5>
                                            <p>mdawoodqarwan@gmail.com</p>
                                        </div>
                                        <div class="d-flex" id="flex">
                                            <h5>Skype:</h5>
                                            <p>@muhammaddawood</p>
                                        </div>
                                        <div class="d-flex" id="flex">
                                            <h5>Telegram:</h5>
                                            <p>@dawood</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="addr mt-1 text-center  ">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                    <div class="">
                                        <div class="d-flex" id="flex">
                                            <h5 class="">suport Services:</h5>
                                            <p>34</p>
                                        </div>
                                        <div class="d-flex" id="flex">

                                            <h5 class="">Office:</h5>
                                            <p>34r</p>
                                        </div>
                                        <div class="d-flex" id="flex">
                                            <h5>Personal:</h5>
                                            <p>+923245369874</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3421.232162379004!2d71.0906156746717!3d30.96400277442049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3925a98bc64ac2d5%3A0xd4f71b8d3c80189d!2sLalazar!5e0!3m2!1sen!2s!4v1707877793168!5m2!1sen!2s" width="1000" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class=" mt-5 row " style="margin-bottom: 100px;">
                            <img src="img/logo.png" alt="">
                        </div>
                    </div>
                </div>


            </div>
            <div class="footer mt-5 mb- fixed-bottom">
                <footer class=" bg-danger text-center  p-1 ">
                    <p class=" " style="font-size: larger">2023 All @Copy-Right Dawood web-developer and Designer
                    </p>
                </footer>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/portfolio.js') }}"></script>
{{-- <script src="{{ asset('j') }}"></script> --}}
<script>
    @if (session('record_added'))
        alert('you are added successfully!');
    @endif
</script>

</html>
