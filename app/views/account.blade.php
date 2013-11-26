<!doctype html>
<html lang = "en">
	<head>
		<title>Welcome <?php echo Session::get('username')?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
	    <link rel = "stylesheet" type = "text/css" href = "css/style.css">
	</head>
	<body>
		<div class = "row header">
	        <div class = "col-md-2 pull-left" id = "logo">
	            Blanco
	        </div>
	        <div class = "col-md-2 menu">
	        	<img src = "img/home.png">
	        	Home
	        </div>
	        <div class = "col-md-2 menu">
	        	<img src = "img/wallet.png">
	        	My Wallet
	        </div>
	        <div class = "col-md-2 menu">
	        	<img src = "img/contacts.png">
	        	Contacts
	        </div>
	        <div class = "col-md-2 menu">
	        	<img src = "img/settings.png">
	        	Settings
	        </div>
	        <div class = "col-md-2 menu">
	        	<img src = "img/logout.png">
	        	Logout
	        </div>
	    </div>
	    <div class = "content">
	    @yield('content')
		</div>
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	    <script src= "js/bootstrap.min.js"> </script>
	    <script src= "js/core.js"> </script>
	</body>
</html>