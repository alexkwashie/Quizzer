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
            <h2>Add a Question:</h2>
            <form method="post" action="admin.php">
                <p>
                    <label>Question Number</label>
                    <input type="number" name="question_no">
                </p>

                <p>
                    <label>Question text:</label>
                    <input type="text" name="question_no">
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