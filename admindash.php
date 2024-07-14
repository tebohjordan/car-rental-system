<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
</head>
<body>
<style>
*{
    margin: 0;
    padding: 0;
    font-size:30px;

}
.hai{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%),url("../images/carbg2.jpg");
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
    position:fixed;

}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
  
}
.navbar{
    width: 2700px;
    height: 75px;
    background-color:aqua;
    padding-left:00px;
    padding-bottom:50px;
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
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;

}

ul li a{
    text-decoration: none;
    color: black;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}

.content-table{
   border-collapse: collapse;
    font-size: 0.9em;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow:0 0  20px rgba(0,0,0,0.15);
    margin-left : 380px ;
    width: 900px;
    height: 250px;
}
.content-table thead tr{
    background-color: orange;
    color: white;
    text-align: left;
  
}

.content-table th,
.content-table td{
    padding: 12px 15px;
    padding-left:70px;
    padding-right:100px;


}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;

}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid orange;
    width: 500px;
}

.content-table thead .active-row{
    font-weight:  bold;
    color: orange;
    font-size:30px;
    
}
.content-table{
    margin-top: 140px;
    
}



.header{
    margin-top: 40px;
    text-align:center;
    font-size:50px;
}


.nn{
    width:160px;
    background: #ff7200; 
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;
    margin-left:650px

}
.nn:hover{
    background-color:white;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
    
}
.fed{
    background-color:lightgreen;
    border:1px solid black;
    position:fixed;
    width: 2200px;
    

}
.text{
    overflow:hidden;
}
</style>

<?php

require_once('connection.php');
$query="select *from feedback";
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>





    <div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">CAR RENTAL SERVICES</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="adminvehicle.php">VEHICLE MANAGEMENT</a></li>
                    <li><a href="adminusers.php">USERS</a></li>
                    <li><a href="admindash.php">FEEDBACKS</a></li>
                    
                    <li><a href="adminbook.php">BOOKING REQUEST</a></li>
                  <li> <button class="nn"><a href="adminlogin.php">LOGOUT</a></button></li>
                </ul>
            </div> 
            
          
        </div>
        <div class="fed">
            <h1 class="header">FEEDBACKS</h1>
</div>
<div>
                <div class="text">
                    <table class="content-table">
                <thead>
                    <tr>
                        <th>FEEDBACK_ID</th> 
                        <th>EMAIL</th>
                        <th>COMMENT</th>
                        <th>EXPIRIENCE</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    <td><?php echo $res['FED_ID'];?></php></td>
                    <td><?php echo $res['EMAIL'];?></php></td>
                    <td><?php echo $res['COMMENT'];?></php></td>
                    <td><?php echo $res['EXPIRIENCE'];?></php></td>
                </tr>
               <?php } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
     
</body>
</html>