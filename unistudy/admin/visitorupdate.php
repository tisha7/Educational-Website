<?php
    require_once("functions/function.php");
	include("includes/dbcon.php");
    get_header();
    //get_sidebar();
    //get_bread();
    if(isset($_POST['update']))
    {	
        $id= mysqli_real_escape_string($con, $_POST['id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);	
        $subject = mysqli_real_escape_string($con, $_POST['subject']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        
        
        // checking empty fields
        if(empty($name) || empty($email) || empty($message)) {	 
            if(empty($name)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }
            if(empty($email)) {
                echo "<font color='red'>Email field is empty.</font><br/>";
            }
            if(empty($message)) {
                echo "<font color='red'>Message field is empty.</font><br/>";
            }		
        } else {	
            //updating the table
            $result = mysqli_query($con, "UPDATE contact SET con_name='$name',con_email='$email', con_subject='$subject',con_msg='$message' WHERE id=$id");
            //redirectig to the display page. In our case, it is index.php
            header("Location: visitorchangefinal.php");
        }
    }
    
?>
<?php
    //getting id from url
    //selecting data associated with this particular id
    $id=$_GET['id'];
    $result = mysqli_query($con, "SELECT * FROM contact WHERE id=$id");
    while($res = mysqli_fetch_array($result))
    {
        
        $name = $res['con_name'];
        $email = $res['con_email'];
        $subject = $res['con_subject'];
        $message = $res['con_msg'];
    }
?>	
        
            <section>
                <br>
                <br>
                <br>
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="white icon-info-sign"></i><span class="break"></span>User Info Update</h2>
					</div>
								<div class="box-content">
                                <form name="form-horizontal" method="POST" action="visitorupdate.php">
									<table class="table table-striped table-bordered bootstrap-datatable datatable">
									<tr>
                                    <td></td><td></td><td></td><td></td><th>Name:</th>   
										<td><input type="text" name="name" value="<?php echo $name;?>"></td><td></td><td></td>
                                    </tr>
                                    <td></td><td></td><td><td></td></td><th>Email:</th>
                                        <td><input type="text" name="email" value="<?php echo $email; ?>"></td><td></td><td></td>
                                    </tr>
                                    <tr>
                                    <td></td><td></td><td></td><td></td><th>Subject:</th>
                                        <td><input type="text" name="subject" value="<?php echo $subject; ?>"></td><td></td><td></td>
                                    </tr>
									<tr>
                                    <td></td><td></td><td></td><td></td><th>Message:</th>	
										<td><input type="text" name="message" value="<?php echo $message; ?>"></td><td></td><td></td>
                                    </tr>
                                    <tr>
                                    
                                    <tr>
                                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                                    </tr>
                                    <tr>
                                    <div class="form-actions">
                                    <td></td><td></td><td></td><td></td><td></td><td><button type="submit" class="btn btn-primary" id="submit_btn" name="update">Submit</button></td><td></td><td></td>
							        </div>
                                    </tr>
					        </table> 
                        </form>
					</div>
				</div><!--/span-->
                </section>
<?php
    //get_footer();
?>	