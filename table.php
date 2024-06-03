<?php 
require 'database.php';

if(isset($_POST['submit'])){

    $name = $_POST["first name"];
    $name = $_POST["second name"];
    $name = $_POST["third name"];
    $email= $_POST["email"];
    $name = $_POST["message"];

    $query = "INSERT INTO details VALUES('$name','$email')";

    mysqli_query($con, $query);

    echo "<script> alert('Saved successfully')</script>";

} 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title> School Website</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="nav1">
            <div class="logo"><img src="mec logo.jpg" width="40px" height="45px"><span>M.E.C COMPUTER COLLEGE</span></div>
            <UL>
                
           <li><a href="myhome.html" target="_top" > Home</a></li>
               <li><a href="about.html" target="_top" > About</a></li>
                   <li><a href="contactus.html" target="_top" >Courses </a></li>
                       <li><a href="contact.html" target="_top" > Contact</a></li>

                       
                    </UL>
        </div>

        <h2><b>MAXIMUM<img src="mec logo.jpg" width="100px" height="110px">ECLIPSE <br>COMPUTER COLLEGE</b></h2>
           
           <div class="form1">
            <H2>Contact Us</H2>
           <form>
               <label> First Name</label><br>
               <input type="text" name="name" placeholder="first name" required><br>

               <label> Second Name</label><br>
               <input type="text" name="name" placeholder="second name" required><br>

               <label> Third Name </label><br>
               <input type="text" name="name" placeholder="third name" required><br>

               <label> Email Address</label><br>
               <input type="text" name="name" placeholder="email" required><br>

               <label> Message</label><br>
               <textarea id="freeform" name="freeform" rows="10" columns="50"> Enter your message here...</textarea>

               <input type="submit" value="submit">



           </form>
</div>

<footer>
    <div class="footer1">
      <ul>
       <li>Home</li>
       <li>About</li>
       <li>Courses</li>
       <li>Contact</li>
       <li> Privacy Policy</li>
       </ul>
       <hr color="black">
       <p>Designed by : <span>Lilian Wanjala</span></p>
    </div>

  </footer>





    </body>
</html>