<div id="create_provideraccount_wizard" >
    <div class="navbar navbar-default">
          <div class="navbar-inner">
            <div class="container">
                <ul id="wizard-sidenav" class="nav navbar-nav">
                    <li><a href="#tab1" data-toggle="tab">1. Account Information</a></li>
                    <li class="disabled"><a href="#tab2" data-toggle="tab">2. Provider Information</a></li>
                    <li class="disabled"><a href="#tab3" data-toggle="tab">3. Services</a></li>
                    <li class="disabled"><a href="#tab4" data-toggle="tab">4. Review</a></li>
                    <li class="disabled"><a href="#tab5" data-toggle="tab">5. Finish</a></li>
                </ul>
        	</div>
        </div>
    </div>
	<div class="tab-content">
	    <div class="tab-pane" id="tab1">
        <div class="text-center" style="padding: 40px 0px">
        	<form class="hidden" id="loginform" method="post" name="form" action="<?php echo base_url().'index.php/site/login'?>">
              <div class="form-signin">
                <input type="text" class="form-control" placeholder="User Name" name="username" required autofocus title="susanasilver (Authorized Provider)">
                <input type="password" class="form-control" placeholder="Password"  name="usernamepassword" required title="Type anything for password">
              </div>
              <div class="text-center">
                <button id="submitlogin" type="button" class="btn btn-success">Submit</button>
              </div>
          </form>
        	<button class="btn btn-primary btn-lg" id="registrationLogin">Login</button>
            <span class="h3" id="or" style="display: block; margin: 40px 0px">&nbsp;&nbsp;or&nbsp;&nbsp;</span>            
            <hr class="hidden" id="horzrule" style="margin: 60px 0px"/>
        	<button class="btn btn-primary btn-lg" id="registrationNewAccount">Create Account</button>
        </div>
        
        <form id="registerform" class="form-horizontal hidden" role="form">
         <div class="form-group">
                <label for="firstname" class="col-xs-3 control-label">First Name</label>
                <div class="col-xs-7">
                  <input class="form-control" id="firstname" placeholder="First Name" value="Burton">
                </div>
              </div>
              <div class="form-group">
                <label for="lastname" class="col-xs-3 control-label">Last Name</label>
                <div class="col-xs-7">
                  <input class="form-control" id="lastname" placeholder="Last Name" value="Brown">
                </div>
              </div>
          <div class="form-group">
            <label for="importantcontactemail" class="col-xs-3 control-label">Email</label>
            <div class="col-xs-7">
              <input class="form-control" id="importantcontactemail" type="email" placeholder="Email" value="burtonbrown@serviceprovider.com">
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="col-xs-3 control-label">Phone #</label>
            <div class="col-xs-7">
              <input class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555)-555-5555">
            </div>
          </div>
          <div class="form-group">
                <label for="firstname" class="col-xs-3 control-label">Login Name</label>
                <div class="col-xs-7">
                  <input class="form-control" id="firstname" placeholder="First Name" value="hbrown1">
                </div>
              </div>
              <div class="form-group">
                <label for="lastname" class="col-xs-3 control-label">Password</label>
                <div class="col-xs-7">
                  <input class="form-control" id="lastname" type="password" placeholder="Last Name" value="Smitddh">
                </div>
              </div>
              <div class="text-center">
        		<button class="btn btn-success" type="button" id="submitregistration">Submit</button>
                </div>
          </form>
          <div class="row">
              <div id="createaccountsuccess" class="col-sm-8 col-sm-offset-2 hidden text-center">
                    <p class="h2"><span class="glyphicon glyphicon-ok" style="color: green"></span>&nbsp;&nbsp;Your account has been created!</p>
            </div>
              <div id="loginsuccess" class="col-sm-8 col-sm-offset-2 hidden text-center">
                    <p class="h2">Welcome back, Burton Brown!</p>
                    <p>If this is not your acount, please <a href="<?php echo base_url().'index.php/agencyaccess/providerregistration'?>">re-login</a></p>
            </div>
        </div>
	    </div>        
	    <div class="tab-pane" id="tab2">
	      <form class="form-horizontal" role="form">
        
		  <div class="form-group">
			<label for="providername" class="col-xs-3 control-label">Provider Name</label>
			<div class="col-xs-7">
			  <input class="form-control" id="providername" placeholder="Provider Name" value="Food Bank for Families">
			</div>
		  </div>
		  <div class="form-group">
			<label for="providerid" class="col-xs-3 control-label">Provider ID</label>
			<div class="col-xs-4">
			  <input class="form-control" id="providerid" placeholder="Provider ID" value="99999900">
			</div>
		  </div>
		  <div class="form-group">
			<label for="programtype" class="col-xs-3 control-label">Program Type</label>
			<div class="col-xs-7">
			  <select class="form-control" id="programtype" placeholder="">
              	<option>Food Bank</option>
                <option>Program Type 1</option>
                <option>Program Type 2</option>
                <option>Program Type 3</option>
                <option>Program Type 4</option>
              </select>
			</div>
		  </div>
		   <div class="form-group">
			<label for="streetaddress1" class="col-xs-3 control-label">Sreet Address 1</label>
			<div class="col-xs-7">
			  <input class="form-control" id="streetaddress1" placeholder="Street Address 1" value="123 Main Street">
			</div>
		  </div>
		   <div class="form-group">
			<label for="streetaddress2" class="col-xs-3 control-label">Sreet Address 2</label>
			<div class="col-xs-7">
			  <input class="form-control" id="streetaddress2" placeholder="Street Address 1">
			</div>
		  </div>
		   <div class="form-group">
			<label for="city" class="col-xs-3 control-label">City</label>
			<div class="col-xs-7">
			  <input class="form-control" id="city" placeholder="City" value="Center City">
			</div>
		  </div>
		   <div class="form-group">
			<label for="state" class="col-xs-3 control-label">State</label>
			<div class="col-xs-6">
			  <p class="form-control-static">Mississippi</p>
			</div>
		  </div>
		   <div class="form-group">
			<label for="zipcode" class="col-xs-3 control-label">Zip Code</label>
			<div class="col-xs-4">
			  <input class="form-control" id="zipcode" placeholder="Zip Code" value="30000">
			</div>
		  </div>
		  <div class="form-group">
			<label for="county" class="col-xs-3 control-label">County</label>
			<div class="col-xs-7">
			  <select class="form-control" id="county" placeholder="Counties">
				<?php
					$val = 0;
					foreach ($counties as $county){
					echo "<option value=\"{$val}\">{$county}</option>";
					$val++;
					}
				?>
			  </select>
			</div>
		  </div>
          <div class="form-group">
			<label for="phone" class="col-xs-3 control-label">Phone #</label>
			<div class="col-xs-4">
			  <input class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555) 555-5555">
			</div>
			<div class="col-xs-2" style="padding-left:0px">
			  <input class="form-control" id="ext" placeholder="Ext" type="tel" value="">
			</div>
			<div class="col-xs-3">
			  
			</div>
		  </div>
          
		  <div class="form-group">
			<label for="email" class="col-xs-3 control-label">Phone Type:</label>
			<div class="col-xs-7">
			  <select class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555) 555-5555">
              	<option>select type</option>
                <option>Telephone</option>
                <option>Fax</option>
                <option>Toll Free</option>
              </select>
			</div>
		  </div>
		  <div class="form-group">
			<label for="email" class="col-xs-3 control-label">Website</label>
			<div class="col-xs-7">
			  <input class="form-control" id="email" placeholder="Website" type="email" value="www.serviceprovider.com">
			</div>
		  </div>
		  </form>
	    </div>
	    <div class="tab-pane" id="tab3">
	      <form role="form">
        
          <!-- ko foreach: services -->
            <div class="row">
            <div class="col-xs-1">
            <p class="h3 text-right">1.</p>
            </div>
                <div class="form-group col-xs-4">
                    <label for="servicename" class="control-label">Service Name</label>
                    <input id="servicename" class="form-control" type="text"/>
                </div>
                <div class="form-group col-xs-4">
                    <label for="languages" class="control-label">Service Area(s)</label>
                    <!-- ko template: {name:'multiselect-template', afterRender: $root.initMultiselectConfig1}--><!--/ko -->
                </div>
                <div class="col-xs-2 col-xs-offset-1 text-right">                	
                    <a href="#" title="Remove Service" class="btn btn-danger btn-sm" data-bind="click: $root.removeService, visible: $root.services().length > 1"><span class="glyphicon glyphicon-minus"></span></a>
                    <button class="btn btn-success btn-sm" title="Add Service" data-bind="click: $root.addService, visible: $data == $root.services()[$root.services().length-1]"><span class="glyphicon glyphicon-plus"></span></button>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3 col-xs-offset-1">
                    <label for="streetaddress2" class="control-label">Clients</label>
                    <input class="form-control" id="streetaddress2" placeholder="Clients" value="People with low/no income">
                </div>            
                <div class="form-group col-xs-2">
                    <label for="openfrom" class="control-label">Ages From:</label>
                    <input class="form-control" type="number" id="streetaddress2" placeholder="">
                </div>                         
                <div class="form-group col-xs-2">
                    <label for="opento" class="control-label">Ages To:</label>
                    <input class="form-control" type="number" id="streetaddress2" placeholder="">
                </div>
                <div class="form-group col-xs-3">
                    <label for="acceptedpayment" class="control-label">Accepted Payment(s)</label>  
                    <!-- ko template: {name:'acceptedpayment-template', afterRender: $root.initMultiselectConfig2}--><!--/ko -->                  
                </div>
            </div>
          <hr data-bind="visible: !($data == $root.services()[$root.services().length-1])" style="margin: 40px 0px"/>
          <!-- /ko -->
			</form>
	    </div>
		<div class="tab-pane" id="tab4">
        <form class="form-horizontal" role="form">
        <h2 class="col-sm-offset-1">Account Information:</h2>
        <div class="row">
                <div class="col-sm-offset-1 col-sm-5">
                    <address>
                      <strong>Administrator Name:</strong><br>
                      Burton Brown
                    </address>
                </div>	
                <div class="col-sm-4">
                <address>
                      <strong>Email:</strong><br>
                      burtonbrown@serviceprovider.gov
                    </address>
                 </div>	
            </div>
             <div class="row">
                <div class="col-sm-offset-1 col-sm-5">
                    <address>
                      <strong>Phone #:</strong><br>
                     (555)-555-5555
                    </address>
                 </div>	
                 <div class="col-sm-4">
                    <address>
                      <strong>Login name:</strong><br>
                     burtonbrown
                    </address>
                </div>	
            </div>
            <hr>
        	<h2 class="col-sm-offset-1">Provider Information:</h2>
			<div class="row">
                    <div class="col-sm-offset-1 col-sm-5">
                        <address>
                          <strong>Provider Name:</strong><br>
                          Food Bank for Families
                        </address>
                    </div>	
                    <div class="col-sm-4">
                        <address>
                          <strong>Program Type:</strong><br>
                          Food Bank
                        </address>
                     </div>	
                </div>
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-5">
                        <address>
                          <strong>Address:</strong><br>
                          123 Main Street<br>
                          Center City, MS 30000<br>
                        </address>
                    </div>	
                    <div class="col-sm-4">
                        <address>
                          <strong>Telephone:</strong><br>
                          <abbr title="Toll Free">T:</abbr> (123) 456-7890<br>
                        </address>
                     </div>	
                </div>
                 <div class="row">
                    <div class="col-sm-offset-1 col-sm-5">
                        <address>
                          <strong>Website:</strong><br>
                          <a href="mailto:#">www.serviceprovider.com</a>
                        </address>
                     </div>	
                </div>
                <hr>                
        <h2 class="col-sm-offset-1">Services:</h2>
			<div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
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
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<td>
                                    	Ambulance
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
                                    	All
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
                                    	18 - 85
                                    </td>
                                	<td>
                                    	All
                                    </td>
                                </tr>
                            	<tr>
                                	<td>
                                    	Meals on Wheels
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
                                </tr>
                            </tbody>
                        </table>
                        </div>
                     </div>	
                </div>
                
            </form>
	    </div>
		<div class="tab-pane row" id="tab5">
        <div class="col-sm-8 col-sm-offset-2">
			<h4>Your request is almost complete!</h4>
            <p>Upon submitting, your provider access request will undergo an approval process which may take up 3 weeks. You will receive a email notification once a decision has been made with further instructions. You may also login to your account to check the status at anytime.</p>
              <div class="text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="createprovideraccount-submit" href="<?php echo base_url()."index.php/agencyaccess/requestconfirmation";?>" class="btn btn-primary disabled">Submit request</a>
              </div>
	    </div>
        </div>
	</div>	
        <div id="wizard-pager" class="hidden" style="margin-top: 60px">
            <hr/>
            <ul class="pager wizard">
                <li class="previous first" style="display:none;"><a href="#">First</a></li>
                <li class="previous"><a href="#" class=""><span class="glyphicon glyphicon-arrow-left"></span> Previous</a></li>
                <li class="next last" style="display:none;"><a href="#">Last</a></li>
                <li class="next"><a href="#" class="">Next <span class="glyphicon glyphicon-arrow-right"></span></a></li>
			</ul>
        </div>
