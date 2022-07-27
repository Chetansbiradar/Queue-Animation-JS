<?php

setcookie("url",$_SERVER['PHP_SELF'],time()+86400,"/");

session_start();
if(!isset($_SESSION["loggedIn"])){
    header( "location:../phpDB/login.php" );
    exit();
}
if(isset($_SESSION["loggedIn"])){
    if(!$_SESSION["loggedIn"]){
        header( "location:../phpDB/login.php" );
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priority queue</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
    <script src="../js/common.js"></script>
    <script src="../js/priority.js"></script>
</head>
<body>
    <nav>
        <a href="../index.php">Home</a>
        <a href="./linear.php">Linear Queue</a>
        <a href="./circular.php">Circular Queue</a>
        <a href="./priority.php">Priority Queue</a>
        <a href="./DQueue.php">Double Ended Queue</a>
        <?php require("../phpDB/menu.php"); ?>

    </nav>
    <h1 class="concept">Priority Queue</h1>
    <p class="defn">In a circular queue, 
        the last element points to the 
        first element making a circular link.
    </p>

    <div id="numberOfPriorityQueue">
        <label for="numOfPriorityQueue">Enter the Number of Priority Queue</label>
        <input type="number" id="numOfPriorityQueues" autofocus>
        <button onclick="numOfPriorityQueue()" id="createPriorityButton">Create Priorty Queue(s)</button>
        <button onclick="refreshPage()" id="resetQueue">Reset Queue</button>
        <br>
    </div>

    <div class="queueOperations">
        <label for="elementInput">Enter the Element to insert and its priority in next input box: </label>
        <input type="number" id="insertElement" required>
        <input type="number" id="priorityInsert" required>
        <button onclick="insertElement()">Insert Element</button>
        <button onclick="removeElement()">Remove Element</button>
    </div>

    <div id="priorityQueueContatiner">
        <!-- <div class="boxContainer">
            <div class="box" id="boxOf00"></div>
        </div>
        <hr>
        <div class="boxContainer">
            <div class="box" id="boxOf10"></div>
        </div> -->
    </div>   
</body>
</html>