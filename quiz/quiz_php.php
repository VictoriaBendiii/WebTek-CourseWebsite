<?php include 'database.php'; ?>
<?php
 /*
 * Get total questions
 */

    $query = "SELECT * FROM questions";

//get results
$results = mysqli_query($conn,$query);
$total =  mysqli_num_rows($results)

?>
    <!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="css/quiz_php_style.css" type="text/css"/>
</head>
<body>
    <header>
        <div class="container">
            <h1>WEBTEK QUIZ</h1>
        </div>
    </header>
    
    <main>
        <div class="container">
            <h2> QUIZ ON JAVASCRIPT</h2>
            <p>This is a multiple choice quiz to test your knowledge on Javascript</p>
            
            <ul>
                <li><strong>Number of questions: </strong><?php echo $total ?> </li>
                <li><strong>Type: </strong> Multiple Choice</li>
                <li><strong>Estimated Time:</strong><?php echo $total * 1.5; ?></li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz!</a>
        </div>
    </main>
    
    <footer>
        <div class="container">
            Copyright &copy;2018, Web Systems and Technology (Group 2)
        </div>
    </footer>
</body>
</html>