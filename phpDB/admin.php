<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/style.css">
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

        table{
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        tr:hover {
            background-color: #333;
        }

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Admin Page</h1>

    <?php
        require_once("config.php");
        session_start();
        //if logged in
        if(isset($_SESSION["AdminloggedIn"])){
            if($_SESSION["AdminloggedIn"]==true){
                $query = "select * from users";
                $rows = mysqli_query($conn,$query);
                if(mysqli_num_rows($rows)>0){
                    echo '<h3>Users</h3>';
                    echo '<table>
                            <tr>
                                <th>User ID</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>';
                    while ($row = mysqli_fetch_assoc($rows)){
                        echo '<tr>
                                <td>'.$row["userid"].'</td>
                                <td>'.$row["email"].'</td>
                                <td>'.$row["userkey"].'</td>
                            </tr>';
                    }
                    echo '</table><br><a href="./signout.php"><button>Sign Out</button></a>';
                }
            }
            mysqli_close($conn);
        }elseif($_SERVER['REQUEST_METHOD'] == "POST"  && isset($_POST['adminid']) && isset($_POST['password'])) {
            $adminid = $password = "";
            $adminid = $_POST['adminid'];
            $password = $_POST['password'];

            //if annything empty
            if (trim($adminid) == "" || trim($password) == "") {
                echo "<p>All fields are required</p>";            
            } else {
                //checking user exist
                $sql = "SELECT adminid FROM admin where adminid = '".$adminid."' and password='". $password."'";
                $adminidresult = mysqli_query($conn, $sql);

                if (mysqli_num_rows($adminidresult) <= 0) {
                    echo "<br>AdminID or Password Wrong<br>";
                }
                if(mysqli_num_rows($adminidresult) > 0) {
                    echo "<br>Login Successfull<br>";
                    $_SESSION["AdminloggedIn"] = true;
                    header("refresh:2");
                    exit(0);
                }
            }
            mysqli_close($conn);
        }else{
            echo '<div class="register">
                    <h1 style="text-align: center;">Log In</h1>
                    <form method="post">
                        <label for="adminid">Admin ID</label>
                        <input class="red-border" type="text" name="adminid" required>

                        <label for="password">Password</label>
                        <input class="red-border" type="password" name="password" required>

                        <input class="red-border" style="display:block; margin:10px auto; width:10rem;" type="submit" value="Login">
                    </form>
                </div>';
        }
    ?>
</body>
</html>