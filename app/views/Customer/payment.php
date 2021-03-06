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
		
		<h1>Payment Information</h1>
		
		<table>
			<tr> 
				<th>First Name</th> <th>Last Name</th> <th>Gender</th> <th>Main Phone</th> 
				<th>Secondary Phone</th> <th>E-mail Address</th> <th>Payment Installments</th>
				<th>Payment Method</th> <th>Functions</th> 
			</tr>
			
			<?php 
				foreach ($data as $customer) {
					echo "<tr class='data'>
						<td>$customer->first_name</td>
						<td>$customer->last_name</td>
						<td>$customer->gender</td>
						<td>$customer->main_phone</td>
						<td>$customer->secondary_phone</td>
						<td>$customer->email</td>
						<td>$customer->payment_installments</td>
						<td>$customer->payment_method</td>
						<td>
							<a href='/Customer/update/$customer->customer_id'>" . "Update" . "</a>
							<a href='/Customer/delete/$customer->customer_id'>" . "Delete" . "</a>
							<a href='/Customer/details/$customer->customer_id'>" . "Details" . "</a>
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