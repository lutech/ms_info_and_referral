<div class="row">

		<!-- Side Navigation -->
		<?php echo $_sidenavigation; ?>
        
		<!-- Content -->
        <div class="col-sm-9">
          <h1 style="margin-top:0px;">My Needs Assessments History</h1>
          <hr>
		<div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Date of Assessment</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>12/01/2013</td>
            <td class="text-right">
                <a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                <a href="<?php echo base_url()."index.php/providers/searchresults";?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span> Search Services</a>
                <a href="#" class="btn btn-default btn-sm viewneedsassessment" data-toggle="modal" data-target="#needsassessment">View Details &raquo;</a>
            </td>
          </tr>
          <tr>
            <td>10/01/2013</td>
            <td class="text-right">
                <a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                <a href="<?php echo base_url()."index.php/providers/searchresults";?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span> Search Services</a>
                <a href="#" class="btn btn-default btn-sm viewneedsassessment" data-toggle="modal" data-target="#needsassessment">View Details &raquo;</a>
            </td>
          </tr>
          <tr>
            <td>08/11/2012</td>
            <td class="text-right">
                <a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                <a href="<?php echo base_url()."index.php/providers/searchresults";?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span> Search Services</a>
                <a href="#" class="btn btn-default btn-sm viewneedsassessment" data-toggle="modal" data-target="#needsassessment">View Details &raquo;</a>
            </td>
          </tr>
          <tr>
            <td>05/01/2011</td>
            <td class="text-right">
                <a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                <a href="<?php echo base_url()."index.php/providers/searchresults";?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span> Search Services</a>
                <a href="#" class="btn btn-default btn-sm viewneedsassessment" data-toggle="modal" data-target="#needsassessment">View Details &raquo;</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!-- /Table Responsive -->
    <hr>
    <h2 class="h3">Have your needs changed since your last <span class="text-muted">Needs Assessment?</span></h2>
          <div class="row">
			  <div class="col-md-8">
					<p>
						Complete a new Needs Assessment to find new services.
					</p>
                    <p>
                    	<a id="newneedsassessment" class="btn btn-primary" href="#" data-toggle="modal" data-target="#needsassessmentwizard" role="button">New Needs Assessment</a>
                    </p>
				</div>
          </div>
	  </div>
      </div><!--/row-->


<!-- Modals -->

<!-- Modal - Needs Assessment -->
<?php echo $_needsassessment_modal;?>


<!-- Modal - Needs Assessment -->
<?php echo $_needsassessment_wizard;?>

<!-- Modal - Delete -->
<?php echo $_deleteconfirmation_modal;?>


<!-- Scripts -->

<script type="text/javascript">

	$('.viewneedsassessment').on('click',function(){
		
		$('#needsassessment input').attr('disabled', 'disabled');
			
		clearNeedsAssessment();
						
		$('input:checkbox[name="question1"][value="Option two"]').prop('checked', true);
		$('input:radio[name="question2"][value="Option two"]').prop('checked', true);
		$('input:radio[name="question3"][value="Yes"]').prop('checked', true);
		$('input:checkbox[name="question4"][value="Option two"]').prop('checked', true);
		$('input:checkbox[name="question5"][value="Option one"]').prop('checked', true);
		$('input:radio[name="question6"][value="Option four"]').prop('checked', true);
		$('input:radio[name="question7"][value="Option one"]').prop('checked', true);
		$('input:checkbox[name="question8"][value="Option six"]').prop('checked', true);
		$('input:checkbox[name="question9"][value="Option three"]').prop('checked', true);
		$('input:radio[name="question10"][value="Option two"]').prop('checked', true);
		$('input:radio[name="question11"][value="Option two"]').prop('checked', true);
		$('input:checkbox[name="question12"][value="Option three"]').prop('checked', true);
		
		$('#view-assessmentfooter').show();
		$('#edit-assessmentfooter').hide();
		
		$('#needsassessmentcomments').prop('disabled', true);
	});
	
	$('#newneedsassessment').on('click',function(){
	
		$('#needsassessment input').removeAttr('disabled', 'disabled');
			
		clearNeedsAssessment();
		
		$('#view-assessmentfooter').hide();
		$('#edit-assessmentfooter').show();
		
		$('#needsassessmentcomments').prop('disabled', false);
	});
	
	$(document).ready(function(e) {
       		$('#assessmentwizardsubmitbutton').click(function(){
				window.location.href = '<?php echo base_url()."index.php/providers/searchresults" ?>';
		});
    });
	
</script>