<div class="modal fade" id="editserviceinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Service Information</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
        
		  <div class="form-group">
			<span class="col-xs-3 control-label"><b>Service Name</b></span>
			<div class="col-xs-7">
			  <input class="form-control" id="streetaddress2" placeholder="Clients" value="People with low/no income">
			</div>
		  </div>
              <div class="form-group">
				<label for="languages" class="col-xs-3 control-label">Service Area(s)</label>
				<div class="col-xs-7">
				  <select class="form-control js-multiselect" multiple="multiple" id="counties"> 
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
			<div class="col-xs-7">
			  <input class="form-control" id="streetaddress2" placeholder="Clients" value="People with low/no income">
			</div>
		  </div>
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
			<label for="state" class="col-xs-3 control-label">Accepted Payments</label>
			<div class="col-xs-7">
			  <select class="form-control js-multiselect" multiple="multiple" id="paymentmethods"> 
				<?php
                    $val = 0;
                    foreach ($paymentmethods as $paymentmethod){
                    echo "<option value=\"{$val}\">{$paymentmethod}</option>";
                    $val++;
                    }
                ?>
            </select>
			</div>
		  </div>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="service1-button" type="button" data-dismiss="modal" class="btn btn-primary">Save changes</button>
        <button id="service2-button" type="button" data-dismiss="modal" class="btn btn-primary">Save changes</button>
        <button id="newservice-button" type="button" data-dismiss="modal" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->