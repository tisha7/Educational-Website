<?php
    require_once("functions/function.php");
    get_header();
    get_sidebar();
    get_bread();
?>		
	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="white icon-info-sign"></i><span class="break"></span>Visitor Info</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
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
						  <tbody>
							<tr>
                                <td>01</td>
								<td>Nujhat Maliha</td>
								<td class="center">maliha@gmail.com</td>
								<td class="center">Test Subject</td>
								<td class="center">Welcome message</td>
								<td class="center">
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
                                <td>02</td>
								<td>Tamanna Rahman</td>
								<td class="center">tamanna@gmail.com</td>
								<td class="center">Problem</td>
								<td class="center">Hello world!</td>
								<td class="center">
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
    get_footer();
?>	