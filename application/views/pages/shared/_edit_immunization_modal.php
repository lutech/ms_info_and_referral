<div class="modal fade" id="immunization" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Immunization</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
			  <div class="form-group">
				<label for="allergyname" class="col-xs-3 control-label">Immunization Name</label>
				<div class="col-xs-5">
				  <input class="form-control" id="allergyname" placeholder="Allergy Name" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="dateofimmunization" class="col-xs-3 control-label" type="">Date of Immunization</label>
				<div class="col-xs-5">
				  <input class="form-control" id="dateofimmunization" placeholder="mm/dd/yy" type="date" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="dateofexpiration" class="col-xs-3 control-label">Date of Expiration</label>
				<div class="col-xs-5">
				  <input class="form-control" id="dateofexpiration" placeholder="mm/dd/yy" type="date" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="immunizationcomments" class="col-xs-3 control-label">Comments</label>
				<div class="col-xs-5">
				  <textarea class="form-control" id="immunizationcomments" placeholder="Comments" value=""></textarea>
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