<?php
        $host="localhost";
        $username="root";
        $password="";
        $db="hms";
        
        $link = mysqli_connect($host,$username,$password);
        mysqli_select_db($link, $db);

        if(isset($_POST['username'])){
            
            $uname=$_POST['username'];
            $upass=$_POST['password'];
            
            $sql="select * from stu_login where username='".$uname."' AND Password='".$upass."' limit 1";
            
            $result=mysqli_query($link, $sql);
            $rowaf = mysqli_affected_rows($link);
            if(($rowaf)==true){
                header('location:front.html');
            }
            else{
                echo "<script> alert('Incorrect Username or password') </script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/Login Page.html">;
                <?php
            }    
        }
        $query="select * from pay where regno='".$uname."' AND name='".$upass."' limit 1";
            
            $data=mysqli_query($link, $query);
            $valid = mysqli_affected_rows($link);
            if(($valid)==true) {
                header('location:pay_id.html');
            }
            else{
                echo "<script> alert('Incorrect Username or password') </script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT ="0 URL=http://localhost/SD LAB/Login Page.html">;
                <?php
            }
?>




