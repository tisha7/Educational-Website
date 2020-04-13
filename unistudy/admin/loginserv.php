<?php
include 'includes/dbconn.php';
$error=''; //Variable to Store error message;
if(isset($_POST['login'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
    $error = "Username or Password is Invalid";
 }
 else
 {
    //Define $user and $pass
    $user=$_POST['username'];
    $pass=$_POST['password'];
    //Establishing Connection with server by passing server_name, user_id and pass as a patameter
    //sql query to fetch information of registerd user and finds user match.
    $query = mysqli_query($con, "SELECT * FROM admin WHERE name='$user' AND password='$pass'");
    $rows = mysqli_num_rows($query);
 if($rows == 1){
    //header("Location: index.php");// Redirecting to other page
    echo "
        <script>
        alert ('Admin account login successfully!');
        window.location.href='userprofile.php';                                  
        </script>
        ";
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