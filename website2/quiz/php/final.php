<?php session_start(); ?>
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
            <h1>PHP QUIZ</h1>
        </div>
    </header>
    
    <main>
        <div class="container">
            <h2>You're Done!</h2>
            <p>Congrats! You have completed the test on PHP.</p>
            <p>Final Score: <?php echo $_SESSION['score']; ?> 
            </p>
            <a href="question.php?n=1" class="start" class="start">Take Again</a>
            <a href="../../index.html" class="back" class="back">Go Back</a>
        </div>
    </main>
    
    <footer>
        <div class="container">
            Copyright &copy;2018, Web Systems and Technology (Group 2)
        </div>
    </footer>
</body>
</html>
<?php session_destroy(); ?>