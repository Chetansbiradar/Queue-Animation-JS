<?php
    // session_start();
    if(isset($_SESSION["loggedIn"])){
        if($_SESSION["loggedIn"]){
            echo '<a href="http://'.$_SERVER['SERVER_NAME'].'/chetan/phpDB/signout.php">Sign Out</a>';
        }
    }
    // else{
    //     echo '<a href="http://'.$_SERVER['SERVER_NAME'].'/chetan/phpDB/login.php">Login</a>';
    // }
?>