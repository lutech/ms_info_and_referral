<div class="row">

		
		<!-- Side Navigation -->
		<?php echo $_sidenavigation; ?>

		<!-- Content -->
        <div class="col-md-9">
          <h2 style="margin-top: 0px;">Contact Us</h2>
          <!--<hr>
          <div class="row">
            <div class="col-sm-6">
                <address>
                  <strong>Address:</strong><br>
                  123 Main Street<br>
                  Center City, MS 30000<br>
                </address>
            </div>	
            <div class="col-sm-6">
                <address>
                  <strong>Business Hours:</strong><br>
                  Monday - Friday<br>
                  9:00am - 5:00pm<br>
                </address>
             </div>	
        </div>
         <div class="row">
            <div class="col-sm-6">
                <address>
                  <strong>Telephone:</strong><br>
                  <abbr title="Toll Free">T:</abbr> (123) 456-7890<br>
                  <abbr title="Fax">F:</abbr> (123) 456-7800
                </address>
            </div>	
            <div class="col-sm-6">
                <address>
                  <strong>Email:</strong><br>
                  <a href="mailto:#">help@infoandreferral.com</a>
                </address>
             </div>	
        </div>-->
        <hr>
		<div class="table-responsive">
      <table class="table table-bordered table-hover" id="contactustable">
        <tbody>
          <tr style="cursor: pointer;">
            <td style="vertical-align: middle; text-align:center;"><input id="provider1" type="checkbox" name="provider1" value=""/></td>
            <td>
            	<div class="row">
                    <div class="col-sm-6">
                        <address>
                          <label name="provider1" for="provider1"><strong>Department of Human Services</strong></label><br>
                          123 Main Street<br>
                          Center City, MS 30000<br>
                        </address>
                    </div>	
                    <div class="col-sm-6">
                        <address>
                          <a href="http://www.mdhs.state.ms.us/">www.mdhs.state.ms.us</a><br>
                          <abbr title="Toll Free">T:</abbr> (123) 456-7890<br>
                          <abbr title="Fax">F:</abbr> (123) 456-7800
                        </address>
                    </div>	
                </div>
        	</div>
            </td>
          </tr>
          <tr style="cursor: pointer;">
            <td style="vertical-align: middle; text-align:center;"><input id="provider2" type="checkbox" name="provider2" value=""/></td>
            <td>
                <div class="row">
                    <div class="col-sm-6">
                        <address>
                          <label name="provider2" for="provider2"><strong>Department of Mental Health</strong></label><br>
                          1381 Einstien Drive<br>
                          Center City, MS 30000<br>
                        </address>
                    </div>	
                    <div class="col-sm-6">
                        <address>
                          <a href="http://www.dmh.ms.gov/">www.dmh.ms.gov</a><br>
                          <abbr title="Toll Free">T:</abbr> (364) 346-8943<br>
                          <abbr title="Fax">F:</abbr> (364) 346-7843
                        </address>
                    </div>	
                </div>
        	</div>
            </td>
          </tr>
          <tr style="cursor: pointer;">
            <td style="vertical-align: middle; text-align:center;"><input id="provider3" type="checkbox" name="provider3" value=""/></td>
            <td>
                <div class="row">
                    <div class="col-sm-6">
                        <address>
                          <label name="provider3" for="provider3"><strong>Department of Rehabilitation Service</strong></label><br>
                          5 Twain Ave.<br>
                          Center City, MS 30000<br>
                        </address>
                    </div>	
                    <div class="col-sm-6">
                        <address>
                          <a href="http://www.mdrs.state.ms.us/">www.mdrs.state.ms.us</a><br>
                          <abbr title="Toll Free">T:</abbr> (774) 457-8442<br>
                          <abbr title="Fax">F:</abbr> (774) 747-45767
                        </address>
                    </div>	
                </div>
        	</div>
            </td>
          </tr>
          <tr style="cursor: pointer;">
            <td style="vertical-align: middle; text-align:center;"><input id="provider4" type="checkbox" name="provider4" value=""/></td>
            <td>
                <div class="row">
                    <div class="col-sm-6">
                        <address>
                          <label name="provider4" for="provider4"><strong>Division of Medicaid</strong></label><br>
                          854 Hitchcock Street<br>
                          Center City, MS 30000<br>
                        </address>
                    </div>	
                    <div class="col-sm-6">
                        <address>
                          <a href="http://www.medicaid.ms.gov/">www.medicaid.ms.gov</a><br>
                          <abbr title="Toll Free">T:</abbr> (894) 456-2964<br>
                          <abbr title="Fax">F:</abbr> (894) 456-6148
                        </address>
                    </div>	
                </div>
        	</div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!-- /Table Responsive -->
    <hr>
         <a id="sendusamessagebutton" class="btn btn-primary btn-lrg disabled" href="#" onclick="return false" data-toggle="modal" data-target="#sendmessage"><span class="glyphicon glyphicon-send h6"></span> Send us a message</a>     
        </div><!--/span-->

      </div><!--/row-->
      
<!-- Modals -->

<!-- Modal - Send Message -->
<?php echo $_sendmessage_modal; ?>

<!-- Scripts -->
<script type="text/javascript">


function setupProviderList(e){
	if ($(e).find('input[type="checkbox"]').prop('checked') == false) {	
			var providerName = $(e).first().find('label').text();
			var newProviderName = providerName.replace(/\s/g, '');
			$('li#' + newProviderName).remove();
			
		}
		
		if ($('#contactustable input[type="checkbox"]:checked').length == 0) {
			$('#providerlistcontainer').html('<p style=\"color: red;\" class=\"form-control-static\">You have not selected a Provider.</p>')
			$('#sendusamessagebutton').addClass('disabled');
		} else {
			$('#sendusamessagebutton').removeClass('disabled');
			if ($('#providerlistcontainer ul').length == 0){
				$('#providerlistcontainer').html("<ul id=\"sendtoproviderlist\"></ul>");
			} else {					
			}				
		}
		
		if  ($(e).find('input[type="checkbox"]').prop('checked') == true) {
				var providerName = $(e).first().find('label').text();
				var newProviderName = providerName.replace(/\s/g, '');
				$('#sendtoproviderlist').append('<li class=\"form-control-static\" id=\"' + newProviderName + '\">' + providerName + '</li>');		
			}
}

$(document).ready(function() {
	
    $('#contactustable').find('tbody tr').each(function(){	
		
		var clickableRow = this;
		
		setupProviderList(clickableRow);
		
		$(clickableRow).find('a').click(function(e){			
			e.stopPropagation();
		});
		
		$(clickableRow).find('input[type="checkbox"]').click(function(e){			
			e.stopPropagation();
			setupProviderList(clickableRow);
		});
	
		$(clickableRow).click(function(e) {
			
			if ($(this).find('input[type="checkbox"]').prop('checked') == true) {			
				$(this).find('input[type="checkbox"]').prop('checked', false);	
			} else if  ($(this).find('input[type="checkbox"]').prop('checked') == false) {
				$(this).find('input[type="checkbox"]').prop('checked', true);	
			}
			
            setupProviderList(this);
        });
	});
	
	
});

</script>