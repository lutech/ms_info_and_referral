<div class="modal fade" id="create_provideraccount_wizard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Create Provider Account</h4>
      </div>
      <div class="modal-body">
     <div id="rootwizard" class="tabbable tabs-left row">
	<ul id="wizard-sidenav" class="col-sm-3 nav-stacked">
	  	<li><a href="#tab1" data-toggle="tab">1. Provider Info</a></li>
		<li class="disabled"><a href="#tab2" data-toggle="tab">2. Administrator Info</a></li>
		<li class="disabled"><a href="#tab3" data-toggle="tab">3. Review</a></li>
		<li class="disabled"><a href="#tab4" data-toggle="tab">4. Finish</a></li>
	</ul>
	<div class="tab-content col-sm-8">
	    <div class="tab-pane" id="tab1">
	      <form class="form-horizontal" role="form">
        
		  <div class="form-group">
			<label for="providername" class="col-xs-4 control-label">Provider Name</label>
			<div class="col-xs-7">
			  <input class="form-control" id="providername" placeholder="Provider Name" type="email" value="Food Bank for Families">
			</div>
		  </div>
		  <div class="form-group">
			<label for="programtype" class="col-xs-4 control-label">Program Type</label>
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
			<label for="streetaddress1" class="col-xs-4 control-label">Sreet Address 1</label>
			<div class="col-xs-7">
			  <input class="form-control" id="streetaddress1" placeholder="Street Address 1" value="123 Main Street">
			</div>
		  </div>
		   <div class="form-group">
			<label for="streetaddress2" class="col-xs-4 control-label">Sreet Address 2</label>
			<div class="col-xs-7">
			  <input class="form-control" id="streetaddress2" placeholder="Street Address 1">
			</div>
		  </div>
		   <div class="form-group">
			<label for="city" class="col-xs-4 control-label">City</label>
			<div class="col-xs-7">
			  <input class="form-control" id="city" placeholder="City" value="Center City">
			</div>
		  </div>
		   <div class="form-group">
			<label for="state" class="col-xs-4 control-label">State</label>
			<div class="col-xs-6">
			  <p class="form-control-static">Mississippi</p>
			</div>
		  </div>
		   <div class="form-group">
			<label for="zipcode" class="col-xs-4 control-label">Zip Code</label>
			<div class="col-xs-5">
			  <input class="form-control" id="zipcode" placeholder="Zip Code" value="30000">
			</div>
		  </div>
		  <div class="form-group">
			<label for="county" class="col-xs-4 control-label">County</label>
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
			<label for="phone" class="col-xs-4 control-label">Phone #</label>
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
			<label for="email" class="col-xs-4 control-label">Phone Type:</label>
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
			<label for="email" class="col-xs-4 control-label">Website</label>
			<div class="col-xs-7">
			  <input class="form-control" id="email" placeholder="Website" type="email" value="www.serviceprovider.com">
			</div>
		  </div>
		  </form>
	    </div>
	    <div class="tab-pane" id="tab2">
        <form class="form-horizontal" role="form">
	     <div class="form-group">
				<label for="firstname" class="col-xs-4 control-label">First Name</label>
				<div class="col-xs-7">
				  <input class="form-control" id="firstname" placeholder="First Name" value="Harold">
				</div>
			  </div>
			  <div class="form-group">
				<label for="lastname" class="col-xs-4 control-label">Last Name</label>
				<div class="col-xs-7">
				  <input class="form-control" id="lastname" placeholder="Last Name" value="Brown">
				</div>
			  </div>
		  <div class="form-group">
			<label for="importantcontactemail" class="col-xs-4 control-label">Email</label>
			<div class="col-xs-7">
			  <input class="form-control" id="importantcontactemail" type="email" placeholder="Email" value="hbrown@serviceprovider.com">
			</div>
		  </div>
		  <div class="form-group">
			<label for="phone" class="col-xs-4 control-label">Phone #</label>
			<div class="col-xs-7">
			  <input class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555)-555-5555">
			</div>
		  </div>
          <div class="form-group">
				<label for="firstname" class="col-xs-4 control-label">Login Name</label>
				<div class="col-xs-7">
				  <input class="form-control" id="firstname" placeholder="First Name" value="hbrown1">
				</div>
			  </div>
			  <div class="form-group">
				<label for="lastname" class="col-xs-4 control-label">Password</label>
				<div class="col-xs-7">
				  <input class="form-control" id="lastname" type="password" placeholder="Last Name" value="Smitddh">
				</div>
			  </div>
          </form>
	    </div>
		<div class="tab-pane" id="tab3">
        <form class="form-horizontal" role="form">
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
                        <div class="row">
                <div class="col-sm-offset-1 col-sm-5">
                    <address>
                      <strong>Administrator Name:</strong><br>
                      Harold Brown
                    </address>
                </div>	
                <div class="col-sm-4">
                <address>
                      <strong>Email:</strong><br>
                      hbrown@serviceprovider.gov
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
                     hbrown1
                    </address>
                </div>	
            </div>
            </form>
	    </div>
		<div class="tab-pane" id="tab4">
			<h4>Thank you!</h4>
            <p>Please note. Upon submitting, your provider account will be created immediately and you will be redirected to your Provider Admin area where you can complete your Provider Profile. Once you have made your service "active", your request will undergo a review process before being listed to the Information and Referral website.</p>
	    </div>
		<ul class="pager wizard">
			<li class="previous first" style="display:none;"><a href="#">First</a></li>
			<li class="previous"><a href="#">Previous</a></li>
			<li class="next last" style="display:none;"><a href="#">Last</a></li>
		  	<li class="next"><a href="#">Next</a></li>
		</ul>
	</div>	
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a id="createprovideraccount-submit" href="<?php echo base_url()."index.php/provideradmin";?>" class="btn btn-primary disabled">Submit</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->