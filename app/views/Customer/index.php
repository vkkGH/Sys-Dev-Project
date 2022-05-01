<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title><?= _("Customer Index") ?></title>
</head>
<body>
	<div class='container'>
		
		<h1><?= _("All Customers") ?></h1>
		<p><?= _("This is the list of customers.") ?></p>
		<table>
			<tr><th><?= _("First Name") ?></th><th><?= _("Last Name") ?></th><th><?= _("Gender") ?></th><th><?= _("Address") ?></th><th><?= _("City") ?></th></tr>
		<?php 
			//$data is the local name for the data passed into the view
			foreach ($data as $customer) {
				echo "<tr><td>$customer->first_name</td>
				<td>$customer->last_name</td>
				<td>$customer->gender</td>
				<td>$customer->address</td>
				<td>$customer->city</td>
				<td>$customer->postal_code</td>
				<td>$customer->main_phone</td>
				<td>$customer->secondary_phone</td>
				<td>$customer->email</td>
				<td>$customer->laval_reward</td>
				<td>$customer->payment_installments</td>
				<td>$customer->payment_method</td>
					<td>
						<a href='/Customer/update/$customer->customer_id'>" . _("update") . "</a> | 
						<a href='/Customer/delete/$customer->customer_id'>" . _("delete") . "</a> | 
					</td>
				<tr>";
			}
		?>
		</table>
		
	</div>
</body>
</html>