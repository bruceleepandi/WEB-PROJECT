<?php
    $conn = new mysqli('localhost','root','','hms');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    }

    $sn = $_GET['sn'];
    $sr = $_GET['sr'];
    $de = $_GET['de'];
    $ye = $_GET['ye'];
    $em = $_GET['em'];
    $pn = $_GET['pn'];
    $fn = $_GET['fn'];
    $oc = $_GET['oc'];
    $fm = $_GET['fm'];
    $fp = $_GET['fp'];
    $mn = $_GET['mn'];
    $mp = $_GET['mp'];
    $ad = $_GET['ad'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="database.css" >
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Update</title>
</head>
<body>
  <div class="container">
    <div class="title">PERSONAL DETAILS</div>
    <form action="update1.php" method="POST">
      <div class="-detailusers">
        <br><br>
        <div class="input-box">
          <span class="details">NAME</span>
      <input type="text" placeholder="Enter your name" name="NAME" value="<?php echo "$sn" ?>" required>
        </div>
        <br><br>
        <div class="input-box">
          <span class="details">REG NO</span>
          <input type="int" placeholder="Enter your number" name="REGNO" value="<?php echo "$sr" ?>" required>
        </div>
        <br><br>
        <div class="input-box">
          <span class="details">DEPT</span>
          <select trpe="varchar" name="DEPT" value="<?php echo "$de" ?>" required>
            <option value="">SELECT</option>
          <option value="CSE">CSE</option>
          <option value="IT">IT</option>
          <option value="ECE">ECE</option>
          <option value="EEE">EEE</option>
          <option value="CIVIL">CIVIL</option>
          <option value="BME">BME</option>
          <option value="CHECIMAL">CHECIMAL</option>
          <option value="MECH">MECH</option>
          </select>
        </div>
        <br><br>
        <div class="input-box">
          <span class="details">YEAR</span>
          <select type="varchar" name="YEAR" value="<?php echo "$ye" ?>" required>
            <option value="">SELECT</option>
          <option value="I YEAR">I YEAR</option>
          <option value="II YEAR">II YEAR</option>
          <option value="III YEAR">III YEAR</option>
          <option value="IV YEAR">IV YEAR</option>
          </select>
        </div>
        <br><br>
        <div class="input-box">
          <span class="details">EMAIL ID</span>
          <input type="email" placeholder="Enter your email id" name="EMAIL_ID" value="<?php echo "$em" ?>" required>
        </div>
        <br><br>
        <div class="input-box">
          <span class="details">PHONE NO</span>
          <input type="int" placeholder="Enter your number" name="PHONE_NO" value="<?php echo "$pn" ?>" minlength="10" required>
        </div>
        <br><br>
        
      </div>
  </div>    
  <div class="container1">
    <div class="title">PARENTS DETAILS</div>
      <div class="user-details">
        <br><br>
        <div class="input-box">
          <span class="details">FATHER'S NAME</span>
          <input type="text" placeholder="Enter the name" name="F_NAME" value="<?php echo "$fn" ?>" required>
        </div>
        <br><br>
        <div class="input-box">
          <span class="details">OCCUPATION</span>
          <input type="text" placeholder="Occupation" name="F_OCCUPATION" value="<?php echo "$oc" ?>" required>
        </div>
        <br><br>
        <div class="input-box">
          <span class="details">EMAIL ID</span>
          <input type="email" placeholder="Enter the email id" name="F_EMAILID" value="<?php echo "$fm" ?>" required>
        </div>
        <br><br>
        <div class="input-box">
          <span class="details">PHONE NO</span>
          <input type="int" placeholder="Enter 10 Digit phone number" name="F_PHONENO" value="<?php echo "$fp" ?>" minlength="10" required>
        </div>
        <br><br>
        <div class="input-box">
          <span class="details">MOTHER'S NAME</span>
          <input type="text" placeholder="Enter the name" name="M_NAME" value="<?php echo "$mn" ?>" required>
        </div>
        <br><br>
        <div class="input-box">
          <span class="details">PHONE NO</span>
          <input type="int" placeholder="Enter your number" name="M_PHONENO" value="<?php echo "$mp" ?>" minlength="10" required>
        </div>
        <br><br>
          
        
      </div>
    
  </div> 
  <div class="container2">
    <div class="input-box">
      
        <label >ADDRESS: </label>
        <textarea type="text" name="ADDRESS" placeholder="Enter your address" value="<?php echo "$ad" ?>" required></textarea>
     
      <button class="DB" id="submit"> UPDATE
      </button>
    </form>
</body>
</html>

