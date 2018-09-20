var manageVendorTable;

$(document).ready(function() {
	// top bar active
	$('#navBrand').addClass('active');
	
	// manage vendor table
	manageVendorTable = $("#manageVendorTable").DataTable({
		'ajax': 'php_action/fetchVendor.php',
		'order': []		
	});        

	// submit vendor form function
	// $("#submitVendorForm").unbind('submit').bind('submit', function() {
	// 	// remove the error text
	// 	$(".text-danger").remove();
	// 	// remove the form error
	// 	$('.form-group').removeClass('has-error').removeClass('has-success');			

	// 	var firstName = $("#firstName").val();
	// 	var lastName = $("#firstName").val();
	// 	var Category = $("#Category").val();
	// 	var categoryCode = $("#Category").val();
	// 	var phoneNumber = $("#phoneNumber").val();
	// 	var Email = $("#Email").val();
	// 	var ageBracket = $("#ageBracket").val();
	// 	var Country = $("#Country").val();
	// 	var countryCode = $("#countryCode").val();
	// 	var Gender = $("#Gender").val();
	// 	var Town = $("#Town").val();
	// 	var stallNumber = $("#stallNumber").val();
	// 	var Status = $("#Status").val();
	// 	var xikilaAccount = $("input:radio[name='xikilaAccount']:checked").val();
	// 	var bancoAccount = $("input:radio[name='bancoAccount']:checked").val();
	// 	var wantBancoAccount = $("input:radio[name='wantBancoAccount']:checked").val();

	// 	if(firstName == "") {
	// 		$("#firstName").after('<p class="text-danger">firstName field is required</p>');
	// 		$('#firstName').closest('.form-group').addClass('has-error');
	// 	} else {
	// 		// remov error text field
	// 		$("#firstName").find('.text-danger').remove();
	// 		// success out for form 
	// 		$("#firstName").closest('.form-group').addClass('has-success');	  	
	// 	}

	// 	if(firstName && lastName && Category && categoryCode && phoneNumber
	// 		&& Email && ageBracket && Country && countryCode && Gender
	// 		&& Town && stallNumber && Status && xikilaAccount && bancoAccount
	// 		&& wantBancoAccount) {

	// 		var form = $(this);
	// 		// button loading
	// 		$("#createVendorBtn").button('loading');

	// 		// $.ajax({
	// 		// 	url : form.attr('action'),
	// 		// 	type: form.attr('method'),
	// 		// 	data: form.serialize(),
	// 		// 	dataType: 'json',
	// 		// 	success:function(response) {
	// 		// 		// button loading
	// 		// 		$("#createVendorBtn").button('reset');

	// 		// 		if(response.success == true) {
	// 		// 			// reload the manage member table 
	// 		// 			manageVendorTable.ajax.reload(null, false);						

 //  	//   					// reset the form text
	// 		// 			$("#submitVendorForm")[0].reset();
	// 		// 			// remove the error text
	// 		// 			$(".text-danger").remove();
	// 		// 			// remove the form error
	// 		// 			$('.form-group').removeClass('has-error').removeClass('has-success');
  	  			
	// 	 //  	  			$('#add-vendor-messages').html('<div class="alert alert-success">'+
	// 	 //            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
	// 	 //            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
	// 	 //          '</div>');

	// 	 //  	  			$(".alert-success").delay(500).show(10, function() {
	// 		// 						$(this).delay(3000).hide(10, function() {
	// 		// 							$(this).remove();
	// 		// 						});
	// 		// 					}); // /.alert
	// 		// 		}  // if

	// 		// 	} // /success
	// 		// }); // /ajax	
	// 	} // if

	// 	return false;
	// }); // /submit vedor form function

});

// function editVendors(userid = null) {
// 	if(userid) {
// 		// remove hidden user id text
// 		$('#userid').remove();

// 		// remove the error 
// 		$('.text-danger').remove();
// 		// remove the form-error
// 		$('.form-group').removeClass('has-error').removeClass('has-success');

// 		// modal loading
// 		$('.modal-loading').removeClass('div-hide');
// 		// modal result
// 		$('.edit-vendor-result').addClass('div-hide');
// 		// modal footer
// 		$('.editVendorFooter').addClass('div-hide');

// 		$(window).on('load', function() {
//  			alert('thanks');
// 		});

// 		$.ajax({
// 			url: 'php_action/fetchSelectedVendor.php',
// 			type: 'post',
// 			data: {userid : userid},
// 			dataType: 'json',
// 			success:function(response) {
// 				alert('thanks');
				
// 				// modal loading
// 				$('.modal-loading').addClass('div-hide');
// 				// modal result
// 				$('.edit-vendor-result').removeClass('div-hide');
// 				// modal footer
// 				$('.editVendorFooter').removeClass('div-hide');

