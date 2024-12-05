<?php
        $fName = $_REQUEST['fName']; 
		$lName = $_REQUEST['lName'];
        $live = $_REQUEST['live'];
		$number = $_REQUEST['number'];
		$address = $_REQUEST['address'];
		$event = $_REQUEST['event'];
      
		$conn = mysqli_connect("localhost", "root", "", "illegal");
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
        }
		
		$sql = "INSERT INTO `events`(`fName`, `lName`, `live`, `number`, `address`, `event`) VALUES ('$fName','$lName','$live','$number','$address','$event')";
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