<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Customer Update</title>
</head>
<body>
	<?php $this->view('shared/header'); ?>

	<div class='container'>
	
	<h1>Customer Update</h1>
		<form method='post' action='' enctype='multipart/form-data'>
			<label class='form-label'>First Name:<input type='text' name='first_name' value='<?=$data->first_name ?>' class='form-control' /></label><br>
			<label class='form-label'>Last Name:<input type='text' name='last_name' value= '<?= $data->last_name ?>' class='form-control' /></label><br>
			<label class='form-label'>Gender:<input type='text' name='gender' value= '<?= $data->gender ?>' class='form-control' /></label><br>
			<label class='form-label'>Address:<input type='text' name='address' value= '<?= $data->address ?>' class='form-control' /></label><br>
			<label class='form-label'>City:<input type='text' name='city' value= '<?= $data->city ?>' class='form-control' /></label><br>
			<label class='form-label'>Postal Code:<input type='text' name='postal_code' value= '<?= $data->postal_code ?>' class='form-control' /></label><br>
			<label class='form-label'>Main Phone:<input type='text' name='main_phone' value= '<?= $data->main_phone ?>' class='form-control' /></label><br>
			<label class='form-label'>Secondary Phone:<input type='text' name='secondary_phone' value= '<?= $data->secondary_phone ?>' class='form-control' /></label><br>
			<label class='form-label'>E-mail Address:<input type='text' name='email' value= '<?= $data->email ?>' class='form-control' /></label><br>
			<label class='form-label'>Laval Reward:<input type='text' name='laval_reward' value= '<?= $data->laval_reward ?>' class='form-control' /></label><br>
			<label class='form-label'>Payment Installments:<input type='text' name='payment_installments' value= '<?= $data->payment_installments ?>' class='form-control' /></label><br>
			<label class='form-label'>Payment Method:<input type='text' name='payment_method' value= '<?= $data->payment_method ?>' class='form-control' /></label><br>
			<input type="submit" name='action' value='Create!' class='form-control' />
		</form>
	</div>
</body>
</html>