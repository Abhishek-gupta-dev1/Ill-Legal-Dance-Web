<?php
    
		$feedback = $_REQUEST['feedback'];
      
		$conn = mysqli_connect("localhost", "root", "", "illegal");
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
        }
		
		$sql = "INSERT INTO `feedback`(`feedback`) VALUES ('$feedback')";
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