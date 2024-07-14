<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <style>
body{
    background-color:aqua;
}
    
form{
    background-color: white;
 
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.3);
    color: black;
    margin-top:10px;
    padding-bottom:20px;
    padding-top:20px;
    width:590px;
    margin: auto;
    font-size:35px;

}

input[type=email],
input[type=password]{

    width:480px ;
    height: 40px;
    border-radius:10px;
    padding-bottom: 2px;
    font-size:35px;
    margin-left:50px;
}
input[type=submit]{
    width:109px ;
    height: 42px;
    border-radius:10px;
    padding-bottom: 3px;
    font-size:35px;
}
input[type=submit]:hover{
    background-color:black;
    color:white;
}
.text-center{
    text-align:center;
}
h2{
    font-size:60px;
}
.for{
    text-align:center; 
}
.alert{
    color:red;
    text-align:center;
}

</style>
</head>

<body>
        <div>   

        <div>
            
        </div>

          <div>
   
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center"><u>Login</u></h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div>
                        <input type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <br>
                    <div>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <br>
                    <div class="for"><a href="forgot-password.php">Forgot password?</a></div><br>
                    <div>
                        <center><input type="submit" name="login" value="Login"></center>
                    </div>
                    <br>
                    <div class="link login-link text-center"><center>Not yet a member? <a href="signup-user.php">Signup now</a></center></div>
                </form>
            </div>
        </div>
 
</body>

</html>
<script>
  document.querySelector("button").addEventListener("click", () => {
    const form = document.querySelector("form");

    form.submit();
  });
</script>