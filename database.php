<?php
	$NAME = $_POST['NAME'];
	$REGNO = $_POST['REGNO'];
	$DEPT = $_POST['DEPT'];
	$YEAR = $_POST['YEAR'];
	$STUDENT_EMAILID = $_POST['EMAIL_ID'];
	$STUDENT_PHONENO = $_POST['PHONE_NO'];

    $FATHER_NAME = $_POST['F_NAME'];
	$FATHER_OCCUPATION = $_POST['F_OCCUPATION'];
	$PARENT_EMAILID = $_POST['F_EMAILID'];
	$FATHER_PHONENO = $_POST['F_PHONENO'];
	$MOTHER_NAME = $_POST['M_NAME'];
	$MOTHER_PHONENO = $_POST['M_PHONENO'];

    $ADDRESS = $_POST['ADDRESS'];

	// Database connection
    if(isset($_POST['NAME'])) {
	    $conn = new mysqli('localhost','root','','hms');
	    if($conn->connect_error){
		    echo "$conn->connect_error";
		    die("Connection Failed : ". $conn->connect_error);
	    } 
        else {
		    $stmt = $conn->prepare("insert into details(NAME,REGNO, DEPT, YEAR, EMAIL_ID, PHONE_NO, F_NAME, OCCUPATION, F_EMAILID, F_PHONENO, M_NAME, M_PHONENO, ADDRESS) values('$NAME','$REGNO', '$DEPT', '$YEAR', '$STUDENT_EMAILID', '$STUDENT_PHONENO',  '$FATHER_NAME', '$FATHER_OCCUPATION', '$PARENT_EMAILID', '$FATHER_PHONENO', '$MOTHER_NAME', '$MOTHER_PHONENO', '$ADDRESS')");
		    //$stmt->bind_param("issssisssisis", $REGNO, $NAME, $DEPT, $YEAR, $STUDENT_EMAILID, $STUDENT_PHONENO,  $FATHER_NAME, $FATHER_OCCUPATION, $PARENT_EMAILID, $FATHER_PHONENO, $MOTHER_NAME, $MOTHER_PHONENO, $ADDRESS );
		    $execval = $stmt->execute();
		    if($execval == true ) {
		        echo "Registration successfully...";
            }
            else {
                echo "Unable to register...";
            }
        }
        $stmt->close();
		$conn->close();
	}
?>