<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Tracking System</title>
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
                        <a href="#">
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
		<div class="sidebar-menu">
			<div class="col-lg-4 col-xl-3">
				<?php include('sidebar.php'); ?>
			</div>
		</div>
		<!-- Sidebar column end here -->
		<!-- main page column start here -->
		<main class="main" style="padding-left: 15px;">
			<!-- hero section start here -->
			<section id="heroSection">
				<div class="row">
					<div class="col-md-8 col-sm-12">
						<div class="tracking">
							<div class="row">
								<div class="col-sm-4"> </div>
								<div class="col-sm-8">
									<h4>Vizitrac</h4>
									<h3>A complete digital way to manage and track visitors.</h3>
									<p><span class="d-block">Designed for safety and security </span> for desktop
										and mobile</p>
								</div>
							</div>

							<!-- <img src="./assets/images/card/card_xl_frame.svg" class="img-fluid" alt="no image" /> -->

							<div class="blue-card">
								<img src="assets/images/image/Vizitrac_Dashboard.svg" width="480" height="389" alt="no image" />
								<img src="assets/images/image/Vizitrac_Mobile.svg" width="159" height="321" alt="no
								image" />
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- hero section end here -->

			<!-- Vizitrac section start here -->
			<section class="padding-y development">
				<div class="row">
					<div class="col-sm-4">
						<div class="sidebar">
							<div class="sidebar-content">
								<h3>Type</h3>
								<p>Web App, Mobile App</p>
							</div>
							<div class="sidebar-content">
								<h3>Duration</h3>
								<p>1 months</p>
							</div>
							<div class="sidebar-content">
								<h3>Tools</h3>
								<p>Figma, Google and Pen & Paper</p>
							</div>
							<div class="sidebar-content">
								<h3>Industry</h3>
								<p>IT Industry</p>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12">
								<div class="text-content">
									<h4>Vizitrac</h4>
									<h3>Dynamic experience to adaptive visitor tracking and managing system</h3>
									<p>Visitor management! seems simple, that is when you are operating a small
										office/business. when involving multiple office or a large industry it become quite
										challenging to do so. Managing and maintaining record of all the visitors in real
										time is not an do able task.</p>
									<p><b>Vizitrac</b> is a platform that tracks visitors with an cloud based centralized
										system,
										making it accessible on multiple devices simultaneously.</p>
									<p>
										The complexity of mapping diverse visitors’ needs and their scheduled timings as
										well as real-time availability of hosts, is tackled and solved in a single unified
										experience
									</p>
								</div>
							</div>

							<div class="col-sm-12">
								<div class="text-content content-bg light-orange-bg">
									<h4 class="dark-heading">Engagement</h4>
									<h3 class="primary-sub-heading">Timeline</h3>

									<div class="engagement">
										<div class="engagement-content">
											<h3>Reseach</h3>
											<div class="reseach"></div>
											<ul>
												<li>Competitor Analysis</li>
												<li>Understanding Stakeholder <br> requirements</li>
											</ul>
										</div>
										<div class="engagement-content">
											<h3>Design</h3>
											<div class="design"></div>

											<div class="list-wrapper">
												<ul class="phase-lists">
													<h3>PHASE 1</h3>
													<li>App Structure</li>
													<li>Site Map / User Flows</li>
													<li>Design Exploration</li>
												</ul>
												<ul class="phase-lists">
													<h3>PHASE 2</h3>
													<li>Design System</li>
													<li>Feedback</li>
													<li>High Fidelity Prototype</li>
												</ul>
											</div>
										</div>
										<div class="engagement-content">
											<h3>Handover</h3>
											<div class="handover"></div>
											<p>Handing over all the designs and files to Sr. Developer.</p>
										</div>
									</div>

									<h4>My role</h4>
									<p>Working with stakeholders to deliver the project timely.</p>

									<div class="d-flex gap-5">
										<div class="d-flex gap-3">
											<div class="d-flex flex-column align-items-center">
												<img src="./assets/images/image/dark_user.svg" class="img-fluid" alt="no image" />
												<span class="text-center">Sr Developer</span>
											</div>
											<div class="d-flex flex-column align-items-center">
												<img src="./assets/images/image/dark_user.svg" class="img-fluid" alt="no image" />
												<span class="text-center">CTO</span>
											</div>
											<div class="d-flex flex-column align-items-center">
												<img src="./assets/images/image/dark_user.svg" class="img-fluid" alt="no image" />
												<span class="text-center">CEO</span>
											</div>
										</div>
										<div class="d-flex flex-column align-items-center">
											<img src="./assets/images/image/orange_user.svg" class="img-fluid" alt="no image" />
											<span class="text-center">Me</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Vizitrac section end here -->

			<!-- Engagement section start here -->
			<section class="development">
				<div class="row g-4">
					<div class="col-sm-4">
					</div>

				</div>
			</section>
			<!-- Engagement section end here -->

			<!-- massive requirment section start here -->
			<section class="development">
				<div class="row g-4">
					<div class="col-sm-4">
						<div class="content-wrapper">
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>Deep dive into <br> the current manual process</p>
							</div>
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>Gathering insights and <br> connecting dots</p>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="text-content content-bg">
							<h4 class="dark-heading">Making Sense out of massive set of requirements</h4>
							<p>This visitor management system incorporates numerous parameters. To ensure complete
								efficiency, the platform takes into account various requirements of visitors (like
								Purpose, hosts, etc), appointment timings, duration and location, availability of
								hosts, schedule compliance, flexibility with changes on the go, and more.</p>
							<p>As an initial step, took a deep dive into the current process mechanism and promptly
								gathered the fact that I was venturing into an unmarked territory. It provided with
								all the more reason to apply grit to make it achievable. I established in depth
								knowhow of the problem in hand so that we could prepare for an innovative solution
								that would create a huge impact.</p>

							<div class="massive-wrapper">
								<img src="assets/images/image/massive_set.svg" class="img-fluid" alt="img-fluid" />
								<span class="img-caption">Visitor Log book entry.</span>
							</div>
							<h4 class="dark-heading heading">Initial user flow’s</h4>
							<p>I took a hypothetical scenario to better understand the everything and visualize it.</p>

							<h4 class="hypothetical-title">Hypothetical Scenario</h4>
							<p>Imagine a large cyber security company, which has reputation of being the best. Hence they
								are very strict & cautious about their visitors.</p>
							<p>There are two ways to get inside the company.</p>
						</div>
						<ol>
							<li>You directly go to reception, schedule a visit. if approved you may enter.</li>
							<li>Or you should be invited by an host. (person working in the company)</li>
						</ol>

						<p>Every person that enters the company, who is not an employee must provide basic details:</p>
						<p><b>Name, Photo ID, Contact Details, Purpose</b> and <b>Host</b>(whom visitor wants to meet)</p>

						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="detail-wrapper">
									<h4>01</h4>

									<ul>
										<li>Every visit should be scheduled before hand (Visitor Pass should be generated)
										</li>
										<li>Visit should be approved before the scheduled time (the company)</li>
										<li>Details that are being collected <br>
											<div>- Host you are meeting </div>
											<div>- the reason of the meet </div>
											<div>-duration of the meet </div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="detail-wrapper">
									<h4>02</h4>

									<ul>
										<li>When Invited by the Host, there is no need for the approval for the visit.</li>
										<li>But a visiting pass should still be generated, have all of your basic info</li>
										<li>Details that are being collected <br>
											<div>- Host you are meeting </div>
											<div>- the reason of the meet </div>
											<div>-duration of the meet </div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row g-4 mt-0 mt-sm-5">
					<div class="col-sm-4">
						<div class="content-wrapper">
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>Understanding the <br> process</p>
							</div>
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>Back to Basics</p>
							</div>
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>Recreating digitally</p>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="text-content content-bg">
							<h4 class="plan-title">Planning the functioning</h4>
							<h4 class="dark-heading">One singular unified platform to all the above requirements</h4>
							<p>The plan is to have a Simple, Intuitive process that collects all the essential data, without
								making the user feel overwhelmed with the input process.</p>
							<p>We all are familiar with the manual entry process, the assigned personal enters all the
								details one by one..i.e Name, address, Mobile number, and etc.</p>
							<p>I want to make the visit scheduling process easy and seamless, that user is able to easily
								schedule the visit</p>
						</div>
					</div>
				</div>
			</section>
			<!-- massive requirment section end here -->

			<!-- Visit Generating process section start here -->
			<section class="development">
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-8">
						<div class="visit-generating light-orange-bg">
							<h2>Visit Generating process</h2>
							<img src="assets/vizitrac/user flow.svg" class="img-fluid" alt="no image" />
							<p>This is the final user flow. (This was generated after many iterations)</p>
						</div>
					</div>
				</div>
			</section>
			<!-- Visit Generating process section end here -->

			<!-- working concept section start here -->
			<section class="development working-concept-section">
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-10">
								<div class="Working-Concept">
									<h2>Working Concept</h2>
									<p>Visitor will come and add his details, after the host approves.
										His <b>Visitor Pass</b> Will be generated.</p>
									<p>When it’s for the visitor to leave the premise, he has to checkout from his visit.</p>
									<span>This statement has some questions unanswered, I have answered them below. i.e.. What if
										visitor doesn’t checkout etc.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- working concept section end here -->

			<!-- Low Fidelity Wireframes section start here -->
			<section class="padding-y pb-0 development low-fidelity-section wireframe-section">
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-8">
						<div class="low-fidelity">
							<h2>Low Fidelity Wireframes</h2>
							<h3>Starting the screens with lo-fi to bring the ideas to clarity</h3>
							<span>Scheduling a visit flow </span>
							<p>As I wanted to present a prototype to the stakeholders I focused on trouble areas to display
								within the set constrains and standards. These included the registration, main navigation
								pages and data management.</p>
						</div>
					</div>
				</div>

				<div class="row g-4">
					<div class="col-6 col-sm-4 col-md-3 col-lg-2">
						<div class="images-wrapper">
							<img src="assets/vizitrac/Home.svg" class="img-fluid w-100" alt="wireframe" />
							<span>Home screen</span>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2">
						<div class="images-wrapper">
							<img src="assets/vizitrac/Logs.svg" class="img-fluid w-100" alt="wireframe" />
							<span>Logs Screen Wireframe</span>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2">
						<div class="images-wrapper">
							<img src="assets/vizitrac/Proccessing invite.svg" class="img-fluid w-100" alt="wireframe" />
							<span>Pre-scheduled Visit processing</span>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2">
						<div class="images-wrapper">
							<img src="assets/vizitrac/visitor details.svg" class="img-fluid w-100" alt="wireframe" />
							<span>Visitor Details</span>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2">
						<div class="images-wrapper">
							<img src="assets/vizitrac/Aditional Details.svg" class="img-fluid w-100" alt="wireframe" />
							<span>Aditional Details</span>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2">
						<div class="images-wrapper">
							<img src="assets/vizitrac/Rules & policy.svg" class="img-fluid w-100" alt="wireframe" />
							<span>Rules and Policy Page</span>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-sm-4">
					</div>

					<div class="col-sm-8">
						<div class="checkout-flow">
							<h2>Check out flow</h2>
							<p>I wanted to keep the checkout as simple as possible, hence involving only 2 screens</p>
						</div>

						<div class="row g-4 pt-3">
							<div class="col-sm-3">
								<div class="images-wrapper">
									<img src="assets/vizitrac/Home.svg" class="img-fluid w-100" alt="wireframe" />
									<span>Home Screen</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="images-wrapper">
									<img src="assets/vizitrac/Checkout.svg" class="img-fluid w-100" alt="wireframe" />
									<span>Checkout Screen</span>
								</div>
							</div>
						</div>

						<div class="checkout-flow">
							<h2>Logs screen</h2>
							<p>To keep track of upcoming visits and completed visits there is an logs section.It is password
								protected with access to only authorized personals</p>
						</div>

						<div class="row g-4 pt-4">
							<div class="col-sm-3">
								<div class="images-wrapper">
									<img src="assets/vizitrac/Home.svg" class="img-fluid w-100" alt="wireframe" />
									<span>Home Screen</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="images-wrapper">
									<img src="assets/vizitrac/Logs PIN.svg" class="img-fluid w-100" alt="wireframe" />
									<span>Pin before the Logs</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="images-wrapper">
									<img src="assets/vizitrac/Logs.svg" class="img-fluid w-100" alt="wireframe" />
									<span>All Logs recorded</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Low Fidelity Wireframes section end here -->

			<!-- Design section start here -->
			<section class="development design-section padding-y">
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12">
								<div class="design-content">
									<h2>Design</h2>
									<h3>Design system - Material Design,Tweaked for matching desired results</h3>
									<p>Material design is excellent, but I had a certain views on how the screen should look, hence
										I Tweaked a lot of elements and created a lot of components from scratch to get desired
										output.</p>
									<h4>Used Elements</h4>
									<h6>Colors</h6>
								</div>

								<div class="row g-3 pt-4">
									<div class="col-6 col-sm-2">
										<img src="assets/images/image/color_1.svg" class="img-fluid" alt="no image">
									</div>
									<div class="col-6 col-sm-2">
										<img src="assets/images/image/color_2.svg" class="img-fluid" alt="no image">
									</div>
									<div class="col-6 col-sm-2">
										<img src="assets/images/image/color_3.svg" class="img-fluid" alt="no image">
									</div>
									<div class="col-6 col-sm-2">
										<img src="assets/images/image/color_4.svg" class="img-fluid" alt="no image">
									</div>
									<div class="col-6 col-sm-2">
										<img src="assets/images/image/color_5.svg" class="img-fluid" alt="no image">
									</div>
								</div>

								<div class="design-content pt-4">
									<h6>Typography</h6>

									<img src="assets/images/image/typography.svg" class="img-fluid typography-img" alt="typography" />
								</div>
								<div class="design-content pt-4">
									<h6>Typography</h6>

									<img src="assets/images/image/typography_2.svg" class="img-fluid typography-img" alt="typography" />
								</div>
								<div class="design-content pt-4">
									<h6>Progress bar</h6>

									<img src="assets/images/image/progress-bar.svg" class="img-fluid progress-bar" alt="progress bar" />
								</div>
							</div>
						</div>

						<div class="col-sm-10">
							<div class="Working-Concept">
								<h2 class="text-left">Top Goals while Designing Screens</h2>
								<p>One of my top priority were :</p>

								<ul>
									<li>keep user informed at every step, and present information which is easy to
										understand, by having clutter free and to the point info.</li>
									<li>Offer user control to undo any step.</li>
									<li>A consistent design for all screens.</li>
								</ul>
								<p class="text-left">I basically aimed to have proper Heuristics, for amazing user
									experience.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Design section end here -->

			<!-- Some Key Noticeables start here -->
			<section class="development key-section">
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-md-8">
						<div class="key">
							<h2>Some Key Noticeables</h2>
							<h3>Keep the user Informed, & give the ability to undo actions, at any point of use. </h3>
							<p>User is informed about all the steps in the check-in process and the user can also view their
								previous inputs in the consecutive screen.</p>

							<div class="row g-4">
								<div class="col-sm-12">
									<div class="light-orange-bg mt-0">
										<div class="row">
											<div class="col-sm-3">
												<div class="images-wrapper">
													<img src="assets/vizitrac/Visitor information.svg" class="img-fluid w-100" alt="wireframe" />
													<span>Asking Visitor for Information</span>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="images-wrapper">
													<img src="assets/vizitrac/Visit Information.svg" class="img-fluid w-100" alt="wireframe" />
													<span>Showing users there entered details</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="title">
													<h3>Confirmation before taking any irreversible action.</h3>
													<p>User is presented with an pop up when making an irreversible action.</p>
												</div>
												<div class="row">
													<div class="col-sm-3">
														<div class="images-wrapper">
															<img src="assets/vizitrac/Cancel Screen.svg" class="img-fluid w-100" alt="wireframe" />
															<span>Confirming, before irreversible action</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Some Key Noticeables end here -->

			<!-- Figma layout section start here 
			<section class="development pb-0 padding-y figmaLayout-section">
				<div class="row">
					<div class="col-12">
						<div class="show-interaction">
							<div class="form-check form-switch">
								<label class="form-check-label checkbox-label" for="ShowInteractions">Show
									Interactions</label>
								<input class="form-check-input checkbox-input" type="checkbox" role="switch" id="ShowInteractions">
							</div>
						</div>
					</div> -->

					<div class="col-12">
						<div class="figma-layout">
							<div class="row">
								<div class="col-12">
									<div class="py-4 px-5 text-center">
										<img src="assets/images/image/red_box.png" class="img-fluid red-box d-none" alt="red box">
										<img src="assets/vizitrac/Interactions.png" class="img-fluid blue-box" alt="blue box">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Figma layout section end here -->


			<!-- Prototype section start here -->
			<section class="development padding-y prototype-section">
				<div class="row">
					<div class="col-md-4">
						<div class="content-wrapper">
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>Prototyping</p>
							</div>
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>High Fidelity</p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="prototype-content">
							<h2>Prototype</h2>
							<h3>Please Interact with the Prototype of Vizitrac </h3>
							<p>This is the final prototype. please interact.</p>
							<iframe style="border: 1px solid rgba(0, 0, 0, 0.1); width: 100% !important;" height="650" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2F98HjQb8fPDV0OVQjf21anR%2FMobile-Applications%3Fpage-id%3D0%253A1%26type%3Ddesign%26node-id%3D265-27570%26viewport%3D3111%252C-867%252C0.29%26t%3D9OsFLwNM8iKRlB2L-1%26scaling%3Dscale-down%26starting-point-node-id%3D265%253A27570%26show-proto-sidebar%3D1%26mode%3Ddesign" allowfullscreen></iframe>
							<span>Vizitrac Prototype.</span>
							<a href="https://www.figma.com/design/r04JVodE6DRLX9fcYnXyfR/ViziTRAC-TL-R?node-id=0-1&t=TDmixrY7l2PEbWdj-1" target="_Blank" class="btn button-common">Click here to view Figma File</a>
						</div>
					</div>
				</div>
			</section>
			<!-- Prototype section end here -->

			<!-- Vizitrac Dashboard section start here -->
			<section class="development padding-y pb-0 vizitrac-section">
				<div class="row">
					<div class="col-md-4">
						<div class="content-wrapper">
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>Data Visualization</p>
							</div>
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>Dashboard Design</p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="vizitrac-content">
							<h2>Vizitrac Dashboard</h2>
							<h3>Admin Dashboard to visualize complete data</h3>
							<p>The above mobile screens talk about how the user will register a visit. The Vizitrac is much
								more than that, it enables users to actually understand their visitors patterns and
								behaviors and make an analytical decisions on it.</p>
							<p>The objective is that admin can understand and see these patterns just by looking at the
								dashboard.</p>
							<h4>Planning the functioning</h4>
							<h3>One singular unified dashboard to deliver complete scenario</h3>
							<p>Dashboards are meant to provide at-a glance views of key performing indicators (KPI) to a
								particular objective.</p>
							<p>The Vizitrac dashboard is supposed to present data, by number of visitors, time, location,
								frequency and much more</p>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="Working-Concept">
									<h2 class="text-left">Top Goals while Designing Screens</h2>
									<p>One of my top priority were :</p>

									<ul>
										<li>keep user informed at every step, and present information which is easy to
											understand, by having clutter free and to the point info.</li>
										<li>Offer user control to undo any step.</li>
										<li>A consistent design for all screens.</li>
									</ul>
									<p class="text-left">I basically aimed to have proper Heuristics, for amazing user
										experience.</p>
								</div>
							</div>
						</div>

						<div class="vizitrac-content">
							<h5>Low Fidelity Wireframes</h5>
							<h3>Starting the screens <br> with lo-fi to bring the ideas to clarity</h3>
							<h6>Structuring the data </h6>
							<p>As I wanted to present a prototype to that would be focused on trouble areas to display
								within the set constrains and standards. These included data, by number of visitors, time,
								location, frequency and much more</p>
							<img src="assets/images/image/Desktop_1.svg" class="img-fluid" alt="no image">
							<span>This wire frame was delivering on the Stakeholder goals.</span>
							<p>This screen was very crucial in designing dashboard, as it helped us to understand and decide
								what information was to presented and how to present it. this decided the final layout of
								the page.</p>
							<img src="assets/vizitrac/Desktop - 5.svg" class="img-fluid" alt="no image">
							<span>This hi-fi wireframe was developed. (This was generated after many iterations)</span>
							<p>The above screen gives a detailed Idea of how the data will be presented, what graph to use
								and in which scenario. with detailed data visualization.</p>
						</div>

					</div>
				</div>
			</section>
			<!-- Vizitrac Dashboard section end here -->

			<!-- Final screen section start here -->
			<section class="development padding-y finalscreen-section">
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-8">
						<div class="full-screen">
							<h2>Final Screen</h2>
							<h3>This is the final vizitrac dashboard </h3>
						</div>
					</div>
				</div>

				<div class="row pt-3">
					<div class="col-12 text-center">
						<div class="full-screen-layout">
							<img src="assets/vizitrac/Desktop - 6.svg" class="w-75 px-3 py-3 img-fluid" alt="Final viziTRAC dashboard">
						</div>
					</div>
				</div>
			</section>
			<!-- Final screen section end here -->

			<!-- sample Wrapping Up section start here -->
			<section class="development padding-y pb-0 vizitrac-section">
				<div class="row">
					<div class="col-md-4">
						<div class="content-wrapper">
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>Things about project</p>
							</div>
							<div class="content">
								<img src="assets/images/image/half_rectangle.svg" class="img-fluid" alt="no image">
								<p>My thoughts of the project</p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="vizitrac-content">
							<h2>Wrapping Up!</h2>
							<h3>Limitations</h3>
                                                        <p>Just like any other UX design project this also not perfect, there are limitations in this project.The limitations are :</p>
								<ul>
									<li>One of the biggest limitation is Inedequate User research, More user research coulds have been done on the project.</li>
									<li>Due to lack of user reseach, the user persona, was not made, do it is a gerneralised solution.</li>
									<li>User testing was absolutely not done, which could not generate the feedback of the new design.</li>
								</ul>
							<h3>Takeaways</h3>
                                                          <p>This project is kind of special to me as, right from Brain stromming, Wireframing to prototyping everything was done by, hence i learn a lot from this project:</p>
							
								<ul>
									<li>I learn a lot about Visitor mangements and complexity involved in it.</li>
									<li>Also got an fair amount of exporure into the data analysic world, how by analysing large data you make informed dicissions.</li>
									<li>I improved my team working ability, while working with app developer an learning how to assint an app developer better.</li>
								</ul>
							</div>							
						</div>
							<!-- page content end here -->
           
                                   <!-- footer start here -->
 <footer class="footer">
            <div class="row g-4">
                <div class="col-sm-12 col-md-4">
                    <h3>
                        <div class="d-flex"> <b>Rishabh</b>
                            <div class="fw-normal">’s</div>
                        </div>
                        <div class="fw-normal">Contact Deatils</div>
                    </h3>
                    <p>This website was designed by Rishabh</p>
                </div>
                <div class="col-sm-12 col-md-4"></div>
                <div class="col-sm-12 col-md-4">
                    <div class="backto-top">
                        <h3 class="slider-top">
                            <a onclick="scrollToTopSmoothly()"><i class="bi bi-arrow-up-short"></i></a>
                        </h3>
                    </div>
                    <div class="contact-details">
                        <a href="#" class="email-address">
                            <img src="./assets/images/icons/email.svg" class="img-fluid" alt="no image">
                            rishabh1320@gmail.com
                        </a>
                        <a href="#" class="contact-number">
                            <img src="./assets/images/icons/phone.svg" class="img-fluid" alt="no image">
                            +91 9916519867
                        </a>
                        <a href="#" class="linkedin">
                            <img src="./assets/images/icons/linkedin_icon.svg" class="img-fluid" alt="no image">
                            Linked In
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end here -->

</body>

</html>