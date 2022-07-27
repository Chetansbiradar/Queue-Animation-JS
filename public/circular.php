


<html>

<head>
    <title>Circulerqueue</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
    <script src="../js/common.js"></script>
</head>

<body>
    <nav>
        <a href="../index.php">Home</a>
        <a href="./linear.php">Linear Queue</a>
        <a href="#">Circular Queue</a>
        <a href="./priority.php">Priority Queue</a>
        <a href="./DQueue.php">Double Ended Queue</a>
        <?php session_start(); require_once("../phpDB/menu.php"); ?>
    </nav>
    <h1 class="concept">Circular Queue</h1>

    <img class="concept" src="../gifs/circular.gif" width="500px" alt="">

    <p class="defn"> A circular queue is the extended version of a simple queue where the last element is connected to the first
        element.
        In circular queue evry position will have next position and previous position.
        If the position next to max-1 position is zero then it will be a circular queue.</p>
        <details>
            <summary>
                <h1>Operation:</h1>
            </summary>
    <h1>1.Isempty()</h1>
    <p class="defn">
        Initially rear pointer and front pointer will be pointing to the same position.Usually in simple queue we take
        initial position as -1 for rear and 0 for front But in circular queue both are pointing to MAx-1<br>
        The problem is even when the queue will be full front will be equal to rear so avoid this confusion we take
        variable counte<br>
        So when count=0 we consider the circular queue is empty</p>

       <h1>2.IsFull()</h1>
        <p class="defn">As we have already mentioned the use of count variable, in this case when the count=MAXSIZE we consider the
        queue is full</p>
        <h1>3.Delete()</h1>
        <p class="defn">To delete an element from the queue first we have to check whether the queue is empty or not<br>
        If its not empty,we have to check to which element the front pointer is pointing to<br>
        If its pointing to MAXSIZE-1 th element then increment the pointer element to 0, if it is pointing to a
        position other than MAXSIZE-1 then just increment the front pointer<br>
        After incrementing the front pointer, delete that element<br>
        Decrement the count pointer<br></p>
        <h1>4.Insert()</h1>
        <p class="defn">To insert an element to the queue first we have to check whether the queue is full or not<br>
        If the queue is not empty, increment theb rear pointer and add the element<br>
        Increment the count variable</p>
        <center><a href="./circularAnimate.php"><button>Try It Out</button></a> </center> 
        <br><br>
    </details>

    <footer>
        <a href="aboutus.php">About Us</a>
        <p style="float: right;">&#169; PES 2022</p>
    </footer>
</body>

</html>