<?php include 'database.php';?>
<?php session_start(); ?>
<?php 
    //Set question number, use 'int' to always get an integer(number)
    $number = (int)$_GET ['n'];

    //Get the Question 
    $query = "SELECT * FROM `quiz`
    WHERE question_number = $number";

    //Get the result from query i.e all the info. from the database
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    //Get questions from database
    $question = $result->fetch_assoc();

    /*
    *Get choices
    */
    $query = "SELECT * FROM `choices`
    WHERE question_number = $number";

    //Get the result from query i.e all the info. from the database
    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);


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
            <div class="current">Question <?php echo $question['question_number']?> of <?php echo $total;?></div>
            <p class="question">
                <?php echo $question['text']; ?>
            </p>

            <form method="post" action="process.php">
                <ul class="choices">
                    <?php while($row = $choices->fetch_assoc()): ?>
                    <li><input name="choice" type="radio" value="<?php echo $row['id'];?>">
                        <?php echo $row['text'];?>
                    </li>

                    <?php endwhile;?>
                </ul>
                <input value="submit" type="submit"/>
                <input type="hidden" name="number" value= "<?php echo $number; ?>"/>
            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2014 - PHP Quizzer
        </div>
    </footer>


</body>

</html>
