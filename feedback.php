
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
  die("connect fail");
}
if (isset($_POST['feedback_form'])) {
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $email=$_POST['email'];
    $experience=$_POST['experience'];
    $feedback=$_POST['feedback'];
    
    
    $sql="INSERT INTO `feedback` ( `first_name`, `last_name`, `email`, `experience`,'feedback') VALUES ( '$first_name', '$last_name', '$email', '$experience', '$feedback')";
    
    if($conn->query($sql)==true)
    {
      echo "new record added";
    }
    else
    {
      echo "Error";
    }}
    $conn->close();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <title>Feedback</title>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
    text-align: center;
    width: 300px;
    height:600px;
    margin: 111px auto;
    background-color: #ffba66;
    border-radius: 5px;
}
</style>
    
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><img class="lolo" src="image/logo.jpg">CREA SCRAP </a>

         <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                 <a href="#">Products <i class="fa fa-caret-down"></i></a>
                 <ul class="dropdown">
                     <li><a href="creativity.html">Creativity</a></li>
                     <li><a href="scrapyart.html">Scrapyart</a></li>
                 </ul>
                </li>
                
                <li><a href="categories.html">Categories</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                </ul>
         </nav>

       <div class="icons">
          <div class="fas fa-bars" id="menu-btn"></div>
          <input type="search" id="search-box" placeholder="Search here...">
          <div class="fas fa-search" id="search-btn"></div>
          <div class="fas fa-shopping-cart" id="cart-btn"></div>
          <a href="loginpage.php"><div class="fas fa-user" id="login-btn"></div></a>
       </div>
    </header>

    <div class="container"><br>
    <h3>Feedback Form</h3>


  <form action="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
     <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Email id.." required>

    <label for="experience">How Was Your Experience?</label>
    <select id="experience" name="experience">
      <option value="good">Good</option>
      <option value="average">Average</option>
      <option value="bad">Bad</option>
    </select>

    <label for="subject">Feedback Message</label>
    <textarea id="feedback" name="feedback" placeholder="Write feedback.." style="height:100px" required></textarea>

    <button type="submit" name="feedback_form" class="btn btn-primary">Submit</button>
  </form>
</div>
  

  </section>

    <footer>
        <section class="footer">

            <div class="box-container">
        
                <div class="box">
                    <img class="footer-logo" src="image/logo.jpg">

                    <h3>
                        CREA SCRAP 
                    </h3>
        
                    <p>Dive into the euphoric experience of shopping.
                       <br>
                       Happy to create!
                    </p>
                    <div class="share">
                        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                        <a href="https://www.twitter.com/KartUp_Business/" class="fab fa-twitter"></a>
                        <a href="https://www.instagram.com/kartup_business/" class="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/in/kart-up-33520a251/" class="fab fa-linkedin"></a>
                    </div>
                </div>
        
                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#" class="links"> <i class="fas fa-phone"></i> +91-9547208910 </a>
                    <a href="#" class="links"> <i class="fas fa-phone"></i> +91-8602425833 </a>
                    <a href="#" class="links"> <i class="fas fa-envelope"></i> creascrap.business@gmail.com </a>
                    <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Indore, India - 452016 </a>
                </div>
        
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="index.html" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
                    <a href="creativity.html" class="links"> <i class="fas fa-arrow-right"></i> Products </a>
                    <a href="categories.html" class="links"> <i class="fas fa-arrow-right"></i> Categories </a>
                    <a href="feedback.html" class="links"> <i class="fas fa-arrow-right"></i> Feedback </a>
                </div>
            </div>
        </section>
        
    </footer>
</body>
</html>