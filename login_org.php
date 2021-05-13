<!DOCTYPE html>
<html>
    <head>
        <title>Leave-Application</title>
        <link rel="stylesheet" href="./login.css">
    </head>

    <body>
        <div class="main">
            <form action="./action.php" method="POST">
                <h1 class="sign">Sign In</h1>
                <?php 
                    if(isset($_GET['error1'])) { 
                ?>
               
                        <p class="errormsg"><?php echo $_GET['error1']; ?></p2>
                    
                    <?php
                    }?>
            
                
                <input class="box" type="email" name="email" placeholder="Email">
                
                <input class="box" type="password" name="password" placeholder="Password">
                <?php 
                    if(isset($_GET['error2'])) { 
                ?>
               
                        <p class="errormsg"><?php echo $_GET['error2']; ?></p>
                    
                    <?php
                    }?>
                
                
                <br>
                <button class="button" type="submit" name="submit">Sign In</button>
            </form>
            
        </div>
    </body>
</html>