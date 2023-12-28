<?php

session_start();


if(isset($_SESSION["passwordchange"])){
?>

<html>
<head>
  <link rel="stylesheet" href="./assets/css/admin login.css">
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.css" />

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>UCCash - PassKey</title>
</head>

<body>
  <div class="main" style="height:520px">
  <div align="center"><img src="../images/uclogo.png" height="100" alt="logo"></div>
    <p class="sign" align="center">Welcome Dr.P.Balakrishnnan</p>
    <p class="sign" style="font-size:20px;color:black" align="center">Enter New Password</p>
    <p class="sign" style="font-size:12px;color:red;padding-left:40px" align="start">*A lowercase letter &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*A capital (UPPERCASE) Letter</p>
    <p class="sign" style="font-size:12px;color:red;padding-left:40px" align="start">*Minimum 8 characters &nbsp;&nbsp;&nbsp;*A number</p>
    <form id="passchange" class="form1" align="center">
        <input type="hidden" name="type" value="passchange">
        <input class="un " type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" align="center" placeholder="Password" onclick="clearpassword()" required>
        <input class="un " type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="repassword" align="center" placeholder="Confirm Password" onclick="clearpassword()" required>
      <p id="passerr" style="color:red" align="center"></p>
      <div align="center">
        <button type="submit" class="submit" style="font-size:20px" align="center">Confirm Password</button>
      </div>
    </form>
      <br>
    </div>
     
</body>
<script src="./js/chechpasskey.js"></script>
</html>


<?php
}else{
?>

<html>
<head>
  <link rel="stylesheet" href="./assets/css/admin login.css">
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.css" />

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>UCCash - PassKey</title>
</head>

<body>
  <div class="main" style="height:310px">
  <div align="center"><img src="../images/uclogo.png" height="100" alt="logo"></div>
    <p class="sign" align="center">Welcome Dr.P.Balakrishnnan</p>
    <p class="sign" style="font-size:20px;color:black" align="center">Re-Enter PassKey</p>
    <br>
    <div align="center">
        <a href="verifypasskey.php" class="submit" style="font-size:20px" align="center">Enter PassKey</a>
      </div>
    </div>
     
</body>
<script src="./js/chechpasskey.js"></script>
</html>

<?php
}?>