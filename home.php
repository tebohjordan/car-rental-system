<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'  "; 
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
            if($code == 'code'){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Services</title>

    <link rel="stylesheet" href="css/home.css" />
    <style>

*{
  padding: 0;
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
 
    background-position: center;
    border: 1px solid black;
    display:flex ;
      justify-content: center;
      align-items: center;
      
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
        display:flex;
        
}

.icon{
  height: 99px;
  border: 1px solid black;
  display:content;
  width: 199px;
  margin-left:500px;
  border-radius:10px;
  overflow: hidden;
  
}


.menu{
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
    margin-top: 2px;


}

ul li a{
    text-decoration: none;
    color: black;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}

ul li a:hover{
    color:orange;

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
    background: linear-gradient(to top, rgba(255, 251, 251, 0.8)50%,rgba(250, 246, 246, 0.8)50%);
    display: flex;
    align-content: center;
    width: 500px;
    height: 200px;
    margin-top: 100px;
    margin-left: 350px;
    
}



.box .imgBx img{
    max-width: 150%;
    overflow: hidden;
 
}

.box .content{
    padding-left: 100px;
    overflow: hidden;
 

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
    color:white;
    transition: 0.4s ease;
}

.utton{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border:none;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}




.de{
    float: left;
    clear: left;
    display: block;
 

}

.circle{
    float: left;
    border-radius:48%;
    width:80px;
    padding-top:px;
    margin-left:0px;

}

.phello{
    width: 210px;
    font-size:25px;
    margin-top:auto;
    height: 60px;
   
    

}


#stat{
    margin-left:2px;
}

#pro{
    margin: left 8px;
}



/* footer */

footer {
  grid-row: 3;
        background-color: #3498db;
        color: #fff;
        padding: 0px;
        text-align: center;
        bottom: 0;
        position: fixed;
        width: 2030px;
        
}



  svg {
    width: 35px;
    height: auto;
  }

