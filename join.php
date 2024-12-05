<?php
        $fName = $_REQUEST['fName']; 
		$lName = $_REQUEST['lName'];
        $age = $_REQUEST['age'];
        $categories = $_REQUEST['categories'];
        $gender = $_REQUEST['gender'];
		$ever_performed = $_REQUEST['ever_performed'];
		$number = $_REQUEST['number'];
		$address = $_REQUEST['address'];
    $past_team = $_REQUEST['past_team'];
		$conn = mysqli_connect("localhost", "root", "", "illegal");
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
        }
		
		$sql = "INSERT INTO `teamjoin`(`fName`, `lName`, `age`, `gender`, `categories`, `ever_performed`, `number`, `address`, `past_team`) VALUES ('$fName','$lName','$age','$gender','$categories','$ever_performed','$number','$address','$past_team')";
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