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
                  <h2 class="inactive underlineHover"><a href="login.php"> Sign In</a> </h2>
                  <h2 class="active"><a href="register.php"> Sign up</a></h2>
                 
                  <!-- Login Form -->
                  <form action="register.php" method="POST"> 
                    <input type="text" id="name" class="fadeIn first" name="name" placeholder="Full Name">
                    <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
                    <input type="password" id="cpassword" class="fadeIn fourth" name="cpassword" placeholder="Confirm Password">
                    <input type="email" id="email" class="fadeIn fifth" name="email" placeholder="Email">
                    <input type="submit" class="fadeIn sixth" value="Register" name="reg">
                  </form>
                  <?php
                  if(isset($_POST['reg'])){
                    
                      $name=$_POST['name'];
                      $username=$_POST['username'];
                      $password=$_POST['password'];
                      $cpassword=$_POST['cpassword'];
                      $email=$_POST['email'];

                      if($password==$cpassword){
                          $query="select * from user where user_email='$email'";
                          $query_check=mysqli_query($con,$query);

                          if($query_check){
                              if(mysqli_num_rows($query_check)>0){
                                   echo "
                                   <script>
                                   alert ('Email already in use');
                                   window.location.href='login.php';                                  
                                   </script>
                                   ";
                              }
                              else{
                                   $insertion="insert into user values('$count','$name','$username','$password','$email')";
                                   $run=mysqli_query($con,$insertion);
                                   if($run){
                                    echo "
                                    <script>
                                    alert ('Your account registered successfully!');
                                    window.location.href='index.php';                                  
                                    </script>
                                    ";
                                   }
                                   else{
                                    echo "
                                    <script>
                                    alert ('Connection failed!');
                                    window.location.href='register.php';                                  
                                    </script>
                                    ";
                                    //run korte na parle connection failed bolbe
                                   }
                              }
                          }
                          else{
                            echo "
                            <script>
                            alert ('Database Error');
                            window.location.href='register.php';                                  
                            </script>
                            ";
                            //query_check_email
                          }
                          
                      }
                      else{
                        echo "
                        <script>
                        alert ('Password and Confirm Password does not match!');
                        window.location.href='register.php';                                  
                        </script>
                        ";
                          //password_check
                      }
                  }
                  else{
                    //isset part
                  }

                  ?>
                </div>
              </div>
        </div>
<?php
    get_footer();
?>