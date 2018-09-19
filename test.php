<!-- 	$("input:radio[name='xikilaAccount']").click(function(){

        var radioValue = $("input:radio[name='xikilaAccount']:checked").val();

        if(radioValue){

                alert("Your are a - " + radioValue);

            }

    });

	$("input:radio[name='bancoAccount']").click(function(){

        var radioValue = $("input:radio[name='bancoAccount']:checked").val();

        if(radioValue){

                alert("Your are a - " + radioValue);

            }

    });

	$("input:radio[name='wantBancoAccount']").click(function(){

        var radioValue = $("input:radio[name='wantBancoAccount']:checked").val();

        if(radioValue){

                alert("Your are a - " + radioValue);

            }

    }); -->


	
	<?php 
	if(!empty($_POST['xikilaAccount'])) {

        $xikilaAccount = $_POST["xikilaAccount"];
        echo $xikilaAccount;
    }

	if(!empty($_POST['bancoAccount'])) {

        $bancoAccount = $_POST["bancoAccount"];
        echo $bancoAccount;
    }

	if(!empty($_POST['wantBancoAccount'])) {

        $wantBancoAccount = $_POST["wantBancoAccount"];
        echo $wantBancoAccount;
    }
	?>


	<form method="POST">

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

	</form>