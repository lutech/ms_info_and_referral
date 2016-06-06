<div class="modal fade" id="editprovidercontactinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Contact Information</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
		   <div class="form-group">
			<label for="intakecontact" class="col-xs-3 control-label">Intake Contact</label>
			<div class="col-xs-5">
			  <input class="form-control" id="intakecontact" placeholder="Intake Contact" value="John Doe">
			</div>
		  </div>		  
		  <div class="form-group">
			<label for="intakeemail" class="col-xs-3 control-label">Intake Email</label>
			<div class="col-xs-5">
			  <input class="form-control" id="intakeemail" placeholder="Intake Email" type="email" value="johnd@serviceprovider.com">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="intakephone1" class="col-xs-3 control-label">Intake Phone #</label>
			<div class="col-xs-3">
			  <input class="form-control" id="intakephone1" placeholder="Intake Phone #" type="tel" value="(123) 456-7890">
			</div>
			<div class="col-xs-2" style="padding-left:0px;">
			  <input class="form-control" id="intakeext2" placeholder="Ext" type="tel" value="">
			</div>
			<div class="col-xs-3">
			  <select class="form-control" id="intakephonetype1" placeholder="Phone #" type="tel" value="">
              	<option>select type</option>
                <option>Main</option>
                <option>Home</option>
                <option>Mobile</option>
                <option>Work</option>
                <option>Fax</option>
              </select>
			</div>
		  </div>
          <div class="form-group">
			<label for="intakephone2" class="col-xs-3 control-label">Intake Phone #</label>
			<div class="col-xs-3">
			  <input class="form-control" id="intakephone2" placeholder="Intake Phone #" type="tel" value="">
			</div>
			<div class="col-xs-2" style="padding-left:0px;">
			  <input class="form-control" id="intakeext2" placeholder="Ext" type="tel" value="">
			</div>
			<div class="col-xs-3">
			  <select class="form-control" id="intakephonetype2" placeholder="Phone #" type="tel" value="">
              	<option>select type</option>
                <option>Main</option>
                <option>Home</option>
                <option>Mobile</option>
                <option>Work</option>
                <option>Fax</option>
              </select>
			</div>
		  </div>
          
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="contactinfo-button" data-dismiss="modal" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->