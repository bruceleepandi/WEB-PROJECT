<?php

    $ROOM_NO = $_POST['ROOM_NO'];
	$NAME = $_POST['NAME'];
	
	$FROM_DATE = $_POST['FROM_DATE'];
	$TO_DATE = $_POST['TO_DATE'];
    $PURPOSE = $_POST['PURPOSE'];
    $APPLIED_DATE=date("Y-m-d");
    

	// Database connection
	if(isset($_POST['ROOM_NO'])) {
		$conn = new mysqli('localhost','root','','hms');
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
		} 
		
		$query = "select COUNT(APPLIED_DATE) AS Applied FROM outpass where APPLIED_DATE = '$APPLIED_DATE' ";
		$data = mysqli_query($conn,$query);
		$total = mysqli_num_rows($data);
		if($total !=0) {
            //echo "Records found";
        	$result = mysqli_fetch_assoc($data);
		}
		if($result['Applied'] <= 1 ) {
			$query1 = "insert into outpass(ROOM_NO,NAME,FROM_DATE,TO_DATE,PURPOSE,APPLIED_DATE) values('$ROOM_NO','$NAME','$FROM_DATE','$TO_DATE','$PURPOSE','$APPLIED_DATE')";
			//$stmt->bind_param("ssssss",$ROOM_NO,$NAME,$FROM_DATE,$TO_DATE,$PURPOSE,$APPLIED_DATE);
			$execval = mysqli_query($conn,$query1);
			if( $execval) {
				echo "<script> alert('Outpass generated') </script>"
				?>
                <META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/front.html">;
                <?php
			}
			else {
				echo "<script> alert('Outpass is not generated') </script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/outpass.html">;
                <?php
			}
		}
		else {
			echo "<script> alert('Outpass generation limit exceed') </script>";
			?>
            <META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/front.html">;
            <?php
		}
		//$stmt->close();
		$conn->close();
	}
?>