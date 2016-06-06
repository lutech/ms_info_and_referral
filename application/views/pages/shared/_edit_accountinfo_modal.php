<div class="modal fade" id="editaccountinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
		  <div class="form-group">
			<label for="username" class="col-xs-3 control-label">User Name</label>
			<div class="col-xs-5">
					  <p class="form-control-static">CSmith</p>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="oldpassword" class="col-xs-3 control-label">Old Password</label>
			<div class="col-xs-5">
			  <input type="password" class="form-control" id="oldpassword" placeholder="Old Password" value="">
			</div>
		  </div>
		  <div class="form-group">
			<label for="newpassword" class="col-xs-3 control-label">New Password</label>
			<div class="col-xs-5">
			  <input type="password" class="form-control" id="newpassword" placeholder="New Password" value="">
			</div>
		  </div>
		  <div class="form-group">
			<label for="verifypassword" class="col-xs-3 control-label">Verify Password</label>
			<div class="col-xs-5">
			  <input type="password" class="form-control" id="verifypassword" placeholder="Verify Password" value="">
			</div>
		  </div>
		  
		  <div class="form-group">
			<div class="col-xs-offset-3 col-xs-5">
			  <div class="checkbox">
				<label>
				  <input type="checkbox" checked="checked"> Remember me
				</label>
			  </div>
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