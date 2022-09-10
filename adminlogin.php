<?php
        $host="localhost";
        $username="root";
        $password="";
        $db="hms";
        
        $link = mysqli_connect($host,$username,$password);
        mysqli_select_db($link, $db);

        if(isset($_POST['uname'])){
            
            $u_name=$_POST['uname'];
            $pass=$_POST['upass'];
            
            $sql="select * from admin_login where uname='".$u_name."' AND upass='".$pass."' limit 1";
            
            $result=mysqli_query($link, $sql);
            $rowaf = mysqli_affected_rows($link);
            if(($rowaf)==true){
                header('location:Admin_page.html');
            }
            else{
                echo " Incorrect Password or Username";
            }
              
        }
?>