<div class='box'>
						<div class='box-header'>
						 <ol class="breadcrumb col-md-6">

							<li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
								<li><a href="<?=base_url("liveClass/index")?>"><?=$this->lang->line('panel_title')?></a></li>
							<li class="active"><?=$this->lang->line('create_m')?></li>
                
						</ol>
		</div>
				<div class='row'>
				<div class='col-md-3'>
				
				</div>
			<div class='col-md-7'>
			
				<div class='box-header'>
							<form name='zoom' action="<?=base_url("liveclass/create")?>" method='post'>
							<fieldset>
							<h5>Please fill in your meeting details</h5><br/>
							</fieldset>
									<div class='form-group'>
								<label> Topic <span class='text-danger'>*</span></label>
								<input type='text' name='topic' class='form-control' value= "<?php echo set_value('topic'); ?>" required/>
									</div>
								<div class='form-group'>
								<label>Meeting Type <span class='text-danger'>*</span></label>
								<select class='form-control neat' required name='type'>
										<option value=''>Select Meeting Type</option>
											<option value='1'>Instant Meeting</option>
												<option value='2'>Scheduled Meeting</option>
														
								</select>
									</div>
									
									<div class='form-group' id='datepair'>
									
											<label class='sr-only'>Select Start Date</label><span class='text-danger'> * </span><input type="text" class="date start form-inline" placeholder='Start date' name='st_date'value= "<?php echo set_value('st_date'); ?>" required /> 
											<label class='sr-only'>Select Start Time</label><span class='text-danger'> * </span><input type="text" class="time start form-inline" placeholder='Start Time' name='st_time'required value= "<?php echo set_value('st_time'); ?>" /><p> </p>
											<label class='sr-only'>Duration (Hours)</label><span class='text-danger'> * </span><input type="number" class="form-inline" placeholder='Time(Hours)' name='hour' value= "<?php echo set_value('hour'); ?>"required />
											<label class='sr-only'>Duration (Minutes)</label><span class='text-danger'> * </span><input type="number" class="form-inline" placeholder='Time(Minutes)' name='min' value= "<?php echo set_value('min'); ?>" required  />
												
												
												</div>
												
												
									<div class='form-group'>
										<label class='sr-only'></label><input class='form-control' type='password' name='password' placeholder='Password to join meeting max = 10'  max='10' required />
									</div>
									<div class='form-group'>
										<label class='sr-only'>Specific Objectives</label><textarea name='Objectives' class='form-control' placeholder='Specific Objectives' required></textarea>
									</div>

											<button class='btn btn-success' type='submit'>Submit</button>
							</form>
					
					   
				</div>
					</div>
							<div class='col-md-2'></div>
				</div>	


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.1/jquery.timepicker.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.1/jquery.timepicker.min.js"></script>
<script>

$(document).ready(function() {
    $(".neat").select2({

})
});

</script>

<script>
	// initialize input widgets first
	$('#datepair .time').timepicker({
		'showDuration': true,
		'timeFormat': 'g:ia',
	});

	$('#datepair .date').datepicker({
		'format': 'yyyy-m-d',
		'autoclose': true
	});

	// initialize datepair
	$('#datepairExample').datepair();
	
	
</script>

