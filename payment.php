<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <script src="main.js"></script>
   
    <title>Payment Form</title>
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
@import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background:orange url("images/paym.jpg") center/cover;
  overflow: hidden;
  font-size:20px;
}

.card {
  margin-left: -500px;
  background: linear-gradient(
    to bottom right,
    rgba(255, 255, 255, 0.2),
    rgba(255, 255, 255, 0.05)
  );
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.5), -1px -1px 2px #aaa,
    1px 1px 2px #555;
  backdrop-filter: blur(0.8rem);
  padding: 1.5rem;
  border-radius: 1rem;
  animation: 1s cubic-bezier(0.16, 1, 0.3, 1) cardEnter;
}

.card__row {

  justify-content: space-between;
  padding-bottom: 2rem;
}

.card__title {
  font-weight: 600;
  font-size: 2.5rem;
  color: black;
  font-weight: 500;
  margin: 1rem 0 1.5rem;
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
}

.card__col {
  padding-right: 2rem;
}

.card__input {
  background: none;
  border: none;
  border-bottom: dashed 0.2rem rgba(255, 255, 255, 0.15);
  font-size: 1.2rem;
  color: #fff;
  text-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);
}
.card__input--large {
  font-size: 2rem;
}

.card__input::placeholder {
  color: rgba(255, 255, 255, 1);
  text-shadow: none;
}

.card__input:focus {
  outline: none;
  border-color: rgba(255, 255, 255, 0.6);
}

.card__label {
  display: block;
  color: #fff;
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.4);
  font-weight: 400;
}

.card__chip {
  align-self: flex-end;
}

.card__chip img {
  width: 3rem;
}

.card__brand {
  font-size: 3rem;
  color: #fff;
  min-width: 100px;
  min-height: 75px;
  text-align: right;
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.4);
}

@keyframes cardEnter {
  from {
    transform: translateY(100vh);
    opacity: 0.1;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}



  
.pay{
  width:200px;
  background: #ff7200;

  border:none;
  height: 40px;
  font-size: 25px;
  border-radius: 5px;
  cursor: pointer;
  color:white;
  transition: 0.4s ease;
  margin-left: 100px;
 

}


.pay a{
  text-decoration: none;
  color: black;
  font-weight: bold;
  
}


.btn{
  width:200px;
  background: #ff7200;

  border:none;
  height: 40px;
  font-size: 18px;
  border-radius: 5px;
  cursor: pointer;
  color:white;
  transition: 0.4s ease;
 
  
  

}


.btn a{
  text-decoration: none;
  color: white;
  font-weight: bold;
  
}

.payment{
  margin-top: -550px;
  margin-left: 1000px;
}
input[type=text]{
  color:black;
  
}
.am{
  color:black;

}
</style>
<?php

require_once('connection.php');
session_start();
$email  =   $_SESSION['email'] ;

$sql="select *from booking where EMAIL='$email' order by BOOK_ID DESC ";
$cname = mysqli_query($con,$sql);
$email = mysqli_fetch_assoc($cname);
$bid=$email['BOOK_ID'];
$_SESSION['bid']=$bid;

if(isset($_POST['pay'])){
  $cardno=mysqli_real_escape_string($con,$_POST['cardno']);
  $exp=mysqli_real_escape_string($con,$_POST['exp']);
  $payment_method=mysqli_real_escape_string($con,$_POST['payment_method']);
  $price=$email['PRICE'];
  $rdate=$email['RETURN_DATE'];
  if(empty($cardno) || empty($exp) ||  empty($payment_method) ){
    echo '<script>alert("please fill the place")</script>';
  }
  else{
    $sql2="insert into payment (BOOK_ID,CARD_NO,EXP_DATE,PAYMENT_METHOD,PRICE) values($bid,'$cardno','$exp','$payment_method', $price)";
    $result = mysqli_query($con,$sql2);
    if($result){
      header("Location: psucess.php");
    }
  }

}


?>







  

    <div class="card">
      <form method="POST">
        <h1 class="card__title">Enter Payment Information</h1>

        <div class="card__col">
           
            
            <tr>
                    <b><td> <label for="cardCcv" class="card__label">payment method</label></td></b> <br><br>

                         <td>
                           
                            <label for="one">MTN</label>&nbsp;
                             
                                <input type="radio" id="input_enabled" name="payment_method" value="MTN(Mobile Money)" style="width:233px">
                              </td><br>
                                  
                         <td>
                            <label for="two">ORANGE</label>
                              <input type="radio" id="input_disabled" name="payment_method" value="Orange(Orange money)" style="width:170px" />
                         </td>
                    </tr>
                    <div>
          <br>
        <div class="card__row">
        <div class="card__col">
            <label for="cardNumber" class="card__label">Phone Number</label
            ><input
              type="text"
              class="card__input card__input--large"
              id="cardNumber"
              placeholder="+237 --- --- --- "
              required="required"
              name="cardno"
              maxlength="9"
            />
          </div>
         
        </div>
        <br>
        <div class="card__row">
          <div class="card__col">
            <label for="cardExpiry" class="card__label">Expiry Date</label
            >
            <br><input
              type="text"
              class="card__input"
              id="cardExpiry"
              placeholder=""
              value="<?php echo $email['RETURN_DATE']?>"
              required="required"
              name="exp"
              maxlength="5"
            />
          </div>
          <br>

          <div class="card__row">
          <div class="card__col">
            <label for="cardExpiry" class="card__label">Total Amount to Pay:
              <br> <a class="am"><?php echo $email['PRICE']?> FCFA</a></label
            >
          </div>

         
          <br>
         
          <div class="card__col card__brand"><i id="cardBrand"></i></div>
        </div>
        <input type="submit" VALUE="PAY NOW" class="pay" name="pay">
        <button class="btn"><a href="cancelbooking.php">CANCEL</a></button>
        <script>
               
           function myFunction() { 
             let text = "ARE YOU SURE?\nYOU WANT TO CANCEL THE PAYMENT?" 
             if (confirm(text) == true) {
                   window.location.href = "cancelbooking.php";
               
             } 
            
           }
          </script>
      </form>
      
    </div>
  </body>

    
    <script src="main.js"></script>
  </body>
</html>