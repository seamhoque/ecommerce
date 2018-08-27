<?php
    include("includes/db.php");
?>

<?php 
	if(isset($_POST['register'])){
	
		
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
		$c_image = $_FILES['c_image']['name'];
		$c_image_tmp = $_FILES['c_image']['tmp_name'];
		$c_contact = $_POST['c_contact'];
		$c_address = $_POST['c_address'];
	
		
		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
		
		 $insert_c = "insert into customers (user_type,customer_name,customer_email,customer_pass,customer_contact,customer_address,customer_image) values ('Customer','$c_name','$c_email','$c_pass','$c_contact','$c_address','$c_image')";
	
		$run_c = mysqli_query($con, $insert_c); 
		
		$_SESSION['customer_email']=$c_email; 
		
		echo "<script>alert('Account has been created successfully, Now Log In, Thanks!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}

?>