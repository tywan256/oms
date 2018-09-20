<?php 	require_once 'includes/header.php';
		require_once 'php_action/classes/class.vendor.php';

 ?>

<?php if(isset($_GET['v']) && $_GET['v']=='manved'){ ?>

<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Vendor</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Vendor</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<a class="btn btn-default button1" href="vendor.php?v=addved"> <i class="glyphicon glyphicon-plus-sign"></i> Add Vendor </a>
				</div> <!-- /div-action -->				
				
				<table class="table" id="manageVendorTable">
					<thead>
						<tr>
							<th>USER ID</th>
							<th>FIRST  NAME</th>
							<th>LAST NAME</th>
							<th>STATUS</th>
							<th style="width:15%;">Options</th>
						</tr>
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<?php } ?>

<?php if(isset($_GET['v']) && $_GET['v']=='addved'){

	if(isset($_POST['createVendorBtn'])){ 

		$messages = register($_POST["firstName"],$_POST["lastName"],$_POST["Category"],$_POST["phoneNumber"],$_POST["Email"],$_POST["ageBracket"],$_POST["Country"],$_POST["countryCode"],$_POST["Gender"],$_POST["Location"],$_POST["Town"],$_POST["stallNumber"],$_POST["Status"],$_POST["xikilaAccount"],$_POST["wantBancoAccount"],$_POST["bancoAccount"]);
	}
?>

<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Vendor</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Vendor</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

		    	<form class="form-horizontal" id="submitVendorForm" method="POST" >
			      <div class="modal-header">
			        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Vendor</h4>
			      </div>
			      <div class="modal-body">

			      	<div class="messages">
						<?php if(isset($messages)) {
							echo '<div class="alert alert-warning" role="alert">
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									'.$messages.'</div>';
						} ?>
					</div>

			      	<div class="col-sm-6">
				        <div class="form-group">
				        	<label for="firstName" class="col-sm-3">First Name: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" autocomplete="off" required>
							    </div>
				        </div> <!-- /form-group-->	    
				        <div class="form-group">
				        	<label for="lastName" class="col-sm-3">Last Name: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" autocomplete="off" required>
							    </div>
				        </div> <!-- /form-group-->	 				        
				        <div class="form-group">
				        	<label for="Category" class="col-sm-3">Category: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <select type="text" class="form-control" id="Category" placeholder="Category" name="Category" autocomplete="off" required>
							      	<option value="">~~SELECT~~</option>
							      	<option >Runner</option>
							      	<option >Market Vendor</option>
							      	<option >Street Hawker</option>
							      	<option >Farmer</option>
							      	<option >Individual Vendor</option>
							      	<option >Service Provider</option>
							      	<option >Individual Vendor</option>
							      </select>
							    </div>
				        </div> <!-- /form-group-->	
				        <div class="form-group">
				        	<label for="phoneNumber" class="col-sm-3">Phone Number</label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number" name="phoneNumber" autocomplete="off" required>
							    </div>
				        </div> <!-- /form-group-->	    
				        <div class="form-group">
				        	<label for="Email" class="col-sm-3 ">Email: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="Email" placeholder="Email" name="Email" autocomplete="off" required>
							    </div>
				        </div><!--  /form-group	-->  
				        <div class="form-group">
				        	<label for="ageBracket" class="col-sm-3">Age Bracket: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <select type="text" class="form-control" id="ageBracket" placeholder="Age Bracket" name="ageBracket" autocomplete="off" required>
							      	<option value="">~~SELECT~~</option>
							      	<option >0-15</option>
							      	<option >15-25</option>
							      	<option >25-45</option>
							      	<option >45+</option>
							      </select>
							    </div>
				        </div> <!-- /form-group--> 
			        </div>      	        

			      	<div class="col-sm-6">
				        <div class="form-group">
				        	<label for="Country" class="col-sm-3">Country: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <select type="text" class="form-control" id="Country" placeholder="Country" name="Country" autocomplete="off" required>
							      	<option value="">~~SELECT~~</option>
							      	<option >Angola</option>
							      </select>
							    </div>
				        </div> <!-- /form-group-->
				        <div class="form-group">
				        	<label for="Country" class="col-sm-3">Country Code: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="countryCode" placeholder="Country Code" name="countryCode" autocomplete="off" required>
							    </div>
				        </div> <!-- /form-group-->	
				        <div class="form-group">
				        	<label for="Gender" class="col-sm-3">Gender</label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <select type="text" class="form-control" id="Gender" placeholder="Gender" name="Gender" autocomplete="off" required>
							      	<option value="">~~SELECT~~</option>
							      	<option value="MALE">MALE</option>
							      	<option value="FEMALE">FEMALE</option>
							      </select>
							    </div>
				        </div> <!-- /form-group-->				        	
				        <div class="form-group">
				        	<label for="Town" class="col-sm-3">Town: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="Town" placeholder="Town" name="Town" autocomplete="off" required>
							    </div>
				        </div> <!-- /form-group-->	
					    <div class="form-group">
					       	<label for="Location" class="col-sm-3">Location: </label>
					        <label class="col-sm-1 control-label">: </label>
								<div class="col-sm-8">
								    <input type="text" class="form-control" id="Location" placeholder="Location" name="Location" autocomplete="off" required>
								</div>
					    </div> <!-- /form-group-->		
				        <div class="form-group">
				        	<label for="stallNumber" class="col-sm-3">Stall Number: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="stallNumber" placeholder="Stall Number" name="stallNumber" autocomplete="off" required>
							    </div>
				        </div> <!-- /form-group-->
				        <div class="form-group">
				        	<label for="Status" class="col-sm-3">Status: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <select class="form-control" id="Status" name="Status" required>
							      	<option value="">~~SELECT~~</option>
							      	<option value="1">Available</option>
							      	<option value="2">Not Available</option>
							      </select>
							    </div>
				        </div> <!-- /form-group-->   
			        </div> 

			        <div class="col-sm-12">
			      		<div class="form-group">
				        	<label  class="col-sm-12">DO YOU HAVE XIKILA ACCOUNT?
								<br/>
								<label class="small">
							      <input type="radio" name="xikilaAccount" value="Yes"> Yes</label>
							     <br/>
							    <label class="small">
							      <input type="radio" name="xikilaAccount" value="No"> No</label>
							    <br/>
							</label>
				        </div> <!-- /form-group--> 
			      		<div class="form-group">
			      			<label  class="col-sm-12">DO YOU HAVE BANCO POSTAL ACCOUNT?
								<br/>
								<label class="small">
							      <input type="radio" name="bancoAccount" value="Yes"> Yes</label>
							     <br/>
							    <label class="small">
							      <input type="radio" name="bancoAccount" value="No"> No</label>
							    <br/>
				        		
							</label>
				        </div> <!-- /form-group--> 
			      		<div class="form-group">
			      			<label class="col-sm-12">DO YOU WANT BANCO POSTAL ACCOUNT?
								<br/>
								<label class="small">
							      <input type="radio" name="wantBancoAccount" value="Yes"> Yes</label>
							     <br/>
							    <label class="small">
							      <input type="radio" name="wantBancoAccount" value="No"> No</label>
							    <br/>				        		  	
							</label>
				        </div> <!-- /form-group--> 			        
			        	<button type="submit" class="btn btn-primary pull-right" id="createVendorBtn" name="createVendorBtn" data-loading-text="Loading..." autocomplete="off">Save Changes</button>
			      	</div>

			      </div> <!-- /modal-body -->
		     	</form>
			     <!-- /.form -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<?php } ?>


