<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> ONLINE EXAMINATION PROVISIONAL DRIVING LICENCE</title>
  <link rel="stylesheet" href="css/main.css_2">
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
  

<?php
include_once 'dbConnection.php';
session_start();
if ((!isset($_SESSION['username']))) {
    echo '<a href="#" class="pull-right logb btn btn-primary" data-toggle="modal" data-target="#myModal" style="color:white"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Login</font></a>&nbsp;';
} else {
    echo '<a href="logout.php?q=feedback.php" class="pull-right logb btn btn-primary" style="color:white"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Sohoka</font></a>&nbsp;';
}
?>


    
<div class="row header">
    
    

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Kandida uzuza hano ubone gukomeza</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="username"></label>  
  <div class="col-md-6">
  <input id="username" name="phone" placeholder="Numero Ya Telefoni" class="form-control input-md" type="username">
    
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
    
      
 <nav class="navbar navbar-default navbar-fixed-top"  style="background:#2e8287;">
            <div class="container" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h5 class="navbar-brand" style="color:#ffffff; font-size:14px" ><i class="glyphicon glyphicon-briefcase"></i> PROFESSIONAL DRIVING SCHOOL COOPERATIVE</h5>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
				   
                   
					 <ul class="nav navbar-nav navbar-right">
                    <li><a style="margin-top:12px" href="login.php" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span style="color:white" class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b style="color:white">Injira </b> </span></a></li>
                         
                        <li><a style="margin-top:12px" href="index.php" class="btn btn-primary logb" style="color:white"><span style="color:white" class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold; color:white">Ahabanza</font></a></li> 
                    </ul>
                </div>
                
 
                
            </div>
     
     
        </nav>
    
    
    

<div class="bg1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(image/bg1.jpg); min-height:430px;">
<h2 align="center" style="font-family:'typo'; color:#000066">IBIBAZO/IBITEKEREZO</h2>
<div style="font-size:14px;margin-top:20px"><br />
<?php
if (@$_GET['q'])
    echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;' . @$_GET['q'] . '</span>';
else {
    echo ' 

<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>Izina:</b><br /><br /><br /><b>Ikivugwaho:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Andika izina ryawe" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Andika niba ugize ikibazo cg igitekerezo" class="form-control input-md" type="text">    
</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>Imeri:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Andika Imeri yawe" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Andika birambuye icyo ushaka kutumenyesha "></textarea>
</div>
<div class="form-group" align="center">
<font style="font-size:12px;font-weight:bold"><input type="submit" name="submit" value="Ohereza" class="btn btn-primary" /></font>
</div>
</form>';
}
?>
</div>
<div class="col-md-3"></div></div>
</div></div>
</div>
<div class="row footer">
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers" style="color:white">uwakoze iyi sisiteme</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank" style="color:white">ibitekerezo byanyu</a></div></div>

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
         <br>
    <hr>
         <a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Muvunyi Idrissa</a>
          <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+250787691016</h4>
    <h4 style="font-family:'typo' ; font-size:18px ">muvunyiiddy@gmail.com</h4>
    <h4 style="font-family:'typo' ; font-size:18px">Kigali, Rwanda</h4>
    <hr>   
    </div></div>
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