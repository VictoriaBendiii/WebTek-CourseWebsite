<?php session_start(); ?>
<?php include ('database.php');


    //Set question number_format
    $number = (int) $_GET['n'];

    /*
    * GET QUESTION
    */

    $query = "SELECT * FROM questions
        WHERE question_number = $number";

    //Get result
    $result = mysqli_query($conn,$query);
    

    /*
    *get choices
    */

    $query = "SELECT * FROM choices
        WHERE question_number  = $number";

    //Get result
    $choices = mysqli_query($conn,$query);
    
    /*
    * COUNT QUESTIONS
    */
    $query = "SELECT * FROM questions";

    //get results
    $results = mysqli_query($conn,$query);
    $total =  mysqli_num_rows($results)

?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
    <header>
        <div class="container">
            <h1>WEBTEK QUIZ</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="current"> Question
                <?php 
            
                
            echo $number; ?> of
                <?php echo $total ?>
            </div>
            <p class="question" name='question'>
                <?php 
                    $question = mysqli_fetch_assoc($result);
                    echo $question['text'];
                ?>
            </p>
            <form method="post" action="process.php">
                <ul class="choices">
                    <?php while ($row = $choices->fetch_assoc()): ?>
                    <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
                        <?php echo $row['text']; ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <input type="submit" value="Submit" />
                <input type="hidden" name="number" value="<?php echo $number; ?>" />
            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy;2018, Web Systems and Technology (Group 2)
        </div>
    </footer>
</body>

</html>
