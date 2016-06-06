<div class="modal fade" id="editprovidereligibilityinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Eligibility Information</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
        
		  <div class="form-group">
			<span class="col-xs-3 control-label"><b>Ages</b></span>
			<div class="col-xs-9">
                <label for="openfrom" class="col-xs-1 control-label" style="text-align:left; padding-left:0px; padding-right:0px;">From:</label>
                <div class="col-xs-2">
                  <input class="form-control" type="number" id="streetaddress2" placeholder="">
                </div>   
                <label for="opento" class="col-xs-1 control-label" style=" padding-left:0px; padding-right:0px;">To:</label>         
                <div class="col-xs-2">
			  <input class="form-control" type="number" id="streetaddress2" placeholder="">
                </div>
			</div>
		  </div>
              <div class="form-group">
				<label for="languages" class="col-xs-3 control-label">Service Area</label>
				<div class="col-xs-5">
				  <select class="form-control js-multiselect" multiple="multiple" id="languages"> 
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
			<label for="streetaddress2" class="col-xs-3 control-label">Clients</label>
			<div class="col-xs-5">
			  <input class="form-control" id="streetaddress2" placeholder="Clients" value="People with low/no income">
			</div>
		  </div>
		   <div class="form-group">
			<label for="city" class="col-xs-3 control-label">Fees</label>
			<div class="col-xs-5">
			  <input class="form-control" id="city" placeholder="Fees" value="Free">
			</div>
		  </div>
		   <div class="form-group">
			<label for="state" class="col-xs-3 control-label">Accepted Payment</label>
			<div class="col-xs-5">
			  <input class="form-control" id="zipcode" placeholder="Accepted Payment" value="Please inquire.">
			</div>
		  </div>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->