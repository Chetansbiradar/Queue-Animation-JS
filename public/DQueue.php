<html>

<head>
    <title>Dqueue</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
    <script src="../js/common.js"></script>
</head>

<body>
    <nav>
        <a href="../index.php">Home</a>
        <a href="./linear.php" >Linear Queue</a>
        <a href="./circular.php">Circular Queue</a>
        <a href="./priority.php">Priority Queue</a>
        <a href="#">Double Ended Queue</a>
        <?php session_start(); require_once("../phpDB/menu.php"); ?>
    </nav>
    <h1 class="concept">Double-Ended Queue</h1>

    <img class="concept" src="../gifs/dqueue.gif" width="500px" alt="">

    <p class="defn"> Double ended queue is a type of queue in which elements can be added or removed either from front or rear.
        It is also called as head-tail linked list</p>
    <details>
        <summary>
            <h1>Types of double ended queue:</h1>
        </summary>

        <h1>1.Input restricted double ended queue</h1>
            <p class="defn">In this queue insertion can be done from only one end and deletion can be done from both the ends</p>
            <h1> 2.Output restricted double ended queue</h1>
            <p class="defn">In this queue insertion can be done from both the ends and deletion can be done from only one end</p>
        </details>
        <details>
        <summary><h1>Operation :</h1>
        </summary>

        <h1>1.Insert elements at rear</h1>
            <p class="defn">First check whether queue is full<br>
            If queue is not full, then increment the rear pointer and add the element</p>

            <h1>2. Insert elements at front<h1>
            <p class="defn">To insert the element from front,decrement the front pointer then add the element into the queue</p>

            <h1>3. Delete from the front</h1>
            <p class="defn">First Check whether the queue is empty or not.<br>
            If the queue is not empty then we can proceed to deletion process<br>
            Delete the element at which the front is pointing and after deletion increment the front pointer</p>
            <h1>4. Delete from the rear</h1>
            <p class="defn">Deleting the element from the front end is quite common.So to delete the element from the rear end first we
            have to check whether the queue is empty or not.<br>
            If its not empty, then delete the element at which the rear pointer is pointing and after deletion
            decrement
            the rear pointer<br>
            </p>
            <h1>5. Check empty</h1>
            <p class="defn">If the front=0 and rear=MAXSIZE-1 then we say the queue is empty</p>
            <h1>6. Check full</h1>
            <p class="defn">If the rear=MAxSIZE-1 then we can say queue is full<br></p>
            <br><br>
        </details>
        <h1>Note: double ended queue can be implemented using circular queue also</h1>
        <footer>
            <a href="aboutus.php">About Us</a>
            <p style="float: right;">&#169; PES 2022</p>
        </footer> 

</body>

</html>