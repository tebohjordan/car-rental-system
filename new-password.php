<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    
    <link rel="stylesheet" href="style.css">
    <style>
body{
        background-color:aqua;
    }


 form{
    border: 1px solid black;
    background-color:white;
    width:390px;
    height: 500px;;
    padding-bottom: 20px;
    margin-bottom:auto;
    padding-right:10px;
    padding-left:10px;
    margin-top:;
    border-radius:10px;
    margin:auto;
}
input[type="password"]{
 width: 360px;
 height: 40px;
 margin-left:5px;
 margin-top:30px;
 font-size:25px;
 
}

input[type="submit"]{
    margin-left:130px;
    height: 30px;  
    width: 120px; 
    margin-top:40px;
    font-size:20px;
    border-radius:10px;
}
input[type=submit]:hover{
    background-color:black;
    color:white;
}
.text{
    background-color:lightgreen;
    text-align:center;
    font-size:30px;
    margin-top:15px;
}

.new{
    text-align:center;
    font-size:30px;
}
</style>
</head>
<body>
    <div class="container">
        <div class=>
            <div>
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="new"> Set Your New Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="text">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="text">
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
                        <input  type="password" name="password" placeholder="Create new password" required>
                    </div>
                    <div>
                        <input  type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div>
                        <input class="form-control button" type="submit" name="change-password" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>