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
			echo "<h1>$data->first_name $data->last_name</h1>
				<p>Gender: $data->gender<br>
				Address: $data->address, $data->city $data->postal_code, Canada<br>
				Phone number: $data->main_phone<br>
				Secondary phone number: $data->secondary_phone<br>
				E-mail address: $data->email<br>
				Laval reward: $data->laval_reward<br>
				Payment installments: $data->payment_installments<br>
				Payment method: $data->payment_method<p>";
		?>
	</div>
	
</body>

</html>