var manageVendorTable;

$(document).ready(function() {
	// top bar active
	$('#navBrand').addClass('active');
	
	// manage supplier table
	manageVendorTable = $("#manageVendorTable").DataTable({
		'ajax': 'php_action/fetchVendor.php',
		'order': []		
	});        

	// submit vendor form function
	$("#submitVendorForm").unbind('submit').bind('submit', function() {
		// remove the error text
		$(".text-danger").remove();
		// remove the form error
		$('.form-group').removeClass('has-error').removeClass('has-success');			

		var firstName = $("#firstName").val();
		var lastName = $("#firstName").val();
		var Category = $("#Category").val();
		var categoryCode = $("#Category").val();
		var phoneNumber = $("#phoneNumber").val();
		var Email = $("#Email").val();
		var ageBracket = $("#ageBracket").val();
		var Country = $("#Country").val();
		var countryCode = $("#countryCode").val();
		var Gender = $("#Gender").val();
		var Town = $("#Town").val();
		var stallNumber = $("#stallNumber").val();
		var Status = $("#Status").val();
		var xikilaAccount = $("input:radio[name='xikilaAccount']:checked").val();
		var bancoAccount = $("input:radio[name='bancoAccount']:checked").val();
		var wantBancoAccount = $("input:radio[name='wantBancoAccount']:checked").val();

		if(firstName == "") {
			$("#firstName").after('<p class="text-danger">firstName field is required</p>');
			$('#firstName').closest('.form-group').addClass('has-error');
		} else {
			// remov error text field
			$("#firstName").find('.text-danger').remove();
			// success out for form 
			$("#firstName").closest('.form-group').addClass('has-success');	  	
		}

		if(firstName && lastName && Category && categoryCode && phoneNumber
			&& Email && ageBracket && Country && countryCode && Gender
			&& Town && stallNumber && Status && xikilaAccount && bancoAccount
			&& wantBancoAccount) {

			var form = $(this);
			// button loading
			$("#createVendorBtn").button('loading');

			$.ajax({
				url : form.attr('action'),
				type: form.attr('method'),
				data: form.serialize(),
				dataType: 'json',
				success:function(response) {
					// button loading
					$("#createVendorBtn").button('reset');

					if(response.success == true) {
						// reload the manage member table 
						manageVendorTable.ajax.reload(null, false);						

  	  					// reset the form text
						$("#submitVendorForm")[0].reset();
						// remove the error text
						$(".text-danger").remove();
						// remove the form error
						$('.form-group').removeClass('has-error').removeClass('has-success');
  	  			
		  	  			$('#add-vendor-messages').html('<div class="alert alert-success">'+
		            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
		            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
		          '</div>');

		  	  			$(".alert-success").delay(500).show(10, function() {
									$(this).delay(3000).hide(10, function() {
										$(this).remove();
									});
								}); // /.alert
					}  // if

				} // /success
			}); // /ajax	
		} // if

		return false;
	}); // /submit vedor form function

});