.de li a:hover{
    color:black;

}
.de .lis:hover{
    color: white;
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

  
  
button{
    width:100px;
    border:none;
    height: 60px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.4s ease;
    margin-left:790px;

}
button:hover{
 background-color:black;
 color:white;

}


.nn a{
    text-decoration: none;
   
    font-weight: bold;
}
.men{
    display: flex;
    width: auto;
    margin-left:280px;
    padding-right:850px;
    padding-bottom:20px;
    padding-top:1px;
   
}
.def{
    margin-left:160px;
    padding-top:1px;
}
.home{
    fill:red;
}



/* second section */

.content{
    display: flex;
    flex-wrap: wrap;
    border:1px solid black;
    width:2000px;
    text-align:justify;
    background-color:#ECF0F1 ;

}

.container{
    display: flex;
    flex-wrap: wrap;
    width: auto;
    margin-top:100px;
    padding-bottom:50px;
    overflow: hidden;
    width:auto;
    
}
.about-container{
  font-size:30px;
}



.blog-card {
  border-radius: 90px;
  border: 1px solid var(--white);
  box-shadow: 2px;
  overflow: hidden;

 
}

.blog-card .banner {
  width: 570px;
  overflow: hidden;
  
 

}



.blog-card .banner img {
  height: 100%;
  object-fit: cover;
  border:1px solid black;
  border-radius:10px;
  overflow: hidden;
 
 
}

.blog-card .badge {
  position: absolute;
  bottom: 20px;
  left: 20px;
  height: 15px;
  width: 92px;
}

.blog-card  { 
padding: 10px; 
margin-bottom: 20px; 
color: inherit; 
font-size:30px;
overflow: hidden;
 
 

}
.card-meta {
  display: flex;
  justify-content: space-between;
  align-items: center;
  overflow: hidden;
 

}
.img{
    border-radius:50%;
    overflow: hidden;
 
 z-index: 5;
}


/*about*/


.about-container {
  padding: 50px;
}

h1 {
  font-size: 2.5em;
  margin-bottom: 20px;
}

p {
  font-size: 1.2em;
  line-height: 1.5em;
  margin-bottom: 20px;
}

h2 {
  font-size: 1.8em;
  margin-bottom: 10px;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}


.bot{
    margin-left:50px;
}
.text{
  font-size:30px;
  text-align:justify;
}
.call{
  text-align:justify;
}
.bb{
  color:black;
  font-size:20px;
}
.bb:hover{
  color:white
}

    </style>    
</head>

<body class="body">
<div class="top">
 <header>
    <div class="main">
        <div class="navbar">
   
      
      <ul class="im">
       
          <li><img src="img/profile.png" class="circle" alt="Alps"></li>
          <li><p class="phello">HELLO! &nbsp;<br><?php echo $fetch_info['name'] ?></li>
      
</ul>
            
            <div class="icon">
                <h2 class="logo">
                   <img src="./assets/images/rental logo.jpg" alt="car logo" width="199px" height="100px">
               </h2>
            </div>
            <button class="nn"> <a  class ="bb" href="signup-user.php">LOGOUT</a></button>
           
          </div> 
    </div>
  </header>
     <br>
     <br>
    
        <div class="container">
          <ul>
            <li>
              <div class="blog-card">

                <figure class="banner">

                  <a href="#">
                    <img src="./assets/images/blog-1.jpg" alt="" loading=""
                      class="w-100">
                  </a>

                  <a href="#about" class="bot">About Us</a>

                </figure>

            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">

                  <a href="#">
                    <img src="./assets/images/blog-2.jpg" alt="What cars are most vulnerable" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="https://api.whatsapp.com/send?phone=+237676853002"  class="bot">Repair</a>

                </figure>
              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">

                  <a href="#cardetails.php">
                    <img src="./assets/images/blog-3.jpg" alt="Statistics showed which average age" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="cardetails.php" >    &nbsp; Cars</a>

                </figure>

              </div>
            </li>
    </div>
 <div class="middle" id="about">
    <div class="content">
    <div class="about-container">
    <h1 >About Our Car Rental Service</h1>
    <p>Welcome to our car rental service, where we strive to provide you with a seamless and enjoyable rental experience. We understand the importance of reliable transportation, whether you're traveling for business or leisure. Our mission is to offer a wide selection of vehicles, exceptional customer service, and competitive rates to meet your diverse needs.</p>
    <h2>Our Fleet</h2>
    <figure class="banner">

                  <a href="#">
                    <img src="./assets/images/blog-3.jpg" alt="Statistics showed which average age" loading="lazy"
                      class="w-100">
                  </a>

                </figure>
    <p>Our fleet consists of a wide range of vehicles to cater to various preferences and requirements. From compact cars for city driving to spacious SUVs for family vacations, we have the perfect vehicle for your journey. All our cars are meticulously maintained and regularly inspected to ensure your safety and comfort on the road.</p>
    
    <h2>Why Choose Us?</h2>
    <ul class="text">
    <figure class="banner">

<a href="#">
  <img src="./assets/images/blog-2.jpg" alt="What cars are most vulnerable" loading="lazy"
    class="w-100">
 </a>

 

 </figure>
       <ul class="call">
      <li>Wide selection of well-maintained vehicles</li>  
      <li>Competitive with a transparent pricing</li>
      <li>Convenient locations for easy pickup and drop-off</li>
      <li>Commitment to <br>your safety and satisfaction</li>
    </ul>
    </ul>
    <p>We invite you to experience the difference with our car rental service. Book your next rental with us and enjoy a hassle-free and memorable journey.</p>

    &nbsp;
    &nbsp;
    &nbsp; 
    &nbsp; 
    &nbsp;
     &nbsp;
     <hr>
    <div>
  
  <center><p class="copyright">
          &copy; 2024 <a href="#">car rental service</a>. All Rights Reserved
        </p></center>

    </div>
  </div>
  
 </section>
 </main>
    <footer>
    <div class="menu">
               
            <ul >
                <div class="men">
                    <div class="def">
                   <li><a href="home.php"><svg viewBox="0 0 24 24" class="home"><g><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8"></path></g></svg><br>home
                  </a></li></div>
                  <div class="def">
                 <li><a href="cardetails.php"><svg viewBox="0 0 24 24"  ><g><path d="M11.23 13.08c-.29-.21-.48-.51-.54-.86-.06-.35.02-.71.23-.99.21-.29.51-.48.86-.54.35-.06.7.02.99.23.29.21.48.51.54.86.06.35-.02.71-.23.99a1.327 1.327 0 01-1.08.56c-.28 0-.55-.08-.77-.25zM22 12c0 5.52-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2s10 4.48 10 10zm-3.97-6.03L9.8 9.8l-3.83 8.23 8.23-3.83 3.83-8.23z"></path></g></svg>Explore
                </a></li> </div>
                  <div class="def">
                   <center><li><a href="feedback/Feedbacks.php"><svg viewBox="0 0 24 24"><g><path d="M0 0h24v24H0z" fill="none"></path><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z"></path></g></svg>Feedback
                  </a></li></div>
                 <div class="def">
                   <li><a id="stat" href="bookinstatus.php"><svg viewBox="0 0 24 24"><g><path d="M11.9 3.75c-4.55 0-8.23 3.7-8.23 8.25H.92l3.57 3.57.04.13 3.7-3.7H5.5c0-3.54 2.87-6.42 6.42-6.42 3.54 0 6.4 2.88 6.4 6.42s-2.86 6.42-6.4 6.42c-1.78 0-3.38-.73-4.54-1.9l-1.3 1.3c1.5 1.5 3.55 2.43 5.83 2.43 4.58 0 8.28-3.7 8.28-8.25 0-4.56-3.7-8.25-8.26-8.25zM11 8.33v4.6l3.92 2.3.66-1.1-3.2-1.9v-3.9H11z"></path></g></svg>History
                 </a></li></div>
               </div>
             </ul>
           </div>

  </footer>
</div>
     
</body>
</html>