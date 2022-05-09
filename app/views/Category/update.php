<html>

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Category Update</title>
	
</head>

<body>
	<div class='container'>
	
		<?php $this->view('shared/header'); ?>

		<?php echo "Modifying category of: " . $data->first_name . ' '. $data->last_name; ?>

		<form method='post' action=''>
			<p>Category: </p>
			<input type="radio" id="pamplemousse" name="category" value="PAMPLEMOUSSE">
			<label for="pamplemousse">Pamplemousse</label><br>
			<input type="radio" id="u13" name="category" value="U13" >
			<label for="u13">U13</label><br>

			<input type="radio" id="u15" name="category" value="U15" >
			<label for="u15">U15</label><br>

			<input type="radio" id="u17" name="category" value="U17" >
			<label for="u17">U17</label><br>

			<input type="radio" id="u19" name="category" value="U19" >
			<label for="u19">U19</label><br>

			<input type="radio" id="senior" name="category" value="SENIOR" >
			<label for="senior">Senior</label><br>

			<label class='form-label'>Schedule:<input type='text' name='schedule' class='form-control' value='<?= $data->schedule?>' /></label><br>
			<label class='form-label'>Practices per week:<input type='number' name='practices_per_week' class='form-control' value='<?= $data->practices_per_week?>' /></label><br>
			<input type="submit" name='action' value='Update!' class='form-control' />
		</form>
	</div>
</body>

</html>