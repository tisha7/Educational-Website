<?php
    require_once("functions/function.php");
    get_header();
?>		
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item active"><a class="nav-link" href="about-us.php">About</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="coursepython.php">Python</a></li>
									<li class="nav-item"><a class="nav-link" href="coursec.php">C</a></li>
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
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>About Us</h2>
                            <p>In the history of modern astronomy, there is probably no one greater leap forward than
                                the
                                building and launch of the space telescope known as the Hubble.</p>
                            <div class="page_link">
                                <a href="index.html">Home</a>
                                <a href="about-us.html">About</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Department Area =================-->
    <div class="department_area section_gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img class="img-fluid" src="img/about-img.png" alt="">
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="dpmt_right">
                        <h1>Over 2500 Courses from 5 Platform</h1>
                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                            telescope. It’s
                            exciting to think about setting up your own viewing station. In the life of any aspiring
                            astronomer that it is
                            time to buy that first telescope. It’s exciting to think about setting up your own viewing
                            station.</p>
                        <p>It’s exciting to think about setting up your own viewing station. In the life of any
                            aspiring astronomer that
                            it is time to buy that first telescope exciting is time to buy that first.</p>
                        <a href="#" class="primary-btn text-uppercase">Explore Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Department Area =================-->

    <!--================ Start Instructor Area =================-->
    <div class="instructors_area lite_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h2>Our Instructors</h2>
                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                            telescope. It’s exciting to think about setting up your own viewing station.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-instructor -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single_instructor">
                        <div class="author">
                            <img src="img/instructors/ins1.jpg" alt="">
                        </div>
                        <div class="author_decs">
                            <h4>Ethel Davis</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-instructor -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single_instructor">
                        <div class="author">
                            <img src="img/instructors/ins2.jpg" alt="">
                        </div>
                        <div class="author_decs">
                            <h4>Rodney Cooper</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-instructor -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single_instructor">
                        <div class="author">
                            <img src="img/instructors/ins3.jpg" alt="">
                        </div>
                        <div class="author_decs">
                            <h4>Dane Walker</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-instructor -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single_instructor">
                        <div class="author">
                            <img src="img/instructors/ins4.jpg" alt="">
                        </div>
                        <div class="author_decs">
                            <h4>Lena Keller</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Instructor Area =================-->

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
                                    <h4>Development</h4>
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
                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                            telescope. It’s
                            exciting to think about setting up your own viewing station. In the life of any aspiring
                            astronomer that it is
                            time to buy that first telescope. It’s exciting to think about setting up your own viewing
                            station.</p>
                        <p>It’s exciting to think about setting up your own viewing station. In the life of any
                            aspiring astronomer that
                            it is time to buy that first telescope exciting is time to buy that first.</p>
                        <a href="#" class="primary-btn text-uppercase">Explore Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Department Area =================-->

    <!--================ Start Fact Area =================-->
    <div class="fact_area overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h2>Facts that Make us Unique</h2>
                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                            telescope. It’s
                            exciting to think about setting up your own viewing station.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single features -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_fact">
                        <div class="f_icon">
                            <img src="img/f-icons/icon1.png" alt="">
                        </div>
                        <h4>Expert Mentors</h4>
                        <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
                            labore dolor sit
                            amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt
                            labore dolor sit amet
                            consec tetur adipisicing elit, seddo eiusmod tempor.</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_fact">
                        <div class="f_icon">
                            <img src="img/f-icons/icon2.png" alt="">
                        </div>
                        <h4>25000+ Courses</h4>
                        <p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt
                            labore dolor sit
                            amet consec.</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_fact">
                        <div class="f_icon">
                            <img src="img/f-icons/icon3.png" alt="">
                        </div>
                        <h4>Student Membership</h4>
                        <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
                            labore dolor sit
                            amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt
                            labore dolor sit amet
                            consec tetur adipisicing elit, seddo eiusmod tempor.</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_fact">
                        <div class="f_icon">
                            <img src="img/f-icons/icon4.png" alt="">
                        </div>
                        <h4>Lifetime Access</h4>
                        <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
                            labore dolor sit
                            amet consec tetur adipisicing elit sed do eiusmod.</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_fact">
                        <div class="f_icon">
                            <img src="img/f-icons/icon5.png" alt="">
                        </div>
                        <h4>Source File Included</h4>
                        <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
                            labore dolor sit
                            amet consec tetur adipisicing elit sed do eiusmod.</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_fact">
                        <div class="f_icon">
                            <img src="img/f-icons/icon6.png" alt="">
                        </div>
                        <h4>Live Support</h4>
                        <p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt
                            labore dolor sit
                            amet consec.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Fact Area =================-->
<?php
    get_testimonial();
    get_footer();
?>