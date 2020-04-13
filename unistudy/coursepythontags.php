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
                        <h4 class="title">Tags and Attributes</h4>
                        <div class="content">
                        <br>
                        Tag: class attributes
                        <br>
                        <br>
                        Python class: Objects and classes
                        <br>
                        <br>
                        Introduction
                        <br>
                        <br>
                        Technology always evolves. What are classes and where do they come from?
                        <br>
                        <br>
                        1. Statements:
                        <br>
                        <br>
                        In the very early days of computing, programmers wrote only commands.
                        <br>
                        <br>
                        2. Functions:
                        <br>
                        <br>
                        Reusable group of statements, helped to structure that code and it improved readability.
                        <br>
                        <br>
                        3. Classes:
                        <br>
                        <br>
                        Classes are used to create objects which have functions and variables. Strings are examples of objects: A string book has the functions book.replace() and book.lowercase(). This style is often called object oriented programming.
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
