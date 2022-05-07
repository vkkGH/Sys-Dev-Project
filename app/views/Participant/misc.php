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
		
		<h1>Miscellaneous Information</h1>
		
		<table>
			<tr> 
				<th>First Name</th> <th>Last Name</th> <th>Gender</th> <th>Occupation</th> <th>Heard From ...</th> 
				<th>Years of Experience</th> <th>Willing to Promote?</th> <th>Willing to be Transported to Events?</th>
				<th>Willing to Volunteer?</th> <th>Family Already in Club?</th> <th>Needed Equipment</th> <th>Functions</th> 
			</tr>
			
			<?php 
				foreach ($data as $participant) {
					echo "<tr class='data'>
						<td>$participant->first_name</td>
						<td>$participant->last_name</td>
						<td>$participant->gender</td>
						<td>$participant->occupation</td>
						<td>$participant->heard_from</td>
						<td>$participant->years_of_practice</td>";
						if ($participant->promotion == 0) { echo "<td>No</td>"; } else { echo "<td>No</td>"; }
						if ($participant->transport == 0) { echo "<td>No</td>"; } else { echo "<td>No</td>"; }
						if ($participant->volunteer == 0) { echo "<td>No</td>"; } else { echo "<td>No</td>"; }
						if ($participant->family == 0) { echo "<td>No</td>"; } else { echo "<td>No</td>"; }
					echo "<td>$participant->equip_needs</td>
						<td>
							<a href='/participant/update/$participant->participant_id'>" . "Update" . "</a>
							<a href='/participant/delete/$participant->participant_id'>" . "Delete" . "</a>
							<a href='/participant/details/$participant->participant_id'>" . "Details" . "</a>
						</td>
					<tr>";
				}
			?>
		</table>
	</div>
	<button onClick="window.print()">Print this page</button>
</body>

</html>