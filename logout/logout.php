<?php
    session_start();
    if(session_destroy()){
        header("Location: ../profilePage/index.php");
    } else{
        var_dump($_SESSION);
    }
    
?>