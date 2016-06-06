<!-- Three columns of text below the carousel -->
<div class="row">

		<!-- Side Menu -->
        <div class="col-md-3" id="sidebar">
		<fieldset>
		<legend>Search for Services</legend>
		<div class="panel-group" id="searchfields">
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h4 class="panel-title">
					Search:
				</h4>
			  </div><!-- /panel heading-->
			  <div id="collapseOne" class="panel-collapse collapse in">
				<div class="panel-body">
				  <form role="form">
                      <div class="form-group">
                        <label for="searchkeyword" class="control-label">Keyword</label>
                        <input class="form-control" id="searchkeyword" placeholder="Keyword">
                      </div>
                      <div class="form-group">
                        <label for="searchservicetype" class="control-label">Service Types</label>
                          <select class="form-control js-multiselect multiselect-search" multiple="multiple" id="searchservicetype" placeholder="Service Type">
                            <option value="103">Adoption</option>
                            <option value="294">Adult Day Care Services</option>
                            <option value="40">Adult Day Care Services - Developmentally Disabled</option>
                            <option value="36">Adult Protective Services</option>
                            <option value="124">AIDS/HIV Services</option>
                            <option value="229">Alzheimer's Disease/Dementia</option>
                            <option value="12">Alzheimer's Resource Centers</option>
                            <option value="17">Ambulance</option>
                            <option value="132">Anger Management</option>
                            <option value="298">Animal Services</option>
                            <option value="231">Aquatics</option>
                            <option value="32">Area Agency on Aging</option>
                            <option value="232">Arthritis Care &amp; Support</option>
                            <option value="552">Arts &amp; Culture</option>
                          </select>
                      </div>
					  <div class="form-group">
						<label for="searchcounty" class="control-label">County</label>
						  <select class="form-control js-multiselect multiselect-search" multiple="multiple" id="searchcounty" placeholder="County">
                            <option value="103">Adams</option>
                            <option value="294">Alcorn</option>
                            <option value="40">Amite</option>
                            <option value="36">Attala</option>
                            <option value="124">Benton</option>
                            <option value="229">Bolivar</option>
                            <option value="12">Calhoun</option>
                            <option value="17">Carroll</option>
                            <option value="132">Chickasaw</option>
                            <option value="298">Choctaw</option>
                            <option value="231">Aquatics</option>
                            <option value="32">Claiborne</option>
                            <option value="232">Clarke</option>
                            <option value="552">Clay</option>
                          </select>
					  </div>
					  <div class="form-group">
						<label for="searchcity" class="control-label">City</label>
						  <input type="text" class="form-control" id="searchcity" placeholder="City">
					  </div>
					  <div class="form-group">
						<label for="searchzipcode" class="control-label">Zip Code</label>
						<input class="form-control" id="searchzipcode" placeholder="Zip Code">
					  </div>
					  <hr>				  
					  <div class="form-group text-center">
						<a class="btn  btn-sm btn-default" href="#" role="button" onclick="return false;">Clear All</a>
						<a id="providersearchbutton" class="btn  btn-sm btn-primary" href="#" role="button" onclick="return false;">Search</a>
					</div>
				</form>
				</div><!-- /panel body-->
			  </div><!-- /panel collapse-->
			</div><!-- /panel -->
		</div><!-- /panel group -->
	</fieldset>
	</div><!-- /.col-sm-3 -->
	
	<!-- Content -->
        <div class="col-md-9">
			<h1 class="h3">Not sure which services you need?</h1>
          <div class="row">
			  <div class="col-md-7">
					<p>
					Find the right service based on your needs by completing a Needs Assessment. To save your assessments to your personal and private Care Record, simply <a id="search-signup" href"#" data-toggle="modal" data-target="#createaccount" onclick="return false" style="cursor: pointer;">Sign Up</a> or <a id="search-signin" href"#" data-toggle="modal" data-target="#signin" onclick="return false" style="cursor: pointer;">Sign In</a>.
					</p>
				</div>
			  <div class="col-md-5">			  
					<div class="form-group text-center">
						<a class="btn  btn-lg btn-primary" id="newneedsassessment" href="#" data-toggle="modal" data-target="#needsassessmentwizard" role="button">Search by Needs Assessment</a>
					</div>
				</div>
          </div>
			<hr>
            <!-- Google Map Container-->
			<div id="map-canvas"></div>
			<hr>
            <div id="resultslist" style="display:none;">
                <div>
                    <h2>Service Provider 1</h2>
                    <p>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-default btn-sm js-star-provider" href="#" onClick="return false;" role="button"><span class="glyphicon glyphicon-star"></span> Save</a>
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#sendmessage" role="button" onClick="return false;"><span class="glyphicon glyphicon-send"></span> Send a Message.</a>
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#shareserviceinformation" role="button" onClick="return false;"><span class="glyphicon glyphicon-share-alt"></span> Share</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#providerdetails" role="button" onClick="return false;">View details &raquo;</a>
                        </div>
                    </div>                
                </div>
              <hr>
              <div>
                    <h2>Service Provider 2</h2>
                    <p>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-default btn-sm js-star-provider" href="#" onClick="return false;" role="button"><span class="glyphicon glyphicon-star"></span> Save</a>
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#sendmessage" role="button" onClick="return false;"><span class="glyphicon glyphicon-send"></span> Send a Message.</a>
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#shareserviceinformation" role="button" onClick="return false;"><span class="glyphicon glyphicon-share-alt"></span> Share</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#providerdetails" role="button" onClick="return false;">View details &raquo;</a>
                        </div>
                    </div>               
                </div>
              <hr>
              <div>
                    <h2>Service Provider 3</h2>
                    <p>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-default btn-sm js-star-provider" href="#" onClick="return false;" role="button"><span class="glyphicon glyphicon-star"></span> Save</a>
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#sendmessage" role="button" onClick="return false;"><span class="glyphicon glyphicon-send"></span> Send a Message.</a>
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#shareserviceinformation" role="button" onClick="return false;"><span class="glyphicon glyphicon-share-alt"></span> Share</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#providerdetails" role="button" onClick="return false;">View details &raquo;</a>
                        </div>
                    </div>             
                </div>
              <hr>
              <div>
                    <h2>Service Provider 4</h2>
                    <p>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-default btn-sm js-star-provider" href="#" onClick="return false;" role="button"><span class="glyphicon glyphicon-star"></span> Save</a>
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#sendmessage" role="button" onClick="return false;"><span class="glyphicon glyphicon-send"></span> Send a Message.</a>
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#shareserviceinformation" role="button" onClick="return false;"><span class="glyphicon glyphicon-share-alt"></span> Share</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#providerdetails" role="button" onClick="return false;">View details &raquo;</a>
                        </div>
                    </div>                 
                </div>
              <hr>
              <div>
                    <h2>Service Provider 5</h2>
                    <p>
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-default btn-sm js-star-provider" href="#" onClick="return false;" role="button"><span class="glyphicon glyphicon-star"></span> Save</a>
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#sendmessage" role="button" onClick="return false;"><span class="glyphicon glyphicon-send"></span> Send a Message.</a>
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#shareserviceinformation" role="button" onClick="return false;"><span class="glyphicon glyphicon-share-alt"></span> Share</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#providerdetails" role="button" onClick="return false;">View details &raquo;</a>
                        </div>
                    </div>                  
                </div>
             </div>
          </div><!--/row-->
        </div><!--/span-->
		
