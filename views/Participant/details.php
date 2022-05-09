<html>

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">

	<title>Database</title>
	
</head>

<body>

	<?php $this->view('shared/header'); ?>	
	
	<div class='container'>
		<?php 
		$category = new \app\models\Category();
		$category = $category->get($data->participant_id);

			echo "<h1>$data->first_name $data->last_name</h1>
				<p>Gender: $data->gender<br>
				Date of Birth: $data->dob<br>
				Category:".$category->category."<br>
				Category Schedule:".$category->schedule."<br>
				Practices Per Week:".$category->practices_per_week."<br>
				Address: $data->address<br>
				City: $data->city<br>
				Postal Code: $data->postal_code<br>
				Main Phone: $data->main_phone<br>
				Secondary Phone: $data->secondary_phone<br>
				E-mail: $data->email<br>
				Occupation: $data->occupation<br>
				Heard from ...: $data->heard_from<br>
				Years of Experience: $data->years_of_practice<br>
				Medical Insurance Number: $data->medical_insurance_number<br>
				Expiration Date: $data->exp_date<br>
				Emergency Contact: $data->emer_contact<br>
				Relation to Player: $data->relation_to_player<br>
				Emergency Phone: $data->emer_phone<br>
				Allergies: $data->allergies<br>
				Medical History: $data->med_history<br>
				Epipen? "; if ($data->epipen == 0) { echo "<td>No</td><br>"; } else { echo "<td>Yes</td><br>"; }
				echo "Medication: $data->meds<br>
				Special Needs: $data->spec_needs<br>
				Willing to Promote? "; if ($data->promotion == 0) { echo "<td>No</td><br>"; } else { echo "<td>Yes</td><br>"; }
				echo "Willing to be Transported to Events? "; if ($data->transport == 0) { echo "<td>No</td><br>"; } else { echo "<td>Yes</td><br>"; }
				echo "Willing to Volunteer? "; if ($data->volunteer == 0) { echo "<td>No</td><br>"; } else { echo "<td>Yes</td><br>"; }
				echo "Family Already in Club? "; if ($data->family == 0) { echo "<td>No</td><br>"; } else { echo "<td>Yes</td><br>"; }
				echo "Needed Equipment: $data->equip_needs<p>
				<h5>Notes:</h5>
				<p>$data->notes</p>";
		?>
		
		<br>
		
		<button class="print" onClick="window.print()">Print this page</button>
	</div>
	
</body>

</html>