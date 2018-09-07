<?php require_once 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Supplier</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Supplier</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" data-target="#addBrandModel"> <i class="glyphicon glyphicon-plus-sign"></i> Add Supplier </button>
				</div> <!-- /div-action -->				
				
				<table class="table" id="manageSupplierTable">
					<thead>
						<tr>							
							<th>Supplier Name</th>
							<th>Contact</th>
							<th>Location</th>
							<th>Status</th>
							<th style="width:15%;">Options</th>
						</tr>
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<div class="modal fade" id="addBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="submitSupplierForm" action="php_action/createSupplier.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Supplier</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-supplier-messages"></div>

	        <div class="form-group">
	        	<label for="supplierName" class="col-sm-3 control-label">Supplier Name: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="supplierName" placeholder="Supplier Name" name="supplierName" autocomplete="off" required>
				    </div>
	        </div> <!-- /form-group-->	    
	        <div class="form-group">
	        	<label for="supplierType" class="col-sm-3 control-label">Supplier Type: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="supplierType" placeholder="Supplier Type" name="supplierType" autocomplete="off" required>
				    </div>
	        </div> <!-- /form-group-->	
	        <div class="form-group">
	        	<label for="Mobile/Contact" class="col-sm-3 control-label">Mobile/Contact</label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="supplierContact" placeholder="Mobile/Contact" name="supplierContact" autocomplete="off" required>
				    </div>
	        </div> <!-- /form-group-->	
	        <div class="form-group">
	        	<label for="Location" class="col-sm-3 control-label">Location: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="supplierLocation" placeholder="supplierLocation" name="supplierLocation" autocomplete="off" required>
				    </div>
	        </div> <!-- /form-group-->	
	        <div class="form-group">
	        	<label for="City/Town" class="col-sm-3 control-label">City/Town: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="supplierCity" placeholder="City/Town" name="supplierCity" autocomplete="off" required>
				    </div>
	        </div> <!-- /form-group-->
	        <div class="form-group">
	        	<label for="supplierStatus" class="col-sm-3 control-label">Status: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="supplierStatus" name="supplierStatus" required>
				      	<option value="">~~SELECT~~</option>
				      	<option value="1">Available</option>
				      	<option value="2">Not Available</option>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	         	        

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createSupplierBtn" data-loading-text="Loading..." autocomplete="off">Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->

<!-- edit brand -->
<div class="modal fade" id="editBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="editSupplierForm" action="php_action/editSupplier.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Supplier</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="edit-supplier-messages"></div>

	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>

		      <div class="edit-supplier-result">
		        <div class="form-group">
		        	<label for="supplierName" class="col-sm-3 control-label">Supplier Name: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="editSupplierName" placeholder="Supplier Name" name="editSupplierName" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	    
		        <div class="form-group">
		        	<label for="supplierType" class="col-sm-3 control-label">Supplier Type: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="editSupplierType" placeholder="Supplier Type" name="editSupplierType" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	
		        <div class="form-group">
		        	<label for="Mobile/Contact" class="col-sm-3 control-label">Mobile/Contact</label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="editSupplierContact" placeholder="Mobile/Contact" name="editSupplierContact" autocomplete="off" required>
					    </div>
		        </div> <!-- /form-group-->	
		        <div class="form-group">
		        	<label for="Location" class="col-sm-3 control-label">Location: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="editSupplierLocation" placeholder="supplierLocation" name="editSupplierLocation" autocomplete="off" required>
					    </div>
		        </div> <!-- /form-group-->	
		        <div class="form-group">
		        	<label for="City/Town" class="col-sm-3 control-label">City/Town: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="editSupplierCity" placeholder="City/Town" name="editSupplierCity" autocomplete="off" required>
					    </div>
		        </div> <!-- /form-group-->
		        <div class="form-group">
		        	<label for="supplierStatus" class="col-sm-3 control-label">Status: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <select class="form-control" id="editSupplierStatus" name="editSupplierStatus" required>
					      	<option value="">~~SELECT~~</option>
					      	<option value="1">Available</option>
					      	<option value="2">Not Available</option>
					      </select>
					    </div>
		        </div> <!-- /form-group-->	
		      </div>         	        
		      <!-- /edit brand result -->

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer editSupplierFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-success" id="editSupplierBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->
<!-- /edit brand -->

<!-- remove brand -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Supplier</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removeSupplierFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removeSupplierBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /remove brand -->

<script src="custom/js/brand.js"></script>

<?php require_once 'includes/footer.php'; ?>