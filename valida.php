<?php
    session_start();

    $id=$_GET["id_answer"];
    $array_question=$_SESSION["arr_q"];
    $index=$_SESSION["index"];
    $correcte=$_SESSION["success"];

    if($array_question[$index]->correctIndex==$id){
        echo "<div class='container pregunta'><div class='alert alert-dismissible alert-success'>
        <h4 class='alert-heading'><strong>Congrats!</strong></h4><p>Right answer.</p></div></div>";
        $correcte++;
        
    }else{
        echo '<div class="container pregunta"><div class="alert alert-dismissible alert-secondary">
        <h4 class="alert-heading"><strong>Oh no :(</strong></h4><p>Wrong answer.</p></div></div>';
    }
    $index++;

    if($index==5){
        echo '<form method="GET" action="result.php">
		<button type="submit" class="btn btn-light gris">End quiz</button>
	    </form>';
    }else{
        echo '<form method="GET" action="question.php">
		<button type="submit" class="btn btn-light gris">Next question</button>
	    </form>';
    }
    
    $_SESSION["success"]=$correcte;
    $_SESSION["index"]=$index;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
	<link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>