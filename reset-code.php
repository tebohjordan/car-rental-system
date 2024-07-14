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
  
    <link rel="stylesheet" href="style.css">
    <style>

    body{
        background-color:aqua;
    }
    form{
    border: 1px solid black;
    background-color:white;
    width:440px;
    height: 500px;
    padding-bottom: 20px;
    padding-right:10px;
    padding-left:10px;
    margin:auto;
    margin-top:100px;
    border-radius:10px;
    font-size:30px;
}

.text{
    background-color:lightgreen;
    text-align:center;
    margin-top:10px;
}
input[type="number"]{
 width: 250px;
 height: 38px;
 margin-left:80px;
 margin-top:60px;
 font-size:30px;
 text-align:center;
}

input[type="submit"]{
    margin-left:160px;
    height: 40px;  
    width: 100px; 
    margin-top:20px;
    font-size:25px;
    border-radius:10px;
}
input[type=submit]:hover{
    background-color:black;
    color:white;
}

</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="reset-code.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="text" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-reset-otp" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>