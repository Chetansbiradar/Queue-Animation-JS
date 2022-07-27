<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Linearqueue</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/menu.css">
        <script src="../js/common.js"></script>
    </head>

    <body>
        <nav>
            <a href="../index.php">Home</a>
            <a href="#">Linear Queue</a>
            <a href="./circular.php">Circular Queue</a>
            <a href="./priority.php">Priority Queue</a>
            <a href="./DQueue.php">Double Ended Queue</a>
            <?php session_start(); require_once("../phpDB/menu.php"); ?>
        </nav>
        <h1 class="concept">Linear Queue</h1>

        <img class="concept" src="../gifs/linear.gif" width="500px" alt="">

        <p class="defn">
            It is the most basic queue<br>
            In a simple queue, insertion takes place at the rear and removal occurs at the front.</p><br>
        <details>
            <summary>
                <h1>Operations:</h1>
            </summary>

            <h1>1. insert(queue,element)</h1><br>
            <p class="defn">while inserting a element to queue we have to check whether queue is full(array implementation) then we have to
            increment the rear pointer pointing to the new element<br>

            <h1>2. remove(queue)</h1><br>
            <p class="defn">While removing the element we have to check queue is empty or not,then remove the element,increment the front
            pointer.</p><br>

            <h1>3. empty(queue)</h1><br>
            <p class="defn">In simple queue if the rear pointer is less than front pointer then it is empty</p>
            <center><a href="./linearAnimate.php"><button>Try It Out</button></a></center> 
            <br><br>
        </details>
        <footer>
            <a href="./aboutus.php">About Us</a>
            <p style="float: right;">&#169; PES 2022</p>
        </footer> 
    </body>
</html>