function editVendors(userid = null) {
	if(userid) {
		// remove hidden supplier id text
		$('#userid').remove();

		// remove the error 
		$('.text-danger').remove();
		// remove the form-error
		$('.form-group').removeClass('has-error').removeClass('has-success');

		// modal loading
		$('.modal-loading').removeClass('div-hide');
		// modal result
		$('.edit-supplier-result').addClass('div-hide');
		// modal footer
		$('.editSupplierFooter').addClass('div-hide');

		$.ajax({
			url: 'php_action/fetchSelectedSupplier.php',
			type: 'post',
			data: {userid : userid},
			dataType: 'json',
			success:function(response) {
				// modal loading
				$('.modal-loading').addClass('div-hide');
				// modal result
				$('.edit-supplier-result').removeClass('div-hide');
				// modal footer
				$('.editSupplierFooter').removeClass('div-hide');

				// setting the supplier name value 
				$('#editSupplierName').val(response.supplier_name);
				// setting the supplier type value 
				$('#editSupplierType').val(response.supplier_type);
				// setting the supplier location value 
				$('#editSupplierLocation').val(response.supplier_location);
				// setting the supplier city value 
				$('#editSupplierCity').val(response.supplier_city);
				// setting the supplier contact value 
				$('#editSupplierContact').val(response.supplier_contact);
				// setting the supplier status value
				$('#editSupplierStatus').val(response.supplier_active);
				// supplier id 
				$(".editSupplierFooter").after('<input type="hidden" name="userid" id="userid" value="'+response.supplier_id+'" />');

				// update brand form 
				$('#editVendorForm').unbind('submit').bind('submit', function() {

					// remove the error text
					$(".text-danger").remove();
					// remove the form error
					$('.form-group').removeClass('has-error').removeClass('has-success');			

					var firstName = $("#firstName").val();
					var lastName = $("#firstName").val();
					var Category = $("#Category").val();
					var categoryCode = $("#Category").val();
					var phoneNumber = $("#phoneNumber").val();
					var Email = $("#Email").val();
					var ageBracket = $("#ageBracket").val();
					var Country = $("#Country").val();
					var countryCode = $("#countryCode").val();
					var Gender = $("#Gender").val();
					var Town = $("#Town").val();
					var stallNumber = $("#stallNumber").val();
					var Status = $("#Status").val();
					var xikilaAccount = $("input:radio[name='xikilaAccount']:checked").val();
					var bancoAccount = $("input:radio[name='bancoAccount']:checked").val();
					var wantBancoAccount = $("input:radio[name='wantBancoAccount']:checked").val();

					if(supplierName == "") {
						$("#editSupplierName").after('<p class="text-danger">Supplier Name field is required</p>');
						$('#editSupplierName').closest('.form-group').addClass('has-error');
					} else {
						// remov error text field
						$("editSsupplierName").find('.text-danger').remove();
						// success out for form 
						$("#editSupplierName").closest('.form-group').addClass('has-success');	  	
					}


					if(supplierType == "") {
						$("#editSupplierType").after('<p class="text-danger">Supplier Type field is required</p>');
						$('#editSupplierType').closest('.form-group').addClass('has-error');
					} else {
						// remov error text field
						$("#editSupplierType").find('.text-danger').remove();
						// success out for form 
						$("#editSupplierType").closest('.form-group').addClass('has-success');	  	
					}

					if(supplierLocation == "") {
						$("#editSupplierLocation").after('<p class="text-danger">Supplier Location field is required</p>');
						$('#editSupplierLocation').closest('.form-group').addClass('has-error');
					} else {
						// remov error text field
						$("#editSupplierLocation").find('.text-danger').remove();
						// success out for form 
						$("#editSupplierLocation").closest('.form-group').addClass('has-success');	  	
					}

					if(supplierCity == "") {
						$("#editSupplierCity").after('<p class="text-danger">Supplier City field is required</p>');
						$('#editSupplierCity').closest('.form-group').addClass('has-error');
					} else {
						// remov error text field
						$("#editSupplierCity").find('.text-danger').remove();
						// success out for form 
						$("#editSupplierCity").closest('.form-group').addClass('has-success');	  	
					}

					if(supplierContact == "") {
						$("#editSupplierContact").after('<p class="text-danger">Supplier Contact field is required</p>');
						$('#editSupplierContact').closest('.form-group').addClass('has-error');
					} else {
						// remov error text field
						$("#editSupplierContact").find('.text-danger').remove();
						// success out for form 
						$("#editSupplierContact").closest('.form-group').addClass('has-success');	  	
					}
											
					if(brandStatus == "") {
						$("#editSupplierStatus").after('<p class="text-danger">Supplier Status field is required</p>');

						$('#editSupplierStatus').closest('.form-group').addClass('has-error');
					} else {
						// remov error text field
						$("#editSupplierStatus").find('.text-danger').remove();
						// success out for form 
						$("#editSupplierStatus").closest('.form-group').addClass('has-success');	  	
					}

					if(supplierName && supplierType && supplierLocation && supplierCity &&
						supplierContact && supplierStatus) {
						var form = $(this);

						// submit btn
						$('#editSupplierBtn').button('loading');

						$.ajax({
							url: form.attr('action'),
							type: form.attr('method'),
							data: form.serialize(),
							dataType: 'json',
							success:function(response) {

								if(response.success == true) {
									console.log(response);
									// submit btn
									$('#editSupplierBtn').button('reset');

									// reload the manage member table 
									manageSupplierTable.ajax.reload(null, false);								  	  										
									// remove the error text
									$(".text-danger").remove();
									// remove the form error
									$('.form-group').removeClass('has-error').removeClass('has-success');
			  	  			
			  	  			$('.remove-messages').html('<div class="alert alert-success">'+
			            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
			            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
			          '</div>');

			  	  			$(".alert-success").delay(500).show(10, function() {
										$(this).delay(3000).hide(10, function() {
											$(this).remove();
										});
									}); // /.alert
								} // /if
									
							}// /success
						});	 // /ajax												
					} // /if

					return false;
				}); // /update brand form

			} // /success
		}); // ajax function

	} else {
		alert('error!! Refresh the page again');
	}
} // /edit brands function

function removeSuppliers(supplierId = null) {
	if(supplierId) {
		$('#removeSupplierId').remove();
		$.ajax({
			url: 'php_action/fetchSelectedSupplier.php',
			type: 'post',
			data: {supplierId : supplierId},
			dataType: 'json',
			success:function(response) {
				$('.removeSupplierFooter').after('<input type="hidden" name="removeSupplierId" id="removeSupplierId" value="'+response.supplier_id+'" /> ');

				// click on remove button to remove the brand
				$("#removeSupplierBtn").unbind('click').bind('click', function() {
					// button loading
					$("#removeSupplierBtn").button('loading');

					$.ajax({
						url: 'php_action/removeSupplier.php',
						type: 'post',
						data: {supplierId : supplierId},
						dataType: 'json',
						success:function(response) {
							console.log(response);
							// button loading
							$("#removeSupplierBtn").button('reset');
							if(response.success == true) {

								// hide the remove modal 
								$('#removeMemberModal').modal('hide');

								// reload the brand table 
								manageSupplierTable.ajax.reload(null, false);
								
								$('.remove-messages').html('<div class="alert alert-success">'+
			            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
			            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
			          '</div>');

			  	  			$(".alert-success").delay(500).show(10, function() {
										$(this).delay(3000).hide(10, function() {
											$(this).remove();
										});
									}); // /.alert
							} else {

							} // /else
						} // /response messages
					}); // /ajax function to remove the supplier

				}); // /click on remove button to remove the supplier

			} // /success
		}); // /ajax

		$('.removeSupplierFooter').after();
	} else {
		alert('error!! Refresh the page again');
	}
} // /remove brands function