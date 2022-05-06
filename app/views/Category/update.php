<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title><?= _("Category Update") ?></title>
	<?php
			$this->view('shared/navigation');
		?>
</head>
<body>
	<div class='container'>
			


		<?php 
			echo "Modifying category of" . $data->fname . ' '. $data->lname;
			
		?>

		<form method='post' action=''>
		<label class='form-label'>Category:<input type='text' name='category' class='form-control' value='<?= $data->category?>' /></label><br>
		<label class='form-label'>Schedule:<input type='text' name='schedule' class='form-control' value='<?= $data->schedule?>' /></label><br>
		<label class='form-label'>Practices per week:<input type='number' name='practices_per_week' class='form-control' value='<?= $data->practices_per_week?>' /></label><br>
		<input type="submit" name='action' value='Update!' class='form-control' />
	</form>
	</div>
</body>
</html>