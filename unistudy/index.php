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
									<li class="nav-item"><a class="nav-link" href="coursepython.php">Python</a></li>
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
<!--================End Navigation area =====================-->
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
							Computer engineering is a branch of engineering that integrates several fields
							of computer science and electronic engineering required to develop computer hardware and software.
							There are multiple subsets of computer engineering degrees, including software engineering,
							hardware engineering, and even data science and engineering.

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
							<h4>Our Target</h4>
							<p>
							Learn about the top computer engineering careers,
							computer science and engineering careers, subjectwise tutorials and figure out which may be the best path for you.
							</p>
						</div>

					</div>
					<div class="single_feature d-flex flex-row pb-30">
						<div class="icon">
							<span class="lnr lnr-screen"></span>
						</div>
						<div class="desc">
							<h4>Self Learning</h4>
							<p>
							Learn about the top computer engineering careers,
							computer science and engineering careers, subjectwise tutorials and figure out which may be the best path for you.
							</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Feature Area =================-->
	<section id="video">
	<div class="section_gap testimonial_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
                <div class="main_title">
				<h2 class="title"> Feature Video </h2>
				<!-- 21:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-21by9">
					<iframe class="embed-responsive-item" width="100%" height="515" src="https://www.youtube.com/embed/i7_PRPLOxVE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
				</div>
			</div>
			</div>
			</div>
			</div>
	</section>
	<!--================ Start Department Area =================-->
	<!--================ End Department Area =================-->
	 <!--================ Start Popular Courses Area =================-->
	 <div class="popular_courses lite_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h2>Popular Courses</h2>
                        <p>Top global courses are here !
						In an ideal world, your choice of programming language shouldn’t matter.
						Most of the popular languages share the same basic concepts, to the untrained eye most of them look the same,
						and let you achieve more or less the same outcome. From a developer’s perspective, a programming
						language is a tool and choosing the right one will influence one’s career, economic prospects and future happiness.
						These courses are looks at the most popular programming languages,
						examines their individual and relative merits and you decide which ones you should learn.
						</p>
                    </div>
                </div>
            </div>
            <div class="row" >
                <!-- single course -->
                <!-- single course -->
				<!-- single course -->
				<!-- single course-->
                <div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
                            <!--<div class="authr_meta">
                                <img src="img/author1.png" alt="">
                                <span>Mart Taylor</span>
							</div>-->
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="coursepython.php">Learn Python For Beginners</a>
                            </h4>
                            <p>Welcome to the Learn Python interactive Python tutorial.</p>
                        </div>
                    </div>
                </div>
				<!-- -->
				<div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src="img/courses/trainer2.jpg" alt="">
                            <!--<div class="authr_meta">
                                <img src="img/author1.png" alt="">
                                <span>Mart Taylor</span>
							</div> -->
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="coursedetails.php">Learn C For Beginners</a>
                            </h4>
                            <p>Welcome to the Learn C interactive C tutorial.</p>
                        </div>
                    </div>
                </div>
				<!-- -->
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
						<h2>Popular Articles</h2>
						<p></p>
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
