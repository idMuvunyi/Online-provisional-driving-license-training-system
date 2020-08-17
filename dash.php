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
});
    
     
    </script>
</head>
<style>
    
    body{
        height: 700px;
    }
    </style>
<body  style="background:#eee;">

<div class="header">
<div class="row">



</div></div> 
    
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
                    <li><?php
include_once 'dbConnection.php';
session_start();
if (!(isset($_SESSION['username']))  || ($_SESSION['key']) != '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
    session_destroy();
    header("location:index.php");
} else {
    $name     = $_SESSION['name'];
    $username = $_SESSION['username'];

    if ($_SESSION['username'] == "teacher" && $_SERVER['REQUEST_URI'] == "/mps/dash.php?q=0") {
        header('Location: /mps/dash.php?q=1');
    }
    
    include_once 'dbConnection.php';
    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Muraho neza,</span> <span class="log log1" style="color:lightyellow">' . $username . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp; Sohoka</button></a></span>';
}
?></li>
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
    
if (@$_GET['q'] == 0)
    echo 'class="active"';
?>><a href="dash.php?q=0">Ahabanza<span class="sr-only">(current)</span></a></li>
        <li <?php
if (@$_GET['q'] == 1)
    echo 'class="active"';
?>><a href="dash.php?q=1">Abakoresharubuga</a></li>
    <li <?php
if (@$_GET['q'] == 2)
    echo 'class="active"';
?>><a href="dash.php?q=2">Muri rusange</a></li>
          
           <li <?php
if (@$_GET['q'] == 3)
    echo 'class="active"';
?>><a href="dash.php?q=3">Ubutumwa</a></li>
            <li <?php
if (@$_GET['q'] == 4)
    echo 'class="active"';
?>><a href="dash.php?q=4">Ongeramo isuzuma</a></li>
          

        <li <?php
if (@$_GET['q'] == 5)
    echo 'class="active"';
?>><a href="dash.php?q=5">Kuramo Isuzuma</a></li>    
        <li <?php
if (@$_GET['q'] == 6)
    echo 'class="active"';
?>><a href="a.php">Kosora Ikizamini</a></li>

      </ul>
          </div>
  </div>
