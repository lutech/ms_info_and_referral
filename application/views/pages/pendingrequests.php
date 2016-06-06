<div class="row">

		<!-- Side Navigation -->
		<?php echo $_sidenavigation; ?>
        
        <!-- Content -->
        <div class="col-md-9">
		<h1 style="margin-top:0px;">Pending Requests</h1>
        <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Request Type
                            </th>
                            <th>
                                Request Date
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <?php
						//UNAUTHORIZED PROVIDER ACCESS
						//---------------------------------------
						if ( $_COOKIE['user'] == 'unauthorizedprovider'){
							echo '
								<tbody>
									<tr>
										<td>
											Add new provider
										</td>
										<td>
											01/01/2014
										</td>
										<td>
											<a href="'.base_url().'index.php/requests/pendingnewrequest">details</a>
										</td>
									</tr>
								</tbody>
							';	
						}
						//AUTHORIZED PROVIDER ACCESS
						//---------------------------------------
						else if ( $_COOKIE['user'] == 'authorizedprovider' && $_COOKIE['loginname'] == 'victoriaviolet'){
							echo '								
								<tbody>
									<tr>
										<td>
											Link to provider
										</td>
										<td>
											01/01/2014
										</td>
										<td>
											<a href="'.base_url().'index.php/requests/pendinglinkrequest">details</a>
										</td>
									</tr>
								</tbody>
							';
						}
						//AUTHORIZED PROVIDER ACCESS
						//---------------------------------------
						else if ( $_COOKIE['user'] == 'authorizedprovider' && $_COOKIE['loginname'] == 'susanasilver'){
							echo '								
								<tbody>
									<tr>
										<td>
											Provider profile update/change
										</td>
										<td>
											01/01/2014
										</td>
										<td>
											<a href="'.base_url().'index.php/requests/pendingupdaterequest">details</a>
										</td>
									</tr>
								</tbody>
							';
						}
					?>
                </table>
        </div>
    </div>
</div>