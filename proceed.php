<?php
    session_start();
    require "./connect.php";
    

    $ltype = $_POST["ltype"];
    $lfrom = $_POST["lfrom"];
    $lto = $_POST["lto"];
    //$_SESSION["email"] = $_POST["email"];
    echo '<script>alert($_SESSION["email"])</script>';
    if(isset($ltype) && isset($lfrom) && isset($lto)) {
        if(empty($ltype)) {
            header("Location: ./leave.php?error=This is a required field!");
        }
        else if(empty($lfrom)) {
            //echo "bhsdsj";
            header("Location: ./leave.php?error=This is a required field!");
        }
        else if(empty($lto)) {
            header("Location: ./leave.php?error=This is a required field!");
        }
        else {
            $data = "INSERT INTO leaveapp VALUES ('" . $_SESSION["email"] . "', '$ltype', '$lfrom', '$lto')";
            //$res = mysqli_query($con, $data);
            if (mysqli_query($con, $data)) {
                
                header("Location: ./leave.php?message=Leave aplication updated!");
                
              } 
            else {
                header("Location: ./leave.php?error=Failed to update!");
                //echo '<script>alert("Failed")</script>';
            }
        }
    }
    else {
        //echo "not";
        header("Location: ./leave.php");
    }

?>