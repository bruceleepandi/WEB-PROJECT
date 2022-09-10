<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcations</title>
</head>
<body>

    <table broder ="2" cellspacing="10">
        <tr>
            <th>NAME</th>
            <th>REGNO</th>
            <th>DEPT</th>
            <th>YEAR</th>
            <th>EMAIL_ID</th>
            <th>PHONE_NO</th>
            <th>F_NAME</th>
            <th>OCCUPATION</th>
            <th>F_MAILID</th>
            <th>F_PHONENO</th>
            <th>M_NAME</th>
            <th>M_PHONENO</th>
            <th>ADDRESS</th>
            <th>OPERATION</th>
        </tr>
    <?php
        $conn = new mysqli('localhost','root','','hms');
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
        }
        $query = "select * from details";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);

        if($total !=0) {
            //echo "Records found";
            while($result = mysqli_fetch_assoc($data)) {
                echo "
                <tr>
                <td>".$result['NAME']."</td>
                <td>".$result['REGNO']."</td>
                <td>".$result['DEPT']."</td>
                <td>".$result['YEAR']."</td>
                <td>".$result['EMAIL_ID']."</td>
                <td>".$result['PHONE_NO']."</td>
                <td>".$result['F_NAME']."</td>
                <td>".$result['OCCUPATION']."</td>
                <td>".$result['F_EMAILID']."</td>
                <td>".$result['F_PHONENO']."</td>
                <td>".$result['M_NAME']."</td>
                <td>".$result['M_PHONENO']."</td>
                <td>".$result['ADDRESS']."</td>
                <td><a href='update.php?sn=$result[NAME] & sr=$result[REGNO] & de=$result[DEPT] & ye=$result[YEAR] & em=$result[EMAIL_ID] & pn=$result[PHONE_NO] & fn=$result[F_NAME] & oc=$result[OCCUPATION]
                & fm=$result[F_EMAILID] & fp=$result[F_PHONENO] & mn=$result[M_NAME] & mp=$result[M_PHONENO] & ad=$result[ADDRESS]'>Edit/Update</td>
                </tr>
                ";
            }
        }

        else {
            echo "No records found";
        }
        $conn->close();
    ?>
    </table>
</body>
</html>