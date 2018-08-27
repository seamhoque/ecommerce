<?php
    include("includes/db.php");
?>


<?php
	session_start(); 
	if(isset($_POST['login'])){
		
		$user_type = $_POST['_type'];
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
		
		$sel_c = "select * from customers where user_type = '$user_type' AND customer_pass='$c_pass' AND customer_email='$c_email'";
		
		$run_c = mysqli_query($con, $sel_c);
		
		$check_customer = mysqli_num_rows($run_c); 
		
		if($check_customer==0){
			unset($_SESSION['customer_email']);
            unset($_SESSION['admin_email']);
			echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
			echo "<script>window.open('index.php','_self')</script>";
			exit();
		}
		
		if($check_customer>0){


			if($user_type == 'Customer'){
                $_SESSION['customer_email'] = $c_email;
                unset($_SESSION['admin_email']);
                echo "<script>alert('You logged in successfully as a Customer, Thanks!')</script>";
				echo "<script>window.open('home.php','_self')</script>";
            }
            else if($user_type == 'Admin'){
                $_SESSION['admin_email'] = $c_email;
                echo "<script>alert('You logged in successfully as a Admin, Thanks!')</script>";
				echo "<script>window.open('admin_home.php','_self')</script>";
            }
		
		}
	}
?>