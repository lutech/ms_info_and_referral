<div class="row">        

    <!-- Side Navigation -->
    <?php echo $_sidenavigation; ?>
	<!-- Content -->
    <div class="col-md-9">
        <h1 class="row">
        	<span class="col-sm-9">Provider Profile</span>
            <span id="updated" class="h3 col-sm-3"><span class="glyphicon glyphicon-pencil" style="color:#ed9c28"></span>  Updated</span>
        </h1>
        <hr>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapseOne">
                            Service Information
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">                    
                    	<div class="row">
                            <div class="col-sm-offset-1 col-sm-4">
                                <address>
                                  <strong>Provider Name:</strong><br>
                                  Food Bank for Families
                                </address>
                            </div>	
                            <div class="col-sm-4">
                                <address>
                                  <strong>Service Type:</strong><br>
                                  Food Bank
                                </address>
                             </div>	
                             <div class="col-xs-3 text-right">
                                      <a class="btn btn-sm btn-default" href="#" role="button" data-toggle="modal" data-target="#editproviderserviceinfo">Edit</a>
                            </div>
                        </div>
                    	<div class="row">
                            <div class="col-sm-offset-1 col-sm-4">
                                <address>
                                  <strong>Address:</strong>&nbsp;&nbsp;<span class="label label-warning serviceinfo-change">UPDATED</span><br>
                                  123 Main Street<br>
                                  Center City, MS 30000<br>
                                </address>
                            </div>	
                            <div class="col-sm-4">
                                <address>
                                  <strong>Business Hours:</strong><br>
                                  Monday - Friday<br>
                                  9:00am - 5:00pm<br>
                                </address>
                             </div>	
                        </div>
                         <div class="row">
                            <div class="col-sm-offset-1 col-sm-4">
                                <address>
                                  <strong>Telephone:</strong>&nbsp;&nbsp;<span class="label label-warning serviceinfo-change">UPDATED</span><br>
                                  <abbr title="Toll Free">T:</abbr> (123) 456-7890<br>
                                  <abbr title="Fax">F:</abbr> (123) 456-7800
                                </address>
                            </div>	
                            <div class="col-sm-6">
                                <address>
                                  <strong>Website:</strong><br>
                                  <a href="mailto:#">www.serviceprovider.com</a>
                                </address>
                             </div>	
                        </div><!--
                        
                         <div class="row">
                            <div class="col-sm-offset-1 col-sm-4">
                                <address>
                                  <strong>Status:</strong><br>
                                  Inactive (Services not listed)
                                </address>
                            </div>	
                        </div>-->
                    </div><!-- /panel body -->
                </div><!-- /panel collapse-->
            </div><!-- /panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapseTwo">
                            Contact Information
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in">
                    <div class="panel-body">   
                        <div class="row">
                            <div class="col-sm-offset-1 col-sm-4">
                                <address>
                                  <strong>Intake Contact:</strong>&nbsp;&nbsp;<span class="label label-warning contactinfo-change">UPDATED</span><br>
                                  John Doe
                                </address>
                            </div>	
                            <div class="col-sm-4">
                                <address>
                                  <strong>Intake Email:</strong>&nbsp;&nbsp;<span class="label label-warning contactinfo-change">UPDATED</span><br>
                                  johnd@serviceprovider.com
                                </address>
                             </div>
                             <div class="col-xs-3 text-right">
                                      <a class="btn btn-sm btn-default" href="#" role="button" data-toggle="modal" data-target="#editprovidercontactinfo">Edit</a>
                            </div>		
                        </div>
                         <div class="row">
                            <div class="col-sm-offset-1 col-sm-4">
                                <address>
                                  <strong>Intake Phone:</strong><br>
                                  <abbr title="Toll Free">T:</abbr> (123) 456-7890<br>
                                </address>
                             </div>	
                        </div>
                     </div><!-- /panel body -->
                </div><!-- /panel collapse-->
            </div><!-- /panel --> 
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title" style="display: inline-block">
                        <a data-toggle="collapse" href="#collapseThree">
                            Services
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse in">
                    <div class="panel-body">  
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                Service Name
                                            </th>
                                            <th>
                                                Service Area(s)
                                            </th>
                                            <th>
                                                Clients
                                            </th>
                                            <th>
                                                Age Range
                                            </th>
                                            <th>
                                                Accepted Payments
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Ambulance
                                            </td>
                                            <td>
                                                All&nbsp;&nbsp;<span class="label label-warning service1-change">UPDATED</span>
                                            </td>
                                            <td>
                                                All
                                            </td>
                                            <td>
                                                All
                                            </td>
                                            <td>
                                                All
                                            </td>                                            
                                            <td>
                                                <a href="#" id="edit-service1" data-toggle="modal" data-target="#editserviceinfo">Edit</a>&nbsp;
                                                <a href="#" data-toggle="modal" data-target="#delete">Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Animal Services
                                            </td>
                                            <td>
                                                Benton
                                            </td>
                                            <td>
                                                All Clients
                                            </td>
                                            <td>
                                                18 - 85&nbsp;&nbsp;<span class="label label-warning service2-change">UPDATED</span>
                                            </td>
                                            <td>
                                                All
                                            </td>                                            
                                            <td>
                                                <a href="#" id="edit-service2"  data-toggle="modal" data-target="#editserviceinfo">Edit</a>&nbsp;
                                                <a href="#" data-toggle="modal" data-target="#delete">Remove</a>
                                            </td>
                                        </tr>
                                        <tr id="newservice-change">
                                            <td>
                                                Meals on Wheels&nbsp;&nbsp;<span class="label label-success">NEW</span>
                                            </td>
                                            <td>
                                                Benton
                                            </td>
                                            <td>
                                                All Clients
                                            </td>
                                            <td>
                                                17-65
                                            </td>
                                            <td>
                                                Cash, Checks, Credit
                                            </td>                                            
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#editserviceinfo">Edit</a>&nbsp;
                                                <a href="#" data-toggle="modal" data-target="#delete">Remove</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                    				<button type="button" id="add-service"  class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#editserviceinfo"><span class="glyphicon glyphicon-plus"></span> Add Service</button>
                                    </div>
                                </div>
                     </div><!-- /panel body -->
                </div><!-- /panel collapse-->
            </div><!-- /panel -->  
        </div><!-- /panel group-->
        <div id="changes-controls">
        <hr>        
            <button type="button" id="undochanges-button"  class="btn btn-danger">Undo Changes</button>
            <button type="button" id="submitchanges-button"  class="btn btn-success pull-right" data-toggle="modal" data-target="#submitconfirmation">Submit Changes</button>
          </div>
        </div>
    </div>
