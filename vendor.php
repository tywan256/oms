<?php require_once 'includes/header.php'; ?>

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

<?php if(isset($_GET['v']) && $_GET['v']=='addved'){ ?>

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

		    	<form class="form-horizontal" id="submitVendorForm" action="php_action/createVendor.php" method="POST" >
			      <div class="modal-header">
			        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Vendor</h4>
			      </div>
			      <div class="modal-body">

			      	<div id="add-vendor-messages"></div>

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
							      	<option value="N/A">N/A</option>
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
							      	<option value="N/A">N/A</option>
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
							      	<option value="N/A">N/A</option>
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
			        	<button type="submit" class="btn btn-primary pull-right" id="createVendorBtn" data-loading-text="Loading..." autocomplete="off">Save Changes</button>
			      	</div>

			      </div> <!-- /modal-body -->
		     	</form>
			     <!-- /.form -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<?php } ?>


<?php if(isset($_GET['v']) && $_GET['v']=='editved'){ ?>

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

		    	<form class="form-horizontal" id="editVendorForm" action="php_action/editVendor.php" method="POST">
			      <div class="modal-header">
			        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Supplier</h4>
			      </div>
			      <div class="modal-body">

			      	<div id="edit-vendor-messages"></div>

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
								      <input type="text" class="form-control" id="editFirstName" placeholder="First Name" name="editFirstName" autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->	    
					        <div class="form-group">
					        	<label for="lastName" class="col-sm-3">Last Name: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editLastName" placeholder="Last Name" name="editLastName" autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->	 				        
					        <div class="form-group">
					        	<label for="vendorCategory" class="col-sm-3">Vendor Category: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <select type="text" class="form-control" id="editVendorCategory" placeholder="Vendor Type" name="editVendorCategory" autocomplete="off" required>
								      	<option value="">~~SELECT~~</option>
								      </select>
								    </div>
					        </div> <!-- /form-group-->	
					        <div class="form-group">
					        	<label for="phoneNumber" class="col-sm-3">Phone Number</label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editPhoneNumber" placeholder="Phone Number" name="editPhoneNumber" autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->	    
					        <div class="form-group">
					        	<label for="vendorEmail" class="col-sm-3 ">Vendor Email: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editVendorEmail" placeholder="Vendor Email" name="editVendorEmail" autocomplete="off" required>
								    </div>
					        </div><!--  /form-group	-->  
					        <div class="form-group">
					        	<label for="ageBracket" class="col-sm-3">Age Bracket: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <select type="text" class="form-control" id="editAgeBracket" placeholder="Age Bracket" name="editAgeBracket" autocomplete="off" required>
								      	<option value="">~~SELECT~~</option>
								      </select>
								    </div>
					        </div> <!-- /form-group--> 
				        </div>      	        

				      	<div class="col-sm-6">
					        <div class="form-group">
					        	<label for="Country" class="col-sm-3">Country: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <select type="text" class="form-control" id="editVendorCountry" placeholder="Vendor Country" name="editVendorCountry" autocomplete="off" required>
								      	<option value="">~~SELECT~~</option>
								      </select>
								    </div>
					        </div> <!-- /form-group-->
					        <div class="form-group">
					        	<label for="Country" class="col-sm-3">Country Code: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editCountryCode" placeholder="Country Code" name="editCountryCode" autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->	
					        <div class="form-group">
					        	<label for="vendorGender" class="col-sm-3">Vendor Gender</label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <select type="text" class="form-control" id="editVendorGender" placeholder="Vendor Gender" name="editVendorGender" autocomplete="off" required>
								      	<option value="">~~SELECT~~</option>
								      	<option value="MALE">MALE</option>
								      	<option value="FEMALE">FEMALE</option>
								      </select>
								    </div>
					        </div> <!-- /form-group-->	
					        <div class="form-group">
					        	<label for="Location" class="col-sm-3">Location: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editVendorLocation" placeholder="Vendor Location" name="editVendorLocation" autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->		
					        <div class="form-group">
					        	<label for="stallNumber" class="col-sm-3">Stall Number: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="editStallNumber" placeholder="Stall Number" name="editStallNumber" autocomplete="off" required>
								    </div>
					        </div> <!-- /form-group-->
					        <div class="form-group">
					        	<label for="vendorStatus" class="col-sm-3">Status: </label>
					        	<label class="col-sm-1 control-label">: </label>
								    <div class="col-sm-8">
								      <select class="form-control" id="editVendorStatus" name="editVendorStatus" required>
								      	<option value="">~~SELECT~~</option>
								      	<option value="1">Available</option>
								      	<option value="2">Not Available</option>
								      </select>
								    </div>
					        </div> <!-- /form-group-->   
				        </div> 

				        <div class="col-sm-12">
				      		<div class="form-group">
					        	<label for="vendor_has_xikila_acc"  class="col-sm-12">
					        		<input type="checkbox" id="vendor_has_xikila_acc " name="vendor_has_xikila_acc " required>
					        		    	DO YOU HAVE XIKILA ACCOUNT?
								</label>
					        </div> <!-- /form-group--> 
				      		<div class="form-group">
				      			<label for="vendor_need_bnco_acc"  class="col-sm-12">
					        		<input type="checkbox" id="vendor_need_bnco_acc " name="vendor_need_bnco_acc " required>
					        		     	DO YOU HAVE BANCO POSTAL ACCOUNT?
								</label>
					        </div> <!-- /form-group--> 
				      		<div class="form-group">
				      			<label for="vendor_has_banco_acc"  class="col-sm-12">
					        		<input type="checkbox" id="vendor_has_banco_acc " name="vendor_has_banco_acc " required>   	DO YOU WANT BANCO POSTAL ACCOUNT?
								</label>
					        </div> <!-- /form-group--> 			        
				        	<button type="submit" class="btn btn-success pull-right" id="editVendorBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
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

<!-- remove brand -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Vendor</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removeVendorFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removeVendorBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /remove brand -->

<script src="custom/js/vendor.js"></script>

<?php require_once 'includes/footer.php'; ?>