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
    
}
.hai{
    width: 100%;
   
    background-position: center;
    background-size: cover;
    height: 109vh;
    font-size:25px; 
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
    width: 2020px;
    height: 75px;
    background-color:aqua;
    padding-left:00px;
    padding-bottom:50px;
    position:fixed;
 
}

.icon{
    width:200px;
    float: left;
    height : 70px;
    font-size:50px;

}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float:left;
    padding-top: 10px;
    font-size:35px;


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
    font-size: 30px;

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
    
    border-radius: 1px solid black;
    overflow: hidden;
    box-shadow:0 0  20px rgba(0,0,0,0.15);

    margin-top: 25px;
    width: 1000px;
    height: 300px;
}
.content-table thead tr{
 
    background-color: orange;
    color: white;
    text-align: left;
}

.content-table th,
.content-table td{
    padding: 20px 21px;
   
 


}


.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
    padding-left: 20px;
}
.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;

}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid orange;
}

.content-table thead .active-row{
    font-weight:  bold;
    color: orange;
}

.nn{
    width:160px;
    background: #ff7200; 
    border:none;
    height: 40px;
    font-size: 30px;
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

.but a{
    text-decoration: none;
    color: black;
    
}
.text{

    float:right;
    overflow:hidden;
    margin-top:216px;
    
}
.fed{
    background-color:lightgreen;
    border:1px solid black;
    width: 2020px;
    height: 90px;
    position:fixed;
    margin-top:126px;
    
 
   
}
.header{
    margin-top: 30px;
    text-align:center;
}

button{
    height:35px;
    width: 120px;
    font-size:20px;
    border-radius:10px;

}
</style>
<?php

require_once('connection.php');
$query="SELECT *from booking ORDER BY BOOK_ID DESC";    
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>

<div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">CAR RENTAL SERVICES</h2>
            </div>
            <div class="menu">
                <ul class="size">
                    <li><a href="adminvehicle.php">VEHICLE MANAGEMENT</a></li>
                    <li><a href="adminusers.php">USERS</a></li>
                    <li><a href="admindash.php">FEEDBACKS</a></li>
                    
                    <li><a href="adminbook.php">BOOKING REQUEST</a></li>
                  <li> <button class="nn"><a href="adminlogin.php">LOGOUT</a></button></li>
                </ul>
            </div>
         </div>


        <div class="fed">
            <h1 class="header">BOOKINGS</h1>
</div>
                
                <div class="text">
                    <table class="content-table">
                <thead>
                    <tr>
                        <th>CAR ID</th>
                        <th>EMAIL</th>
                        <th>BOOK PLACE</th>
                        <th>BOOK DATE</th>
                        <th>DURATION</th>
                        <th>PHONE NUMBER</th>
                        <th>DESTINATION</th>
                        <th>RETURN DATE</th>
                        <th>BOOKING STATUS</th>
                    
                        <th>APPROVE</th>
                        <th>CAR RETURNED</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                
                
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    
                    <td><?php echo $res['CAR_ID'];?></php></td>
                    <td><?php echo $res['EMAIL'];?></php></td>
                    <td><?php echo $res['BOOK_PLACE'];?></php></td>
                    <td><?php echo $res['BOOK_DATE'];?></php></td>
                    <td><?php echo $res['DURATION'];?></php></td>
                    <td><?php echo $res['PHONE_NUMBER'];?></php></td>
                    <td><?php echo $res['DESTINATION'];?></php></td>
                    <td><?php echo $res['RETURN_DATE'];?></php></td>
                    <td><?php echo $res['BOOK_STATUS'];?></php></td>
                    <td><button type="submit"  class="but"  name="approve"><a href="approve.php?id=<?php echo $res['BOOK_ID']?>">APPROVE</a></button></td>
                    <td><button type="submit" class="but" name="approve"><a href="adminreturn.php?id=<?php echo $res['CAR_ID']?>&bookid=<?php echo $res['BOOK_ID']?>">RETURNED</a></button></td>
                </tr>
               <?php } ?>
                </tbody>
                </table>
                
                </div>
            </div>
        </div>
</body>
</html>