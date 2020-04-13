<?php
    include 'includes/dbconn.php';
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
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item active"><a class="nav-link" href="coursepython.php">Python</a></li>
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
    <!--================Start Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Learn Python For Beginners</h2>
                            <p></p>
                            <div class="page_link">
                                <a href="index.php">Home</a>
                                <a href="contact.php">Pages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
        <!--================ Start Course Details Area =================-->
        <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="img/courses/pythonimg.jpg" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">Canvas in Python</h4>
                        <div class="content">
                        The Canvas widget supplies graphics facilities for Tkinter. Among these graphical objects are lines, circles, images, and even other widgets. With this widget it's possible to draw graphs and plots, create graphics editors, and implement various kinds of custom widgets. 
                        <br>
                        <br>
                        We demonstrate in our first example, how to draw a line.
                        <br>
                        <br> 
                        The method create_line(coords, options) is used to draw a straight line. The coordinates "coords" are given as four integer numbers: x1, y1, x2, y2 This means that the line goes from the point (x1, y1) to the point (x2, y2) After these coordinates follows a comma separated list of additional parameters, which may be empty. We set, for example, the colour of the line to the special green of our website: fill="#476042" 
                        <br>
                        <br>
                        We kept the first example intentionally very simple. We create a canvas and draw a straight horizontal line into this canvas. This line vertically cuts the canvas into two areas. 
                        <br>
                        <br>
                        The casting to an integer value in the assignment "y = int(canvas_height / 2)" is superfluous, because create_line can work with float values as well. They are automatically turned into integer values. In the following you can see the code of our first simple script: 
                        <br>
                        <br>
                        </div>
                         </section>         
    <section class="course_details_area section_gap">
    <div class="container">
            <div class="row">
            <div class="col-lg-8 course_details_left">
                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="feedback">
                            <h6>Your Feedback</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <a href="#" class="primary-btn text-right text-uppercase">Submit</a>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
    </div>
</section>

    
    <!--================Contact Area =================-->
    
    <!--================End Contact Area =================-->
    <?php
    get_footer();
    ?>
