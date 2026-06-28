<?php
//resume the sessiion

session_start();
echo'hello' . $_SESSION['username'] . 'what do you want?</br>';
echo'Your price tv Is' . $_SESSION['price'] .'</br>';
echo '<a href ="page2.php"> Room Number 3</a>';


?>