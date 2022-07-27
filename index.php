<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queues</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/menu.css">
    <script src="./js/common.js"></script>
</head>
<body>

    <nav>
        <a href="#">Home</a>
        <a href="./public/linear.php" >Linear Queue</a>
        <a href="./public/circular.php">Circular Queue</a>
        <a href="./public/priority.php">Priority Queue</a>
        <a href="./public/DQueue.php">Double Ended Queue</a>
        <?php session_start(); require_once("./phpDB/menu.php"); ?>
    </nav>
    
    <h1 class="concept">Queue</h1>
    <img class="concept" src="./images/cartoonQueue.gif" width="500px" alt="Queue of People taking books from a shop">
    
    <p class="defn">
        A queue is an important data structure in programming. A queue follows the <b>"First In First Out" (FIFO)</b> method and is open at both of its ends.
        Data insertion is done at one end rear end or the tail of the queue while deletion is done 
       at the other end called the front end or the head of the queue.
    </p>

    <h1>Let's Know More About Queue..</h1>
    <p class="defn">A real-life example of a queue data structure is a line of people waiting to
        buy a ticket at a cinema hall. A new person will join the line from the end and the person 
        standing at the front will be the first to get the ticket and leave the line. 
        Similarly in a queue data structure,
        data added first will leave the queue first.</p>
    <h1>Some other applications of the queue in real-life are:</h1>

    <ol>
        <li>People on an escalator</li>
        <li>Cashier line in a store</li>
        <li>A car wash</li>
    </ol>

    <h2>There are 4 Types</h2>
    <ol>
        <li>Simple Queue</li>
        <li>Circular Queue</li>
        <li>Priority Queue</li>
        <li>Double Ended Queue</li>
    </ol>
    <footer>
        <a href="./public/aboutus.php">About Us</a>
        <p style="float: right;">&#169; PES 2022</p>
    </footer>
</body>
</html>