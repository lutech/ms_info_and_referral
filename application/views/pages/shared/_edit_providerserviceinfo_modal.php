<div class="modal fade" id="editproviderserviceinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Service Information</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
        
		  <div class="form-group">
			<label for="providername" class="col-xs-3 control-label">Provider Name</label>
			<div class="col-xs-5">
			  <input class="form-control" id="providername" placeholder="Provider Name" type="email" value="Food Bank for Families">
			</div>
		  </div>
		  <div class="form-group">
			<label for="programtype" class="col-xs-3 control-label">Program Type</label>
			<div class="col-xs-5">
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
			<div class="col-xs-5">
			  <input class="form-control" id="streetaddress1" placeholder="Street Address 1" value="123 Main Street">
			</div>
		  </div>
		   <div class="form-group">
			<label for="streetaddress2" class="col-xs-3 control-label">Sreet Address 2</label>
			<div class="col-xs-5">
			  <input class="form-control" id="streetaddress2" placeholder="Street Address 1">
			</div>
		  </div>
		   <div class="form-group">
			<label for="city" class="col-xs-3 control-label">City</label>
			<div class="col-xs-5">
			  <input class="form-control" id="city" placeholder="City" value="Center City">
			</div>
		  </div>
		   <div class="form-group">
			<label for="state" class="col-xs-3 control-label">State</label>
			<div class="col-xs-4">
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
			<div class="col-xs-5">
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
			<span class="col-xs-3 control-label"><b>Days of Operation</b></span>
			<div class="col-xs-7">
               <label class="checkbox col-xs-3" for="sunday">
                  <input type="checkbox" name="businessdays" id="sunday" value="" >
                  Sun
            	</label>
                <label class="checkbox col-xs-3" for="monday">
                  <input type="checkbox" name="businessdays" id="monday" value="" >
                  Mon
            	</label>
                <label class="checkbox col-xs-3" for="tuesday">
                  <input type="checkbox" name="businessdays" id="tuesday" value="" >
                  Tue
            	</label>
                <label class="checkbox col-xs-3" for="wednesday">
                  <input type="checkbox" name="businessdays" id="wednesday" value="" >
                  Wed
            	</label>
                <label class="checkbox col-xs-3" for="thursday">
                  <input type="checkbox" name="businessdays" id="monday" value="" >
                  Thu
            	</label>
                <label class="checkbox col-xs-3" for="friday">
                 <input type="checkbox" name="businessdays" id="friday" value="" >
                  Fri
            	</label>
                <label class="checkbox col-xs-3" for="saturday">
                  <input type="checkbox" name="businessdays" id="saturday" value="" >
                  Sat
            	</label>
			</div>
		  </div>
		  <div class="form-group">
			<span class="col-xs-3 control-label"><b>Hours of Operation</b></span>
			<div class="col-xs-9">
                <label for="openfrom" class="col-xs-1 control-label" style="text-align:left; padding-left:0px; padding-right:0px;">From:</label>
                <div class="col-xs-4">
                  <select class="form-control" id="openfrom" placeholder="Phone #" type="tel" value="(555) 555-5555">
                    <option>8:00am</option>
                    <option>8:30am</option>
                    <option>9:00am</option>
                    <option>9:30am</option>
                    <option>10:00am</option>
                  </select>
                </div>   
                <label for="opento" class="col-xs-1 control-label" style=" padding-left:0px; padding-right:0px;">To:</label>         
                <div class="col-xs-4">
                  <select class="form-control" id="opento" placeholder="Phone #" type="tel" value="(555) 555-5555">
                    <option>4:00pm</option>
                    <option>4:30pm</option>
                    <option>5:00pm</option>
                    <option>5:30pm</option>
                    <option>6:00pm</option>
                  </select>
                </div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="phone" class="col-xs-3 control-label">Phone #</label>
			<div class="col-xs-3">
			  <input class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555) 555-5555">
			</div>
			<div class="col-xs-2" style="padding-left:0px">
			  <input class="form-control" id="ext" placeholder="Ext" type="tel" value="">
			</div>
			<div class="col-xs-3">
			  <select class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555) 555-5555">
              	<option>select type</option>
                <option>Telephone</option>
                <option>Fax</option>
                <option>Toll Free</option>
              </select>
			</div>
		  </div>
          <div class="form-group">
			<label for="phone" class="col-xs-3 control-label">Phone #</label>
			<div class="col-xs-3">
			  <input class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555) 555-5555">
			</div>
			<div class="col-xs-2" style="padding-left:0px">
			  <input class="form-control" id="ext" placeholder="Ext" type="tel" value="">
			</div>
			<div class="col-xs-3">
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
			<div class="col-xs-5">
			  <input class="form-control" id="email" placeholder="Website" type="email" value="www.serviceprovider.com">
			</div>
		  </div>
		  <!--
		  <div class="form-group">
			<span class="col-xs-3 control-label"><b>Status</b></span>
			<div class="col-xs-7">
               <label class="checkbox" for="listservices">
                  <input type="checkbox" name="businessdays" id="listservices" value="" >
                  Active (List services)
            	</label>
			</div>
		  </div>-->
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="serviceinfo-button" data-dismiss="modal" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->