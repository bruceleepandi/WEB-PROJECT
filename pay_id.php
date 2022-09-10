<?php

    $payment_id = $_POST['payment_id'];
	$reg_no = $_POST['reg_no'];
	
	$room_no = $_POST['room_no'];
	$payment_status = $_POST['payment_status'];
    // $invoice = $_POST['invoice'];
    

	// Database connection
	if(isset($_POST['payment_id'])) {
		$conn = new mysqli('localhost','root','','hms');
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
		} else {
			$query="insert into transcation(P_ID,REGNO,ROOM_NO,PAY_STATUS) values('$payment_id','$reg_no','$room_no','$payment_status')";
			//$stmt->bind_param("ssssss",$ROOM_NO,$NAME,$FROM_DATE,$TO_DATE,$PURPOSE,$APPLIED_DATE);
			$data = mysqli_query($conn,$query);
			//$execval = $stmt->execute();
			if( $data ) {
				echo "<script> alert('Updated') </script>";
				?>
            	<META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/Login Page.html">;
            	<?php
			}
			else {
				echo "<script> alert('Not Updated') </script>";
				?>
            	<META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/Login Page.html">;
            	<?php
			}
		}
		$conn->close();
	}
?>