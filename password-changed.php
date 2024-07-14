<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login-user.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    <style>

body{
        background-color:aqua;
    }
    form{
  
    background-color:white;
    width:510px;
    padding-bottom: 20px;
    margin-top:auto;
    padding-right:10px;
    padding-left:10px;
    border-radius:10px;
    text-align:center;
    margin-left:1px;
    padding-top:20px;
    
}
.container{ 

    border:1px solid black;
    width:530px; 
    margin:auto;
    font-size:50px;
    border-radius:10px;
    margin-top:100px;
}
input[type="submit"]{
    height: 40px;  
    width: 170px;  
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
    padding-bottom:20px;
} 
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="text">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="login-user.php" method="POST">
                    <div class="form-group">
                        <input  type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>