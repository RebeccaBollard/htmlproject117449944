<!DOCTYPE html>
<html>
    <head>
        
    <title>Stratus</title>
    <link rel = "stylesheet" href = "ebus.css" type = "text/css" />
    
     <div class="topnav">
       </head>
     
              
           
     <body>
    
         
         <div>
             
         <ul>
           <li> <a  href = "homepage.html">Home    </a> </li>
    
          <li> <a href = "ebusiness/Ebus1.php">Shop</a> </li>
           <li> <a href = "cloudcontact.html">Contact     </a> </li>
           <li> <a href = "CloudServices/About_Cloud.html"> Cloud Services</a></li>
        </ul>
        
        </div>
        </div>
        
        
        <div class="logo">
        <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/728/610839728_5eb918ff-34fb-4409-bbcf-28dbb3de65f3.png?cb=1520197164);">
        </div>
    
    
    <body>
        <
                
               
        
        <div class="container1">
          <h1>Select a Product</h1>
              
          <br>
              
          <form method="POST" action="Ebus2.php">
            
           
            <label for="salesforce" class="lblsalesforce">
              <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              SalesForce @ $100
            </label>
                
            <br>
            
            <label for="cloud9" class="lblcloud9">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $200
            </label>
                
            <br>
                
            <label for="aws" class="lblaws">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              AWS @ $300
            </label>
                
            <br>
                
            <label for="gmail" class="lblgmail">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
            </label>
            
            
            
            <label for="subtotal" class="lblsubtotal">
              Subtotal: 
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount" class="lbldiscount">
              Discount @ 5%: <input type="text" id="discount" name="discount" value="0.00" readonly/>
              
              <br>
              
            </label>
                
            <br>
            
            <label for="vat" class="lblvat">
              VAT @ 10%: 
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
                
            <br>
                
            <label for="total" class="lbltotal">
              Total: 
              <input type="text" id="total" name="total" value="0.00" readonly/>
              <br>
            </label>
      
            <br>
            
            <div class="btnadd">   
              <button class="addbtnstyle" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </div>  
              
          </form>
             
          <button class="btncal" onClick="calcSub()">Calculate Cost</button>
             
          <br>
            
          
          <a class="btnclear" role="button" href="Ebus1.php">Clear Choice</a>
        </div>
    </body>
</html>


   