<div class="modal fade" id="medication" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Medication</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
			  <div class="form-group">
				<label for="medicationname" class="col-xs-3 control-label">Medication Name</label>
				<div class="col-xs-5">
				  <input class="form-control" id="medicationname" placeholder="Medication Name" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="intakemethod" class="col-xs-3 control-label">Intake Method</label>
				<div class="col-xs-5">
				  <input class="form-control" id="intakemethod" placeholder="Intake Method" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="dosage" class="col-xs-3 control-label">Dosage</label>
				<div class="col-xs-5">
				  <input class="form-control" id="medicationname" placeholder="Dosage" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="medicationsince" class="col-xs-3 control-label">Since</label>
				<div class="col-xs-5">
				  <input class="form-control" id="medicationsince" placeholder="Year" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="medicationcomments" class="col-xs-3 control-label">Comments</label>
				<div class="col-xs-5">
				  <textarea class="form-control" id="medicationcomments" placeholder="Comments" value=""></textarea>
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