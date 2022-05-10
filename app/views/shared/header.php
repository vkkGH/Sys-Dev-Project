<link rel="stylesheet" type="text/css" href="/app/styles/header.css">

<div class="header">

	<div class="left">
		<?php $this->view('shared/navigation'); ?>	
		<a class="link" id="home" href='/Main/index'>Home</a>
		<a class="link" href='/Form/index'>Form</a>
	</div>

	<div class="right">
		<?php $this->view('shared/search'); ?>	
		<a class="link" href='/User/login'>Login</a>
	</div>
</div> 

