
<div class="container">
    <a href="<?php echo base_url().'index.php/submissions/submissions'?>" title="back to Submissions History">&laquo; Back</a>
     <h1 class="row">
        	<span class="col-sm-offset-1 col-sm-8">Request Details</span>
        </h1>
    <hr>
        <form class="form-horizontal" role="form">
        <h2 class="col-sm-offset-1">Request Information:</h2>
        <div class="row">
                <div class="col-sm-offset-1 col-sm-5">
                    <address>
                      <strong>Requested By:</strong><br>
                      Burton Brown
                    </address>
                </div>	
                <div class="col-sm-4">
                <address>
                      <strong>Request Type:</strong><br>
                      Add New Provider
                    </address>
                 </div>	
            </div>
             <div class="row">
                <div class="col-sm-offset-1 col-sm-5">
                <address>
                      <strong>Email:</strong><br>
                      burtonbrown@serviceprovider.gov
                    </address>
                 </div>	
                 <div class="col-sm-4">
                    <address>
                      <strong>Phone #:</strong><br>
                     (555)-555-5555
                    </address>
                </div>	
            </div>
            <hr>
            <div class="col-sm-1">
                <span class=" label label-success">NEW</span>
            </div>
            <h2 class="col-sm-offset-1">Provider Information:</h2>
			<div class="row">
                    <div class="col-sm-offset-1 col-sm-5">
                        <address>
                          <strong>Provider Name:</strong><br>
                          Food Bank for Families
                        </address>
                    </div>	
                    <div class="col-sm-4">
                        <address>
                          <strong>Provider ID:</strong><br>
                          99999900
                        </address>
                     </div>	
                </div>
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-5">
                        <address>
                          <strong>Program Type:</strong><br>
                          Food Bank
                        </address>
                    </div>	
                    <div class="col-sm-4">
                        <address>
                          <strong>Address:</strong><br>
                          123 Main Street<br>
                          Center City, MS 30000<br>
                        </address>
                     </div>	
                </div>
                 <div class="row">
                    <div class="col-sm-offset-1 col-sm-5">
                        <address>
                          <strong>Telephone:</strong><br>
                          <abbr title="Toll Free">T:</abbr> (123) 456-7890<br>
                        </address>
                    </div>                        
                    <div class="col-sm-4">
                        <address>
                          <strong>Website:</strong><br>
                          <a href="mailto:#">www.serviceprovider.com</a>
                        </address>
                     </div>	
                </div>
                <hr>           
            <div class="col-sm-1">
                <span class=" label label-success">NEW</span>
            </div>     
        	<h2 class="col-sm-offset-1">Services:</h2>
			<div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        	<thead>
                            	<tr>
                                	<th>
                                    	Service Name
                                    </th>
                                	<th>
                                    	Service Area(s)
                                    </th>
                                	<th>
                                    	Clients
                                    </th>
                                	<th>
                                    	Age Range
                                    </th>
                                	<th>
                                    	Accepted Payments
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<td>
                                    	Ambulance
                                    </td>
                                	<td>
                                    	All
                                    </td>
                                	<td>
                                    	All
                                    </td>
                                	<td>
                                    	All
                                    </td>
                                	<td>
                                    	All
                                    </td>
                                </tr>
                            	<tr>
                                	<td>
                                    	Animal Services
                                    </td>
                                	<td>
                                    	Benton
                                    </td>
                                	<td>
                                    	All Clients
                                    </td>
                                	<td>
                                    	18 - 85
                                    </td>
                                	<td>
                                    	All
                                    </td>
                                </tr>
                            	<tr>
                                	<td>
                                    	Meals on Wheels
                                    </td>
                                	<td>
                                    	Benton
                                    </td>
                                	<td>
                                    	All Clients
                                    </td>
                                	<td>
                                    	17-65
                                    </td>
                                	<td>
                                    	Cash, Checks, Credit
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                     </div>	
                </div>
                
            </form>
        <hr>
        <div class="well">
            <label class="form-label" for="reason">Reason for Decision:</label>
            <textarea class="form-control" id="reason" required	required="required" style="margin-bottom: 10px;"></textarea>
            <a class="btn btn-danger" href="#">Deny <span class="glyphicon glyphicon-thumbs-down"></span></a>        
            <a class="btn btn-success pull-right" href="#">Approve <span class="glyphicon glyphicon-thumbs-up"></span></a>
        </div>	
	</div>
    <hr>
    <a href="<?php echo base_url().'index.php/submissions/submissionshistory'?>" title="back to Submissions History">&laquo; Back</a>