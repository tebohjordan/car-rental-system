<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING STATUS</title>
</head>
<body>
<style>

*{
    margin: 0;
    padding: 0;

}

body{
    background-color:palegreen;
    background-position: center;
   
}
.box{
    
    position:center;    
    top: 50%;
    left: 50%;
    padding: 20px;
    box-sizing: border-box;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
    background: linear-gradient(to top, rgba(255, 251, 251, 1)70%,rgba(250, 246, 246, 1)90%);
    display: flex;
    align-content: center;
    width: 700px;
    height: 350px;
    margin-top: 100px;
    margin-left: 350px;
  
    
}


.box .content{
    margin-left: 5px;
    font-size: larger;
}

.box .button{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border:none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.utton{
    width: 200px;
    height: 40px;
   
    background: #ff7200;
    border:none;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
    margin-top: 10px;
    margin-left: 10px;
}
.utton a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}






.name{
    font-weight: bold;
    text-decoration: none;
    color: black;
    font-weight: bold;
    text-align:center;
    font-size:30px;
}
.men{
    display: flex;
    width: auto;
    margin-left:285px;
    padding-right:850px;
    padding-bottom:1px;
    padding-top:1px;
   
}
.def{
    list-style:none;
    margin-left:200px;
    padding-top:px;
	color:black;
}
.home{
    fill:red;
}

footer {
    grid-row: 3;
        background-color: #3498db;
        color: #fff;
        padding: 35px;
        margin-bottom:;
        padding-bottom:35px;
        padding-top:5px;
        text-align: center;
        bottom: 0;
        position: fixed;
        width: 2050px;
}




svg {
    fill: black;
    width: 39px;
    height: auto;
 
    margin-right:10px;
    
  }
  .stat{
	color:black;
  }
  .menu{
    width: 420px;
    float: ;
    height: 30px;
    font-size:18px;
    padding-top:5px;
    margin-top:3px;
  }
  




</style>



<?php
    require_once('connection.php');
    session_start();
    $email = $_SESSION['email'];

    $sql="select * from booking where EMAIL='$email' order by BOOK_ID DESC LIMIT 1";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    if($rows==null){
        echo '<script>alert("THERE ARE NO BOOKING DETAILS")</script>';
        echo '<script> window.location.href = "cardetails.php";</script>';
    }
    else{
    $sql2="select * from usertable where EMAIL='$email'";
    $name2 = mysqli_query($con,$sql2);
    $rows2=mysqli_fetch_assoc($name2);
    $car_id=$rows['CAR_ID'];
    $sql3="select * from cars where CAR_ID='$car_id'";
    $name3 = mysqli_query($con,$sql3);
    $rows3=mysqli_fetch_assoc($name3);





?>
   <ul>
   <li class="name">HELLO! <?php echo $rows2['name']?></li>




</ul><br>
<hr>

    <div class="box">
        <hr>
         <div class="content">
             <h1>CAR NAME : <?php echo $rows3['CAR_NAME']?></h1><br>
             <h1>CAR MODEL : <?php echo $rows3['MODEL']?></h1><br>
             <h1>NO OF DAYS : <?php echo $rows['DURATION']?></h1><br>
             <h1>RETURN DATE : <?php echo $rows['RETURN_DATE']?></h1><br>
             <h1>BOOKING STATUS : <?php echo $rows['BOOK_STATUS']?></h1><br>
             
         </div>
     </div>



<?php }
?>
    <footer>
    <div class="menu">
               
    <ul >
                <div class="men">
                    <div class="def">
                   <li><a href="home.php"><svg viewBox="0 0 24 24" ><g><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8"></path></g></svg>
                  </a><br>Home</li></div>
                  <div class="def">
                 <li><a href="cardetails.php"><svg viewBox="0 0 24 24"  ><g><path d="M11.23 13.08c-.29-.21-.48-.51-.54-.86-.06-.35.02-.71.23-.99.21-.29.51-.48.86-.54.35-.06.7.02.99.23.29.21.48.51.54.86.06.35-.02.71-.23.99a1.327 1.327 0 01-1.08.56c-.28 0-.55-.08-.77-.25zM22 12c0 5.52-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2s10 4.48 10 10zm-3.97-6.03L9.8 9.8l-3.83 8.23 8.23-3.83 3.83-8.23z"></path></g></svg>
                </a><br>Explore</li> </div>
                  <div class="def">
                   <li><a href="feedback/Feedbacks.php"><svg viewBox="0 0 24 24"><g><path d="M0 0h24v24H0z" fill="none"></path><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z"></path></g></svg>
                  </a><br>Feedback</li></div>
                 <div class="def">
                   <li><a id="stat" href="bookinstatus.php"><svg viewBox="0 0 24 24" class="home"><g><path d="M11.9 3.75c-4.55 0-8.23 3.7-8.23 8.25H.92l3.57 3.57.04.13 3.7-3.7H5.5c0-3.54 2.87-6.42 6.42-6.42 3.54 0 6.4 2.88 6.4 6.42s-2.86 6.42-6.4 6.42c-1.78 0-3.38-.73-4.54-1.9l-1.3 1.3c1.5 1.5 3.55 2.43 5.83 2.43 4.58 0 8.28-3.7 8.28-8.25 0-4.56-3.7-8.25-8.26-8.25zM11 8.33v4.6l3.92 2.3.66-1.1-3.2-1.9v-3.9H11z"></path></g></svg>
                 </a><br>History</li></div>
               </div>
             </ul>
           </div>


  </footer>
    
</body>
</html>