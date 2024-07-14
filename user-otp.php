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
    <title>Code Verification</title>
    
    <style>
   
form{
    background-color: white;
    width: 500px;
    font-size: 30px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.3);
    color: #fff;
    margin-top:70px;
    padding-bottom:20px;
    padding-top:20px;
    padding: 20px;
    margin:auto;
    padding-right:30px ;

}
div,h2{
    color:black;
}

input[type=submit]:hover{
    background-color:black;
    color:white;
}

input[type=number]{
    width: 400px;
  height: 50px;
    border-radius:10px;
    margin-left:20px;
    font-size:40px;
}

input[type=submit]{
    width:109px ;
    height: 42px;
    border-radius:10px;
    padding-bottom: 3px;
    font-size:30px;
}
.alert-success{
    background-color:palegreen;
    width: 500px;
    text-align:center;
}
.alert{
    color:red;
    text-align:center;
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="user-otp.php" method="POST" autocomplete="off">
                    <center><u><h2>Code Verification</h2></u></center>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
                    <br>
                    <div >
                        <input type="number" name="otp" placeholder="Enter verification code" required>
                    </div>
                    <br>
                    <div >
                        <center><input type="submit" name="check" value="Submit"></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>