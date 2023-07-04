 <?php

	// Database connection
	$connection =  mysqli_connect('localhost5500','root','','blood_donation');

	if(isset($_POST['abc'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$phone = $_POST['phone'];
		$blood_group = $_POST['blood_group'];
		$gender = $_POST['gender'];
		

		$request=" insert into donor(name,email,address,age,phone,blood_group,gender) values('$name' , '$email','$address','$age','$phone','$blood_group','$gender')";
		mysqli_query($connection,$request);

		header('location:index.html');
	}

	else{
		echo 'eligible criteria for donors!';
	}
?>  

