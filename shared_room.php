<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="design.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>SHARED ROOM</title>
</head>
<body>
  <section id="image_back">
    <form name="data_entry" action="shared.php" method="POST">

    <h1>SHARED ROOM</h1>
    <img class="room" src="images/Room_share.jpg" alt="room share">
  
    <article class="container">
      <div class="form">

        <div>
          <label>NAME:</label>
          <input type="text" name="NAME" placeholder="Enter name" required>
          <br><br>
        </div>
        <div>
          <label>REG NO:</label>
          <input type="tel" name="REGNO" placeholder="Enter Reg.no" required><br><br>
          <label>DEPT:</label>
          <input type="text" name="DEPT" placeholder="Enter DEPT" required>
          <br><br>
        </div>
        <div>
          <label>YEAR:</label>
          <select id="year" onchange="first()" name="YEAR" required>
            <option value="">select</option>
            <option value="I YEAR">I YEAR</option>
            <option value="II YEAR">II YEAR</option>
            <option value="III YEAR">III YEAR</option>
            <option value="IV YEAR">IV YEAR</option>
          </select>
          <br><br>
        </div>
      
        <div>
          <label>HOSTEL BLOCK:</label>
          <select onchange="block()" id="hostel"  name="HOSTEL_BLOCK" required>
            <option value="">select</option>
            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option style="display: none;" value="IV">IV</option>
            <option value="V">V</option>
          </select>
          <br><br>
        </div>
        <script>
          function first(){
            var y=document.getElementById("year").value;
            if(y=="I YEAR"){
              var x=document.getElementById("hostel");
              x.value="IV";
            }
          }
        </script>

      <?php
        $conn = new mysqli('localhost','root','','hms');
        if($conn->connect_error){
          echo "$conn->connect_error";
          die("Connection Failed : ". $conn->connect_error);
        }
        //$HOSTEL_BLOCK=$_POST['HOSTEL_BLOCK'];
        $query = "select ROOM_NO from room where STUDENTS != 0 ";
        $data = mysqli_query($conn,$query);
        $rowcount= mysqli_num_rows($data);
      ?>
        <div>
          <label>ROOM NO:</label>
          <select name="ROOM_NO" id="" required>
            <option value="">select</option>
            <?php 
              for($i=1;$i<=$rowcount;$i++) {
                $row=mysqli_fetch_array($data);
            ?>
            <option value="<?php echo $row["ROOM_NO"] ?>"><?php echo $row["ROOM_NO"] ?></option>
            <!-- <option value="E-102">E-102</option>
            <option value="E-103">E-103</option> -->
            <?php
              }
            ?>
          </select>
          <br><br>
        </div>
        <div>
          <label>DURATION:</label>
          <select id="duration" onchange="second()" name="DURATION" required>
            <option value="">select</option>
            <option value="3 months">3 MONTHS</option>
            <option value="6 months">6 MONTHS</option>
            <option value="1 year">1 YEAR</option>
          </select>
          <br><br>
        </div>

        <div>
          <label>AMOUNT:</label>
          <input id="amount" type="text" name="AMOUNT" placeholder="Amount" required>
          <br><br>
        </div>
        <script>
          function second(){
            var a=document.getElementById("duration").value;
            if(a =="3 months"){
              var b=document.getElementById("amount");
              b.value="17000";
            }
            else if(a =="6 months"){
              var b=document.getElementById("amount");
              b.value="33000";
            }
            else if(a =="1 year"){
              var b=document.getElementById("amount");
              b.value="65000";
            }
            else {
              b.value="";
            }
          }
        </script>
        <div>
          <label>PHONE NO:</label>
          <input placeholder="Enter 10 Digit phone number" type="text" name="PHONE_NO" minlength="10" maxlength="10" pattern="{0-9} {10}" required>
          <br><br>
        </div>
    
        <div>
          <label>EMAIL ID:</label>
          <input type="email" name="EMAILID" placeholder="Enter Email" required>
        </div>
    
        <div>
          <ul>
            <button class="PAYFEE"> PAY FEE
            <!--<a
              class="in-button"
              href="https://rzp.io/l/MbqtXqjuCU"
              target="_blank"
              style="text-decoration: none;"
              >PAY FEE</a>-->
            </button>
          </ul>
        </div>
    </article>
    </form>
  </section>
</body>
</html>