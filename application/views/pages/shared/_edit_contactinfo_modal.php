<div class="modal fade" id="editcontactinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Contact Info</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
		   <div class="form-group">
			<label for="streetaddress1" class="col-xs-3 control-label">Sreet Address 1</label>
			<div class="col-xs-5">
			  <input class="form-control" id="streetaddress1" placeholder="Street Address 1" value="1 Main Street">
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
			  <input class="form-control" id="city" placeholder="City" value="Ashton">
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
			  <input class="form-control" id="zipcode" placeholder="Zip Code" value="38603">
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
			<label for="email" class="col-xs-3 control-label">e-mail</label>
			<div class="col-xs-5">
			  <input class="form-control" id="email" placeholder="e-mail" type="email" value="casmith@example.com">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="phone" class="col-xs-3 control-label">Phone #</label>
			<div class="col-xs-3">
			  <input class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555) 555-5555">
			</div>
			<div class="col-xs-2">
			  <input class="form-control" id="ext" placeholder="Ext" type="tel" value="Ext.">
			</div>
			<div class="col-xs-3">
			  <select class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555) 555-5555">
              	<option>select type</option>
                <option>Main</option>
                <option>Home</option>
                <option>Mobile</option>
                <option>Work</option>
              </select>
			</div>
		  </div>
          <div class="form-group">
			<label for="phone" class="col-xs-3 control-label">Phone #</label>
			<div class="col-xs-3">
			  <input class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555) 555-5555">
			</div>
			<div class="col-xs-2">
			  <input class="form-control" id="ext" placeholder="Ext" type="tel" value="Ext.">
			</div>
			<div class="col-xs-3">
			  <select class="form-control" id="phone" placeholder="Phone #" type="tel" value="(555) 555-5555">
              	<option>select type</option>
                <option>Main</option>
                <option>Home</option>
                <option>Mobile</option>
                <option>Work</option>
              </select>
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