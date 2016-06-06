<div class="container">
		<!-- Content -->
        <h1 class="row" style="margin-top:0px;">
        	<span class="col-sm-offset-1 col-sm-8">Account Profile</span>
        </h1>
        <hr>
        <div class="row">
        <div class="col-sm-offset-1 col-sm-10">
		 	<div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapseOne">
                User Info
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-offset-1 col-sm-4">
                    <address>
                      <strong>Name:</strong><br>                                     
						<?php echo $accountname;?>
                    </address>
                </div>	
                <div class="col-sm-4">
                    <address>
                      <strong>Account ID:</strong><br>
                     <?php echo $accountid;?>
                    </address>
                 </div>	
                 <div class="col-xs-3 text-right">
						  <a class="btn btn-sm btn-default" href="#" role="button" data-toggle="modal" data-target="#edituserinfo">Edit</a>
				</div>
            </div>
             <div class="row">
                <div class="col-sm-offset-1 col-sm-4">
                    <address>
                      <strong>Date of Birth:</strong><br>
                      01/01/1950
                    </address>
                </div>	
                <div class="col-sm-7">
                    <address>
                      <strong>Gender:</strong><br>
                      <?php echo $usergender;?>
                    </address>
                 </div>	
            </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapseTwo">
                Contact Info
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse in">
            <div class="panel-body">
				 <div class="row">
                <div class="col-sm-offset-1 col-sm-4">
                    <address>
                      <strong>Address:</strong><br>
                      1 Main Street<br>
                      Ashton, MS 38603
                    </address>
                </div>	
                <div class="col-sm-4">
                <address>
                      <strong>Phone:</strong><br>
                      Mobile: (436)-653-3645<br>
                      Work: (436)-374-8234 Ext: 6841<br>
                    </address>
                 </div>	
                 <div class="col-xs-3 text-right">
						  <a class="btn btn-sm btn-default" href="#" role="button" data-toggle="modal" data-target="#editcontactinfo">Edit</a>
				</div>
            </div>
             <div class="row">
                <div class="col-sm-offset-1 col-sm-4">
                    <address>
                      <strong>Email:</strong><br>
                      <?php echo $login;?>@example.com
                    </address>
                 </div>	
            </div>
            </div>
          </div>
        </div>
		<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapseThree">
                Account Info
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse in">
            <div class="panel-body">
              <form class="form-horizontal" role="form">
				  <div class="form-group">
					<label for="username" class="col-xs-3 control-label">User Name</label>
					<div class="col-xs-6">
					  <p class="form-control-static"><?php echo $login;?></p>
					</div>
					<div class="col-xs-3 text-right">
					  <a class="btn btn-sm btn-default" href="#" role="button" data-toggle="modal" data-target="#editaccountinfo">Edit</a>
					</div>
				  </div>
				  <div class="form-group">
					<label for="password" class="col-xs-3 control-label">Password</label>
					<div class="col-xs-6">
					  <p class="form-control-static">**********</p>
					</div>
				  </div>
			  </form>	
            </div>
          </div>
        </div>
      </div>
      	</div>
      </div>
	</div><!--/container-->
	  
<!-- MODALS -->

<!-- Modal - Edit User Info -->
<?php echo $_edit_userinfo_modal;?>


<!-- Modal - Edit Contact Info -->
<?php echo $_edit_contactinfo_modal;?>


<!-- Modal - Edit Account Info -->
<?php echo $_edit_accountinfo_modal;?>


<!-- Scripts -->
<script type="text/javascript">
$(document).ready(function(){
	
	$('#gender').val(1);
	$('#race').val(3);
	$('#county').val(5);


});

</script>