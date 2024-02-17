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
            </div>
            <div class=" col-sm-8 text-center justify-content-center  align-items-center ms-lg-5 " id="second" >
                <div class="professional-summary">
                    <h2>Professional Summary</h2>
                    <p>An innovative full stack developer with over 4 years of experience in building and maintaining responsive websites in the technology industry. Proficient in HTML, CSS, JavaScript, and PHP; plus modern libraries and frameworks. Passionate about usability and possess working knowledge of Adobe Photoshop & Sketch.</p>
                </div>
                <hr>
                <div class="projects">
                    <h2>Projects</h2>
                    <div class="project">
                        <h3>Project Name</h3>
                        <p>Description of the project, your role, technologies used, and any notable achievements.</p>
                        <a href="link_to_live_project">Live Project</a> | <a href="link_to_code_repository">Code Repository</a>
                    </div>
                </div>
                <hr>
                <div class="education">
                    <h2>Education</h2>
                    <div>
                        <h3>Government college university faisalabad layyah campus</h3>
                        <p>Bachelor of Science in Computer Science, 2021 - 2025</p>
                    </div>
                </div>
                <hr>
                <div class="work-experience">
                    <h2>Work Experience</h2>
                    <div>
                        <h3>Job Title at Company Name</h3>
                        <p>Month Year - Month Year</p>
                        <ul>
                            <li>Key responsibility or achievement.</li>
                            <li>Another important duty or accomplishment.</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="certifications">
                    <h2>Certifications & Courses</h2>
                    <ul>
                        <li>Certification or Course Name - Institution or Platform, </li>
                        <li>Another Certification or Course - Institution or Platform, Year</li>
                    </ul>
                </div>
                <hr>
                <div class="contact-info">
                    <h2>Contact Me</h2>
                    <p>Email: muhammaddawood97@gmail.com</p>
                    <p>Phone: +923245369874</p>
                </div>
            </div>
        </div>

    </div>
    <div class="footer fs-6  bg-danger text-center  " style="height: 50px; justify-content:center;">
        <p>&copy; 2024 Muhammad Dawood. All rights reserved.</p>
    </div>
</body>


</html>
