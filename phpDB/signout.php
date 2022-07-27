<?php
    session_start();
    if(isset($_SESSION["loggedIn"])){
        if($_SESSION["loggedIn"]){
            unset($_SESSION["loggedIn"]);
            echo 'Sign Out Success<br>Redirecting...<br>';
            header( "refresh:2;url=../index.php" );
            exit();
        }
    }elseif(isset($_SESSION["AdminloggedIn"])){
        if($_SESSION["AdminloggedIn"]){
            unset($_SESSION["AdminloggedIn"]);
            echo 'Sign Out Success<br>Redirecting...<br>';
            header( "refresh:2;url=../index.php" );
            exit();
        }
    }
?>