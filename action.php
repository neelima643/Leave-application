<?php
        session_start();

        require "./connect.php";
        require "./leave.php";
    //if(isset($_POST["submit"])) {
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];

        //require_once './connect.php';
        if(isse($_SESSION["email"]) && isset($_SESSION["password"])) {
            echo "bjahbj";
            if(empty($_SESSION["password"])) {
                header("Location: ./login.php?error1=Email field is required!");
            }
            else if(empty($_SESSION["password"])) {
                header("Location: ./login.php?error2=Password field is required!");
            }
            else {
                $data = "SELECT * FROM login WHERE email='" . $_SESSION["email"] . "' AND password='" .$_SESSION["password"]. "' ";
                $res = mysqli_query($con, $data);
                if(mysqli_num_rows($res) == 1) {
                    $fet = mysqli_fetch_assoc($res);
                    alert("You are logged in successfully!");
                    header("location: ./leave.php");
                }
                else {
                    header("Location: ./login.php?error2=Invalid username or password!");
                }
                

            }
        }

    //}
    else {
        header("location: ./login.php");
    }
?>