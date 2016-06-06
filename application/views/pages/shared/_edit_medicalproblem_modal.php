<div class="modal fade" id="currentmedicalproblem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Medical Problem</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
			  <div class="form-group">
				<label for="medicalissue" class="col-xs-3 control-label">Description</label>
				<div class="col-xs-5">
				  <input class="form-control" id="medicalissue" placeholder="Issue" value="">
				</div>
			  </div>
              <div class="form-group">
				<label for="medicalstatus" class="col-xs-3 control-label">Status</label>
				<div class="col-xs-5">
				  <select class="form-control" id="medicalstatus" name="medicalstatus">
                  <option val="0">Select Status</option>
                  <option val="1">Current Problem</option>
                  <option val="2">Past Problem</option>
                  <option val="3">Completed Surgery</option>
                  </select>
				</div>
			  </div>
              <div id="since-group">
                  <div class="form-group">
                    <label for="medicalsince" class="col-xs-3 control-label">Since</label>
                    <div class="col-xs-5">
                      <input class="form-control" id="medicalsince" placeholder="Year" value="">
                    </div>
                  </div>
			  </div>
              <div id="fromto-group">
                  <div class="form-group">
                    <label for="medicalfrom" class="col-xs-3 control-label">From</label>
                    <div class="col-xs-5">
                      <input class="form-control" id="medicalfrom" placeholder="Year" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="medicalto" class="col-xs-3 control-label">To</label>
                    <div class="col-xs-5">
                      <input class="form-control" id="medicalto" placeholder="Year" value="">
                    </div>
                  </div>
			  </div>
              <div id="dateofsurgery-group">
                  <div class="form-group">
                    <label for="medicalsurgerydate" class="col-xs-3 control-label">Date of Surgery</label>
                    <div class="col-xs-5">
                      <input class="form-control" type="date" id="medicalsurgerydate" placeholder="mm/dd/yy" value="">
                    </div>
                  </div>
			  </div>
			  <div class="form-group">
				<label for="medicalcomments" class="col-xs-3 control-label">Comments</label>
				<div class="col-xs-5">
				  <textarea class="form-control" id="medicalcomments" placeholder="Comments" value=""></textarea>
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