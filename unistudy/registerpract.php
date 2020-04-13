<?php
    include 'includes/dbconn.php';
?>
<form action="register.php" method="POST"> 
                    <input type="text" id="name" class="fadeIn first" name="name" placeholder="Full Name"><br>
                    <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username"><br>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password"><br>
                    <input type="password" id="cpassword" class="fadeIn fourth" name="cpassword" placeholder="Confirm Password"><br>
                    <input type="email" id="email" class="fadeIn fifth" name="email" placeholder="Email"><br>
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