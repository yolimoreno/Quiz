<?php
	session_start();

	//agafar les dades del JSON
	$data = file_get_contents("preguntes.json");
	$preguntes = json_decode($data); //var_dump($question[0]); per tal de veure-ho en forma d'array  
	
	//array que guarda totes les preguntes que ja han sortit, per tal que no es repeteixin
	$arr_questions=[];
	$arr_length=5;
	$_SESSION["index"]=0;
	$_SESSION["success"]=0;

	/*bucle que genera un número aleatori i comproba si la pregunta en la posició aleatòria existeix al nou array que hem creat,
	si existeix, decrementa la i per tal de tornar a generar un número nou (torna a començar)*/
	for($i = 0; $i <= $arr_length; $i++){
		$num=rand(0,11);
		if(!in_array($preguntes[$num],$arr_questions)) {
			$arr_questions[$i]=$preguntes[$num];
		}else{
			$i=$i-1;
		}
	}
	$_SESSION["arr_q"]=$arr_questions;
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Quiz</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container pregunta">
		<h1>Welcome to the <strong>hardest</strong> quiz on earth!</h1><br>
		<form method="GET" action="question.php">
			<button type="submit" class="btn btn-light gris play">Start</button>
		</form>
	</div>
</body>
</html>