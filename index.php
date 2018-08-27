<!DOCTYPE>
<?php
    include("functions/functions.php");
    include("login_controller.php");
    include("includes/db.php");
?>

    

<html>
    <head>
        <title> My Online Shop </title>
        
        <link rel ="stylesheet" href="styles/style.css" media ="all" />
    </head>
<body>

    <div class="main_wrapper">
    
    
        <div class="header_wrapper">
        
            <img id="logo" src="images/logo.gif" />.
            <img id="banner" src="images/techimages.png" />
        
        </div>
        
       
        
        <div class="content_wrapper">
        
            <form method="post" action=""> 
            
                <table width="500" align="center" bgcolor="skyblue"> 
                
                    <tr align="center">
                        <td colspan="3"><h2>Login or Register to Buy!</h2></td>
                    </tr>
                    
                    <tr>
                        <td align="right"><b>User Type:</b></td>
                        <td><select name="_type">
                                 <option>Customer</option>
                                 <option>Admin</option>
                              </select></td>
                    </tr>

                    <tr>
                        <td align="right"><b>Email:</b></td>
                        <td><input type="text" name="email" placeholder="enter email"   required/></td>
                    </tr>
                
                    <tr>
                        <td align="right"><b>Password:</b></td>
                        <td><input type="password" name="pass" placeholder="enter password" required/></td>
                     </tr>
                
                    <tr align="center">
                        <td colspan="3"><a href="checkout.php?forgot_pass">Forgot Password?</a></td>
                    </tr>
                
                    <tr align="center">
                        <td colspan="3"><input type="submit" name="login" value="Login" /></td>
                    </tr>
                
            
            
                </table> 
        
                <h2 style="float:right; padding-right:20px;"><a href="customer_register.php" style="text-decoration:none;">New? Register Here</a></h2>
        
        
            </form>
  
        </div>    
        

        <div id="footer"> 
            <h2 style="text-align:center; padding-top:30;"> &copy; 2017 by Hoque,Md Mazharul</h2>
        </div>
        
    
    </div>

</body>
</html> 



