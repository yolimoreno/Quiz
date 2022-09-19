<?php
    session_start();
    $strQuiz=file_get_contents("preguntes.json");
    $quiz=json_decode($strQuiz);
    $correcte=$_SESSION["success"];
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
        <h1>Results</h1>
        <p>You got <?=$correcte?> out of 5.</p>
        <?php
        switch ($correcte) {
            case 0:
                echo "<p>This is NOT your thing. All wrong, really?</p>";
                break;
            case 1:
            case 2:
                echo "<p>It could've been worse...</p>";
                break;
            case 3:
            case 4:
                echo "<p>Not bad.</p>";
                break;
            case 5:
                echo "<p>Albert Einstein, who?</p>";
                break;
        }
        ?>
        <form method="GET" action="index.php">
            <button type="submit" class="btn btn-light gris">Start again</button>
        </form>
    </div>
</body>
</html>