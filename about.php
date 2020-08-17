<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ONLINE&nbsp;EXAMINATION&nbsp;PROVISIONAL&nbsp;DRIVING&nbsp;LICENCE</title>
  
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>  
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
</head>

<body>
<div class="row header">
<div class="col-lg-6">
<span class="logo">ONLINE&nbsp;EXAMINATION&nbsp;PROVISIONAL&nbsp;DRIVING&nbsp;LICENCE</span></div>
<div class="col-md-2">
</div>
<div class="col-md-4">
<?php
include_once 'dbConnection.php';
session_start();
if ((!isset($_SESSION['username']))) {
    echo '<a href="#" class="pull-right logb btn btn-primary" data-toggle="modal" data-target="#myModal" style="color:white"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Login</font></a>&nbsp;';
} else {
    echo '<a href="logout.php?q=feedback.php" class="pull-right logb btn btn-primary" style="color:white"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Sohoka</font></a>&nbsp;';
}
?>

<a href="index.php" class="pull-right btn logb btn-primary" style="color:white"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Ahabanza</font></a>&nbsp;
</div></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">uzuza hano ubone gukomeza</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="username"></label>  
  <div class="col-md-6">
  <input id="username" name="username" placeholder="izina ukoresha" class="form-control input-md" type="username">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="umubare w'ibanga" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Funga</button>
        <button type="submit" class="btn btn-primary">Injira</button>
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="bg1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(image/bg1.jpg);background-size:cover; min-height:400px;">
<h2 align="center" style="font-family:'typo'; color:#000066">Ku badusura</h2>
<div style="font-size:15px;font-weight:bold; margin-top:10px;word-wrap:break-word"> <br/>
<?php
$file = fopen("about.txt", "r");
while (!feof($file)) {
    $string = fgets($file);
    $num    = strlen($string) -1;
    $c      = str_split($string);
    for ($i = 0; $i < $num; $i++) {
        $last = $c[$i];
        if ($c[$i] == ' ' && $last == ' ') {
            echo '&nbsp;';
        } else {
            echo $c[$i];
        }
    }
    echo "<br />";
}

fclose($file);
?>
</div>
<div class="col-md-3"></div></div>
</div></div>
</div>
<div class="row footer">
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">uwakoze iyi sisiteme</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">ibitekerezo byanyu</a></div></div>

<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h30 class="modal-title" style="font-family:'typo' ;font-size:22px"><span style="color:blue">uwakoze iyi sisteme</span></h30>
      </div>
    
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src="image/caddu.jpg" width=100 height=100 alt="Roney" class="img-rounded">
     </div>
    <div class="col-md-5">
    <a href="https://www.facebook.com/Uwimana Roney" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Tuyishime Edward</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+250783637812</h4>
    <h4 style="font-family:'typo' ; font-size:18px ">TuyishimeEdward@gmail.com</h4>
    <h4 style="font-family:'typo' ; font-size:18px">Kigali Rwanda</h4>
    </div>
        
    <div class="col-md-5">
    <a href="https://www.facebook.com/Uwimana Roney" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Muvunyi Idrissa</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+250787691016</h4>
    <h4 style="font-family:'typo' ; font-size:18px ">muvunyiiddy@gmail.com</h4>
    <h4 style="font-family:'typo' ; font-size:18px">Kigali Rwanda</h4>
    </div>
    </div>
    </p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
      </div>
    </div>
  </div>
</div>
</body>
</html>