<?php if(isset($_GET['v']) && $_GET['v']=='editved' && isset($_GET['userid'])){ 

	$vendor = getSelectedVendor($_GET['userid']);
	if(isset($_POST['editVendorBtn'])){ 

		$messages = editVendor($_GET['userid'],$_POST["editFirstName"],$_POST["editLastName"],$_POST["editCategory"],$_POST["editPhoneNumber"],$_POST["editEmail"],$_POST["editAgeBracket"],$_POST["editCountry"],$_POST["editCountryCode"],$_POST["editGender"],$_POST["editTown"],$_POST["editLocation"],$_POST["editStallNumber"],$_POST["editStatus"],$_POST["editXikilaAccount"],$_POST["editBancoAccount"],$_POST["editWantBancoAccount"]);
	}
?>

<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Vendor</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Vendor</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

		    	<form class="form-horizontal" id="editVendorForm" method="POST">
			      <div class="modal-header">
			        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Vendor</h4>
			      </div>
			      <div class="modal-body">

			      	<div class="messages">
						<?php if(isset($messages)) {
							echo '<div class="alert alert-warning" role="alert">
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									'.$messages.'</div>';
						} ?>
					</div>

			      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
								<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
								<span class="sr-only">Loading...</span>
							</div>

				      <div class="edit-vendor-result">
				      	<div class="col-sm-6">
					        <div class="form-group">
					        	<label for="firstName" class="col-sm-3">First Name: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editFirstName" placeholder="First Name" name="editFirstName" value="<?php echo $vendor['firstname'];?>" autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->	    
					        <div class="form-group">
					        	<label for="lastName" class="col-sm-3">Last Name: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editLastName" placeholder="Last Name" name="editLastName" value="<?php echo $vendor['lastname'];?>" autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->	 				        
					        <div class="form-group">
					        	<label for="Category" class="col-sm-3">Category: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <select type="text" class="form-control" id="editCategory" placeholder="" name="editCategory" autocomplete="off" required>
								      	<option ><?php echo $vendor['category'];?></option>
								      	<option >Runner</option>
								      	<option >Market Vendor</option>
								      	<option >Street Hawker</option>
								      	<option >Farmer</option>
								      	<option >Individual Vendor</option>
								      	<option >Service Provider</option>
								      	<option >Individual Vendor</option>
								      </select>
								    </div>
					        </div> <!-- /form-group-->	
					        <div class="form-group">
					        	<label for="phoneNumber" class="col-sm-3">Phone Number</label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editPhoneNumber" placeholder="Phone Number" name="editPhoneNumber" value="<?php echo $vendor['phonenumber'];?>"autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->	    
					        <div class="form-group">
					        	<label for="Email" class="col-sm-3 ">Email: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editEmail" placeholder="Email" name="editEmail" value="<?php echo $vendor['email'];?>"autocomplete="off" required>
								    </div>
					        </div><!--  /form-group	-->  
					        <div class="form-group">
					        	<label for="ageBracket" class="col-sm-3">Age Bracket: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <select type="text" class="form-control" id="editAgeBracket" placeholder="Age Bracket" name="editAgeBracket" autocomplete="off" required>
								      	<option ><?php echo $vendor['agebracket'];?></option>
								      	<option >0-15</option>
								      	<option >15-25</option>
								      	<option >25-45</option>
								      	<option >45+</option>
								      </select>
								    </div>
					        </div> <!-- /form-group--> 
				        </div>      	        

				      	<div class="col-sm-6">
					        <div class="form-group">
					        	<label for="Country" class="col-sm-3">Country: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <select type="text" class="form-control" id="editCountry" placeholder="Country" name="editCountry"autocomplete="off" required>
								      	<option ><?php echo $vendor['country'];?></option>
								      </select>
								    </div>
					        </div> <!-- /form-group-->
					        <div class="form-group">
					        	<label for="Country" class="col-sm-3">Country Code: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editCountryCode" placeholder="Country Code" name="editCountryCode" value="<?php echo $vendor['countrycode'];?>"autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->	
					        <div class="form-group">
					        	<label for="Gender" class="col-sm-3">Gender</label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <select type="text" class="form-control" id="editGender" placeholder="Gender" name="editGender"  autocomplete="off" required>
								      	<option ><?php echo $vendor['gender'];?></option>
								      	<option value="MALE">MALE</option>
								      	<option value="FEMALE">FEMALE</option>
								      </select>
								    </div>
					        </div> <!-- /form-group-->
					        <div class="form-group">
				        	<label for="Town" class="col-sm-3">Town: </label>
				        	<label class="col-sm-1 control-label">: </label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="Town" placeholder="Town" name="editTown" value="<?php echo $vendor['town'];?>"autocomplete="off" required>
							    </div>
				        	</div> <!-- /form-group-->		
					        <div class="form-group">
					        	<label for="Location" class="col-sm-3">Location: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editLocation" placeholder="Location" name="editLocation" value="<?php echo $vendor['location'];?>"autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->		
					        <div class="form-group">
					        	<label for="stallNumber" class="col-sm-3">Stall Number: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editStallNumber" placeholder="Stall Number" name="editStallNumber" value="<?php echo $vendor['stallnumber'];?>"autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->
					        <div class="form-group">
					        	<label for="Status" class="col-sm-3">Status: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <select class="form-control" id="editStatus" name="editStatus" required>
								      	<option ><?php 
								      		if($vendor['userstatus']==1){
								      			echo "Available";
								      		}else{ echo "Not Available"; }?>
								      			
								      	</option>
								      	<option value="1">Available</option>
								      	<option value="2">Not Available</option>
								      </select>
								    </div>
					        </div> <!-- /form-group-->   
				        </div> 

				        <div class="col-sm-12">
				      		<div class="form-group">
					        	<label  class="col-sm-12">DO YOU HAVE XIKILA ACCOUNT?
									<br/>
									<label class="small">
								      <input type="radio" name="editXikilaAccount" value="Yes"> Yes</label>
								     <br/>
								    <label class="small">
								      <input type="radio" name="editXikilaAccount" value="No"> No</label>
								    <br/>
								</label>
					        </div> <!-- /form-group--> 
				      		<div class="form-group">
				      			<label  class="col-sm-12">DO YOU HAVE BANCO POSTAL ACCOUNT?
									<br/>
									<label class="small">
								      <input type="radio" name="editBancoAccount" value="Yes"> Yes</label>
								     <br/>
								    <label class="small">
								      <input type="radio" name="editBancoAccount" value="No"> No</label>
								    <br/>
					        		
								</label>
					        </div> <!-- /form-group--> 
				      		<div class="form-group">
				      			<label class="col-sm-12">DO YOU WANT BANCO POSTAL ACCOUNT?
									<br/>
									<label class="small">
								      <input type="radio" name="editWantBancoAccount" value="Yes"> Yes</label>
								     <br/>
								    <label class="small">
								      <input type="radio" name="editWantBancoAccount" value="No"> No</label>
								    <br/>				        		  	
								</label>
					        </div> <!-- /form-group--> 				        
				        	<button type="submit" class="btn btn-success pull-right" id="editVendorBtn" name="editVendorBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
				      	</div>	
				      </div>         	        
				      <!-- /edit brand result -->

			      </div> <!-- /modal-body -->
			        
			      </div>
			      <!-- /modal-footer -->
		     	</form>
			     <!-- /.form -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<?php } ?>

