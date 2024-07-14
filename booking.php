<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR BOOKING</title>
    <!-- <link  rel="stylesheet" href=""> -->
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>



</head>
<body>
<style>
*{
    margin: 0;
    padding: 0;
    font-size:25px;

}

body{
    width: 90%;
    background-color:white;

    
    
}

div.main{
    width: 400px;
    margin: 100px auto 0px auto;
}
.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border:none;
    margin-top: 30px;
    margin-left: 70px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.btnn:hover{
    background: black;
    color:white;
}

.btnn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

h2{
    text-align: center;
    padding: 20px;
    font-family: sans-serif;
    color:black;

}
div.register{
    background-color:#ECF0F1;
    width: 460px;
    font-size: 18px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
    color: #fff;
 

}

form#register{
    margin: 40px;
 

}

label{
    font-family: sans-serif;
    font-size: 18px;
    font-style: italic;
    color:black;
}

input#name{
    width:350px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}

input#dfield{
    width:350px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}

input#datefield{
    width:350px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}

*{
    margin: 0;
    padding: 0;

}
.hai{
    width: 100%;
    height: 0px;
    
 
    
    
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
    background-color:palegreen;
    margin-top:60px;
   
    
  
}
.navbar{
    width: 2022px;
    height: 85px;
    margin-top:0px; 
    padding-top:20px;
    background-color:palegreen;
    top:0;
    position:fixed;
  
}


.icon{
    width:200px;
    float: left;
    height : 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float:left;
    padding-top: 10px;

}
.menu{
    width: 400px;
    float: left;
    height: 70px;

}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
}

ul li{
    list-style: none;
    margin-left: 80px;
    margin-top: 20px;
    font-size: 14px;
    color: black;

}

ul li a{
    text-decoration: none;
    color:white;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}



.nn{
    width:100px;
    background: #ff7200;

    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;
    

}
.nn:hover{
    background-color:black;
    
}

.nn a{
    text-decoration: none;

    font-weight: bold;
    
}

.circle{
    border-radius:48%;
    width:65px;
    margin-left: 1200px;
}

.phello{
    width: 200px;
    
}




</style>


<?php 

    require_once('connection.php');
    session_start();
 
    $carid=$_GET['id'];
    
    $sql="select *from cars where CAR_ID='$carid'";
    $cname = mysqli_query($con,$sql);
    $email = mysqli_fetch_assoc($cname);
    
    $value = $_SESSION['email'];
    $sql="select * from usertable where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    $uemail=$rows['email'];
    $carprice=$email['PRICE'];
    if(isset($_POST['book'])){
       
        
        $bdate=date('d-m-Y',strtotime($_POST['date']));;
        $dur=mysqli_real_escape_string($con,$_POST['dur']);
        $phno=mysqli_real_escape_string($con,$_POST['ph']);
        $des=mysqli_real_escape_string($con,$_POST['des']);
       

        function calculateReturnDate($bdate, $dur) {
            // Convert the start date to a Unix timestamp
            $startTimestamp = strtotime($bdate);
          
            // Calculate the return date timestamp by adding the duration in seconds
            $returnTimestamp = $startTimestamp + ($dur * 24 * 60 * 60);
          
            // Convert the return date timestamp back to a date string
            $rdate = date('y-m-d', $returnTimestamp);
          
            return $rdate;
          }
          
          $rdate = calculateReturnDate($bdate, $dur);
        
         
        if(empty($bdate)|| empty($dur)|| empty($phno)|| empty($des)){
            echo '<script>alert("please fill the place")</script>';

        }
        else{
            if($bdate<$rdate){
            $price=($dur*$carprice);
            $sql="insert into booking (CAR_ID,EMAIL,BOOK_PLACE,BOOK_DATE,DURATION,PHONE_NUMBER,DESTINATION,PRICE,RETURN_DATE) values($carid,'$uemail','$bplace','$bdate',$dur,$phno,'$des',$price,'$rdate')";
            $result = mysqli_query($con,$sql);
            
            if($result){
                
                $_SESSION['email'] =$uemail;
                header("Location: payment.php");
            }
            else{
                echo '<script>alert("please check the connection")</script>';
            }
        }
       
    
        }
    }
    
    ?>
    <?php



?>



    <header>
       <div class="hai">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">Car Booking</h2>
                </div>
                <div class="menu" >
                    <ul>
                        <li><button class="nn"><a href="home.php">home</a></button></li>
                        <li><img src="img/profile.png" class="circle" alt="Alps"></li>
                    <li><p class="phello">happy deal! &nbsp;<a id="pname"><?php echo $rows['name']?></a></p></li>

                    
                    </ul>
                </div>
            </div>
       </div>
</header>
<br>
                
                
         <div class="main"> 
        
        <div class="register">
            <h2>BOOKING</h2>
        <form id="register" method="POST"  >
            <h2>CAR NAME : <?php echo "".$email['CAR_NAME']?></h2>
            

            <label>BOOKING DATE : </label>
            <br>
            <input type ="date" name="date"
            id="datefield" min='1899-01-01' max='2000-13-13'  placeholder="ENTER THE DATE FOR BOOKING">

            <br><br>

            <label>DURATION : </label>
            <br>
            <input type ="number" name="dur" min="1" max="30" 
            id="name" placeholder="Enter Rent Period (in days)">
            <br><br>

            <label>PHONE NUMBER : </label>
            <br>
            <input type="tel" name="ph" maxlength="9"
            id="name" placeholder="Enter Your Phone Number">
            <br><br>
            
            <label>DESTINATION : </label>
            <br>
            <input type="text" name="des"
            id="name" placeholder="Enter Your Destination">
            <br><br>

            
           
            <input type="submit"  class="btnn" value="BOOK" name="book" >

            
            
        </form>
        </div>
    </div>
    
   
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; 
        var yyyy = today.getFullYear();
        if (dd < 10) {
             dd = '0' + dd
        }
        if (mm < 10) {
              mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("datefield").setAttribute("min", today);
        document.getElementById("datefield").setAttribute("max", today);


    </script>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; 
        var yyyy = today.getFullYear();
        if (dd < 10) {
             dd = '0' + dd
        }
        if (mm < 10) {
              mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("dfield").setAttribute("min", today);
        


    </script>
    
        <script src="main.js"></script>
     
    
    
    
    
</body>
</html>