<?php 
    require_once('controllerUserData.php');
        session_start();

    $value = $_SESSION['email'];
    $_SESSION['email'] = $value;
    
    $sql="select * from usertable where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>


    <style>

*{ padding: 0;
    margin: 0;
    outline: 0;
    border: 0;
    text-decoration: none;
    list-style: none;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    color: var(--back-wcolor);
    transition: .3s ease-in-out;
}

body{
    background: url("images/carbg2.jpg");
    background-position: center;
    background-size: cover;
    overflow-x:hidden;
   
}

header .navbar {
  grid-row: 3;
        background-color: #3498db;
        color: #fff;
        padding: 10px;
        text-align: center;
        top: 0;
        position: fixed;
        width: 2030px;
        
}
.our{
    grid-row: 3;
        background-color: orange;
        color: #fff;
        padding: 10px;
        margin-top:91px;
        text-align: center;
        top: 0;
        position: fixed;
        width: 2030px;
        
}


.menu{
    width: 450px;
    display:flex;
    height: 70px;
   

}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 2px;
    font-size: 14px;

}

ul li a{
    text-decoration: none;
    color: black;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}



.circle{
    border-radius:48%;
    width:65px;
    padding-top:4px;
    margin-left:px;
    
}

.phello{
    width: 280px;
    padding-top:40 px;
    font-size:25px;
    margin-top:auto;
    height: 60px;
}

#stat{
    margin-left:2px;
}

#pro{
    margin-left:0px;
}



/* footer */
.de li a:hover{
    color:black;

}
.de .lis:hover{
    color: white;
}


svg {
    fill: black;
    width: 44px;
    height: auto;
  }
  #option:hover{
  background-color:black;
  color:white;
  }

.nn{
    width:100px;
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    margin-left:640px;

}


.nn a{
    text-decoration: none;
    font-weight: bold;

}
.men{
    display: flex;
    width: auto;
    margin-left:200px;
    padding-right:850px;
    padding-bottom:1px;
 
    padding-top:1px;
   
}
.def{
    margin-left:190px;
  

}
.home{
    fill:red;
}

footer {
    grid-row: 3;
        background-color: #3498db;
        color: #fff;
        padding: 0px;
        text-align: center;
        bottom: 0;
        position: fixed;
        width: 2050px;
}


svg {
    fill: black;
    width: 39px;
    height: auto;
    margin-top:1px;
  }
  #option:hover{
  background-color:black;
  color:white;
  }

  .conten{

    margin-top:1px;
  
  }




/* second section */

.content{
    display: flex;
    flex-wrap: wrap;
    width: 100%;

}

.container{
    display: flex;
    flex-wrap: wrap;
    width: auto;
    margin-top:25px;
    padding-bottom:50px;

}

.container{
    z-index: 5;
    overflow: hidden;
}
.navebar{
    position: fixed;
}


  /* form*/

  .box{
    display:flex;
    flex-wrap:wrap;
    top: 50%;
    left: 50%;
    box-sizing: border-box;
    background: #fff;
    border-radius: 6px;
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
    background: linear-gradient(to top, rgba(255, 251, 251, 0.8)50%,rgba(250, 246, 246, 0.8)50%);
    align-content: center;
    width: 500px;
    height: 760px;
    margin-top: 80px;
    margin-left: 10px;
    padding-top:15px;
    padding-left:10px;
}



 .imgBx{
    width: 445px;
    height: 300px;
    margin-left:25px;
    margin-top:110px;
    border-radius:25px;
    padding-left:2px;
    overflow:hidden;
  
   

}

 .imgBx img{
    max-width: 9500%;

}

.content{
    padding-top:80%;
    height:10px ;
    border:1px solid black;
  
}

 .button{
    width: 150px;
    height: 60px;
    background: #ff7200;
    border:none;
    margin-top: 1px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
    margin-left: 325px;
}

.de{
   
   display: flex;
   flex-wrap: wrap;
   border:1px solid black;

   width: 2000px;
   margin: 40px 8px 40px 8px;

}

.overview{

    margin-top:52px;
    padding-top:8px;
    position:fixed;
    background-color:orange;
    width: 100%;
    
}
.name{
    float:right;
    margin-right:20px;
    font-size:35px;
}
.info{
    margin-left:10px;
    width:80%;
    margin-top:10px;
}
.price{
    border:1px solid black;
    width:50%;
    margin-left:10px;
    font-size:20px;
    margin-bottom:px;
    border-radius:10px;
    background-color:#5BE3DB;
}

.whole{
    border:1px solid black;
    border-radius:10px;
    background-color:#5B78E3;
    padding-bottom:5px;
}
.out{
    margin-left:700px;
    color:white;
}
.nn:hover{
 background-color:orange;
 color:white;

}
    

    </style>
    
</head>

<body class="body">

