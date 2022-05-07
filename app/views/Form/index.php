<html>

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
  
	<title>Form</title>

</head>

<body>

	<?php $this->view('shared/header'); ?>
	
	<div class="container">
		<h1>Fill out this form for every participant you wish to enroll</h1>
		
		
		<form class="p-3">
			<h3>Customer Section</h3>
			
			<label for="responsible">Are you registering for yourself or for a participant for which you will be responsible?</label>
			<select class="form-control" id="responsible" name="responsible">
				<option value="yes">For myself</option>
				<option value="no">For someone else</option>
			</select>
			<label class='form-label'>First Name:<input type='text' name='first_name' class='form-control' /></label><br>
			<label class='form-label'>Last Name:<input type='text' name='last_name' class='form-control' /></label><br>
			<label for="gender">Gender:</label>
			<select class="form-control" id="gender" name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select>
			<label class='form-label'>Address:<input type='text' name='address' class='form-control' /></label><br>  
			<label class='form-label'>City:<input type='text' name='city' class='form-control' /></label><br>
			<label class='form-label'>Postal Code:<input type='text' name='postal_code' class='form-control' /></label><br>			
			<label class='form-label'>Main Phone:<input type='text' name='main_phone' class='form-control' /></label><br>			
			<label class='form-label'>Secondary Phone:<input type='text' name='secondary_phone' class='form-control' /></label><br>			
			<label class='form-label'>Email:<input type='text' name='email' class='form-control' /></label><br>			
			<label class='form-label'>Laval Rewards Card Number (If you do not have one a fee of 20$ is imposed by the city of Laval):<input type='text' name='laval_reward' class='form-control' /></label><br>			
			<label for="payment_installments">Payment Installments:</label>			
			<select class="form-control" id="payment_installments" name="payment_installments">
				<option value="1">1</option>
				<option value="3">3</option>
			</select>		
			<label for="payment_method">Payment Method:</label>			
			<select class="form-control" id="payment_method" name="payment_method">
				<option value="direct deposit">Direct Deposit</option>
				<option value="cheque">Cheque</option>
			</select>	
			
			<br><br><br>
			
			<h3>Participant Section</h3>

			<label class='form-label'>Participant First Name:<input type='text' name='participant_first_name' class='form-control' /></label><br>  
			<label class='form-label'>Participant Last Name:<input type='text' name='participant_last_name' class='form-control' /></label><br>  
			<label class='form-label'>Participant Gender:<input type='text' name='participant_gender' class='form-control' /></label><br>  
			<label class='form-label'>Participant Date Of Birth:<input type='date' name='dob' class='form-control' /></label><br>  
			<label class='form-label'>Occupation or School (write NA if not applicable):<input type='text' name='occupation' class='form-control' /></label><br>  
			<label class='form-label'>Where you heard of our club:<input type='text' name='heard_from' class='form-control' /></label><br>  
			<label class='form-label'>Years of Water Polo Experience:<input type='number' name='years_of_practice' class='form-control' /></label><br>  
			<label class='form-label'>Medical Insurance Number:<input type='text' name='medical_insurance_number' class='form-control' /></label><br>  
			<label class='form-label'>Expiration Date:<input type='date' name='exp_date' class='form-control' /></label><br>  
			<label class='form-label'>Emergency Contact Name:<input type='text' name='emer_contact' class='form-control' /></label><br>  
			<label class='form-label'>Relation Of Emergency Contact To Player:<input type='text' name='relation_to_player' class='form-control' /></label><br>  
			<label class='form-label'>Emergency Contact Phone:<input type='text' name='emer_phone' class='form-control' /></label><br>  
			<label class='form-label'>Allergies:<input type='text' name='heard_from' class='form-control' value='no' /></label><br>  
			<label class='form-label'>Medical History:<input type='text' name='med_history' class='form-control' /></label><br>  
			<label for="epipen">Epipen:</label>
			<select class="form-control" id="epipen" name="epipen">
				<option value="0">No</option>
				<option value="1">Yes</option>
			</select>
			<label class='form-label'>Any medicaments that need to be taken during club activities:<input type='text' name='meds' class='form-control' value='no' /></label><br>
			<label class='form-label'>Any special needs we need to take into consideration:<input type='text' name='spec_needs' class='form-control' /></label><br>  
			<label class='form-label'>Do you consent to letting the club use photos of the participant for promotion purposes?:<input type='text' name='promotion' class='form-control' /></label><br>  
			<label class='form-label'>Do you consent to letting the club transport the participant during water polo events (such as matches) if needed?:<input type='text' name='transport' class='form-control' /></label><br>
			<label class='form-label'>Do you want to be notified of potential volunteer opportunities within the club?:<input type='text' name='volunteer' class='form-control' /></label><br>
			<label class='form-label'>Name of Participant Family Members In Club? (elligible for a discount):<input type='text' name='family' class='form-control' value='no' /></label><br>
			<label class='form-label'>Any equipment you would wish to purchase from the club (swimsuite, glasses, etc.):<input type='text' name='equip_needs' class='form-control' value='no' /></label><br>
			<label class='form-label'>Additional Notes:<input type='textarea' name='notes' class='form-control' /></label><br>



			<div class="form-group">
				<label for="seeAnotherField">Do You Want To See Another Field?</label>
				<select class="form-control" id="seeAnotherField">
					<option value="no">No Way.</option>
					<option value="yes">Absolutely!</option>
				</select>
			</div>
  
			<div class="form-group" id="otherFieldDiv">
				<label for="otherField">Here you go!</label>
				<select class="form-control" id="otherField">
					<option>Yay</option>
					<option>Woo</option>
					<option>Hazah</option>
					<option>Yipee</option>
					<option>Hoorah</option>
				</select>
			</div>
  
			<div class="form-group">
				<label for="seeAnotherFieldGroup">Do You Want To See Another Group of Fields?</label>
				<select class="form-control" id="seeAnotherFieldGroup">
					<option value="no">Not Particularly.</option>
					<option value="yes">I Guess!</option>
				</select>
			</div>
  
			<div class="form-group" id="otherFieldGroupDiv">
				<div class="row">
					<div class="col-6">
						<label for="otherField1">Group: Heres One!</label>
						<input type="text" class="form-control w-100" id="otherField1">
					</div>
					
					<div class="col-6">
						<label for="otherField2">Group: Another One!</label>
						<input type="text" class="form-control w-100" id="otherField2">
					</div>
				</div>
			</div>
  
			<div class="form-group">
				<label for="comments">Comments/Questions</label>
				<textarea class="form-control" id="comments" rows="3"></textarea>
			</div>
			
			<br>
			
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	
</body>

</html>

<script>
    $("#seeAnotherField").change(function() {
		if ($(this).val() == "yes") {
			$('#otherFieldDiv').show();
			$('#otherField').attr('required', '');
			$('#otherField').attr('data-error', 'This field is required.');
		} else {
			$('#otherFieldDiv').hide();
			$('#otherField').removeAttr('required');
			$('#otherField').removeAttr('data-error');
		}
	});
	
	$("#seeAnotherField").trigger("change");

	$("#seeAnotherFieldGroup").change(function() {
		if ($(this).val() == "yes") {
			$('#otherFieldGroupDiv').show();
			$('#otherField1').attr('required', '');
			$('#otherField1').attr('data-error', 'This field is required.');
			$('#otherField2').attr('required', '');
			$('#otherField2').attr('data-error', 'This field is required.');
		} else {
			$('#otherFieldGroupDiv').hide();
			$('#otherField1').removeAttr('required');
			$('#otherField1').removeAttr('data-error');
			$('#otherField2').removeAttr('required');
			$('#otherField2').removeAttr('data-error');
		}
	});
	
	$("#seeAnotherFieldGroup").trigger("change");
</script>
	
	