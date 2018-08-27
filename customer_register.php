<!DOCTYPE>
<?php
	include("functions/functions.php");
	include("reg_controller.php");
?>

    

<html>
    <head>
        <title> My Online Shop </title>
        
        <link rel ="stylesheet" href="styles/style.css" media ="all" />
        
        <script type="text/javascript">
            
            function check_info(){
                
                var customername = document.getElementById('name').value;
                
                var customeremail = document.getElementById('email').value;
                
                var password = document.getElementById('password').value;
                
                var contact = document.getElementById('contact').value;
                
                var address = document.getElementById('address').value;
                
                var emailreg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                
                
                
                if(customername=='' || customeremail=='' || password=='' || contact=='' || address == ''){
                    alert('please fill up all the data.')
                    return false;
                
                }
                
                if (emailreg.test(customeremail)==false){ 
                    
                    alert('please give a correct email address')
                    return false;}
                
                if (password.length<8){
                    
                    alert('password must contain atleast 8 letter.')
                    return false;
                    
                }
                
                if(contact.length<11){
                    
                    alert('please enter a correct contact number')
                    return false;
                }
                    
                

                
            
         /*   if(customeremail==''){
                    alert('please fill in customer email.')
                    return false;
                
                }  */
                else 
                    return true;
            }
        
        </script>
    </head>
<body>

    <div class="main_wrapper">
    
    
        <div class="header_wrapper">
        
            <img id="logo" src="images/logo.gif" />.
            <img id="banner" src="images/ad_banner.gif" />
        
        </div>
        
       
        
        <div class="content_wrapper">
        
        <form action="customer_register.php" method="post" enctype="multipart/form-data" onsubmit="return check_info();">
					
					<table align="center" width="750">
						
						<tr align="center">
							<td colspan="6"><h2>Create an Account</h2></td>
						</tr>
						
						<tr>
							<td align="right">Customer Name:</td>
							<td><input type="text" name="c_name" id="name" /></td>
						</tr>
						
						<tr>
							<td align="right">Customer Email:</td>
							<td><input type="text" name="c_email" id="email"/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Password:</td>
							<td><input type="password" name="c_pass" id="password"/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Image:</td>
							<td><input type="file" name="c_image" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Contact Number:</td>
							<td><input type="text" name="c_contact" id="contact"/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Address</td>
							<td><input type="text" name="c_address" id="address"/></td>
						</tr>
						
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="register" value="Create Account" /></td>
					</tr>
					
					
					
					</table>
				
				</form>
            
            
        </div>    
        



        <div id="footer"> 
            <h2 style="text-align:center; padding-top:30;"> &copy; 2017 by Hoque,Md Mazharul</h2>
        </div>
        
    
    </div>



</body>
</html> 


