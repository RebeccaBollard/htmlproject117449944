<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
         </head>
     
          <div class="topnav">
             
           
     <body>
    
         
         <div>
             
         <ul>
           <li> <a  href = "homepage.html">Home    </a> </li>
    
          <li> <a href = "ebusiness/Ebus1.php">Shop</a> </li>
           <li> <a href = "cloudcontact.html">Contact     </a> </li>
           <li> <a href = "CloudServices/About_Cloud.html"> Cloud Services</a></li>
        </ul>
        
        </div>
        
        
        
        <div class="logo">
        <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/728/610839728_5eb918ff-34fb-4409-bbcf-28dbb3de65f3.png?cb=1520197164);">
        </div>
    
        
    </head>
    
    <body>
        <h4 class="ebus3_heading">Purchase Receipt</h4>
        
        <?php  
        // Set session variables
          $_SESSION["username"] = $_POST["username"];
          $_SESSION["useremail"] = $_POST["useremail"];
        ?>
        
        <p class="ebus3name">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["username"] . ".";
            ?>
        </p>
        
        <p class="ebus3email">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["useremail"] . ".";
            ?>
        </p>
        
        <p class="ebus3total">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
    </body>
</html>