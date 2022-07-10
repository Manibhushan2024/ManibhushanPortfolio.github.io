<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => personal
		$conn = mysqli_connect("localhost", "root", "", "personal");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		if(isset($text)){
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$text = $_REQUEST['text'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO enquiry VALUES ('$name',
			'$email','$phone','$text')";
		
		if(mysqli_query($conn, $sql)){

			echo nl2br("\n$name\n $email\n "
				. "$phone\n $text");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
	}
	echo "Thanks for contacting me. I will contact you shortly";
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
