<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$userName = $_POST['userName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$age = $_POST['age'];
	$saddress = $_POST['saddress'];
	$baddress = $_POST['baddress'];
	$idDocument = $_POST['idDocument'];
	$newsletterPref = $_POST['newsletterPref'];

	// Database connection
	$conn = new mysqli('localhost:3300','root','','spm_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users_info(firstName, lastName, userName, gender, email, password, number1, number2, age, saddress, baddress, idDocument, newsletterPref) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssiiissbs", $firstName, $lastName, $userName, $gender, $email, $password, $number1, $number2, $age, $saddress, $baddress, $idDocument, $newsletterPref);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>