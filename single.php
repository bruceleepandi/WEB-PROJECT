<?php

    $NAME = $_POST['NAME'];
	$REGNO = $_POST['REGNO'];
	
	$DEPT = $_POST['DEPT'];
	$YEAR = $_POST['YEAR'];
    $HOSTEL_BLOCK = $_POST['HOSTEL_BLOCK'];
    $ROOM_NO = $_POST['ROOM_NO'];
    $DURATION = $_POST['DURATION'];
    $AMOUNT = $_POST['AMOUNT'];
	
	$PHONE_NO = $_POST['PHONE_NO'];
    $EMAILID = $_POST['EMAILID'];

    

	// Database connection
	if(isset($_POST['NAME'])) {
		$conn = new mysqli('localhost','root','','hms');
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
		} else {
			$stmt = $conn->prepare("insert into singleroom(NAME, REGNO, DEPT, YEAR, HOSTEL_BLOCK, ROOM_NO, DURATION, AMOUNT, PHONE_NO, EMAILID) values('$NAME', '$REGNO', '$DEPT', '$YEAR', '$HOSTEL_BLOCK', '$ROOM_NO', '$DURATION', '$AMOUNT', '$PHONE_NO', '$EMAILID')");
			//$stmt->bind_param("sisssssiis", $NAME, $REGNO, $DEPT, $YEAR, $HOSTEL_BLOCK, $ROOM_NO, $DURATION, $AMOUNT, $PHONE_NO, $EMAILID, );
			$execval = $stmt->execute();
			if($execval == true); {
				header('location:https://rzp.io/l/MbqtXqjuCU');
				?>
            	<META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/Login Page.html">;
            	<?php
			}
		}
		$stmt->close();
		$conn->close();
	}
?>
