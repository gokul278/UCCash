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
    <title>Gallery Admin </title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Onest&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                        <a  class="active-menu" style="font-size:17px"  href="gallery.php">&nbsp;&nbsp;<i class="fa-solid fa-image"></i>Gallery</a>
                    </li>
                    <li  >
                        <a  href="Messages.php">&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-message"></i>Messages</a>
                    </li>
                    <li>
                        <a href="volunteer.php">&nbsp;&nbsp;<i class="fa-solid fa-handshake-angle"></i>Volunteer</a>
                    </li>
                    
                    	
                    				
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: 'Onest', sans-serif;">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12" align="center">
                     <h2><strong style="color:white;background-color:#DAA520;padding:12px;border-radius:10px"><i class="fa-solid fa-image"></i>&nbsp;Gallery</strong></h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
                 
                 <style>
                .upload__box {
  padding: 40px;
}
.upload__inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.upload__btn {
  display: inline-block;
  font-weight: 600;
  color: #fff;
  text-align: center;
  min-width: 116px;
  padding: 5px;
  transition: all 0.3s ease;
  cursor: pointer;
  border: 2px solid;
  background-color: #4045ba;
  border-color: #4045ba;
  border-radius: 10px;
  line-height: 26px;
  font-size: 14px;
}
.upload__btn:hover {
  background-color: unset;
  color: #4045ba;
  transition: all 0.3s ease;
}
.upload__btn-box {
  margin-bottom: 10px;
}
.upload__img-wrap {
  display: flex;
  flex-wrap: wrap;
  margin: 15px 65px;
}
.upload__img-box {
  width: 200px;
  padding: 0 10px;
  margin-bottom: 12px;
}
.upload__img-close {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 10px;
  right: 10px;
  text-align: center;
  line-height: 24px;
  z-index: 1;
  cursor: pointer;
}
.upload__img-close:after {
  content: "✖";
  font-size: 14px;
  color: white;
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}
                   
                  </style>
                
                </head>
                <body>
                <form id="imagefrm" method="post" enctype="multipart/form-data">
    <div class="upload__box" align="center">
        <div class="upload__btn-box">
            <label class="upload__btn">
                <p>Choose images</p>
                <input type="file" name="uploadimages[]" accept="image/*" multiple="" data-max_length="20" class="upload__inputfile" onclick="clearimage()">
            </label>
        </div>
        <p id="errormessage" align="center" style="color:red"></p>
        <input type="hidden" name="way" value="uploadimagefrm">
        <div class="upload__img-wrap" align="center"></div>
    </div>
    <div align="center">
        <button type="submit" style="height: 50px; width: 150px; font-size: 18px; font-weight: 600;background-color:#DAA520" class="btn btn-warning">Upload</button>
    </div>
</form>
                <script type="text/javascript">
jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}

                </script>

<br>
<div class="panel-body">
  <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
              <tr style="font-size:16px;color:white;letter-spacing:1px;background-color:#DAA520;">
                  <th style="text-align: center;border: 1px solid #000;">Image</th>
                  <th style="text-align: center;border: 1px solid #000;">Action</th>                  
              </tr>
          </thead>
          <tbody align="center">
            <?php
            $sql = "SELECT * FROM gallery_images ORDER BY image_id DESC";
            $res = $con->query($sql);
            
            if ($res->num_rows > 0) {
                // Records were found, so display them
                foreach ($res as $row) {
                    echo "<tr class='odd gradeX'>
                        <td style='border: 1px solid #000;'><img width='200' src='./images/{$row["image_name"]}' alt=''></td>
                        <td style='border: 1px solid #000;'><br><br><button value='{$row["image_id"]}' imagename='{$row["image_name"]}' class='btn btn-danger removeimage'>Delete</button></td>
                    </tr>";
                }
            } else {
                // No records were found, display a message
                echo "<tr><td colspan='2'>No records found</td></tr>";
            }
            ?>
              <!-- <tr class="odd gradeX">
                  <td><img width="200" src="./images/20231015072156_veg (1).jpeg" alt=""></td>
                  <td><br><br><button class="btn btn-danger">Delete</button></td>                  
              </tr> -->
              
          </tbody>
      </table>
  </div>
  
</div>
                
                <style>
                .img-fluid,.img-thumbnail{
                    width: 180px;
                    height: 170px;
                }
                
                .container {
                    padding: 2rem 0rem;
                  }
                  
                  h4 {
                    margin: 2rem 0rem 1rem;
                  }
                  
                  .table-image {
                    td, th {
                      vertical-align: middle;
                    }
                  }</style>
                                
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    <script src="./js/gallery.js"></script>
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