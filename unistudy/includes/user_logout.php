<script>
    var userselection = confirm("Are you sure you want to Logout?");
 
	if (userselection == true){
	 
	//alert("Your Account deleted!");
	window.location.href = 'http://localhost/UniStudy/index.php'; 
	 
	}
	 
	else{
	//alert("Your account is not deleted!");
	window.location.href = 'usersprofile.php';
	}                               
</script>
        