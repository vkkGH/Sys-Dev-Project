<link rel="stylesheet" type="text/css" href="/app/styles/header.css">

<div class="header">

	<div class="left">
		<?php $this->view('shared/navigation'); ?>	
		<a class="link" href='/Home/index'>Home</a>
	</div>

	<div class="right">
		<?php $this->view('shared/search'); ?>	
		<a class="link" href='/Main/index'>Logout</a>
	</div>
</div> 

