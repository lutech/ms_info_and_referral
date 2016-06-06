<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">User Login</h4>
      </div>      
      	<form id="loginform" method="post" name="form" action="<?php echo base_url().'index.php/site/login'?>">
          <div class="modal-body">
              <div class="form-signin">
                <input type="text" class="form-control" placeholder="User Name" name="username" required autofocus title="roisered (Public Member 1); gabrielgreen (Public Member 2); penelopepurple (Un-authorized Provider); susanasilver (Authorized Provider); burtonbrown (DOM Staff)">
                <input type="password" class="form-control" placeholder="Password"  name="usernamepassword" required title="Type anything for password">
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <input type="submit" name="submit" value="Login" class="btn btn-primary"/>
          </div>
          </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->