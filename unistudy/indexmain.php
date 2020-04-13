<?php
    require_once("functions/function.php");
    get_header();
    
?>
<!--================Start Navigation area =================-->
<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="courses.php">Courses</a></li>
									<li class="nav-item"><a class="nav-link" href="course-details.php">Course Details</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.php">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
            </nav>
        </div>
	</header>
 <!--================End Navigation area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="banner_content">
							<h2>
                                Best educational<br>
								website
							</h2>
							<p>
								In the history of modern astronomy, there is probably no one greater leap forward than the building and launch
								of
								the space telescope known as the Hubble.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	<section class="feature_area">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-lg-4">
					<div class="single_feature d-flex flex-row pb-30">
						<div class="icon">
							<span class="lnr lnr-book"></span>
						</div>
						<div class="desc">
							<h4>New Classes</h4>
							<p>
								In the history of modern astronomy, there is probably no one greater leap forward building and launch.
							</p>
						</div>
					</div>
					<div class="single_feature d-flex flex-row pb-30">
						<div class="icon">
							<span class="fa fa-trophy"></span>
						</div>
						<div class="desc">
							<h4>Top Courses</h4>
							<p>
								In the history of modern astronomy, there is probably no one greater leap forward building and launch.
							</p>
						</div>
					</div>
					<div class="single_feature d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-screen"></span>
						</div>
						<div class="desc">
							<h4>Full E-Books</h4>
							<p>
								In the history of modern astronomy, there is probably no one greater leap forward building and launch.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Feature Area =================-->

	<!--================ Start Department Area =================-->
	<div class="department_area section_gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="dpmt_courses">
						<div class="row">
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon1.png" alt="">
									</div>
									<h4>Languages</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon2.png" alt="">
									</div>
									<h4>Business</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon3.png" alt="">
									</div>
									<h4>Literature</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon4.png" alt="">
									</div>
									<h4>Software</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon5.png" alt="">
									</div>
									<h4>Design</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon6.png" alt="">
									</div>
									<h4>Coaching</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="offset-lg-4 col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon7.png" alt="">
									</div>
									<h4>Development</h4>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="dpmt_right">
						<h1>Over 2500 Courses from 5 Platform</h1>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think about setting up your own viewing station. In the life of any aspiring astronomer that it is
							time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
						<p>It’s exciting to think about setting up your own viewing station. In the life of any aspiring astronomer that
							it is time to buy that first telescope exciting is time to buy that first.</p>
						<a href="#" class="primary-btn text-uppercase">Explore Courses</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Department Area =================-->

	<!--================ Start Popular Courses Area =================-->
	<div class="popular_courses lite_bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<h2>Popular Courses</h2>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think about setting up your own viewing station.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
								<span>Mart Taylor</span>
							</div>
						</div>
						<div class="course_content">
							<h4>
								<a href="course-details.html">Learn React js beginners</a>
							</h4>
							<p>When television was young, there was a huge popular show based on the still popular fictional character of
								Superman.</p>
							<div class="course_meta d-flex justify-content-between">
								<div>
									<span class="meta_info">
										<a href="#"><i class="lnr lnr-user"></i>355</a>
									</span>
									<span class="meta_info">
										<a href="#">
											<i class="lnr lnr-bubble"></i>35
										</a>
									</span>
								</div>
								<div>
									<span class="price">$150</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
								<span>Mart Taylor</span>
							</div>
						</div>
						<div class="course_content">
							<h4>
								<a href="course-details.html">Learn React js beginners</a>
							</h4>
							<p>When television was young, there was a huge popular show based on the still popular fictional character of
								Superman.</p>
							<div class="course_meta d-flex justify-content-between">
								<div>
									<span class="meta_info">
										<a href="#">
											<i class="lnr lnr-user"></i>355
										</a>
									</span>
									<span class="meta_info"><a href="#">
											<i class="lnr lnr-bubble"></i>35
										</a></span>
								</div>
								<div>
									<span class="price df_color1">$150</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
								<span>Mart Taylor</span>
							</div>
						</div>
						<div class="course_content">
							<h4>
								<a href="course-details.html">Learn React js beginners</a>
							</h4>
							<p>When television was young, there was a huge popular show based on the still popular fictional character of
								Superman.</p>
							<div class="course_meta d-flex justify-content-between">
								<div>
									<span class="meta_info">
										<a href="#">
											<i class="lnr lnr-user"></i>355
										</a>
									</span>
									<span class="meta_info"><a href="#">
											<i class="lnr lnr-bubble"></i>35
										</a></span>
								</div>
								<div>
									<span class="price">$150</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
								<span>Mart Taylor</span>
							</div>
						</div>
						<div class="course_content">
							<h4>
								<a href="course-details.html">Learn React js beginners</a>
							</h4>
							<p>When television was young, there was a huge popular show based on the still popular fictional character of
								Superman.</p>
							<div class="course_meta d-flex justify-content-between">
								<div>
									<span class="meta_info">
										<a href="#">
											<i class="lnr lnr-user"></i>355
										</a>
									</span>
									<span class="meta_info"><a href="#">
											<i class="lnr lnr-bubble"></i>35
										</a></span>
								</div>
								<div>
									<span class="price df_color2">$150</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Popular Courses Area =================-->

	
	<?php
    get_testimonial();
    ?>
	<!--================ Start Events Area =================-->
	<div class="events_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<h2>Upcoming Events</h2>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think about setting up your own viewing station.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="single_event">
								<div class="row align-items-center">
									<div class="col-lg-6 col-md-5">
										<div class="event_thumb">
											<img src="img/event1.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-6 col-md-7">
										<div class="event_details">
											<p>25th February, 2017</p>
											<h4>
												<a href="#">The Universe Through A Child S Eyes</a>
											</h4>
											<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor
												sit amet consec tetur adipisicing elit sed.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="single_event">
								<div class="row align-items-center">
									<div class="col-lg-6 col-md-5">
										<div class="event_thumb">
											<img src="img/event2.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-5 col-md-7">
										<div class="event_details">
											<p>25th February, 2017</p>
											<h4>
												<a href="#">The Universe Through A Child S Eyes</a>
											</h4>
											<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor
												sit amet consec tetur adipisicing elit sed.</p>
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
	<!--================ End Events Area =================-->
    <?php
    get_footer();
    ?>