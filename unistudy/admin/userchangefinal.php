<?php
    require_once("functions/function.php");
	include("includes/dbcon.php");
    get_header();
    get_sidebar();
    get_bread();
    $result = mysqli_query($con, "SELECT * FROM user ORDER BY user_id asc");
?>		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="white icon-info-sign"></i><span class="break"></span>User Info</h2>
					</div>
								<div class="box-content">
									<table class="table table-striped table-bordered bootstrap-datatable datatable">
									  <thead>
										  <tr>
										    <th>No.</th>
											<th>Name</th>
											<th>Username</th>
											<th>Password</th>
											<th>Email</th>
											<th>Actions</th>
										  </tr>
									  </thead>
									<?php	
										$id=1;
										while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
										echo "<td>$id</td>";
										echo "<td>$row[user_name]</td>";
										echo "<td>$row[user_username]</td>";
										echo "<td>$row[user_password]</td>";
										echo "<td>$row[user_email]</td>";
										echo "<td><a href=\"userupdatefinal.php?id=$row[user_id]\">Edit</a> | <a href=\"userdeletefinal.php?id=$row[user_id]\"onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
									    echo "</tr>";
                                        $id++;
							            }
						            ?>
					        </table> 
					    </div>
				    </div><!--/span-->
<?php
    get_footer();
?>	