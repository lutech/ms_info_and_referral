<div class="modal fade" id="sendmessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Message</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
        <div class="form-group">
				<label for="sendername" class="col-xs-3 control-label">To:</label>
				<div id="providerlistcontainer" class="col-xs-9">
				  
				</div>
			  </div>
           <div class="form-group">
				<label for="sendername" class="col-xs-3 control-label">Your Name</label>
				<div class="col-xs-5">
				  <input class="form-control" id="sendername" placeholder="Your Name" value="">
				</div>
			  </div>
        		<div class="form-group">
				<label for="allergyname" class="col-xs-3 control-label">Your Email</label>
				<div class="col-xs-5">
				  <input class="form-control" id="allergyname" placeholder="example@example.com" value="">
				</div>
			  </div>
              <div class="form-group">
				<label for="allergyname" class="col-xs-3 control-label">Your Phone #</label>
				<div class="col-xs-5">
				  <input class="form-control" id="allergyname" placeholder="(999)-999-9999" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="allergyname" class="col-xs-3 control-label">Subject</label>
				<div class="col-xs-5">
				  <input class="form-control" id="allergyname" placeholder="Subject" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="allergycomments" class="col-xs-3 control-label">Message</label>
				<div class="col-xs-8">
				  <textarea class="form-control" id="allergycomments" rows="5" placeholder="Message" value=""></textarea>
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