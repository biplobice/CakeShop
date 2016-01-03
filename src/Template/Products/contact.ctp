	
    <div class="container">
        
		<div class="row">
		    <div class="col-md-12">
			    <div class="breadcrumbs">
				    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a> <span class="divider"></span></li>
                        <li class="active">Contact Us</li>
                    </ul>
				</div>
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-12">
				<h2>Contact Us</h2>
			</div>
		</div>
        <div class="row">
		    <div class="col-md-12">
			    <div id="map">
                    <p>Enable your JavaScript!</p>
                </div>
			</div>
		</div>
		
		<div class="row">
				<div class="col-md-6">
					<div class="contact_form">
						<form>
							<fieldset class="form-group">
								<label>Name<span class="required">*</span></label>
								<input type="text" placeholder="Name" class="form-control">
								<label>Email<span class="required">*</span></label>
								<input type="text" placeholder="Email" class="form-control">
								<label>Subject<span class="required">*</span></label>
								<input type="text" placeholder="Subject" class="form-control">							
							</fieldset>
						</form>
						<div class="form-group">
							<label>Message<span class="required">*</span></label>
							<textarea rows="3" class="form-control"></textarea>
						</div>
						<p class="form-group">
							<button class="btn btn-primary" type="button">Send Request</button>
						</p>
					</div>
				</div>				
				<div class="col-md-6">
					<div class="location">
						<address>
						  <strong>Twitter, Inc.</strong><br>
						  795 Folsom Ave, Suite 600<br>
						  San Francisco, CA 94107<br>
						  <abbr title="Phone">P:</abbr> (123) 456-7890
						</address>

						<address>
						  <strong>Full Name</strong><br>
						  <a href="mailto:#">first.last@example.com</a>
						</address>
					</div>
				</div>	
			</div>			
	

	</div>		
	
<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true') ?>
<?= $this->Html->script('jquery.ui.map.full.min.js') ?>

<script>
jQuery(window).load(function() 
{
	$('#map').gmap().bind('init', function(ev, map) 
	{
		$('#map').gmap('addMarker', {'position': '-37.8102539,144.9602197', 'bounds': true}).click(function() 
		{
			$('#map').gmap('openInfoWindow', 
			{
				'content': 
				'<p>30 South Park Avenue</p><p>San Francisco, CA 94108</p>'
			}, this);
		});
		$('#map').gmap('option', 'zoom', 15);
	});
});
</script>