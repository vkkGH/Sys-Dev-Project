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
		
		<h1>Participants</h1>
		
		<table>
			<tr> 
				<th>First Name</th> <th>Last Name</th> <th>Gender</th> <th>Date of Birth</th> <th>Address</th> <th>City</th> 
				<th>Postal Code</th> <th>Main Phone</th> <th>Secondary Phone</th> <th>E-mail Address</th> <th>Category</th> <th>Functions</th> 
			</tr>
			
			<?php 
				foreach ($data as $participant) {
					$category = new \app\models\Category();
					$category = $category->get($participant->participant_id);

					echo "<tr class='data'>
						<td>$participant->first_name</td>
						<td>$participant->last_name</td>
						<td>$participant->gender</td>
						<td>$participant->dob</td>
						<td>$participant->address</td>
						<td>$participant->city</td>
						<td>$participant->postal_code</td>
						<td>$participant->main_phone</td>
						<td>$participant->secondary_phone</td>
						<td>$participant->email</td>
						<td>".$category->category."</td>
						<td>
							<a href='/Participant/update/$participant->participant_id'>" . "Update Participant's Information" . "</a> <br>
							<a href='/Participant/updateCategory/$category->participant_id'>" . _("Update Participant's Category") .  "</a> <br>
							
							<a href='/Participant/details/$participant->participant_id'>" . "Details" . "</a> <br>
							<a href='/Participant/delete/$participant->participant_id'>" . "Delete" . "</a> <br>
							
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