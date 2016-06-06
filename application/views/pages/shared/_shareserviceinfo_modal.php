<div class="modal fade" id="shareserviceinformation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-share-alt"></span> Share: <span class="text-muted">Foodbank for Families</span></h4>
        </div>
      <div class="modal-body">
		   <!--<h2 class="h4" style="margin-top: 0px;"><span class="glyphicon glyphicon-paperclip text-muted h5"></span></h2>-->
           
           <form class="form-horizontal" role="form">
           
           <div class="form-group">
				<label for="sendername" class="col-xs-3 control-label">Your Name</label>
				<div class="col-xs-5">
				  <input class="form-control" id="sendername" placeholder="Your Name" value="">
				</div>
			  </div>
           <div class="form-group">
				<label for="senderemail" class="col-xs-3 control-label">Your Email</label>
				<div class="col-xs-5">
				  <input class="form-control" id="senderemail" placeholder="example@example.com" value="">
				</div>
			  </div>
              <div class="form-group">
                <label for="recipientemail" class="col-lg-3 control-label">Recipient Email(s)</label>
                <div class="col-lg-5">
                  <input class="form-control" id="middlename" type="recipientemail" placeholder="example@example.com">
                </div>
              </div>
              
              <div class="form-group">
                <label for="lastname" class="col-lg-3 control-label">Message</label>
                <div class="col-lg-5">
                  <textarea class="form-control" id="lastname" placeholder="Message" rows="5"></textarea>
                </div>
              </div>
            </form>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Send</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->