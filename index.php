<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rishabh Portfolio</title>
    <!-- favicon -->
    <link rel="icon" href="./assets/images/layout/Favicon.svg" type="image/x-icon" />
    <!-- Bootstrap CDN url -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap icon CDN url -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <!-- home page css file include -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- common css file include -->
    <link rel="stylesheet" href="./css/common.css">

    <!-- script file -->
    <script src="js/jquery.js"></script>
    <script src="js/owl.crousel.js"></script>
    <link rel="stylesheet" href="css/owl.crousel.css">
    <script src="js/beforeafter.jquery-1.0.0.min.js"></script>
    <script src="js/lightcase.js"></script>
</head>

<body class="position-relative">
    <div class="scrollDataframe"></div>
    <div class="frame">
        <!-- header start here -->
        <header class="header">
            <div class="row">
                <div class="col-12">
                    <div class="header-content">
                        <!-- Logo -->
                        <a href="index.php">
                            <img src="./assets/images/layout/Logo.svg" class="img-fluid" alt="logo" />
                        </a>
                        <!-- Date & time -->
                        <div class="d-flex gap-2 align-items-center">
                            <p id="dateTime"></p>
                            <button onclick="menuToggle()" class="menu-button"><i class="bi bi-list"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end here -->
        <div class="main-content-wrapper">

    <!-- page content start here -->
    <div class="row page-row">
        <!-- Sidebar column start here -->
        <div class="col-lg-4 col-xl-3">
            <?php include('sidebar.php'); ?>
        </div>
        <!-- Sidebar column end here -->

        <!-- main page column start here -->
        <div class="col-lg-8 col-xl-9">
            <!-- Main page content start here -->
            <main class="main mt-4 mt-sm-5">
                <!-- hero section start here -->
                <section id="heroSection">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="main-title">
                                <div class="title-border">Hi It’s Rishabh’s</div>
                                <div>
                                    portfolio website
                                </div>
                            </h1>
                            <p class="main-paragraph">A product designer, who loves working on complex systems, and designing intelligent interfaces that do not compromise functionality,
                                seamlessly blend with our daily intentions, and feel natural.</p>
                            <p class="main-paragraph mt-4">Developing digital products that fulfill
                                their purpose. </p>

                            <div class="location">
                                <i><img src="assets/images/icons/location_iocn.svg" alt="linkedin icon"></i>
                                <span>Hampi, Karnataka, India | Trying to sketch more often :)</span>
                            </div>

                            <div class="action-button-wrapper">
                                <!-- Resume download button here -->
                                <a href="assets/pdf/Rishabh's_Resume.pdf" title="Rishabh Resume" class="btn button-common px-5" Target="_blank" open Rishabh's_resume.pdf">
                                    <i><img src="assets/images/icons/file_icon.svg" alt="file icon"></i>
                                    <span>Resume</span>
                                </a>
                                <!-- Linkedin button here -->
                                <a href="https://www.linkedin.com/in/rishabh-choudhary-43a81b158/" title="Linkedin Profile" target="_blank" class="btn button-common px-3">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <!-- Email button here -->
                                <a href="mailto:rishabh.ucdesigner@gmail.com" title="Email" class="btn button-common px-3">
                                    <!-- <i class="bi bi-envelope"></i> -->
                                    <img src="assets/images/icons/email.svg" alt="email icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- hero section end here -->

                <!-- UX design section start here -->
                <section id="uxDesign">
                    <div class="col-12 section-column">
                        <h3 class="section-title product-design">Product design</h3>
                        <p class="section-para">Some of my UX design works!</p>
                    </div>

                    <!-- Timelabs row start here -->
                    <!-- <div class="row card-row">
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <img src="assets/images/card/card_frame.svg" class="img-fluid image" alt="Timelabs Image">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="card-wrapper">
                                <div>
                                    <h4 class="card-title">HR Management Software</h4>
                                    <p class="card-para">Redesigning a HRM software to enhance it's user experience</p>

                                    <div class="card-badge-wrapper">
                                        <span class="card-badge">Figma</span>
                                        <span class="card-badge">User flows</span>
                                        <span class="card-badge">HRMS Design</span>
                                        <span class="card-badge">Dashboard Design</span>
                                        <span class="card-badge">Design System</span>
                                        <span class="card-badge">Human Interactions</span>
                                        <span class="card-badge">Prototyping</span>
                                    </div>
                                </div>

                                <a href="#" class="btn button-common mt-4">View Case Study <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- Timelabs row end here -->

                    <!-- Vizitrac row start here -->
                    <div class="row card-row">
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <img src="assets/Homepage/Vizitrac_Thumbnail.png" class="img-fluid image" alt="Vizitrac Image">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="card-wrapper">
                                <div>
                                    <h4 class="card-title">Vizitrac</h4>
                                    <p class="card-para">A complete solution to manage and keep track of visitors for
                                        corporate offices and factory workshops</p>

                                    <div class="card-badge-wrapper">
                                        <span class="card-badge">Figma</span>
                                        <span class="card-badge">Mobile App Design</span>
                                        <span class="card-badge">Dashboard Design</span>
                                        <span class="card-badge">Design System</span>
                                        <span class="card-badge">Prototyping</span>
                                    </div>
                                </div>

                                <a href="vizitrac.php" class="btn button-common mt-4">View Case Study <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Vizitrac row end here -->

                    <!-- Good Motion row start here -->
                    <div class="row card-row">
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <img src="assets/Homepage/Good_Motion_Thumbnail.png" class="img-fluid image" alt="no image">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="card-wrapper">
                                <div>
                                    <h4 class="card-title">Good Motion</h4>
                                    <p class="card-para">An attempt at tackling sedentary lifestyle,
                                        by developing health working habits</p>

                                    <div class="card-badge-wrapper">
                                        <span class="card-badge">Problem Solving</span>
                                        <span class="card-badge">Innovative</span>
                                        <span class="card-badge">Figma</span>
                                        <span class="card-badge">Mobile App Design</span>
                                        <span class="card-badge">Design Systems</span>
                                        <span class="card-badge">Prototyping</span>
                                    </div>
                                </div>

                                <a href="Good Motion.php" class="btn button-common mt-4">View Case Study <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Good Motion row end here -->
                </section>
                <!-- UX design section end here -->

                <!-- Website Design section start here -->
                <section id="development">
                    <div class="col-12 section-column">
                        <h3 class="section-title website-design">Website Design</h3>
                        <p class="section-para">some of my works related to web design.</p>
                    </div>

                    <!-- Timelabs website row start here -->
                    <div class="row card-row">
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <img src="assets/Homepage/Timelabs_Website_Thumbnail.png" class="img-fluid image" alt="Timelabs Website cover image">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="card-wrapper">
                                <div>
                                    <h4 class="card-title">Timelabs Website Revamp</h4>
                                    <p class="card-para">Redesigned the product website for a HR Management software called Timelabs.

                                    </p>

                                    <div class="card-badge-wrapper">
                                        <span class="card-badge">Figma</span>
                                        <span class="card-badge">Web Design</span>
                                        <span class="card-badge">Builder.io</span>
                                        <span class="card-badge">Data Management</span>
                                        <span class="card-badge">Web Design</span>
                                    </div>
                                </div>

                                <a href="TimelabsWebsite.php" class="btn button-common mt-4">View Project <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Timelabs Website row end here -->

                    <!-- National Games row start here -->
                    <div class="row card-row">
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <img src="assets/Homepage/NGG_Thumbnail.png" class="img-fluid image" alt="NGG Website Cover image">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="card-wrapper">
                                <div>
                                    <h4 class="card-title">National Games Gujarat 2022</h4>
                                    <p class="card-para">Designing and developing website for
                                        India’s biggest sporting event</p>

                                    <div class="card-badge-wrapper">
                                        <span class="card-badge">Web Development</span>
                                        <span class="card-badge">Builder.io</span>
                                        <span class="card-badge">Data Management</span>
                                        <span class="card-badge">India’s Biggest Sporting
                                            Event</span>
                                    </div>
                                </div>

                                <a href="nationalGames.php" class="btn button-common mt-4">View Project <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- National Games row end here -->


                    <!-- CTPL website row start here 
                    <div class="row card-row">
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <img src="assets/Homepage/CTPL_Thumbnail.png" class="img-fluid image" alt="CTPL Website">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="card-wrapper">
                                <div>
                                    <h4 class="card-title">CTPL website</h4>
                                    <p class="card-para">Revamping the design and developing the
                                        website for ‘Cynosure technologies Pvt Ltd</p>

                                    <div class="card-badge-wrapper">
                                        <span class="card-badge">Redesign</span>
                                        <span class="card-badge">Heuristic Evaluation</span>
                                        <span class="card-badge">HTML 5</span>
                                        <span class="card-badge">Figma</span>
                                    </div>
                                </div>

                                <a href="CTPL.php" class="btn button-common mt-4">View Project <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                     CTPL website row end here -->

                </section>
                <!-- Development section end here -->

                <!-- Print & Graphic Design section start here -->
                <section id="printGraphic">
                    <div class="col-12 section-column">
                        <h3 class="section-title print-graphic">Print & Graphic Design</h3>
                        <p class="section-para">I did my bachelor's in design, hence 
                            here are some of the works involving design.</p>
                    </div>

                    <!-- Publication Design row start here -->
                    <div class="row card-row">
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <img src="assets/Homepage/publication-Thumbnail.png" class="img-fluid image" alt="no image">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="card-wrapper">
                                <div>
                                    <h4 class="card-title">Publication Design</h4>
                                    <p class="card-para">Some of my publication designs and print
                                        designs works</p>

                                    <div class="card-badge-wrapper">
                                        <span class="card-badge">Layout</span>
                                        <span class="card-badge">Typography</span>
                                        <span class="card-badge">InDesign</span>
                                        <span class="card-badge">Print Material</span>
                                    </div>
                                </div>

                                <a href="Publication.php" class="btn button-common mt-4">View Publication<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                      </div>
                    <!-- Publication Design row end here -->

                    <!-- Print Designs row start here 
                    <div class="row card-row">
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <img src="assets/Homepage/print_Thumbnail.png" class="img-fluid image" alt="no image">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="card-wrapper">
                                <div>
                                    <h4 class="card-title">Print Designs</h4>
                                    <p class="card-para">My design related to the fieweld of print design.</p>

                                    <div class="card-badge-wrapper">
                                        <span class="card-badge">Adobe Creative Suite</span>
                                        <span class="card-badge">Elements of design</span>
                                        <span class="card-badge">Print material</span>
                                        <span class="card-badge">Sizes & Mesurements</span>
                                        <span class="card-badge">Layout</span>
                                    </div>
                                </div>

                                <a href="" class="btn button-common mt-4">View Printables <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                       Print Designs row end here -->

                <!-- Graphic Designs row start here -->
                    <div class="row card-row">
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <img src="assets/Homepage/Graphic_Design_Thumbnail.png" class="img-fluid image" alt="no image">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="card-wrapper">
                                <div>
                                    <h4 class="card-title">Graphic Designs</h4>
                                    <p class="card-para">My initial start and early works in the
                                        field of design as a whole.</p>

                                    <div class="card-badge-wrapper">
                                        <span class="card-badge">Adobe Creative Suite</span>
                                        <span class="card-badge">Elements of design</span>
                                        <span class="card-badge">Layout</span>
                                    </div>
                                </div>

                                <a href="graphicDesign.php" class="btn button-common mt-4">View Graphics <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Graphic Designs row end here -->




                </section>
                <!-- Print & Graphic Design section end here -->

                <!-- Sketching & Photography section start here -->
                <section id="sketchingPhotography">
                    <div class="col-12 section-column">
                        <h3 class="section-title sketch-photography">Sketching & Photography</h3>
                        <p class="section-para">This section is all about my interests and
                            hobby’s, there is no paid work here, I have included it for fun. </p>
                    </div>

                    <!-- Simple yet important things  row start here -->
                    <div class="row card-row">
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <img src="assets\Homepage\Sketch_Thumbnail.png" class="img-fluid image" alt="no image">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="card-wrapper">
                                <div>
                                    <h4 class="card-title">Simple yet important things </h4>
                                    <p class="card-para">This section is all about what I like to do in my
                                        spare time. for my own sake.</p>

                                    <div class="card-badge-wrapper">
                                        <span class="card-badge">Water Color</span>
                                        <span class="card-badge">Pencil Sketch</span>
                                        <span class="card-badge">Photography</span>
                                    </div>
                                </div>

                                <a href="sketchingPhotography.php" class="btn button-common mt-4">View More<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Simple yet important things  row end here -->

                </section>
                <!-- Sketching & Photography section end here -->

                <!-- UI design samples section start here -->
                <section id="designSample">
                    <div class="col-12 section-column">
                        <h3 class="section-title design-sample">UI design works</h3>
                        <p class="section-para">These are design works, which were done for clients or as a part of my job, that I would to share.</p>
                    </div>

                    <div class="col-sm-12">
                        <div class="design-sample-slider owl-carousel owl-theme">
                            <div class="item design-item">
                                <div class="design-sample-card" style="border-radius:12px; Overflow:hidden;">
                                    <img src="assets/Homepage/Analytics_Thumbnail.gif" class="img-fluid sample-img" alt="design sample">
                                    <div class="card-inner-content">
                                        <h3>Responsive Analytics Page</h3>
                                        <div style="min-height: 200px;">
                                            <p>Designed an HR analytics page, with appropriate data visualizations.</p>
                                            <ul class="work-list mt-2">
                                                <li>Redesign</li>
                                                <li>UI Design</li>
                                                <li>Figma</li>
                                                <li>Prototyping</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="responsiveAnalytics.php" class="view-button">View Designs<i><img src="assets/images/icons/right-arrow.svg" class="img-fluid" alt="right arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item design-item">
                                <div class="design-sample-card">
                                    <img src="assets/Homepage/TLPSSO_Thumbnail.png" class="img-fluid sample-img" alt="design sample">
                                    <div class="card-inner-content">
                                        <h3>SSO Dasboard</h3>
                                        <div style="min-height: 200px;">
                                            <p>A Single Sign-In Dashboard to deliver upon stakeholder requirements, Data visualization and Presentation.</p>
                                            <ul class="work-list mt-2">
                                                <li>Redesign</li>
                                                <li>UI Design</li>
                                                <li>Figma</li>
                                                <li>Prototyping</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="ssoDashboard.php" class="view-button">View Designs<i><img src="assets/images/icons/right-arrow.svg" class="img-fluid" alt="right arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item design-item">
                                <div class="design-sample-card">
                                    <img src="assets/Homepage/Icon_pack_Thumbnail.png" class="img-fluid sample-img" alt="design sample">
                                    <div class="card-inner-content">
                                        <h3>Icon Pack</h3>
                                        <div style="min-height: 200px;">
                                            <p>Design an Icon Pack to be used in Timelabs Product Website.</p>
                                            <ul class="work-list mt-2">
                                                <li>Icon Design</li>
                                                <li>Design System</li>
                                                <li>Figma</li>
                                                <li>Adobe Suite</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="iconPack.php" class="view-button">View Designs<i><img src="assets/images/icons/right-arrow.svg" class="img-fluid" alt="right arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item design-item">
                                <div class="design-sample-card">
                                    <img src="assets/Homepage/NPS_Survey_Thumbnail.png" class="img-fluid sample-img" alt="design sample">
                                    <div class="card-inner-content">
                                        <h3>NPS Survey Form</h3>
                                        <div style="min-height: 200px;">
                                            <p>Design an user drop down menu for an HRMS software.</p>
                                            <ul class="work-list mt-2">
                                                <li>Redesign</li>
                                                <li>UI Design</li>
                                                <li>Figma</li>
                                                <li>Prototyping</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="NPS Survey.php" class="view-button">View Designs<i><img src="assets/images/icons/right-arrow.svg" class="img-fluid" alt="right arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item design-item">
                                <div class="design-sample-card">
                                    <img src="assets/Homepage/Calendar_View_Thumbnail.png" class="img-fluid sample-img" alt="design sample">
                                    <div class="card-inner-content">
                                        <h3>Calendar View</h3>
                                        <div style="min-height: 200px;">
                                            <p>Designed an calendar view for Attendance timesheet.</p>
                                            <ul class="work-list mt-2">
                                                <li>Redesign</li>
                                                <li>UI Design</li>
                                                <li>Figma</li>
                                                <li>Prototyping</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="Calendar View.php" class="view-button">View Designs<i><img src="assets/images/icons/right-arrow.svg" class="img-fluid" alt="right arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item design-item">
                                <div class="design-sample-card">
                                    <img src="assets/Homepage/User_dropdown_Thumbnail.png" class="img-fluid sample-img" alt="design sample">
                                    <div class="card-inner-content">
                                        <h3>User Drop Down</h3>
                                        <div style="min-height: 200px;">
                                            <p>Design an user drop down menu for an HRMS software.</p>
                                            <ul class="work-list mt-2">
                                                <li>Redesign</li>
                                                <li>UI Design</li>
                                                <li>Figma</li>
                                                <li>Prototyping</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="userdrop Down.php" class="view-button">View Designs<i><img src="assets/images/icons/right-arrow.svg" class="img-fluid" alt="right arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                            <div class="item design-item">
                                <div class="design-sample-card">
                                    <img src="assets/Homepage/Change_Password_Thumbnail.png" class="img-fluid sample-img" alt="design sample">
                                    <div class="card-inner-content">
                                        <h3>Change password Page</h3>
                                        <div style="min-height: 200px;">
                                            <p>Designed an Change password page, with modern UI and Realtime feedback's</p>
                                            <ul class="work-list mt-2">
                                                <li>Redesign</li>
                                                <li>UI Design</li>
                                                <li>Figma</li>
                                                <li>Prototyping</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="changePassword.php" class="view-button">View Designs<i><img src="assets/images/icons/right-arrow.svg" class="img-fluid" alt="right arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- UI design samples section end here -->
            </main>
            <!-- Main page content end here -->
        </div>
        <!-- main page column end here -->
    </div>
    <!-- page content end here -->
    <?php
    include('footer.php');
    ?>
</body>

</html>