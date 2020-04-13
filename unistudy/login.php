<?php
	include("loginserv.php"); // Include loginserv for checking username and password
	session_start();
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
							<li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="courses.html">Courses</a></li>
									<li class="nav-item"><a class="nav-link" href="course-details.html">Course Details</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
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
 <div id="main">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                  <!-- Tabs Titles -->
                  <h2 class="active"> <a href="login.php">Sign In</a></h2>
                  <h2 class="inactive underlineHover"><a href="registertis.php">Sign up</a> </h2>
              
                  <!-- Icon -->
                  <div class="fadeIn first">
                    <h2> Enter username and password</h2>
                  </div>
				  
				  
                  <!-- Login Form -->
                  <form action="login.php" method="POST" style="text-align:center;">
                    <input type="text" id="username" class="fadeIn second" name="user" placeholder="Username">
                    <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Password">
                    <input type="submit" class="fadeIn fourth" value="Log In" name="submit">
                  </form>
				  <span><?php echo $error; ?></span>
				  
                  <!-- Remind Passowrd -->
                  <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                  </div>
                </div>
              </div>
        </div>
<?php
    get_footer();
?>