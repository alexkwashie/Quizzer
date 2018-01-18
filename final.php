<?php session_start(); ?>
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
            <h2>You are Done!</h2>
            <h4>Congats!! You finish the Test</h4>
            <p>Final Score: <?php echo $_SESSION['score']; 
            session_destroy()?></p>
            <a href= "question.php?n=1" class="start">Take Test Again...</a>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2014 - PHP Quizzer
        </div>
    </footer>


</body>

</html>