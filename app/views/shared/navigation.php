<html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/navigation.css">
	
</head>

<body>

	<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href='/Customer/index'> Customer index </a>
		  <a href='/Category/getPamplemousse'> Pamplemousse Category </a>
		  <a href='/Category/getU13'> U13 Category </a>
		  <a href='/Category/getU15'> U15 Category </a>
		  <a href='/Category/getU17'> U17 Category </a>
		  <a href='/Category/getU19'> U18 Category </a>
		  <a href='/Category/getSenior'> Senior Category </a>
	</div>

	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Navigation</span>

	<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		}
	</script>
   
</body>

</html> 
