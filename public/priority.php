<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Priorityqueue</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/menu.css">
    </head>

    <body>
        <nav>
            <a href="../index.php">Home</a>
            <a href="./linear.php" >Linear Queue</a>
            <a href="./circular.php">Circular Queue</a>
            <a href="#">Priority Queue</a>
            <a href="./DQueue.php">Double Ended Queue</a>
            <?php session_start(); require_once("../phpDB/menu.php"); ?>
        </nav>
        <h1 class="concept">Priority Queue</h1>

        <img class="concept" src="../gifs/priority.gif" width="500px" alt="">

        <p class="defn">A priority queue is a special type of queue in which each element is associated with a priority value and there
            is an order in which the elements are deleted and processed.<br>
            Priority queue has the intrinsic ordering of the elements.
            While processing an element there are some rules:
            *While processing the elements higher priority elements are processed first.
            * when the two elements have same priority they are processed according to the order in which they were added to
            the queue.</p>
        <details>
            <summary>
                <h1>There are two types of priority queues</h1>
            </summary>

            <p class="defn">1.Ascending priority queue:<br>
                The elements can be inserted at any position and during deletion smallest element is removed from
                queue<br>
                2. Descending priority queue<br>
                The elements can be inserted at any position and during deletion largest element is removed from queue
            </p>
        </details>
        <details>
            <summary>
                <h1>Operation :</h1>
            </summary>
            <h1>1.Insertion()</h1>
            <p class="defn">First check the priority of the element to be inserted<br>
                If the queue of the given priority is full display the queue is overflow<br>
                If it is not full,then add the element at the rear end of the queue</p>
            <h1>2.Deletion()</h1>
            <p class="defn">While deleting the element first locate the smallest/largest element then delete<br>
                for delete operation there is no need of checking priority<br>
                It deletes the element from the front position in the first queue<br>
                If the queue is empty,the element at the front position in the second queue is deleteed</p>
            <h1>3.Display()</h1>
            <p class="defn">If the rear pointer=front pointer-1 then display queue underflow<br>
                If not then display the elements of queue from front[i] to rear[i]</p>
                <center><a href="./priorityAnimate.php"><button>Try It Out</button></a></center> 
                <br><br>
            </details>
            <footer>
                <a href="aboutus.php">About Us</a>
                <p style="float: right;">&#169; PES 2022</p>
            </footer> 
    </body>
</html>