<?php
include 'includes/dbconn.php';
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
    $error = "Username or Password is Invalid";
 }
 else
 {
    //Define $user and $pass
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    //Establishing Connection with server by passing server_name, user_id and pass as a patameter
    //sql query to fetch information of registerd user and finds user match.
    $query = mysqli_query($con, "SELECT * FROM user WHERE user_username='$user' AND user_password='$pass'");
    $rows = mysqli_num_rows($query);
 if($rows == 1){
    //header("Location: index.php");// Redirecting to other page
    echo "Your account login successfully!";
      header("Location: usersprofile.php");
    // Redirecting to other page
 }
 else
 {
    $error = "Username of Password is Invalid";
 }
    mysqli_close($con);// Closing connection
 }
}
?>