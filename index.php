<!DOCTYPE html>
<html>
<head>
	<title>Bakhtyar Mhamad</title>
</head>
<body>
	<style type="text/css">
		body{
			background-image:url('love1.png') ;
			background-repeat: no-repeat;
			background-size: cover;
		}
		form{
			font-size: 35px;
			text-align: center;
			margin: 25px;	
		}
		label{
			font-size: 35px;
			font-family: "Cooper";
			color: rgb(255,20,147);
		}
		.input{
			padding: 10px;
			font-size: 25px;
			border: 1px solid white;
			width: 200px;
			height: 30px;
			text-align: center;

		}
		
		.sub{
			padding: 10px;
			font-size: 25px;
			border: 1px solid white;
			background-color:rgb(255,20,147);
			width: 200px;
			height: 50px;
			text-align: center;
		}
		.result{
			font-size: 28px ;
			color:rgb(199,21,133);
			text-align: center;
		}
	</style>
	<form action="" method="get">
			<h1 style="color:rgb(255,20,147); font-family:Brush Script;">LOVE METER</h1>
			<label>male </label><br><input class="input" type="text" name="male" placeholder = "Boy Name" required >
			<br><br>
			<label>famale </label><br><input class="input" type="text" name="famale" placeholder = "Girl Name"required><br><br><br>
			<input class="sub" type="submit" name="sub" value="start"><br>
			<h6 class="result"></h6>
	</form>

	<?php

		if (isset($_GET['sub'])) {
			$boy= $_GET['male'];
			$girl= $_GET['famale'];
			$random= rand(40,100);

			$filename="data.txt";
			
			$old_data=file_get_contents($filename);
			$content =$_GET['male']." , ".$_GET['famale']."\n";
			$new_data=$old_data.$content;


			file_put_contents($filename, $new_data);

			echo "<h6 class='result'>".$boy ."  and  ".$girl."  is   %".$random."</h6>";
		}
	?>

</body>
</html>