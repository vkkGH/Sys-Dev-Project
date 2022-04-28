<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Animal Create</title>
</head>
<body>
	<div class='container'>
		<?php
			$this->view('shared/clock');
		?>

		<?php
			$this->view('Client/details_subview', $data);
		?>

	<h1>Create an animal</h1>
	<p>Please enter the details of the animal that you want to create.</p>
	<form method='post' action='' enctype='multipart/form-data'>
		<label class='form-label'>Animal name:<input type='text' name='name' class='form-control' /></label><br>
		<label class='form-label'>Birth date:<input type='date' name='dob' class='form-control' /></label><br>
		<label class='form-label'>Picture of the animal:
			<input type='file' name='picture' class='form-control' /></label><br />
		<input type="submit" name='action' value='Create!' class='form-control' />
	</form>
		<?php
			$this->view('shared/navigation');
		?>
	</div>
</body>
</html>