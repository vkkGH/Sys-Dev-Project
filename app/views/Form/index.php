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
		
		
		<form class="p-3" method="post">
			<h3>Customer Section</h3>
			
			<label for="responsible">Are you registering for yourself or for a participant for which you will be responsible?</label>
			<select class="form-control" id="responsible" name="responsible">
				<option value="yes">For myself</option>
				<option value="no">For someone else (e.g child)</option>
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

      <label for="category">Category (Visit our website for detailed schedule):</label>     
      <select class="form-control" id="category" name="category">
        <option value="PAMPLEMOUSSE">PAMPLEMOUSSE</option>
        <option value="U13">U13</option>
        <option value="U15">U15</option>
        <option value="U17">U17</option>
        <option value="U19">U19</option>
        <option value="SENIOR">SENIOR</option>
      </select>

      <label for="schedule" id="schedule_title">Schedule:</label>     
      <select class="form-control" id="schedule" name="schedule">
        <option value="Monday, Thursday">Monday, Thursday</option>
        <option value="Wednesday, Sunday">Wednesday, Sunday</option>
      </select>


			<label class='form-label' id='participant_first_name' >Participant First Name:<input type='text' name='participant_first_name' class='form-control'  /></label><br>  
			<label class='form-label' id='participant_last_name' >Participant Last Name:<input type='text' name='participant_last_name' class='form-control' /></label><br>  
			<label for="participant_gender">Gender:</label>
      <select class="form-control" id="participant_gender" name="participant_gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
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
			<br>
			
			<button type="submit" class="btn btn-primary" name="action">Submit</button>
		</form>
	</div>
	
</body>

</html>

<script>

  $("#responsible").change(function() {
    if ($(this).val() == "no") {
      $('#participant_first_name').show();
      $('#participant_last_name').show();
    } else {
      $('#participant_first_name').hide();
      $('#participant_last_name').hide();
      
    }
  });
  $("#responsible").trigger("change");


  $("#category").change(function() {
    if ($(this).val() == "PAMPLEMOUSSE") {
      $('#schedule').show();
      $('#schedule_title').show();
    } else {
      $('#schedule').hide();
      $('#schedule_title').hide();
      
    }
  });
  
  $("#category").trigger("change");

</script>