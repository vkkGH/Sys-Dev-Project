<html>
  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	

	

	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/tables.css">

	<title><?= _("Category Index") ?></title>
	<?php
			$this->view('shared/navigation');
		?>

</head>
<body>
	<div class='container'>
		<table>
			<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Category</th>
    <th>Schedule</th>
    <th>Practices Per Week</th>
    <th>Actions</th>
  </tr>
		<?php 

			//$data is the local name for the data passed into the view

		if(empty($data)){
			echo "There is nobody registered in this category";
		} else{
			foreach ($data as $category) {
				echo "<tr class='customer'>
				<td>$category->first_name</td>
				<td>$category->last_name</td>
				<td>$category->category</td>
				<td>$category->schedule</td>
				<td>$category->practices_per_week</td>
					<td>
						<a href='/Category/update/$category->participant_id'>" . _("update") .  "</a>  
						      
						<a href='/Category/delete/$category->participant_id'>" . _("delete") . "</a> 
					</td>
				<tr>";
			}
		}
			
		?>
		</table>
	</div>
</body>
</html>