<?php 
    require_once('connection.php');
        session_start();

    $value = $_SESSION['email'];
    $_SESSION['email'] = $value;
    
    $sql="select * from usertable where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    $sql2="select *from cars where AVAILABLE='Y'";
    $cars= mysqli_query($con,$sql2);
    
    // $row=mysqli_fetch_assoc($cars);
    ?>

<header>
    <div class="main">
        <div class="navbar">
            
            <div class="menu">
               
                
                    <ul>
                    <li><img src="img/profile.png" class="circle" alt="Alps"></li>
                    <li><p class="phello">HELLO! &nbsp;<?php echo $rows['name'] ?> </li>
                    <ul>
                </ul>
               <ul class="out">
                    
                    <li><button class="nn"><a href="signup-user.php">LOGOUT</a></button></li>
               </ul>
            </div>
</header>
<section>
    <main>
     <div class="our"><center> <marquee><h1>out cars view<h1></marquee><center></div>
     <br>
     <br>
     <br>
        <ul class="de">
    <?php
        while($result= mysqli_fetch_array($cars))
        {
    
            
    ?>    
    
    <li>
   
    <br>
     <br>

    <form method="POST">
    <div class="box">
        <br>
        <br>
        <br>
        <br>
       <div class="imgBx">
       <img src="images/<?php echo $result['CAR_IMG']?>" width="450px">
        </div>
        <br>
        <br>
    
        <div class="text">
            <?php $res=$result['CAR_ID'];?>
            <h1 class="name"><?php echo $result['CAR_NAME']?></h1>

            <br>
            <br>
            <hr>
            <br>
            <div class="whole">
            <div class="info">   
            <h1>Fuel Type : <a><?php echo $result['FUEL_TYPE']?></a> </h1>
            <br>
            <br>
            <h1>Model : <a><?php echo $result['MODEL']?></a> </h1>
            <br>
            <h1>Speed : <a><?php echo $result['CAPACITY']?></a> </h1>
            <br>
            <br>
            <h1>Car type: <a><?php echo $result['CAR_TYPE']?></a> </h1>
            <br>
        </div>
        
            <div class="price">
            <h2>Price:</h2>
        <br>
            <h1><a><?php echo $result['PRICE']?>.FCFA/Day</a></h1>
        </div>
            <button type="submit"  name="booknow" class="button"><a href="booking.php?id=<?php echo $res;?>">rent now</a></button>
        </div>
        <div>
    </div></form>
    <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    
    
    </li>
    <?php
        }
    
    ?>
    <?php 
    require_once('connection.php');
        

    $value = $_SESSION['email'];
    
    $sql="select * from usertable where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    
    
    ?>
            
           
    </ul>
    </div>
  </div>
  </div>
    </section>
    <hr>
    <section></section>
    </main>
    <br>
     <br>
    &nbsp;
    <footer>
    <div class="menu">
               
            <ul >
                <div class="men">
                    <div class="def">
                   <li><a href="home.php"><svg viewBox="0 0 24 24" ><g><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8"></path></g></svg><br>home
                  </a></li></div>
                  <div class="def">
                 <li><a href="cardetails.php"><svg viewBox="0 0 24 24" class="home" ><g><path d="M11.23 13.08c-.29-.21-.48-.51-.54-.86-.06-.35.02-.71.23-.99.21-.29.51-.48.86-.54.35-.06.7.02.99.23.29.21.48.51.54.86.06.35-.02.71-.23.99a1.327 1.327 0 01-1.08.56c-.28 0-.55-.08-.77-.25zM22 12c0 5.52-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2s10 4.48 10 10zm-3.97-6.03L9.8 9.8l-3.83 8.23 8.23-3.83 3.83-8.23z"></path></g></svg>Explore
                </a></li> </div>
                  <div class="def">
                   <li><a href="feedback/Feedbacks.php"><svg viewBox="0 0 24 24"><g><path d="M0 0h24v24H0z" fill="none"></path><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z"></path></g></svg>Feedback
                  </a></li></div>
                 <div class="def">
                   <li><a id="stat" href="bookinstatus.php"><svg viewBox="0 0 24 24"><g><path d="M11.9 3.75c-4.55 0-8.23 3.7-8.23 8.25H.92l3.57 3.57.04.13 3.7-3.7H5.5c0-3.54 2.87-6.42 6.42-6.42 3.54 0 6.4 2.88 6.4 6.42s-2.86 6.42-6.4 6.42c-1.78 0-3.38-.73-4.54-1.9l-1.3 1.3c1.5 1.5 3.55 2.43 5.83 2.43 4.58 0 8.28-3.7 8.28-8.25 0-4.56-3.7-8.25-8.26-8.25zM11 8.33v4.6l3.92 2.3.66-1.1-3.2-1.9v-3.9H11z"></path></g></svg>History
                 </a></li></div>
               </div>
             </ul>
           </div>

  </footer>

  <script src="./assets/js/script.js"></script>
     
</body>
</html>