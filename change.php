<?php
        $host="localhost";
        $username="root";
        $password="";
        $db="hms";
        
        $link = mysqli_connect($host,$username,$password);
        mysqli_select_db($link, $db);

        if(isset($_POST['username'])){
            
            $uname=$_POST['username'];
            
            $sql="select username from stu_login where username='".$uname."'";
            
            $result=mysqli_query($link, $sql);
            $rowaf = mysqli_affected_rows($link);
            if(($rowaf)==true){
                header("location:fpass.html");
            }
            else{
                echo "<script> alert('Entered username not found') </script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/change_modulue.html">;
                <?php
            }
              
        }
?>