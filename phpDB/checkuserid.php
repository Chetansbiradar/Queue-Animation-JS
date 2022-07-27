<?php
    require_once('config.php');
    $userid ="";
    $useridflag = 0;

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $userid = $_POST['userid'];
        $exp = "/^[A-Za-z0-9]{4,10}$/";
        $x = preg_match($exp,$userid);
        if(trim($userid)==""){
            echo "UserId cant be Empty";
            return;
        }
        if(!$x){
            echo $x." UserID cannot contain spaces or any special character(s) and 4<=chars<=10";
            return;
        }
        $sql = "SELECT userid FROM users where userid='".$userid."'";
        $result = $conn->query($sql);
        sleep(1);
        if ($result->num_rows > 0) {
           echo "UserID Already Exits";
          } else {
            $useridflag = 1;
            echo $userid." UserID Available";
          }
    }
    mysqli_close($conn);
?>