</div><!--/row-->
	  
<!-- MODALS -->
<!-- Modal - Edit Provider Services Info -->
<?php echo $_edit_providerserviceinfo_modal;?>

<!-- Modal - Edit Provider Services Info -->
<?php echo $_edit_providercontactinfo_modal;?>

<!-- Modal - Edit Provider Services Info -->
<?php echo $_edit_serviceinfo_modal;?>

<!-- Modal - Delete Confirmation -->
<?php echo $_deleteconfirmation_modal;?>

<!-- Modal - Submit Confirmation -->
<?php echo $_submitconfirmation_modal;?>


<script type="text/javascript">
	$(document).ready(function(){
		
		$('#counties').multiselect({
				buttonClass: 'btn btn-default form-control',
				buttonWidth: false,
				buttonContainer: '<div class="btn-group" style="width:100%"/>',
				enableFiltering: true,
				filterPlaceholder: 'Search',
				numberDisplayed: 4,
				maxHeight: 300
			});
		
		$('#paymentmethods').multiselect({
				buttonClass: 'btn btn-default form-control',
				buttonWidth: false,
				buttonContainer: '<div class="btn-group" style="width:100%"/>',
				enableFiltering: false,
				filterPlaceholder: 'Search',
				numberDisplayed: 3,
				maxHeight: 300
			});
			
			
		function undoChanges() {
			$('.label').hide();
			$('#service1-button').hide();
			$('#service2-button').hide();
			$('#newservice-button').hide();
			$('#newservice-change').hide();
			
			$('#changes-controls').hide();
			$('#updated').hide();
		}
		
		undoChanges();
		
		$('#undochanges-button').click(function(){
			undoChanges();
		});
		
		$('#edit-service1').click(function(){
			$('#service1-button').show();
			$('#service2-button').hide();
			$('#newservice-button').hide();
		});
		$('#edit-service2').click(function(){
			$('#service1-button').hide();
			$('#service2-button').show();
			$('#newservice-button').hide();
		});
		$('#add-service').click(function(){
			$('#service1-button').hide();
			$('#service2-button').hide();
			$('#newservice-button').show();
		});
		
		$('#serviceinfo-button').click(function(){
			$('.serviceinfo-change').show();
			$('#changes-controls').show();
			$('#updated').show();
		});
		$('#contactinfo-button').click(function(){
			$('.contactinfo-change').show();
			$('#changes-controls').show();
			$('#updated').show();
		});
		$('#service1-button').click(function(){
			$('.service1-change').show();
			$('#changes-controls').show();
			$('#updated').show();
		});
		$('#service2-button').click(function(){
			$('.service2-change').show();
			$('#changes-controls').show();
			$('#updated').show();
		});
		$('#newservice-button').click(function(){
			$('#newservice-change').show();
			$('#newservice-change .label').show();
			$('#changes-controls').show();
			$('#updated').show();
		});
	});
</script>