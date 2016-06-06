<div class="row">

		<!-- Side Navigation -->
		<?php echo $_sidenavigation; ?>
        
        <!-- Content -->
        <div class="col-md-9">
		<h1 style="margin-top:0px;">Requests History</h1>
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
                                Final Decision
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
										<td colspan="4 text-center">
											No data to display
										</td>
									</tr>
								</tbody>
							';	
						}
						//UNAUTHORIZED PROVIDER ACCESS
						//---------------------------------------
						else if ( $_COOKIE['user'] == 'authorizedprovider' && $_COOKIE['loginname'] == 'victoriaviolet'){
							echo '
								<tbody>
									<tr>
										<td colspan="4 text-center">
											No data to display
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
											Link account to provider
										</td>
										<td>
											12/31/2013
										</td>
										<td>
											Denied
										</td>
										<td>
											<a href="'.base_url().'index.php/requests/linkrequesthistoric">details</a>
										</td>
									</tr>
									<tr>
										<td>
											Provider profile update/change
										</td>
										<td>
											12/15/2013
										</td>
										<td>
											Approved
										</td>
										<td>
											<a href="'.base_url().'index.php/requests/updaterequesthistoric">details</a>
										</td>
									</tr>
									<tr>
										<td>
											Add new provider
										</td>
										<td>
											12/01/2013
										</td>
										<td>
											Approved
										</td>
										<td>
											<a href="'.base_url().'index.php/requests/newrequesthistoric">details</a>
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