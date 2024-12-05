<?php
        $fName = $_REQUEST['fName']; 
		$lName = $_REQUEST['lName'];
        $age = $_REQUEST['age'];
        $gender = $_REQUEST['gender'];
		$number = $_REQUEST['number'];
		$address = $_REQUEST['address'];
		$city = $_REQUEST['city'];
        $state = $_REQUEST['state'];
		$conn = mysqli_connect("localhost", "root", "", "illegal");
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
        }
		
		$sql = "INSERT INTO `users` (`fName`, `lName`, `age`, `gender`, `number`, `address`, `city`, `state`) VALUES ('$fName', '$lName', '$age', '$gender', '$number', '$address', '$city', '$state')";
		if(mysqli_query($conn, $sql)){
		      header("Location: ./ill_legals.html");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		// Close connection
		mysqli_close($conn);
		 ?>
        <!-- servername => localhost
		 username => root
		 password => empty
		 database name => staff -->