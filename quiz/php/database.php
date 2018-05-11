<?php

//Create MySqli Object
$conn = mysqli_connect('localhost', 'root', '', 'quiz');
////Create an error handles
if($conn -> connect_error) {
    printf("Connecion Failed:	 %s\n", $conn->connect_error);
    exit();
}  
?>