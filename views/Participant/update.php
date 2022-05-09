<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Participant Update</title>
</head>
<body>
	<?php $this->view('shared/header'); ?>

	<div class='container'>
	
	<h1>Participant Update</h1>
		<form method='post' action='' enctype='multipart/form-data'>
			<label class='form-label'>First Name:<input type='text' name='first_name' value='<?=$data->first_name ?>' class='form-control' readonly/></label><br>
			<label class='form-label'>Last Name:<input type='text' name='last_name' value= '<?= $data->last_name ?>' class='form-control' readonly/></label><br>
			<label class='form-label'>Gender:<input type='text' name='gender' value= '<?= $data->gender ?>' class='form-control' readonly/></label><br>
            <label class='form-label'>Date of Birth:<input type='date' name='gender' value= '<?= $data->dob ?>' class='form-control' /></label><br>
			<label class='form-label'>Address:<input type='text' name='address' value= '<?= $data->address ?>' class='form-control' readonly/></label><br>
			<label class='form-label'>City:<input type='text' name='city' value= '<?= $data->city ?>' class='form-control' readonly/></label><br>
			<label class='form-label'>Postal Code:<input type='text' name='postal_code' value= '<?= $data->postal_code ?>' class='form-control' readonly/></label><br>
			<label class='form-label'>Main Phone:<input type='text' name='main_phone' value= '<?= $data->main_phone ?>' class='form-control' readonly/></label><br>
			<label class='form-label'>Secondary Phone:<input type='text' name='secondary_phone' value= '<?= $data->secondary_phone ?>' class='form-control' readonly/></label><br>
			<label class='form-label'>E-mail Address:<input type='text' name='email' value= '<?= $data->email ?>' class='form-control' readonly/></label><br>
            <label class='form-label'>Occupation:<input type='text' name='occupation' value= '<?= $data->occupation ?>' class='form-control' /></label><br>
			<label class='form-label'>Heard From:<input type='text' name='heard_from' value= '<?= $data->heard_from ?>' class='form-control' /></label><br>
			<label class='form-label'>Years Of Practice:<input type='number' name='years_of_practice' value= '<?= $data->years_of_practice ?>' class='form-control' /></label><br>
			<label class='form-label'>Medical Insurance Number:<input type='text' name='medical_insurance_number' value= '<?= $data->medical_insurance_number ?>' class='form-control' /></label><br>
			<label class='form-label'>Medical Insurance Card Expiration Date:<input type='date' name='exp_date' value= '<?= $data->exp_date ?>' class='form-control' /></label><br>
			<label class='form-label'>Emergency Contact:<input type='text' name='emer_contact' value= '<?= $data->emer_contact ?>' class='form-control' /></label><br>
			<label class='form-label'>Relation To Player:<input type='text' name='relation_to_player' value= '<?= $data->relation_to_player ?>' class='form-control' /></label><br>
            <label class='form-label'>Emergency Phone:<input type='text' name='emer_phone' value= '<?= $data->emer_phone ?>' class='form-control' /></label><br>
			<label class='form-label'>Allergies:<input type='text' name='allergies' value= '<?= $data->allergies ?>' class='form-control' /></label><br>
			<label class='form-label'>Medical History:<input type='text' name='med_history' value= '<?= $data->med_history ?>' class='form-control' /></label><br>
			<!--<label class='form-label'>Epipen:<input type='text' name='epipen' value= '<?= $data->epipen ?>' class='form-control' /></label><br>-->
            <label for="epipen">Epipen:</label><select class="form-control" id="epipen" name="epipen" value= '<?= $data->epipen ?>'><option value="0">No</option><option value="1">Yes</option></select><br> 
			<label class='form-label'>Medications:<input type='text' name='meds' value= '<?= $data->meds ?>' class='form-control' /></label><br>
			<label class='form-label'>Special/Specific Needs:<input type='text' name='spec_needs' value= '<?= $data->spec_needs ?>' class='form-control' /></label><br>
			
            <label for="promotion">Promotion:</label><select class="form-control" id="promotion" name="promotion" value= '<?= $data->promotion ?>'><option value="0">No</option><option value="1">Yes</option></select><br> 
			<!--<label class='form-label'>Promotion:<input type='text' name='promotion' value= '<?= $data->promotion ?>' class='form-control' /></label><br>-->
			<label for="transport">Transport:</label><select class="form-control" id="transport" name="transport" value= '<?= $data->transport ?>'><option value="0">No</option><option value="1">Yes</option></select><br>
            <!--<label class='form-label'>Transport:<input type='text' name='transport' value= '<?= $data->transport ?>' class='form-control' /></label><br>-->
			<label for="volunteer">Volunteering:</label><select class="form-control" id="volunteer" name="volunteer" value= '<?= $data->volunteer ?>'><option value="0">No</option><option value="1">Yes</option></select><br>
            <!--<label class='form-label'>Volunteering:<input type='text' name='volunteer' value= '<?= $data->volunteer ?>' class='form-control' /></label><br>-->
			<label for="family">Family:</label><select class="form-control" id="family" name="family" value= '<?= $data->family ?>'><option value="0">No</option><option value="1">Yes</option></select><br>
            <!--<label class='form-label'>Family:<input type='text' name='family' value= '<?= $data->family ?>' class='form-control' /></label><br>-->
            <label class='form-label'>Equipment Needs:<input type='text' name='equip_needs' value= '<?= $data->equip_needs ?>' class='form-control' /></label><br>
            <label class='form-label'>Notes:<input type='text' name='notes' value= '<?= $data->notes ?>' class='form-control' /></label><br>
			<input type="submit" name='action' value='Update!' class='form-control' />
		</form>
	</div>
</body>
</html>