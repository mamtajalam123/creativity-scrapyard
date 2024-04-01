<?php
$servername="localhost";
$username="root";
$password="";
$dbname="resister";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
  die("connect fail");
}
if (isset($_POST['form_form'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
   
    $sql="INSERT INTO'form' (first_name, last_name, gender, address, email, password) values(' $first_name',$last_name,$gender, $address,$email,$password)";


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
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleee.css">
    <title>Signup Page</title>

</head>
<body>
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
    
    <main>
        <div id="signup">
            <form id="signup" action="">
                <br><h1> Create Your New Account </h1><br><br>
                <label for="fname">First Name</label>
                 <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                  <label for="lname">Last Name</label>
                   <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>


                   
                   <label for="gender">Gender</label>
                   <input type="text" id="gender" name="gender" placeholder="Enter Your gender.." required>

                   <label for="address">Address</label>
                   <input type="text" id="address" name="address" placeholder="Enter Your Address.." required>

                    <label for="email">Email</label>
                     <input type="text" id="email" name="email" placeholder="Email id.." required>

                    <label for="password">password</label>
                     <input type="text" id="password" name="password" placeholder="Enter Your Password.." required>
                    
                     <button type="submit" name="form_form" class="btn btn-primary">Submit</button><br><br><br>  
                <p>Already have an account? <a href="loginpage.php">login in</a></p>
            </form>
            
        </div>
    </main>
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
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Indore, India - 452016</a>
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