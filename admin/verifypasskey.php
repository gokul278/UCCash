<?php
session_start();
session_destroy();
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
  <div class="main" style="height:400px">
  <div align="center"><img src="../images/uclogo.png" height="100" alt="logo"></div>
    <p class="sign" align="center">Welcome Dr.P.Balakrishnnan</p>
    <p class="sign" style="font-size:20px;color:black" align="center">Enter PassKey to Change Password</p>
    <form id="checkpass" class="form1" align="center">
        <input type="hidden" name="type" value="checkpasskey">
        <input class="un " type="text" name="passkey" align="center" placeholder="PassKey" onclick="passkeyerrclear()" required>
      <p id="checkpasserr" style="color:red" align="center"></p>
      <div align="center">
        <button type="submit" class="submit" style="font-size:20px" align="center">Check PassKey</button>
      </div>
    </form>
      <br>
    </div>
     
</body>
<script src="./js/chechpasskey.js"></script>
</html>