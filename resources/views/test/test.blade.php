<html>
<head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	<title></title>
</head>
<body>
	
	<center>
		<h2 style="color: violet;">Hqackers</h2>
	 <form method="POST">
		<label> Username: </label>
		<input type="text" name = "usernameInputField"><br>
		<br>
		<label> Password: </label>
		<input type="password" name = "passwordInputField"><br>
		<br>
		<button type = "submit" name = "submit_button">Login</button>
        @if(strlen($name) > 0)
        True: The length of OHOY > 0
        @else 
            False:
        @Endif


	</form>
</center>	

</body>
</html>
