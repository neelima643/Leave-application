<!DOCTYPE html>
<html>
    <head>
        <title>Leave-Application</title>
        <link rel="stylesheet" href="./leave.css">
    </head>

    <body>
        <div class="main">
            <a href="./login_org.php">Logout</a>  
            <h2 class="heading">Leave Application Form</h2>
            <form action="./proceed.php" method="POST">
                <label class="head">Leave Type</label>
                <br>
                <select name="ltype" class="list">
                    <option value="sick">Sick Leave</option>
                    <option value="casual">Casual Leave</option>
                    <option value="paid">Paid Leave</option>
                </select>    
                <br>
                <div class="sub">
                    <div class="inner">
                    <label class="datelabel">Leave From <span class="spanclass"> *</span></label>
                    
                    <input type="date" name="lfrom" class="date">
                    </div>    
                    <div class="inner">      
                    <label class="datelabel">Leave To <span class="spanclass"> *</span></label>
                    <input type="date" name="lto" class="date">
                    </div>
                </div>
                <br>
                <?php 
                    if(isset($_GET['error'])) { 
                ?>
               
                        <p class="errormsg"><?php echo $_GET['error']; ?></p>
                        
                    <?php
                    }?>
                <button class="button" type="submit" name="apply">Apply</button>
            </form>
        </div>
        <?php
        if(isset($_GET['message']))
            echo '<script>alert("New record created successfully")</script>';
        ?>
        <?php
            if(isset($_GET['logout'])) {
                session_destroy();
                unset($_SESSION['email']);
                unset($_SESSION['password']);
                header('location:login.php');
            }
?>
    </body>
</html>