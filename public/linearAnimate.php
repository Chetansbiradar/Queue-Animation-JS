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
    <title>Linear Queue</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
    <script src="../js/common.js"></script>
    <script src="../js/linear.js"></script>
</head>
<body style="min-height:100vh;">
    <nav>
        <a href="../index.php">Home</a>
        <a href="./linear.php" >Linear Queue</a>
        <a href="./circular.php">Circular Queue</a>
        <a href="./priority.php">Priority Queue</a>
        <a href="./DQueue.php">Double Ended Queue</a>
        <?php require_once("../phpDB/menu.php"); ?>
    </nav>
    <h1 class="concept">Linear Queue</h1>
    <p class="defn">In a circular queue, 
        the last element points to the 
        first element making a circular link.
    </p>
    <div id="askForNumOfElem">
        <label for="numOfElements">Enter the Number element: </label>
        <input type="number" id="numOfElementsIn" autofocus>
        <button onclick="numOfElementsCreate()" id="createArrayButton">Create Array</button>
        <button onclick="refreshPage()" id="resetQueue">Reset Queue</button>
    </div>

    <div class="queueOperations">
        <label for="elementInput">Enter the Element to insert: </label>
        <input type="number" id="insertElement" required>
        <button onclick="insertElement()">Insert Element</button>
        <button onclick="removeElement()">Remove Element</button>
    </div>
    <div class="boxContainer">
    </div>

    <style>
        .bottomSticky>p{
            display: inline-flex;
        }
        .bottomSticky{
            padding: 1.5rem;
            background-color: brown;
            position: fixed;
            justify-content: center;
            align-items: center;
            bottom: 0;
            width: 100vw;
            background-color: rgba(53, 54, 54, 0.64);
        }
        .bottomSticky>table{
            margin-left: auto;
            margin-right: auto;
        }
        .bottomSticky tr{
            text-align: center;
            align-self: center;
            margin:20px 21px 22px 23px;
        }
    </style>
    
    <!-- <div style="height: 2000px;"></div> -->

    <div class="bottomSticky">

        <table>
            <tr>
                <td>Front</td>
                <td><div style="height: 20px; width: 20px; border-radius: 10px; background-color: rgb(84, 251, 84); align-self: center;"></div> 
                </td>
                <td>Rear</td>
                <td><div style=" height: 20px; width: 20px; border-radius: 10px; background-color: rgb(84, 148, 251); align-self: center;"></div> 
                </td>
                <td>Front: </td>
                <td id="frontval">-1</td>
                <td>Rear: </td>
                <td id="rearval">-1</td>
            </tr>

        </table>
    </div>
</body>
</html>