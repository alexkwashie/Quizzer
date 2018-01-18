<?php include 'database.php'; ?>

<?php
//Get Total Questions
$query = "SELECT * FROM `quiz`";

//Get results
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$total = $result->num_rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quizzer</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <header>
        <div class="container">
            <h1>PhP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Test You PhP Knowledge</h2>
            <p>This is a multiple choice quiz to test your PHP Knowledge</p>
            <ul>
                <li><strong>Number of Questions:</strong> <?php echo $total; ?></li>
                <li><strong>Type:</strong>Multiple Choice</li>
                <li><strong>Estimated time:</strong> <?php echo $total * 0.5;?> minutes</li>
            </ul>
            <!--Use a GET variable to go to question 1 with '?n=1'-->
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2014 - PHP Quizzer
        </div>
    </footer>


</body>

</html>