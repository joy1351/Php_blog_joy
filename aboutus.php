<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----Font Awesome------>
    <script src="https://kit.fontawesome.com/b0ad2c5cd1.js" crossorigin="anonymous"></script>

    <!----Custom Styling-->
    <link rel="stylesheet" href="css/style.css">

    <!---Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <title>Login</title>
</head>
<body>
    <header>
        <div class="logo">
        <h1 class="logo-text"><span>BLOGGERS </span></h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Me
                    <i class="fa fa-chevron-down" style="font-size:.8em;"></i>
                </a>
            <ul>

                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="login.php" class="logout">Logout</a></li>
            </ul>
            </li>
        </ul>
    </header>

    <div class="auth-content">

        <form action="aboutus.blade" method="post">
            <h1 class="form-title" style="font-size:50px">About Us</h1>

            <div>
                <p style="font-size:30px">
                    This is a student blog website designed for the creativity and well-being of our community.
                    We firmly believe everyone's unique and that is to be utilised for. This could be a new start
                    for many people and promises.
                </p>
            </div>
           
           
        </form>


    </div>
    <!-----Footer-->

<div class="footer">
<div class="footer-content">


<div class="footer-section about">
<h1 class="logo-text"><span>BLOGGERS</span></h1>
<p>
    Everyone is a unique combination of talents.
     We provide platform for you do so and continue the good work against the bad times.
</p>

<div class="contact">
    <span><i class="fas fa-phone"></i> &nbsp; 5688 45689 </span>
    <span><i class="fas fa-envelope"></i> &nbsp; abc@gmail.com </span>
</div>
<div class="socials">
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-google"></i></a>
</div>
</div>

<div class="footer-section links">
   <h2>Quick Links</h2>
   <br>
   <ul>
       <a href="#">
           <li>Events</li>
       </a>
       <a href="#">
          <li>Team</li>
         </a>
       <a href="#">
           <li>Mentors</li> 
        </a>
       <a href="#">
           <li>Gallery</li>
        </a>
       <a href="#">
           <li>Terms and Conditions</li>
        </a>
   </ul> 
</div>

<div class="footer-section social contact-form">
    <h2>Contact Us</h2>
    <br>
    <form action="index",method="post">
        <input type="email" name="email" class="text-input contact-input" placeholder="Your email address....">
        <textarea rows="4"  name="message" class="text-input contact-input" placeholder="Your message...."></textarea>
        <button type="submit" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i>
            Send Us
        </button>
    </form>
</div>


</div>
    <div class="footer-bottom">
    &copy; BLOGGERS.com | Designed by JOY GARG
    
</div>

</div>
</div>



<!-----// Footer---->

 






</body>
</html>