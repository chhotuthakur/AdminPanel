<?php


require 'database.php';
// if (isset($_POST['submit'])) {






// $title = isset($_POST['title']);
  $sql = "UPDATE settings_main SET title = '$_POST[title]',	subtitle = '$_POST[stitle]', conmail= '$_POST[email]',	connum= '$_POST[mnum]',	add1= '$_POST[a1]',	add2= '$_POST[a2]',	add3= '$_POST[a3]',	pincode= '$_POST[pincode]',	twitter= '$_POST[tw]',	facebook= '$_POST[fb]',	instagram= '$_POST[ig]' WHERE id=1";

  // }
  if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";


    // echo '<script type ="text/JavaScript">';
    // echo 'alert("JavaScript Alert Box by PHP")';
    // echo '</script>';





  } else {
    // echo "Error updating record: " . mysqli_error($conn);

  }
// }
?>






<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
    </head>
    <style>
      .column {
  float: left;
  width: 40%;
  margin-left: 50px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.full {
      display: block;
	  width: 30%;
    margin-top: 15px;
    margin-bottom: 10px;
    float: right;
   }
    </style>


    <body class="skin-red">
    <div class="wrapper">
      <?php include 'includes/main_header.php'?>
      <?php include 'includes/left_side.php'?>
      <div class="content-wrapper">

    <div class="box-body short">

    <div class="row">
                  <form role="form" action="" method="post">
                    <!-- text input -->
                    <div class="form-group" >
<div class="column">
                      <label>Enter Site Title</label>
                      <input type="text" name="title" class="form-control" placeholder="Website Title"/>
                      <label>Enter Site Subtitle</label>
                      <input type="text" name="stitle" class="form-control" placeholder="Website SubTitle"/>

                      <div class="form-group">
                      <label for="exampleInputFile">Select Logo</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                      
                      

                      <!-- address -->
                      <label>Address</label>
                      <input type="text" name="a1" class="form-control" placeholder="Address line 1"/>
                     
                      <input type="text" name="a2" class="form-control" placeholder="Address line 2"/>
                     
                      <input type="text" name="a3" class="form-control" placeholder="Address line 3"/>

                      <input type="text" name="pincode" class="form-control" placeholder="Pincode"/>
                    
                      
                      </div>
                      <!-- contact -->
<div class="column">
                      <label>Contact Details</label>
                      <input type="text" name="email" class="form-control" placeholder="Email Address"/>
                     
                      <input type="text" name="mnum" class="form-control" placeholder="Mobile Number"/>
                     
                      <input type="text" name="fb" class="form-control" placeholder="Facebook Id"/>

                      <input type="text" name="tw" class="form-control" placeholder="Twitter Id"/>

                      <input type="text" name="ig" class="form-control" placeholder="Instagram Id"/>

                      <input type="text" name="cr" class="form-control" placeholder="Copy Right Text"/>
                      <button class="btn btn-block btn-primary full" value="submit">Save </button>
                      </div>
                    </div>
                  </div>
               </div>
              </div>
      




        
     <!-- jQuery 2.1.3 -->
     <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>   
    <script src="" async defer></script>
    </div>
    </body>
</html>