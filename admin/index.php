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
  <title>UCCash - Admin</title>
</head>

<body>
  <div class="main">
  <div align="center"><img src="../images/uclogo.png" height="100" alt="logo"></div>
    <p class="sign" align="center">Welcome Dr.P.Balakrishnnan</p>
    <form id="frm" class="form1" align="center">
      <input class="un " type="text" name="username" align="center" placeholder="Username" onclick="clearerror()" required>
      <input class="pass" type="password" name="password" align="center" placeholder="Password" onclick="clearerror()" required>
      <p id="errormessage" style="color:red" align="center"></p>
      <div align="center">
      <button type="submit" class="submit" style="font-size:20px" align="center">Login</button>
      </div>
      <br>
    </div>
     
</body>
<script src="./js/index.js"></script>
</html>