</div><!-- /.row -->


<!-- Modals -->

<!-- Modal - Needs Assessment -->
<?php echo $_needsassessment_wizard; ?>

<!-- Modal - View Provider -->
<?php echo $_view_provider_modal; ?>

<!-- Modal - Share service information -->
<?php echo $_shareserviceinfo_modal; ?>

<!-- Modal - Send Message -->
<?php echo $_sendmessage_modal; ?>


<!-- Scripts -->

<script type="text/javascript">
	$(document).ready(function(){
		$('.js-star-provider').each(function(){
			$(this).click(function(){
				$(this).toggleClass("btn-default");
				$(this).toggleClass("btn-primary");
			});
		});
		
		if (document.URL == '<?php echo base_url()."index.php/providers/needsassessment" ?>'){
		
			$('[data-target="#needsassessmentwizard"]').click();
		}
		
		if (document.URL == '<?php echo base_url()."index.php/providers/searchresults" ?>'){
		
			showresults();
		}
		
		function showresults(){
			$('#resultslist').hide();
			$('#resultslist').slideDown();
		}
		
		$('#providersearchbutton').click(function(){
			showresults();
		});
		
		$('#assessmentwizardsubmitbutton').click(function(){
			setTimeout(function(){
				showresults();
			}, 300);
		});
		
	});
</script>