</div>
<script type="text/html" id="multiselect-template">
	<select class="form-control js-multiselect" multiple="multiple" id="languages"> 
		<?php
			$val = 0;
			foreach ($counties as $county){
			echo "<option value=\"{$val}\">{$county}</option>";
			$val++;
			}
		?>
	</select>
</script>
<script type="text/html" id="acceptedpayment-template">
	<select class="form-control js-multiselect" multiple="multiple" id="languages"> 
		<?php
			$val = 0;
			foreach ($paymentmethods as $paymentmethod){
			echo "<option value=\"{$val}\">{$paymentmethod}</option>";
			$val++;
			}
		?>
	</select>
</script>

<script type="text/javascript">	
	function NewService(){
		var self = this;
	}
	
	function ServicesCollectionViewModel() {
		var self = this;
	   
		self.service;    	
	   
		self.services = ko.observableArray([new NewService()]);
		
		self.addService = function() {
			self.services.push(new NewService(self.service));
		}
		self.removeService = function(service) {
			self.services.remove(service);
		}
		self.initMultiselectConfig1 = function(elements){
			var select = $(elements[1]);
			select.multiselect({
				buttonClass: 'btn btn-default form-control',
				buttonWidth: false,
				buttonContainer: '<div class="btn-group" style="width:100%"/>',
				enableFiltering: true,
				filterPlaceholder: 'Search',
				numberDisplayed: 4,
				maxHeight: 300
			});
		}
		self.initMultiselectConfig2 = function(elements){
			var select = $(elements[1]);
			select.multiselect({
				buttonClass: 'btn btn-default form-control',
				buttonWidth: false,
				buttonContainer: '<div class="btn-group" style="width:100%"/>',
				enableFiltering: false,
				filterPlaceholder: 'Search',
				numberDisplayed: 3,
				maxHeight: 300
			});
		}
	}
	
	ko.applyBindings(new ServicesCollectionViewModel());
	
	function ToggleLoginButton() {
		if ($('#loginform').hasClass('hidden') && $('#registerform').hasClass('hidden') ){
			//$('#wizard-pager').removeClass('hidden');
			$('#loginform').removeClass('hidden');
			$('#registrationLogin').addClass('hidden');
			$('#or').addClass('hidden');
			$('#horzrule').removeClass('hidden');
			
		} else if ($('#loginform').hasClass('hidden') && !$('#registerform').hasClass('hidden') ){
			$('#loginform').removeClass('hidden');
			$('#registerform').addClass('hidden');
			$('#registrationLogin').addClass('hidden');
			$('#registrationNewAccount').removeClass('hidden');
			
		} else {
			$('#registrationLogin').addClass('hidden');
		}	
	}
	
	function ToggleNewAccountButton() {
		if ($('#registerform').hasClass('hidden') && $('#loginform').hasClass('hidden') ){
			$('#registerform').removeClass('hidden');
			$('#registrationNewAccount').addClass('hidden');
			$('#or').addClass('hidden');
			$('#horzrule').removeClass('hidden');
			
		} else if ($('#registerform').hasClass('hidden') && !$('#loginform').hasClass('hidden') ){
			$('#registerform').removeClass('hidden');
			$('#loginform').addClass('hidden');
			$('#registrationNewAccount').addClass('hidden');
			$('#registrationLogin').removeClass('hidden');
			
		} else {
			$('#registrationLogin').addClass('hidden');
		}
	}
	
	$(document).ready(function(){		
		
		$('#registrationLogin').click(function(){
			ToggleLoginButton();
		});
		
		$('#registrationNewAccount').click(function(){
			ToggleNewAccountButton()
		});
		
		$('#submitregistration').click(function(){
			$('#registerform').addClass('hidden');
			$('#createaccountsuccess').removeClass('hidden');
			$('#horzrule').addClass('hidden');
			$('#registrationLogin').addClass('hidden');
			$('#wizard-pager').removeClass('hidden');
		});
		
		
		$('#submitlogin').click(function(){
			$('#loginform').addClass('hidden');
			$('#loginsuccess').removeClass('hidden');
			$('#horzrule').addClass('hidden');
			$('#registrationNewAccount').addClass('hidden');
			$('#wizard-pager').removeClass('hidden');
		});
				
	});
	
</script>