</nav>
<div class="container">
<div class="row">
<div class="col-md-12">
<?php
if (@$_GET['q'] == 0) {
    
    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
    echo '<div class=" table-responsive" >
    
<table class="table table-striped title1 table-hover"  style="vertical-align:middle">
    
<tr><td style="vertical-align:middle"><b>No</b></td><td 
style="vertical-align:middle"><b>Amazina</b></td><td 
style="vertical-align:middle"><b>Umubare</b></td><td 
style="vertical-align:middle"><b>Amanota</b></td><td 
style="vertical-align:middle"><b>Igihe ntarengwa</b></td><td 
style="vertical-align:middle"><b>Imiterere</b></td><td 
style="vertical-align:middle"><b>Imikorere</b></td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $title   = $row['title'];
        $eid = $row['eid'];
        $total   = mysqli_num_rows(mysqli_query($con,"select * from questions where eid='$eid '"));
        $correct = $row['correct'];
        $time    = $row['time'];
        $eid     = $row['eid'];
        $status  = $row['status'];
        if ($status == "enabled") {
            echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle"> Iminota ' . $time . '&nbsp;</td><td style="vertical-align:middle">Byemejwe</td>
  <td style="vertical-align:middle"><b><a href="update.php?deidquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:#ff0000;font-size:12px;padding:5px;">&nbsp;<span><b>Bihakane</b></span></a></b></td></tr>';
        } else {
            echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle"> Iminota ' . $time . '&nbsp;</td><td style="vertical-align:middle">Ntibyemejwe</td>
  <td style="vertical-align:middle"><b><a href="update.php?eeidquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:darkgreen;font-size:12px;padding:5px;">&nbsp;<span><b>Byemeze</b></span></a></b></td></tr>';
            
        }
    }
}
if (@$_GET['q'] == 2) {
    if(isset($_GET['show'])){
        $show = $_GET['show'];
        $showfrom = (($show-1)*10) + 1;
        $showtill = $showfrom + 9;
    }
    else{
        $show = 1;
        $showfrom = 1;
        $showtill = 10;
    }
    $q = mysqli_query($con, "SELECT * FROM rank") or die('Error223');
    echo '<div class="panel title">
<table class="table table-striped title1" >
<tr><td style="vertical-align:middle"><b>Numero</b></td><td style="vertical-align:middle"><b>Amazina bakoresha</b></td><td style="vertical-align:middle"><b>Amanota bagize</b></td><td style="vertical-align:middle"><b>Igikorwa</b></td></tr>';
    $c = $showfrom-1;
    $total = mysqli_num_rows($q);
    if($total >= $showfrom){
        $q = mysqli_query($con, "SELECT * FROM rank ORDER BY score DESC, time ASC LIMIT ".($showfrom-1).",10") or die('Error223');
        while ($row = mysqli_fetch_array($q)) {
            $e = $row['phone'];
            $s = $row['score'];
            $eid= $row['id'];
            
            $q12 = mysqli_query($con, "SELECT * FROM user WHERE phone='$e' ") or die('Error231');
            while ($row = mysqli_fetch_array($q12)) {
                $name     = $row['name'];
             
                $username = $row['phone'];
            
                
            }
            $c++;
            echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td style="vertical-align:middle">' . $e . '</td><td style="vertical-align:middle">' . $s . '</td> <td style="vertical-align:middle"><b><a title="Siba" href="update.php?id=' . $eid . '" class="btn btn-warning" style="margin:0px;background:;color:white">&nbsp;<span class="title1"><b>Kuramo</b></td><td style="vertical-align:middle">';
        }
    }
    else{
    }
    echo '</table></div>';
    echo '<div class="panel title"><table class="table table-striped title1" ><tr>';
    $total = round($total/10) + 1;
    if(isset($_GET['show'])){
        $show = $_GET['show'];
    }
    else{
        $show = 1;
    }
    if($show == 1 && $total==1){
    }
    else if($show == 1 && $total!=1){
        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
    }
    else if($show != 1 && $show==$total){
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';

        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
    }
    else{
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
    }
    echo '</tr></table></div>';
}
if (@$_GET['q'] == 1) {
    
    $result = mysqli_query($con, "SELECT * FROM user") or die('Error');
    echo '<div class="panel"><table class="table table-striped title1">
<tr><td style="vertical-align:middle"><b>No</b></td><td 
style="vertical-align:middle"><b>Amazina</b></td><td 
style="vertical-align:middle"><b>Numero</b></td><td>
</td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $name      = $row['name'];
        $phone      = $row['phone'];
       
        
        echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $name . '</td> <td style="vertical-align:middle">' . $phone . '</td>
  <td style="vertical-align:middle"><a title="Siba" href="update.php?dusername=' . $phone . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
    }
    $c = 0;
    echo '</table></div>';
    
}
if (@$_GET['q'] == 3) {
    $result = mysqli_query($con, "SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
    echo '<div class="table-responsive"><table class="table table-striped title1  table-hover" style="vertical-align:middle">
<tr><td style="vertical-align:middle"><b>No</b></td><td 
style="vertical-align:middle"><b>Ikivugwaho</b></td><td 
style="vertical-align:middle"><b>Izina akoresha</b></td><td 
style="vertical-align:middle"><b>Italiki</b></td><td 
style="vertical-align:middle"><b>Igihe</b></td><td 
style="vertical-align:middle"><b>uwohereje</b></td><td 
style="vertical-align:middle"><b>Soma</b></td><td
style="vertical-align:middle"><b>siba</b></td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $date      = $row['date'];
        $date      = date("d-m-Y", strtotime($date));
        $time      = $row['time'];
        $subject   = $row['subject'];
        $name      = $row['name'];
        $username1 = $row['username'];
        $id        = $row['id'];
        echo '<tr><td style="vertical-align:middle">' . $c++ . '</td>';
        echo '<td style="vertical-align:middle"><a title="Click to open feedback" href="dash.php?q=3&fid=' . $id . '">' . $subject . '</a></td><td style="vertical-align:middle">' . $username1 . '</td><td style="vertical-align:middle">' . $date . '</td><td style="vertical-align:middle">' . $time . '</td><td style="vertical-align:middle">' . $name . '</td>
  <td style="vertical-align:middle"><a title="Open Feedback" href="dash.php?q=3&fid=' . $id . '"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
        echo '<td style="vertical-align:middle"><a title="Delete Feedback" href="update.php?fdid=' . $id . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

  </tr>';
    }
    echo '</table></div>';
}
if (@$_GET['fid']) {
    echo '<br />';
    $id = @$_GET['fid'];
    $result = mysqli_query($con, "SELECT * FROM feedback WHERE id='$id' ") or die('Error');
    while ($row = mysqli_fetch_array($result)) {
        $name     = $row['name'];
        $subject  = $row['subject'];
        $date     = $row['date'];
        $date     = date("d-m-Y", strtotime($date));
        $time     = $row['time'];
        $feedback = $row['feedback'];
        
        echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>' . $subject . '</b></h1>';
        echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;' . $date . '</span>
<span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;' . $time . '</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;' . $name . '</span><br />' . $feedback . '</div></div>';
    }
}
if (@$_GET['q'] == 4 && !(@$_GET['step'])) {
    echo ' 
<div class="row">


<div class="col-md-6 col-md-offset-3" ><b style="text-align:center; font-size:17px;margin-top:30px">Injiza ibiranga isuzuma</b></div><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="umutwe wikibazo" class="form-control input-md" type="text" required>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="umubare wibibazo byose" class="form-control input-md" type="number" min="1" max="20" required>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="right"></label>  
  <div class="col-md-12">
  <input id="right" name="right" placeholder="Amanota kugisubizo cyukuri" class="form-control input-md" min="1" type="number" required>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="wrong"></label>  
  <div class="col-md-12">
  <input id="wrong" name="wrong" placeholder="Amanota ku kibazo wishe" class="form-control input-md" min="0" max="0" type="number" required>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>  
  <div class="col-md-12">
  <input id="time" name="time" placeholder="Iminota ufite" class="form-control input-md" min="1" type="number" required>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Ohereza" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';
    
    
    
}
if (@$_GET['q'] == 4 && (@$_GET['step']) == 2) {
    echo ' 
<div class="row">
<br>
<div class="col-md-6 col-md-offset-3" ><b style="text-align:center; font-size:17px;margin-top:30px">Winjije ibiranga buri kibazo</b> </div><br /><br /></div>

<br>

</div>


 <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n=' . @$_GET['n'] . '&eid=' . @$_GET['eid'] . '&ch=5 "  method="POST">
<fieldset>
';
    
    for ($i = 1; $i <= @$_GET['n']; $i++) {
        
        

        
 echo '<b style="color:darkgreen">Ikibazo cya&nbsp;' . $i . '&nbsp;:</><br /><!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="qns' . $i . ' "></label>  
  
  <div class="col-md-12">
  <textarea rows="3" cols="5" name="qns' . $i . '" class="form-control" placeholder="Andika ikibazo cya ' . $i . ' hano..." id="words" required ></textarea>  
  </div>
  
</div>
<br>

<b>Urabaza ibyapa? Hitamo</><br /><!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="image' . $i . ' "></label>  
  <div class="col-md-12">
  <input  type="file" name="image' . $i . '"  class="form-control input-md" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '1"></label>  
  <div class="col-md-12">
  <input id="' . $i . '1" name="' . $i . '1" placeholder="a" class="form-control input-md" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '2"></label>  
  <div class="col-md-12">
  <input id="' . $i . '2" name="' . $i . '2" placeholder=" b" class="form-control input-md" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '3"></label>  
  <div class="col-md-12">
  <input id="' . $i . '3" name="' . $i . '3" placeholder=" c" class="form-control input-md" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '4"></label>  
  <div class="col-md-12">
  <input id="' . $i . '4" name="' . $i . '4" placeholder=" d" class="form-control input-md" type="text">
  </div>

</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="' . $i . '5"></label>  
  <div class="col-md-12">
  <input id="' . $i . '5" name="' . $i . '5" placeholder=" e" class="form-control input-md" type="text">
  </div>

</div>
<br />
<b>Igisubizo cyukuri ni</b>:<br /><br />
<select id="ans' . $i . '" name="ans' . $i . '" placeholder="Hitamo igisubizo cyukuri " class="form-control input-md" required>
   <option value="a">Hitamo igisubizo ku kibazo cya ' . $i . '</option>
  <option value="a">Hitamo a</option>
  <option value="b">Hitamo b</option>
  <option value="c">Hitamo c</option>
  <option value="d">Hitamo d</option>
  <option value="e">Hitamo e</option>
  </select><br /><br />';
        
    }
    
    echo '<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Emeza" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';
    
    
    
}
if (@$_GET['q'] == 5) {
    
    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
    echo '<div class="table-responsive"><table class="table table-striped title1 table-hover">
<tr><td style="vertical-align:middle"><b>No</b></td><td 
style="vertical-align:middle"><b>Inyito</b></td><td 
style="vertical-align:middle"><b>Umubare</b></td><td 
style="vertical-align:middle"><b>Amanota</b></td><td 
style="vertical-align:middle"><b>Igihe ntarengwa</b></td><td 
style="vertical-align:middle"><b>Imikorere</b></td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $title   = $row['title'];
        $eid = $row['eid'];
        $total   = mysqli_num_rows(mysqli_query($con,"select * from questions where eid='$eid '"));
        $correct = $row['correct'];
        $time    = $row['time'];
        $eid     = $row['eid'];
        echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;min</td>
  <td style="vertical-align:middle"><b><a href="update.php?q=rmquiz&eid=' . $eid . '" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Kuramo</b></span></a></b></td></tr>';
    }
    $c = 0;
    echo '</table></div>';
    
}
?>

<?php if (@$_GET['q'] == 6) { ?>
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
<?php } ?>
</div>
</div></div>
</body>
</html>
