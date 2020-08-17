<?php
ob_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    
 <!--
 ==============================================
 Mobile + Desktop + Browser Responsive Tags
 ==============================================
        -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content=""/>
    
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ONLINE EXAMINATION PROVISIONAL DRIVING LICENCE</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>  
    <link rel="stylesheet" href="css_2/custom.css">
 <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>


        
<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});</script>
    
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>


<?php
include_once 'dbConnection.php';
?>
    
  </head>  
 <style>
    
    body{
        height: 700px;
    }
    </style>
    
<body>
 
<div class="header">
<div class="row">



</div></div> 
    
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
                    <li> 
<?php
include_once 'dbConnection.php';
session_start();
if (!(isset($_SESSION['phone']))) {
    header("location:index.php");
} else {
    $name     = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    
    include_once 'dbConnection.php';
    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Muraho neza,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Sohoka</button></a></span>';
}
?>
                         </li>
                    </ul>
                </div>
                
 
                
            </div>
     
     
        </nav> 
    
    
    
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li <?php
if (@$_GET['q'] == 1)
    echo 'class="active"';
?>><a href="account.php?q=1"><span class="glyphicon glyphicon-Home" aria-hidden="true"></span>&nbsp;Ahabanza<span class="sr-only">(current)</span></a></li>
<li <?php
if (@$_GET['q'] == 2)
    echo 'class="active"';
?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Ibazwa ry'ubushize</a></li>
<li <?php
if (@$_GET['q'] == 3)
    echo 'class="active"';
?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Muri rusange</a></li>
<li <?php
if (@$_GET['q'] == 4)
    echo 'class="active"';
    
?>><a href="advisor.php?q=4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Amategeko Aranga Ikizamini</a></li>
    
    
</ul>
           
      </div>
  </div>
</nav>
    
<div class="container">
<div class="row">
<div class="col-md-12">
<?php
echo '<div class="panel" style="padding-top:1px;padding-left:15%;padding-right:15%;word-wrap:break-word"><h3 align="center" style="font-family:calibri">:: Bimwe na bimwe ukwiriye kumenya ::</h3><br /><ul type="circle"><font style="font-size:14px;font-family:calibri">';
    $file = fopen("inama.txt", "r");
    while (!feof($file)) {
        echo '<li>';
        $string = fgets($file);
        $num    = strlen($string) -1;
        $c      = str_split($string);
        for ($i = 0; $i < $num; $i++) {
            $start = $c[$i];
            if ($c[$i] == ' ' && $start == ' ') {
                echo '&nbsp;';
            } else {
                echo $c[$i];
            }
        }
        echo "</li><br />";
    }
    
    fclose($file);
    echo '</font></ul></div>';
?>
</div>
</div>
</div>

<div class="row footer">
 <div class="col-md-2 box"></div>
<div class="col-md-6 box">
<span href="#" data-target="#login" style="color:lightyellow">Tuyishime Edward<br><br></span></div>
<div class="col-md-2 box">
<a href="feedback.php" style="color:lightyellow;text-decoration:underline" onmouseover="this.style('color:yellow')" target="new">Uko bibonwa</a></div>
<div class="col-md-2 box">
<a href="about.php" s style="color:lightyellow;text-decoration:underline" onmouseover="this.style('color:yellow')" target="new">Ku babazwa</a></div>
</div>
</body>
</html>