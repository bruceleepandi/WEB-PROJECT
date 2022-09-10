<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcations</title>
</head>
<body>

    <table broder ="2" cellspacing="5">
        <tr>
            <th>s.no</th>
            <th>ROOM_NO</th>
            <th>NAME</th>
            <th>FROM_DATE</th>
            <th>TO_DATE</th>
            <th>PURPOSE</th>
            <th>APPLIED_DATE</th>
        </tr>
    <?php
        $conn = new mysqli('localhost','root','','hms');
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
        }
        $query = "select * from outpass";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);

        if($total !=0) {
            //echo "Records found";
            while($result = mysqli_fetch_assoc($data)) {
                echo "
                <tr>
                <td>".$result['s.no']."</td>
                <td>".$result['ROOM_NO']."</td>
                <td>".$result['NAME']."</td>
                <td>".$result['FROM_DATE']."</td>
                <td>".$result['TO_DATE']."</td>
                <td>".$result['PURPOSE']."</td>
                <td>".$result['APPLIED_DATE']."</td>
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