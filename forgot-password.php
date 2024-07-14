<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    

    <style>
body{
    background-color: aqua;   
}

    form{
    border: 1px solid black;
    background-color:white;
    box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.3);
    width:450px;
    padding-bottom: 20px;
    margin-bottom:auto;
    padding-right:10px;
    padding-left:10px;
    margin-top:40px;
    border-radius:10px;
    margin:auto;
    font-size:40px;
}
input[type=email]{
    width: 400px;
  height: 50px;
    border-radius:10px;
    margin-left:20px;
    font-size:30px;
}
input[type=submit],
input[type=button]{
width: 120px;
 height:40px;
 font-size:22px;
 border-radius:10px;

}
input[type=submit]:hover,
input[type=button]:hover{
    background-color:black;
    color:white;
}
p{
    background-color:palegreen;
}

</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div>
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text"><u>Forgot Password</u></h2>
                    <p class="text">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div>
                        <input type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div><br>
                   
                    <div>
                        <center><input type="submit" name="check-email" value="Continue"></center>
                    </div>
                    
                    <div>
                        <a href="login-user.php"><center><input type="button" name="back" value="Back"></center></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>