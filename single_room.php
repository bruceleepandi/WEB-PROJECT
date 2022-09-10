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
    <title>SINGLE ROOM</title>
</head>
<body>
  <form name="data_entry" action="single.php" method="POST">

  <h1>SINGLE ROOM</h1>
  <img class="room" src="images/room_single.jpg" alt="room single">
  
  <article class="container">
    <div class="form">
    
     
      <div>
        <label>NAME:</label>
        <input type="text" name="NAME" placeholder="Enter Name" required>
        <br><br>
      </div>
      <div>
        <label>REGNO:</label>
        <input type="text" name="REGNO" placeholder="Enter Reg.no" required><br><br>
        <label>DEPT:</label>
        <input type="text" name="DEPT" placeholder="Enter DEPT" required>
        <br><br>
      </div>
      <div>
        <label>YEAR:</label>
        <select name="YEAR" required>
          <option value="">select</option>
        <option value="I YEAR">I YEAR</option>
        <option value="II YEAR">II YEAR</option>
        <option value="III YEAR">III YEAR</option>
        <option value="IV YEAR">IV YEAR</option>
        </select>
        <br><br>
      </div>
      <div>
        <label>HOSTEL_BLOCK:</label>
        <select onchange="first" name="HOSTEL_BLOCK" id="hostel_block" required>
          <option value="">select</option>
        <option value="VI">VI</option>
        <option value="VII">VII</option>
        </select>
        <br><br>
      </div>
      <?php
        $conn = new mysqli('localhost','root','','hms');
        if($conn->connect_error){
          echo "$conn->connect_error";
          die("Connection Failed : ". $conn->connect_error);
        }
        
        //$HOSTEL_BLOCK=$_POST['HOSTEL_BLOCK'];
        $query = "select ROOM_NO from room where TYPE = 'SINGLE' and STUDENTS != 0 ";
        $data = mysqli_query($conn,$query);
        $rowcount= mysqli_num_rows($data);
      ?>
      <div>
        <label>ROOM_NO:</label>
        <select name="ROOM_NO" id="" required>
          <option value="">select</option>
          <?php 
              for($i=1;$i<=$rowcount;$i++) {
                $row=mysqli_fetch_array($data);
          ?>
          <option value="<?php echo $row["ROOM_NO"] ?>"><?php echo $row["ROOM_NO"] ?></option>
        <!-- <option value="F-102">F-102</option>
        <option value="G-101">G-101</option> -->
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
          b.value="20000";
        }
        else if(a =="6 months"){
          var b=document.getElementById("amount");
          b.value="40000";
        }
        else if(a =="1 year"){
          var b=document.getElementById("amount");
          b.value="80000";
        }
        else {
          b.value="";
        }
      }
    </script>
      <div>
        <label>PHONE_NO:</label>
        <input placeholder="Enter 10 Digit phone number" type="text" name="PHONE_NO" minlength="10" pattern="{0-9} {10}" required>
        <br><br>
      </div>
    
    <div>
      <label>EMAILID:</label>
      <input type="email" name="EMAILID" placeholder="Enter Email" required>
    </div>
    <br><br>
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


  </div>

      


      

    
    </div>
  </article>
</form>
</body>
</html>