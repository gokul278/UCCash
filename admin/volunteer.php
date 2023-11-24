<?php

session_start();


if(isset($_SESSION["admin_id"])){

include('../requiredfiles/connectiondb.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Volunteer Admin</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Onest&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="background-color:black">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img style="background-color:black" src="../images/logouc.png" height="80" alt="logo">
                <!-- <a class="navbar-brand" href="volunteer.php">Uccash Foundation</a>  -->
            </div>
  <div style="color: white;
padding: 21px 50px 5px 50px;
float: right;
font-size: 20px;background-color:black"><a href="logout.php" style="font-size:15px;font-weight:600" class="btn btn-danger">Logout&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="height:91%;background-color:black">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" style="font-size:16px;font-family: 'Exo', sans-serif;"> 
                    <li></li>            
                    <li>
                        <a href="donation.php">&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-hand-holding-dollar"></i>Donation</a>
                    </li>     
                    <li>
                        <a  href="gallery.php">&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-image"></i>Gallery</a>
                    </li>
                    <li  >
                        <a  href="Messages.php">&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-message"></i>Messages</a>
                    </li>
                    <li>
                        <a class="active-menu" style="font-size:16px"  href="volunteer.php">&nbsp;&nbsp;<i class="fa-solid fa-handshake-angle"></i>Volunteer</a>
                    </li>
                    
                    	
                    				
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: 'Onest', sans-serif;">
        <div id="page-inner">
                <div class="row" align="center">
                    <div class="col-md-12">  
                     <h2><strong style="color:white;background-color:#DAA520;padding:12px;border-radius:10px"><i class="fa-solid fa-handshake-angle"></i>&nbsp;Volunteer</strong></h2>   
                    </div>
                </div>
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center" style="background-color:#DAA520;">
                            <strong style="font-size:16px;color:white;letter-spacing:1px">Volunteer Messages</strong>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="border: 1px solid #000;">
                                    <thead>
                                        <tr style="font-size:14px;color:white;letter-spacing:1px;background-color:#DAA520;">
                                            <th style="text-align: center;border: 1px solid #000;">Volunteers Name</th>
                                            <th style="text-align: center;border: 1px solid #000;">Email</th>
                                            <th style="text-align: center;border: 1px solid #000;">Messages</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM volunteer_messages
                                        ORDER BY message_id DESC;";
                                        $res = $con->query($sql);

                                        foreach($res as $row){
                                            echo "<tr id='{$row["message_id"]}' class'odd gradeX'>
                                            <td style='border: 1px solid #000;'>{$row["message_name"]}</td>
                                            <td style='border: 1px solid #000;'>{$row["message_email"]}</td>
                                            <td style='border: 1px solid #000;'>{$row["message_content"]}</td>                                            
                                        </tr>";
                                        }
                                        ?>                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            </div>
            </div>
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>


<?php
}else{?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Try again</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
</head>
<body>
  <div class="mt-5 pt-5" align="center">
    <h1>Login Again</h1>
    <br>
    <a href="index.php"><button class="btn btn-outline-success">GO BACK</button></a>
  </div>
</body>
</html>



<?php
}
?>