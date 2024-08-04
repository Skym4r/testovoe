<?php
include 'dbconnect.php';
    if(empty($_POST["FIO"]) and empty($_POST["EMAIL"]) and empty($_POST["PHONE"])){
        echo 'not_FIO_EMAIL_PHONE';
    }
    else if(empty($_POST["FIO"]) and empty($_POST["EMAIL"]) and !empty($_POST["PHONE"])){
        echo 'not_FIO_EMAIL';
    }

    else if(empty($_POST["FIO"]) and !empty($_POST["EMAIL"]) and empty($_POST["PHONE"])){
        echo 'not_FIO_PHONE';
    } 

    else if(!empty($_POST["FIO"]) and empty($_POST["EMAIL"]) and empty($_POST["PHONE"])){
        echo 'not_EMAIL_PHONE';
    } 

    else if(empty($_POST["FIO"]) and !empty($_POST["EMAIL"]) and !empty($_POST["PHONE"])){
        echo 'not_FIO';
    } 
    else if(!empty($_POST["FIO"]) and empty($_POST["EMAIL"]) and !empty($_POST["PHONE"])){
        echo 'not_EMAIL';
    } 
    else if(!empty($_POST["FIO"]) and !empty($_POST["EMAIL"]) and empty($_POST["PHONE"])){
        echo 'not_PHONE';
    } 
    else if(!empty($_POST["FIO"]) and !empty($_POST["EMAIL"]) and !empty($_POST["PHONE"])){

        $sql = mysqli_query($link, "INSERT INTO `list_leads` (`id`, `FIO`, `EMAIL`, `PHONE`, `CITY`) VALUES (NULL, '{$_POST['FIO']}', '{$_POST['EMAIL']}', '{$_POST['PHONE']}', '{$_POST['CITY']}')");
        
        if ($sql) {
        echo 'true';
        } else {
        echo 'false';
        }
  }
?>