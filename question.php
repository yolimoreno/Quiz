<?php
	session_start();
	
    $num=$_SESSION["index"];
    $array_question=$_SESSION["arr_q"];
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
	
    <div class="container">
        <div class="row">
			<h4 class="pregunta"><?= ($num+1).". ".$array_question[$num]->question ?></h4>
			<?php 
			$i=0;
			foreach ($array_question[$num]->answers as $resposta){
				$i++; ?>
				<form action="valida.php" method="get">
					<div>
						<button type="submit" style="margin: 5px"; class="btn btn-secondary custom"><?=$resposta;?></button>
					</div>
					<input type="hidden" name="id_answer" value="<?=$i-1;?>"></input>
				</form>
		 	<?php } ?>
        </div>
    </div>
    
</body>
</html>