<?php if(isset($_GET['v']) && $_GET['v']=='removeved' && isset($_GET['userid'])){ 

		$vendor = getSelectedVendor($_GET['userid']);
		if(isset($_POST['removeVendorBtn'])){
			$messages = removeVendor($_POST['userID']);
		}
?>


	<div class="container">
		<div class="row vertical">
			<div class="col-md-5 col-md-offset-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Vendor</h4>
					</div>
					<div class="panel-body">
						    <div class="modal-body">
        							<p>Do you really want to remove ?</p>
      						</div>

						<div class="messages">
						<?php if(isset($messages)) {
							echo '<div class="alert alert-warning" role="alert">
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									'.$messages.'</div>';
						} ?>
						</div>

						<form class="form-horizontal" method="post">
							<fieldset>
							  	<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<input type="hidden" name="userID" value="<?php echo $vendor['userid']; ?>">
									    <a href="vendor.php?v=manved"> <i class="glyphicon glyphicon-remove-sign"></i> Close</a>
        								<button type="submit" class="btn btn-primary" id="removeVendorBtn" name="removeVendorBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<!-- panel-body -->
				</div>
				<!-- /panel -->
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
	<!-- container -->

<?php } ?>

<script src="custom/js/vendor.js"></script>

<?php require_once 'includes/footer.php'; ?>