<?php
    $conn = new mysqli('localhost','root','','hms');
    if($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    }
    $regno = $_POST['RegNo'];
    $newpassword = $_POST['password'];
    $repass = $_POST['pass1'];

    if($newpassword == $repass) {
        
        $query = "update stu_login set password = '".$newpassword."' where regno = '".$regno."' ";

        $data = mysqli_query($conn,$query);
        if($data) {
            echo "<script> alert('Password Updated') </script>";
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/Login Page.html">;
            <?php 
        }
    }
    else {
        echo "<script> alert('Password is not matching') </script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/fpass.php">;
        <?php
    }
    $conn->close();
?>