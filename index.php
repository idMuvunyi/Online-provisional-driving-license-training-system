<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>
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
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="andika izina ryawe!.";
    return false;
  }
  var g = document.forms["form"]["gender"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Please select your gender";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 4) {
    document.getElementById("errormsg").innerHTML="Username must be at least 10 characters long";
    return false;
  }
  var m = document.forms["form"]["phno"].value;
  if (m.length != 10) {
    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == ""){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<5 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 5 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match.";
    return false;
  }
}
</script>
</head>
<style>
    .col-md-4 {
        background-color:burlywood;
    }    
    .row12{
            background-color:darkgrey;
    height: 200px;
        }
.row1{
            background-color:darkseagreen;
    height: 200px;
        }
</style>
<body>
<div class="header">

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
  <input  id="username" name="phone" placeholder="Numero Ya Telefoni" class="form-control input-md" type="text" autocomplete="off">
    
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
                        <span class="icon-bar" style="background:white"></span>
                        <span class="icon-bar" style="background:white"></span>
                        <span class="icon-bar" style="background:white"></span>
                    </button>
                    <h5 class="navbar-brand" style="color:#ffffff; font-size:14px" ><i class="glyphicon glyphicon-briefcase"></i> PROFESSIONAL DRIVING SCHOOL COOPERATIVE</h5>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
				   
                   
					 <ul class="nav navbar-nav navbar-right">
                    <li><a style="margin-top:12px" href="login.php" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span style="color:white" class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b style="color:white">Injira </b> </span></a></li>
                    </ul>
                </div>
                
 
                
            </div>
     
     
        </nav>
    
    
<link href="../tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/contentslider.css" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
<script type="text/javascript" src="../js/contentslider.js">
</script>
<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	  <script type="text/javascript" src="files/mootools.js"></script>
  <script type="text/javascript" src="files/caption.js"></script>
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<script type="text/javascript" src="kss/javascript/validation.js"></script>
<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">

<script src="kss/javascript/jquery-latest.pack.js" type="text/javascript"></script>
<script src="kss/javascript/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
 <script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
});
</script>

<div class="bg1">
<div class="row">
    
<div class="col-md-7"></div>
    
<div class="col-md-4 panel" style="margin-top:140px"> 
    
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h3 align="center">Kwiyandikisha</h3>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
if (@$_GET['q7']) {
    echo '<p style="color:blue;font-size:15px;">' . @$_GET['q7'];
}
?></div>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" maxlength="30" placeholder="Andika Amazina Yawe" class="form-control input-md" type="text">
  <script type="text/javascript">
				    var f1 = new LiveValidation('name');
				    f1.add(Validate.Presence,{failureMessage: "Andika Izina Ryawe Neza?"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   "Nizina Ryonyine Ryemewe"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       "Andika Izina Neza?"});
                 f1.add( Validate.Length, { minimum: 3, maximum: 30 } );
				 </script>   
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="phone"></label>  
  <div class="col-md-12">
  <input id="phone" name="phone" maxlength="10" placeholder="Andika numero ya telephone yawe" class="form-control input-md" type="text">
     <script type="text/javascript">
				    var f1 = new LiveValidation('phone');
				   f1.add(Validate.Presence,{failureMessage: "Ntugomba Gusiga Uno Mwanya"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: "Nimero Ya Telefone Yemewe Gusa"});
				   f1.add( Validate.Length, { minimum: 10, maximum: 10 } );
				 </script>
  </div>
</div>




<!-- <div class="form-group">
  <label class="col-md-12 control-label title1" for="username"></label>
  <div class="col-md-12">
    <input id="username" name="username" placeholder="hitamo izina uzakoresha" class="form-control input-md" type="text">
     <script type="text/javascript">
				    var f1 = new LiveValidation('username');
				    f1.add(Validate.Presence,{failureMessage: "Andika Izina Ryawe Uzakoresha?"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   "Nizina Ryonyine Ryemewe"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       "Andika Izina Neza?"});
                 f1.add( Validate.Length, { minimum: 3, maximum: 30 } );
				 </script>  
  </div>
</div> -->

<!-- <div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Shyiramo umubare w'ibanga" class="form-control input-md" type="password">
    
  </div>
</div> -->

<!-- <div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="emeza umubare w'ibanga" class="form-control input-md" type="password">
    
  </div>
</div> -->
    
    
    
    
    
    
    
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center"> 
    <input  type="submit" value=" Fungura konti " class="btn btn-primary" style="text-align:center" />
  </div>
</div>
    
</fieldset>
</form>
</div>
</div></div>
</div>
<div class="row footer">

<div class="col-md-3 box">
<a style="color:white" href="#" data-toggle="modal" data-target="#Teacher">injira Teacher </a></div>
    <div class="col-md-3 box">
<a style="color:white" href="#" data-toggle="modal" data-target="#login">injira Adimini </a></div>
<div class="col-md-3 box">
<a style="color:white" href="#" data-toggle="modal" data-target="#developers">uwakoze iyi sisiteme</a>
</div>
<div class="col-md-3 box">
<a style="color:white" href="feedback.php" target="_blank">ibitekerezo byanyu</a></div></div>

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
    <h4 style="font-family:'typo' ; font-size:18px">Kigali, Rwanda</h4>
    <br>
    <hr>
         <a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Muvunyi Idrissa</a>
          <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+250787691016</h4>
    <h4 style="font-family:'typo' ; font-size:18px ">muvunyiiddy@gmail.com</h4>
    <h4 style="font-family:'typo' ; font-size:18px">Kigali, Rwanda</h4>
    <hr></div></div>
    </p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for Teacher login-->
	 <div class="modal fade" id="Teacher">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:blue;font-family:'typo' ">Teacher Logini Paji</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row12">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="izina Teacher akoresha" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="30" placeholder="umubare w'ibanga" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Injira" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
    </div>
  </div>
</div>
<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:blue;font-family:'typo' ">Adimin Logini Peji</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row1">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="plc.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="izina admini akoresha" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="30" placeholder="umubare w'ibanga" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Injira" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
