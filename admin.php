<?php include 'database.php';?>
<?php 
If (isset($_POST['submit'])){
    //Get Post variables
    $question_number = $_POST['question_no'];
    $question_text = $_POST['question_text'];
    
    //put choices into an array
    $options= array();
    $options[1] = $_POST['choice1'];
    $options[2] = $_POST['choice2'];
    $options[3] = $_POST['choice3'];
    $options[4] = $_POST['choice4'];
    $options[5] = $_POST['choice5'];


    $query = "INSERT INTO `quiz`(question_number, text) VALUES('$question_number', '$question_text')";

    //Run Query
    $insert_row = $mysqli -> query($query) or die($mysqli->error.__FILE__);

    //Validate Row
    if($insert_row){
        foreach($options as $options => $value){
            if($value !=''){
                if($correct_choice = $options){
                    $is_correct = 1;
                }else{
                    $is_correct = 0;
                }

                //choice query
                $query = "INSERT INTO `choices`(question_number, is_correct, text) 
                VALUES('$question_number', '$is_correct', '$value')";

                //Run Query
                $insert_row = $mysqli -> query($query) or die($mysqli->error.__FILE__); 

               //Validate Row
               if($insert_row) {
                   continue;
               }else{
                   die('Error: ('.$mysqli->errno. ') '.$mysqli->error);
               }
            }
        }
    }

    $msg = 'Question has been added';


}

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
    <?php 
            if(isset($msg)){
                echo $msg; 
            }
    ?>
        <div class="container">
            <h2>Add a Question:</h2>
            <form method="post" action="admin.php">
                <p>
                    <label>Question Number</label>
                    <input type="number" name="question_no">
                </p>

                <p>
                    <label>Question text:</label>
                    <input type="text" name="question_text">
                </p>

                <p>
                    <label>choice #1</label>
                    <input type="text" name="choice1">
                </p>

                <p>
                    <label>choice #2</label>
                    <input type="text" name="choice2">
                </p>

                <p>
                    <label>choice #3</label>
                    <input type="text" name="choice3">
                </p>

                <p>
                    <label>choice #4</label>
                    <input type="text" name="choice4">
                </p>

                <p>
                    <label>Correct choice number:</label>
                    <input type="number" name="correct_choice">
                </p>

                <input type="submit" name="submit" value="submit">

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