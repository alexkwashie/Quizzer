<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php

// Check to see if score is set
if(!isset($_SESSION['score'])){

    $_SESSION['score'] = 0;
}

if($_POST){
    //Grab post: names="", from post from in question.php
    $number = $_POST['number'];
    $select_choice = $_POST['choice'];
    $next = $number+1;

    //Get total
    $querys = "SELECT * FROM `quiz`";

    //Get $result
    $results = $mysqli->query($querys) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;

    //Get correct choice
    $query = "SELECT * FROM `choices`
            WHERE question_number = $number AND is_correct=1";

    //Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    //Get row
    $row = $result->fetch_assoc();

    //Set correct choice
    $correct_choice = $row['id'];


    //Compare
    if ($select_choice == $correct_choice){
        //Answer is correct
        $_SESSION['score']++;
    }

 
     //Set last question to redirect to final.php
    if($number == $total){
    header("Location: final.php");
        exit();
    } else {
        header("Location: question.php?n=".$next);
    }
}
?>