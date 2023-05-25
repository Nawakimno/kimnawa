<html>
<head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	<title>Shessh</title>
</head>
<body>
	
	<center>
	<br><br><br>
		<h1>  Age Verifier </h1>
	 <form method="POST" action = "/inputName">
        @csrf
		<br><br><br>
		<label for="inputName"> Enter Age: </label>
		<input type="number" id = "inputName"  min="1" name="inputName" required autofocus/><br>
		<br><br>
	    <input type = "submit" name = "submit" value = "Check Age" />
		</form> 	

		
	<h3> Age: {{$name}}</h3>
     
	@if($name >= 18)

	<h2> You are eligible to vote!</h2>
	
	@elseif($name >= 15 && $name <= 17)

	<h2> You are eligible to vote in SK Election!</h2>

	@elseif($name <= 14 && $name >=1 )

	<h2> You are not eligible to vote!</h2>
    
	@else
	 <h3>Put a number first</h3>
	 @endif

		

</center>	

</body>
</html>
