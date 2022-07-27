<?php
    require_once('config.php');
    $userid = $password = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST"  && isset($_POST['userid']) && isset($_POST['password'])) {
        $userid = (string) $_POST['userid'];
        $password = (string) $_POST['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>

<body style="justify-content: center;">

    <nav>
        <a href="../index.php">Home</a>
        <a href="../public/linear.php">Linear Queue</a>
        <a href="../public/circular.php">Circular Queue</a>
        <a href="../public/priority.php">Priority Queue</a>
        <a href="../public/DQueue.php">Double Ended Queue</a>
    </nav>

    <style>

        .register{
            display: block;
            border: 1px solid white;
            border-radius: 15px;
            width: 50vw;
            margin: 20px auto;
            padding: 20px;
        }

        input[type=text],input[type=email],input[type=password],label{
            display: block;
            width: 100%;
            border-right-style: hidden;
            border-top-style: hidden;
            border-left-style: hidden;
            /* border-bottom-style: hidden; */
            border-radius: 0;
            margin-bottom: 1.5rem;
            transition: 0.3s;
        }
        .red-border:hover{
            border-radius: 15px;
            box-shadow: 0 0 15px white;
            transition: 0.3s;
        }
        input[type=submit]{
            border-right-style: solid;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-style: solid;
            border-radius: 15px;
        }
        input[type=submit],input[type=button]{
            display: inline-block;
        }
    </style>

    <div class="register">
        <h1 style="text-align: center;">Login</h1>
        <form action="" method="post">
            <label for="userid">User ID</label>
            <input class="red-border" type="text" name="userid" id="userid" onchange="checkUserID(this.value);" onfocusout="this.onchange();" onpaste="this.onchange();" required>

            <label for="password">Password</label>
            <input class="red-border" type="password" name="password" required>

            <input class="red-border" style="display:block; margin:10px auto; width:10rem;" type="submit" value="Login">
            <a href="./register.php"><input type="button" value="Register"></a>
        </form>
        
    <?php
        //if annything empty
        if (trim($userid) == "" || trim($password) == "") {
            echo "<p>All fields are required</p>";            
        } else {
            //checking user exist already
            $sql = "SELECT userid FROM users where userid='" . $userid . "' and userkey='".$password."'";
            $useridresult = mysqli_query($conn, $sql);

            if (mysqli_num_rows($useridresult) <= 0) {
                echo "<br>UserID or Password Wrong<br>";
            }
            if(mysqli_num_rows($useridresult) > 0) {
                echo "<br>Login Successfull<br>";
                session_start();
                $_SESSION["loggedIn"] = true;
                if(isset($_COOKIE["url"])){
                    echo "<br>Redirecting...<br>";
                    header("refresh:2;url=".$_COOKIE["url"]);
                }
            }
        }
        mysqli_close($conn);
    ?>

</div>

    <script>
        function checkUserID(useridinput) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                console.log(xhttp.readyState);
                if (this.readyState == 1 || this.readyState == 2 || this.readyState == 3) {
                    document.getElementById("available").innerText = "Processing...";
                }
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("available").innerText = this.responseText;
                    document.getElementById("userid").style.borderWidth = "2px"
                    if (this.responseText === (document.getElementById("userid").value + " UserID Available")) {
                        document.getElementById("userid").style.borderColor = "green"
                    } else {
                        document.getElementById("userid").style.borderColor = "red"
                    }
                }
            }
            xhttp.open("POST", "checkuserid.php");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("userid=" + useridinput.trim());
        }
    </script>
</body>

</html>