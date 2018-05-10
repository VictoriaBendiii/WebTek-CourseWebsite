<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
//check to see if score is set
if(!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}


if($_POST) {
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    
    $next = $number + 1;
    
    /*
    * get total questions
    */
    $sql = "SELECT * FROM questions";
    //Get results
    $results = mysqli_query($conn,$sql);
    $total = mysqli_num_rows($results);
    
    /*
    * get correct choice
    */
    
    $query = "SELECT * FROM choices WHERE question_number = $number AND is_correct = 1";
    
    // get result
    $result = mysqli_query($conn,$query);
    
    //get row
    $row =  mysqli_fetch_assoc($result);
    
    //set correct choice
    $correct_choice = $row['id'];
    
    //comparison
    if ($correct_choice == $selected_choice) {
        //answer is correct
        $_SESSION['score'] ++;
    }
    
    //checks is last question
    if ($number == $total) {
        header("Location: final.php");
        exit();
        
    } else {
        header("Location: question.php?n=".$next);
        
    }
}