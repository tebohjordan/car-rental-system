<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>


<style>
body{
    background-color: aqua;   
}

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
input[type=text],
input[type=email],
input[type=tel],
input[type=password],
input[type=radio]{
    width:500px ;
    height: 40px;
    border-radius:10px;
    padding-bottom: 2px;
    font-size:30px;
}
input[type=submit]{
    border-radius:10px;
    padding-bottom: 3px;
}
.button{
 margin:auto;
 font-size: 27px;
width:200px;

 }


.button:hover{
    background: black;
    color:white;
}
.text{
    color:black;
    text-align:center;
    font-size:50px;
}
p{
color:black;
text-align:center;
}
.gend{
    color:black;
    font-size:35px;
}
.alert{
    color:red;
    text-align:center;
}


</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text"><u>Signup</u></h2>
                    <p>It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div>
                        <input type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <br>
                    <div>
                        <input type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <br>
                    <div> 
                         <input  type="tel" name="ph" maxlength="10"
                          id="name" placeholder="Enter Your Phone Number" required>
                        
                    </div>
                    <br>
                    <div>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <br>
                    <div>
                        <input type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <br>
                    <div class="gend">
                    <tr>
                    <b><td><label>Gender :</label></td></b> <br><br>

                         <td>
                           
                            <label for="one">Male</label>&nbsp;
                             
                                <input type="radio" id="input_enabled" name="gender" value="male" style="width:210px" required>
                              </td><br>
                                  
                         <td>
                            <label for="two">Female</label>
                              <input type="radio" id="input_disabled" name="gender" value="female" style="width:170px" required>
                         </td>
                    </tr>
                    <div>
                        <br>
                        <br>
                    <div>
                       <center> <input class="button" type="submit" name="signup" value="Signup"><center>
                    </div>
                    <br>
                    
                    <div><center>Already a member? <a href="login-user.php">Login here</a></center></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>