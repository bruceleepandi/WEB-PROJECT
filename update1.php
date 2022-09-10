<?php
        $conn = new mysqli('localhost','root','','hms');
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        }
        $NAME = $_POST['NAME'];
        $REGNO = $_POST['REGNO'];
        $DEPT = $_POST['DEPT'];
        $YEAR = $_POST['YEAR'];
        $EMAIL_ID = $_POST['EMAIL_ID'];
        $PHONE_NO = $_POST['PHONE_NO'];
        $F_NAME = $_POST['F_NAME'];
        $OCCUPATION = $_POST['F_OCCUPATION'];
        $F_EMAILID = $_POST['F_EMAILID'];
        $F_PHONENO = $_POST['F_PHONENO'];
        $M_NAME = $_POST['M_NAME'];
        $M_PHONENO = $_POST['M_PHONENO'];
        $ADDRESS = $_POST['ADDRESS'];

        $query = "update details set NAME='$NAME',REGNO='$REGNO',DEPT='$DEPT',YEAR='$YEAR',EMAIL_ID='$EMAIL_ID',PHONE_NO='$PHONE_NO',
        F_NAME='$F_NAME',OCCUPATION='$OCCUPATION',F_EMAILID='$F_EMAILID',F_PHONENO='$F_PHONENO',M_NAME='$M_NAME',M_PHONENO='$M_PHONENO',
        ADDRESS='$ADDRESS' where REGNO='$REGNO' ";

        $data = mysqli_query($conn,$query);

        if($data) {
            echo "<script> alert('Record updated') </script>";
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/Admin_page.html">;
            <?php
        }
    $conn->close();
?>