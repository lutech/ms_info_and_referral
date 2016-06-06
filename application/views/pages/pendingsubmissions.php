<div class="row">

		<!-- Side Navigation -->
		<?php echo $_sidenavigation; ?>
        
        <!-- Content -->
        <div class="col-md-9">
		<h1 style="margin-top:0px;">Pending Submissions</h1>
        <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Request Type
                            </th>
                            <th>
                                Requested By
                            </th>
                            <th>
                                Request Date
                            </th>
                            <th>
                                Provider ID
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Add new provider
                            </td>
                            <td>
                                Penelope Purple
                            </td>
                            <td>
                                12/31/2013
                            </td>
                            <td>
                                99999900
                            </td>
                            <td>
                                <a href="<?php echo base_url().'index.php/submissions/newrequest'?>">details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Provider profile update/change
                            </td>
                            <td>
                                Susana Silver
                            </td>
                            <td>
                                12/15/2013
                            </td>
                            <td>
                                55555500
                            </td>
                            <td>
                                <a href="<?php echo base_url().'index.php/submissions/updaterequest'?>">details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Link account to provider
                            </td>
                            <td>
                                Victoria Violet
                            </td>
                            <td>
                                12/01/2013
                            </td>
                            <td>
                                22222200
                            </td>
                            <td>
                                <a href="<?php echo base_url().'index.php/submissions/linkrequest'?>">details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>