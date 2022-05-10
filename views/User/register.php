<html>

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/login.css">

	<title>Register</title>
    
</head>

<body>

	<?php $this->view('shared/header'); ?>
  <br><br><br>
	<div class="d-flex justify-content-center align-items-center mt-5">
        <div class="card">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
					<a class="nav-link btl" id="pills-home-tab" data-toggle="pill" href='/User/login' role="tab" aria-controls="pills-home" aria-selected="false">Login</a>
                </li>
				
                <li class="nav-item text-center">
					<a class="nav-link active btr" id="pills-profile-tab" data-toggle="pill"role="tab" aria-controls="pills-profile" aria-selected="true">Register</a>
                </li> 
            </ul>
			
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<div class="form px-4 pt-5">
						<input type="text" name="username" class="form-control" placeholder="Username">
						<input type="text" name="password" class="form-control" placeholder="Password">
						<input type="text" name="password_confirm" class="form-control" placeholder="Re-Password">
						<center><button name= "action" id= "action" class="btn btn-dark btn-block">Sign up</button></center>
					</div>
                </div>
            </div>
       </div>
	</div>
    <br><br><br>
	
</body>

</html>