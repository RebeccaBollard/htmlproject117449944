<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
        <link rel="icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/hawcons/32/699966-icon-1-cloud-256.png">
        
    </head>
   
     
          <div class="topnav">
             
           
     <body>
    
         
         <div>
             
         <ul>
           <li> <a  href = "../homepage.html">Home    </a> </li>
    
          <li> <a href = "ebusiness/Ebus1.php">Shop</a> </li>
           <li> <a href = "../CloudServices/cloudcontact.html">Contact     </a> </li>
           <li> <a href = "../CloudServices/About_Cloud.html"> Cloud Services</a></li>
        </ul>
        
        </div>
         
          <div class="logo">
        <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/728/610839728_5eb918ff-34fb-4409-bbcf-28dbb3de65f3.png?cb=1520197164" alt="cloudlogo">
        </div>
   
        
        <h4 class="heading2">Please enter your payment details</h4>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="username" class="lblname">
                Name
                <input type="text" id="username" name="username" placeholder="Enter Your Name">
            </label>
            
            <br>
            <br>
            
            <label for="useremail" class="lblemail">
                Email address
                <input type="email" id="useremail" name="useremail" placeholder="example@gmail.com">
            </label>
            
            <br>
            <br>
            
            <label for="userpin" class="lblpin">
                PIN
                <input type="pin" id="userpin" name="userpin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                <br>
                (Only numbers are allowed for the PIN)
            </label>
            
            <br>
            <br>
            
            <button class="btnproceed" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        <br>
        
        <button class="btnvalidate" onClick="validateName()">Validate</button>
    
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
          
        ?>
        
    </body>
</html>