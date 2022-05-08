<html>

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/tables.css">
	
	<title>Database</title>

</head>

<form action="" method="Post">

<body>

	<?php $this->view('shared/header'); ?>
	
	<div class='container'>
		
		<h1>Medical Histories</h1>
		
		<table>
			<tr> 
				<th>First Name</th> <th>Last Name</th> <th>Gender</th> <th>Medical Insurance Number</th> <th>Expiration Date</th> 
				<th>Emergency Contact</th> <th>Relation to Player</th> <th>Emergency Phone</th> <th>Allergies</th> 
				<th>Medical History</th> <th>Epipen?</th> <th>Medication</th> <th>Special Needs</th> <th>Functions</th> 
			</tr>
			
			<?php 
				foreach ($data as $participant) {
					echo "<tr class='data'>
						<td>$participant->first_name</td>
						<td>$participant->last_name</td>
						<td>$participant->gender</td>
						<td>$participant->medical_insurance_number</td>
						<td>$participant->exp_date</td>
						<td>$participant->emer_contact</td>
						<td>$participant->relation_to_player</td>
						<td>$participant->emer_phone</td>
						<td>$participant->allergies</td>
						<td>$participant->med_history</td>";
						if ($participant->epipen == 0) { echo "<td>Yes</td>"; } else { echo "<td>No</td>"; }
					echo "<td>$participant->meds</td>
						<td>$participant->spec_needs</td>
						<td>
							<a href='/participant/update/$participant->participant_id'>" . "Update" . "</a>
							<a href='/participant/delete/$participant->participant_id'>" . "Delete" . "</a>
							<a href='/participant/details/$participant->participant_id'>" . "Details" . "</a>
						</td>
					<tr>";
				}
			?>
		</table>
		
		<br>
		
		<button class="print" onClick="window.print()">Print this page</button>
	</div>
</body>

</html>