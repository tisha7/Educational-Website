<?php
    require_once("functions/function.php");
	include("includes/dbconn.php");
    get_header();
    get_sidebar();
    get_bread();
	
?>		
	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="POST">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead" >Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="title" name="title"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Subject </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="subject" name="subject"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Write</label>
							  <div class="controls">
								<textarea class="cleditor" id="write" name="write" rows="3"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" id="submit_btn" name="submit">Submit</button>
							  <button type="reset" class="btn" name="cancel">Cancel</button>
							</div>
						  </fieldset>
						</form>
						<?php
                    include 'includes/dbconn.php';
                    if(isset($_POST['submit'])){
                      $title=$_POST['title'];
                      $subject=$_POST['subject'];
                      $write=$_POST['write'];
                      $count;
                      if(empty($title) || empty($subject) || empty($write)){
                            echo "<script>
                            alert ('Fields are empty');
                            window.location.href='makepost.php';                                  
                            </script>";
                        }
                        else{
                        $insertion="insert into post values('$count','$title','$subject','$write')";
                        $run=mysqli_query($con,$insertion);
                        if($run){
                         echo "
                         <script>
                         alert ('You are successfully make post!');
                         window.location.href='makepost.php';                                  
                         </script>
                         ";
                        }
                        else{
                            echo "
                            <script>
                            alert ('Not create any post!');
                            window.location.href='makepost.php';                                  
                            </script>
                            ";
                           }
                        }
                    }
                    else{  
                    }
                  ?>   

					</div>

					</div><!--/span-->
					
					
					
<script>
	function get_submit()
	{
		var title = document.getElementById('title').value;
		var subject = document.getElementById('subject').value;
		var write = document.getElementById('write').value;
		
		console.log(title);
	}
</script>
<?php
    get_footer();
?>	