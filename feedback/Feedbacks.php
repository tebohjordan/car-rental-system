<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <script src="js/bootstrap.min.js"></script>
		  <script src="js/jquery-3.3.1.min.js"></script>

    <style>

*{
    margin: 0;
    padding: 0;

}

body{
    background: url("images/carbg2.jpg");
    background-position: center;
    background-size: cover;
    overflow-x:hidden;
}





/* footer */



 a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}
.men{
    display: flex;
    width: auto;
    margin-left:190px;
    padding-right:850px;
    padding-bottom:1px;
 
    padding-top:1px;
   
}
.def{
    list-style:none;
    margin-left:250px;
    padding-top:1px;
	padding:2px;
	color:black;
}
.home{
    fill:red;
}

footer {
    grid-row: 3;
        background-color: #3498db;
        color: #fff;
        padding: 3px;
        text-align: center;
        bottom: 0;
        position: fixed;
        width: 2050px;
}


svg {
    fill: black;
    width: 41px;
    height: auto;
    margin-top:1px;
  }
  .stat{
	color:black;
  }



.btn{
    width: 150px;
    background: orange;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
    margin-left:70px;
    margin-top:25px;
    border-radius:5px;
 }
 .form{

     width:700px;
     margin-left:50%;
     margin-top:20px;
 
 }
 .feed{
    
     display:flex;
 }
 .fed{
     border-right:1px solid black;
     width:600px;
	 margin-left:300px;
	 
 }
 
 h4{
     margin-left:60px;
     font-size:40px;
 }
 input[type=text],
 input[type=email]{
     margin-left:60px;
     width: 470px; 
     height: 80px;
     padding-left:60px;
	 font-size:40px;
     border:none;
     border-bottom:1px solid black;
 }
 input[type=radio]{
width:18px ;
height: 25px;
margin-left:15px;
 }
.radio-inline{
    font-size:40px;  
}
 .how{
    font-size:40px;  
 }
 p{
    margin-top: 10px;
 }
 textarea{
     width: 710px; ;
     height: 300px;
     margin-left:8%;
	 font-size:40px;
     
 }
 .submit{
     margin-left:100px;
     background-color:orange;
     width: 150px; 
     height: 50px;
     border-radius:10px;
	 cursor: pointer;
 }

 section{
	border:1px solid black;
	margin-top:0px;	
	padding-bottom:30px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
 }
 .text{
	display:justify;
	font-size:30px;
 }




    

    </style>
    
</head>

<body class="body">

    <body>
        <?php
        require_once('../connection.php');
        session_start();
        $email = $_SESSION['email'];
        
        if(isset($_POST['submit'])){
            $comment=mysqli_real_escape_string($con,$_POST['comment']);
            $exp=mysqli_real_escape_string($con,$_POST['exp']);
            $sql="insert into  feedback (EXPIRIENCE,EMAIL,COMMENT) values('$exp','$email','$comment')";
            $result = mysqli_query($con,$sql);
            echo '<script>alert("Feedback Sent Successfully!!THANK YOU!!")</script>';
            header("Location: ../home.php");
        
            
        }
        
        $sql = "SELECT * FROM usertable WHERE email = '$email'";
        $run_Sql = mysqli_query($con, $sql);
        if($run_Sql){
            $fetch_info = mysqli_fetch_assoc($run_Sql);
        
        }
        
        
        
        ?>
        
        <section>
        
        <br><br><br>
                
                <div class="feed">
                    <div class="fed">
                       <h2  class="contact-us" style="font-size:72px; color:#000;"><strong style="font-size:5cm; color:orange;">F</strong>eedback.</h2>
					   <hr>
					   <br>
					   <ul class="text">
					  <li> Thank you for taking the time to provide us with your feedback. Your input is valuable to us and helps us improve our products and services.</li>
                        <br>

                      <li> We appreciate you sharing your thoughts and experiences with us. We will carefully consider your feedback and use it to make improvements in the future.</li>

                     <br>
                      <li> If you have any further questions or concerns, please do not hesitate to contact us.</li>
	                 </ul>
					   
                    </div>
                    
                        <form method="POST">
                        <div>
                                <label class="how">How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="exp" id="radio_experience" value="bad" required="required" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="exp" id="radio_experience" value="average" required="required">
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="exp" id="radio_experience" value="good" required="required">
                                        Good 
                                    </label>
                                </p><br>
                        <label><h4>Name:</h4> </label><input type="text" name="name" value="<?php echo $fetch_info['name'] ?>" size="20"  class=" form-control" placeholder required />
                        <label><h4>Email:</h4></label> <input type="email" name="email" value="<?php echo $fetch_info['email'] ?>"   required="required" size="20"  class=" form-control"  maxlength="15"/>
                        <div class="comment">
                        <h4>Comments:</h4><textarea class="form-control"   name="comment" rows="6"  placeholder="Message"  required></textarea>
	                    </div>
                        <br>
                        <br>
                        <br>
                        <input type="submit" class="submit" id="btn" style="text-shadow:0 0 3px #000000; font-size:24px;" value="SUBMIT" name="submit">
                        
                        <form>
                    
                </div>
            
        
        
        </div>
    </section>
    &nbsp;
    <footer>
    <div class="menu">
               
            <ul >
                <div class="men">
                    <div class="def">
                   <li><a href="../home.php"><svg viewBox="0 0 24 24" ><g><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8"></path></g></svg>
                  </a><br>Home</li></div>
                  <div class="def">
                 <li><a href="../cardetails.php"><svg viewBox="0 0 24 24"  ><g><path d="M11.23 13.08c-.29-.21-.48-.51-.54-.86-.06-.35.02-.71.23-.99.21-.29.51-.48.86-.54.35-.06.7.02.99.23.29.21.48.51.54.86.06.35-.02.71-.23.99a1.327 1.327 0 01-1.08.56c-.28 0-.55-.08-.77-.25zM22 12c0 5.52-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2s10 4.48 10 10zm-3.97-6.03L9.8 9.8l-3.83 8.23 8.23-3.83 3.83-8.23z"></path></g></svg>
                </a><br>Explore</li> </div>
                  <div class="def">
                   <li><a href="../feedback/Feedbacks.php"><svg viewBox="0 0 24 24"  class="home"><g><path d="M0 0h24v24H0z" fill="none"></path><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z"></path></g></svg>
                  </a><br>Feedback</li></div>
                 <div class="def">
                   <li><a id="stat" href="../bookinstatus.php"><svg viewBox="0 0 24 24"><g><path d="M11.9 3.75c-4.55 0-8.23 3.7-8.23 8.25H.92l3.57 3.57.04.13 3.7-3.7H5.5c0-3.54 2.87-6.42 6.42-6.42 3.54 0 6.4 2.88 6.4 6.42s-2.86 6.42-6.4 6.42c-1.78 0-3.38-.73-4.54-1.9l-1.3 1.3c1.5 1.5 3.55 2.43 5.83 2.43 4.58 0 8.28-3.7 8.28-8.25 0-4.56-3.7-8.25-8.26-8.25zM11 8.33v4.6l3.92 2.3.66-1.1-3.2-1.9v-3.9H11z"></path></g></svg>
                 </a><br>History</li></div>
               </div>
             </ul>
           </div>

  </footer>

  
     
</body>
</html>