// 				// setting the firstname name value 
// 				$('#editFirstName').val(response.firstname);
// 				// supplier id 
// 				$(".editVendorFooter").after('<input type="hidden" name="userid" id="userid" value="'+response.userid+'" />');

// 				// update brand form 
// 				$('#editVendorForm').unbind('submit').bind('submit', function() {

// 					// remove the error text
// 					$(".text-danger").remove();
// 					// remove the form error
// 					$('.form-group').removeClass('has-error').removeClass('has-success');			

// 					var firstName = $("#firstName").val();
// 					var lastName = $("#firstName").val();
// 					var Category = $("#Category").val();
// 					var categoryCode = $("#Category").val();
// 					var phoneNumber = $("#phoneNumber").val();
// 					var Email = $("#Email").val();
// 					var ageBracket = $("#ageBracket").val();
// 					var Country = $("#Country").val();
// 					var countryCode = $("#countryCode").val();
// 					var Gender = $("#Gender").val();
// 					var Town = $("#Town").val();
// 					var stallNumber = $("#stallNumber").val();
// 					var Status = $("#Status").val();
// 					var xikilaAccount = $("input:radio[name='xikilaAccount']:checked").val();
// 					var bancoAccount = $("input:radio[name='bancoAccount']:checked").val();
// 					var wantBancoAccount = $("input:radio[name='wantBancoAccount']:checked").val();

// 					if(supplierName && supplierType && supplierLocation && supplierCity &&
// 						supplierContact && supplierStatus) {
// 						var form = $(this);

// 						// submit btn
// 						$('#editSupplierBtn').button('loading');

// 						$.ajax({
// 							url: form.attr('action'),
// 							type: form.attr('method'),
// 							data: form.serialize(),
// 							dataType: 'json',
// 							success:function(response) {

// 								if(response.success == true) {
// 									console.log(response);
// 									// submit btn
// 									$('#editSupplierBtn').button('reset');

// 									// reload the manage member table 
// 									manageSupplierTable.ajax.reload(null, false);								  	  										
// 									// remove the error text
// 									$(".text-danger").remove();
// 									// remove the form error
// 									$('.form-group').removeClass('has-error').removeClass('has-success');
			  	  			
// 			  	  			$('.remove-messages').html('<div class="alert alert-success">'+
// 			            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
// 			            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
// 			          '</div>');

// 			  	  			$(".alert-success").delay(500).show(10, function() {
// 										$(this).delay(3000).hide(10, function() {
// 											$(this).remove();
// 										});
// 									}); // /.alert
// 								} // /if
									
// 							}// /success
// 						});	 // /ajax												
// 					} // /if

// 					return false;
// 				}); // /update brand form

// 			} // /success
// 		}); // ajax function

// 	} else {
// 		alert('error!! Refresh the page again');
// 	}
// } // /edit brands function

// function removeVendors(userid = null) {
// 	if(userid) {
// 		$('#removeVendorId').remove();
// 		$.ajax({
// 			url: 'php_action/fetchSelectedVendor.php',
// 			type: 'post',
// 			data: {userid : userid},
// 			dataType: 'json',
// 			success:function(response) {
// 				$('.removeVendorFooter').after('<input type="hidden" name="removeVendorId" id="removeVendorId" value="'+response.userid+'" /> ');

// 				// click on remove button to remove the brand
// 				$("#removeVendorBtn").unbind('click').bind('click', function() {
// 					// button loading
// 					$("#removeVendorBtn").button('loading');

// 					$.ajax({
// 						url: 'php_action/removeVendor.php',
// 						type: 'post',
// 						data: {userid : userid},
// 						dataType: 'json',
// 						success:function(response) {
// 							console.log(response);
// 							// button loading
// 							$("#removeVendorBtn").button('reset');
// 							if(response.success == true) {

// 								// hide the remove modal 
// 								$('#removeMemberModal').modal('hide');

// 								// reload the brand table 
// 								manageSupplierTable.ajax.reload(null, false);
								
// 								$('.remove-messages').html('<div class="alert alert-success">'+
// 			            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
// 			            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
// 			          '</div>');

// 			  	  			$(".alert-success").delay(500).show(10, function() {
// 										$(this).delay(3000).hide(10, function() {
// 											$(this).remove();
// 										});
// 									}); // /.alert
// 							} else {

// 							} // /else
// 						} // /response messages
// 					}); // /ajax function to remove the supplier

// 				}); // /click on remove button to remove the supplier

// 			} // /success
// 		}); // /ajax

// 		$('.removeVendorFooter').after();
// 	} else {
// 		alert('error!! Refresh the page again');
// 	}
// } // /remove brands function