<?php session_start()?>

<?php 
if(!$_SESSION['user_name']){
    header("Location: ../user/login.php");
}
?>