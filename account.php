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
                        <span class="icon-bar" style="background:white"></span>
                        <span class="icon-bar" style="background:white"></span>
                        <span class="icon-bar" style="background:white"></span>
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
?>><a href="account.php?q=1">Ahabanza<span class="sr-only">(current)</span></a></li>
<li <?php
if (@$_GET['q'] == 2)
    echo 'class="active"';
?>><a href="account.php?q=2">Ibazwa ry'ubushize</a></li>
<li <?php
if (@$_GET['q'] == 3)
    echo 'class="active"';
?>><a href="account.php?q=3">Muri rusange</a></li>
<li <?php
if (@$_GET['q'] == 4)
    echo 'class="active"';
    
?>><a href="advisor.php?q=4">Amategeko Aranga Ikizamini</a></li>
    
    
</ul>
           
      </div>
  </div>
</nav>
    
<div class="container">
<div class="row">
<div class="col-md-12">
<?php
if (@$_GET['q'] == 1) {
    
    $result = mysqli_query($con, "SELECT * FROM quiz INNER JOIN questions WHERE quiz.status = 'enabled' AND quiz.eid = questions.eid ORDER BY RAND() LIMIT 1") or die('Error');

    $c = 0;

   
 
echo '<div class="well table-responsive"><table class="table table-striped title1 table-hover"  style="vertical-align:middle">
<tr><td style="vertical-align:middle"><b>No</b></td><td 
style="vertical-align:middle"><b>Izina&nbsp;Ryi&nbsp;Kizamini&nbsp;Cya&nbsp;Provisoire</b></td><td 
style="vertical-align:middle"><b>Ibibazo&nbsp;byose&nbsp;hamwe</b></td><td 
style="vertical-align:middle"><b>Igisubizo&nbsp;nyakuri</b></td><td 
style="vertical-align:middle"><b>Igisubizo&nbsp;kitari&nbsp;cyo</b></td><td 
style="vertical-align:middle"><b>Amanota&nbsp;yose&nbsp;hamwe</b></td><td 
style="vertical-align:middle"><b>Igihe&nbsp;ntarengwa</b></td><td 
style="vertical-align:middle"><b>Imikorere</b></td></tr>';
    $c = 1; 
    while ($row = mysqli_fetch_array($result)) {
        $title   = $row['title'];
        $eid = $row['eid'];
        $total   = mysqli_num_rows(mysqli_query($con,"select * from questions where eid='$eid '"));
        $correct = $row['correct'];
        $wrong   = $row['wrong'];
        $time    = $row['time'];
        $eid     = $row['eid'];
        $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND phone='$phone'") or die('Error98');
        $rowcount = mysqli_num_rows($q12);
        if ($rowcount == 0) {
            echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct . '</td><td style="vertical-align:middle">' . $wrong . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle"> Iminota ' . $time . '&nbsp;</td>
  <td style="vertical-align:middle"><b><a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '&start=start" class="btn" style="color:#FFFFFF;background:darkgreen;font-size:12px;padding:7px;padding-left:10px;padding-right:10px"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span><b>Tangira</b></span></a></b></td></tr>';
        } else {
            $q = mysqli_query($con, "SELECT * FROM history WHERE phone='$_SESSION[phone]' AND eid='$eid' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $timec  = $row['timestamp'];
                $status = $row['status'];
            }
            $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $ttimec  = $row['time'];
                $qstatus = $row['status'];
            }
            $remaining = (($ttimec * 60) - ((time() - $timec)));
            if ($remaining > 0 && $qstatus == "enabled" && $status == "ongoing") {
                echo '<tr style="color:darkgreen"><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">+' . $correct . '</td><td style="vertical-align:middle">-' . $wrong . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle"> Iminota ' . $time . '&nbsp;</td>
  <td style="vertical-align:middle"><b><a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '&start=start" class="btn" style="margin:0px;background:darkorange;color:white">&nbsp;<span class="title1"><b>Continue</b></span></a></b></td></tr>';
            } else {
                echo '<tr style="color:darkgreen"><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">+' . $correct . '</td><td style="vertical-align:middle">-' . $wrong . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle"> Iminota ' . $time . '&nbsp;</td>
  <td style="vertical-align:middle"><b><a href="account.php?q=result&eid=' . $eid . '" class="btn" style="margin:0px;background:darkred;color:white">&nbsp;<span class="title1"><b>Reba Umusaruro</b></span></a></b></td></tr>';
            }
        }
    }
    echo "</table></div>";
    
}
?>
<?php
if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2 && isset($_SESSION['6e447159425d2d']) && $_SESSION['6e447159425d2d'] == '6e447159425d2d' && @$_GET['endquiz'] == 'end') {    unset($_SESSION['6e447159425d2d']);
    $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE phone='$_SESSION[phone]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND phone='$_SESSION[phone]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                 if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE phone='$_SESSION[phone]' AND eid='$_GET[eid]' ") or die('Error197');
                    $q = mysqli_query($con, "SELECT * FROM rank WHERE phone='$phone'") or die('Error161');
                    $rowcount = mysqli_num_rows($q);
                    if ($rowcount == 0) {
                        $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$phone','$s',NOW())") or die('Error165');
                    } else {
                        while ($row = mysqli_fetch_array($q)) {
                            $sun = $row['score'];
                        }
                        
                        $sun = $s + $sun;
                        $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE phone= '$phone'") or die('Error174');
                    }
                }
            header('location:account.php?q=result&eid=' . $_GET[eid]);
}

if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2 && isset($_GET['start']) && $_GET['start'] == "start" && (!isset($_SESSION['6e447159425d2d']))) {
    $q = mysqli_query($con, "SELECT * FROM history WHERE phone='$phone' AND eid='$_GET[eid]' ") or die('Error197');
    
    if (mysqli_num_rows($q) > 0) {
        $q = mysqli_query($con, "SELECT * FROM history WHERE phone='$_SESSION[phone]' AND eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $timel  = $row['timestamp'];
            $status = $row['status'];
        }
        $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $ttimel  = $row['time'];
            $qstatus = $row['status'];
        }
        $remaining = (($ttimel * 60) - ((time() - $timel)));
        if ($status == "ongoing" && $remaining > 0 && $qstatus == "enabled") {
            $_SESSION['6e447159425d2d'] = "6e447159425d2d";
           
            
        } else {
                $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND username='$_SESSION[username]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                 if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
                    $q = mysqli_query($con, "SELECT * FROM rank WHERE username='$username'") or die('Error161');
                    $rowcount = mysqli_num_rows($q);
                    if ($rowcount == 0) {
                        $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$username','$s',NOW())") or die('Error165');
                    } else {
                        while ($row = mysqli_fetch_array($q)) {
                            $sun = $row['score'];
                        }
                        
                        $sun = $s + $sun;
                        $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE username= '$username'") or die('Error174');
                    }
                }
            header('location:account.php?q=result&eid=' . $_GET[eid]);
        }
        
    } else {
        $time = time();
        $q = mysqli_query($con, "INSERT INTO history VALUES(NULL,'$phone','$_GET[eid]' ,'0','0','0','0',NOW(),'$time','ongoing','false')") or die('Error137');
        $_SESSION['6e447159425d2d'] = "6e447159425d2d";
        
    }
}


if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2 && isset($_SESSION['6e447159425d2d']) && $_SESSION['6e447159425d2d'] == "6e447159425d2d") {
    $q = mysqli_query($con, "SELECT * FROM history WHERE phone='$phone' AND eid='$_GET[eid]' ") or die('Error197');
    
    if (mysqli_num_rows($q) > 0) {
        $q = mysqli_query($con, "SELECT * FROM history WHERE phone='$_SESSION[phone]' AND eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $time   = $row['timestamp'];
            $status = $row['status'];
        }
        $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $ttime   = $row['time'];
            $qstatus = $row['status'];
        }
        $remaining = (($ttime * 60) - ((time() - $time)));
        if ($status == "ongoing" && $remaining > 0 && $qstatus == "enabled") {
            $q = mysqli_query($con, "SELECT * FROM history WHERE phone='$_SESSION[phone]' AND eid='$_GET[eid]' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $time = $row['timestamp'];
            }
            $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $ttime = $row['time'];
            }
            $remaining = (($ttime * 60) - ((time() - $time)));
            echo '<script>
var seconds = ' . $remaining . ' ;
function end(){
  data = prompt("Tugukosore ? Subiza \\"yego\\" Cyangwa Ukande \\"Cancel\\"");
  if(data=="yego"){
    window.location ="account.php?q=quiz&step=2&eid=' . $_GET['eid'] . '&n=' . $_GET['n'] . '&endquiz=end";
  }
}
function enable(){

 document.getElementById("qform").submit();
}
function frmreset(){
  document.getElementById("sbutton").setAttribute("disabled","true");
  document.getElementById("qform").reset();
}
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById(\'countdown\').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds <= 0) {
        clearInterval(countdownTimer);
        document.getElementById(\'countdown\').innerHTML = "Buzz Buzz...";
        window.location ="account.php?q=quiz&step=2 &eid=' . $_GET['eid'] . '&n=' . $_GET['n'] . '&t=' . '&endquiz=end";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval(\'secondPassed()\', 1000);
</script>';
            echo '<font size="3" style="margin-left:100px;font-family:\'typo\' font-size:20px; font-weight:bold;color:darkred">Igihe Usigaje : </font><span class="timer btn btn-default" style="margin-left:20px;"><font style="font-family:\'typo\';font-size:20px;font-weight:bold;color:darkblue" id="countdown"></font></span><span class="timer btn btn-primary" style="margin-left:50px" onclick="end()"><span class=" glyphicon glyphicon-off"></span>&nbsp;&nbsp;<font style="font-size:12px;font-weight:bold">Ohereza Ibisubizo</font></span>';
            
            $eid   = @$_GET['eid']; 
            $sn    = @$_GET['n'];
            $total = @$_GET['t'];
            // make '$sn' fetches id of a qn instead of n(sn) to replace in query below
            // then it will override the sn column in tb questions by adopting the use of 
            // ids from 'gabanya ibibazo' tb in b.php 
            
            // make serial no sn in tb held by $sn variable up get $i increment from b.php
            $q   = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn'");
            echo '<div class="panel" style="margin-right:5%;margin-left:5%;margin-top:10px;border-radius:10px">';
            while ($row = mysqli_fetch_array($q)) {
                $qns = stripslashes($row['qns']);
                $images = $row['image'];
                $qid = $row['qid'];
                
                echo '<b><div class="well" style="background-color:white"><div style="font-size:20px;font-weight:bold;font-family:calibri;margin:10px; ">' . $sn . ' : ' . $qns . '</div></div></b>'; 
                
                
                echo '<b><div class="well" style="background:white"><div> <img src="upload/'. $images .'" width="80"; height="90px"> </div></div></b>';
            }
            
            echo '<form id="qform" action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid .'" action="account.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn + 1) . '&t=' . $total . '" method="POST"  class="form-horizontal">
<br />';
            $q = mysqli_query($con, "SELECT * FROM user_answer WHERE qid='$qid' AND phone='$_SESSION[phone]' AND eid='$_GET[eid]'") or die("Error222");
            if (mysqli_num_rows($q) > 0) {
                $row = mysqli_fetch_array($q);
                $ans = $row['ans'];
                $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' AND optionid='$ans'") or die("Error222");
                $row = mysqli_fetch_array($q);
                $ans = $row['option'];
            } else {
                $ans = "";
            }
            if (strlen($ans) > 0) {
                echo "<font style=\"color:green;font-size:12px;font-weight:bold\">Uhisemo: </font><font style=\"color:#565252;font-size:12px;\">" . $ans . "</font>&nbsp;&nbsp;<a href=update.php?q=quiz&step=2&eid=$eid&n=$sn&t=$total&qid=$qid&delanswer=delanswer><span class=\"glyphicon glyphicon-remove\" style=\"font-size:12px;color:darkred\"></span></a><br /><br />";
            }
            
            echo '<div class="funkyradio">';
            $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' ");
            while ($row = mysqli_fetch_array($q)) {
                $option   = stripslashes($row['option']);
                $optionid = $row['optionid'];
                echo '<div class="funkyradio-success"><input type="radio" id="' . $optionid . '" name="ans" value="' . $optionid . '" onclick="enable()"> <label for="' . $optionid . '" style="width:100%;text-align:center;"><div style="color:black;font-size:12px;word-wrap:break-word" >&nbsp;&nbsp;' . $option . '</div>
               
                </label></div>';
            }
            echo '</div>';
            if ($_GET['t'] > $_GET['n'] && $_GET['n'] != 1) {
                echo '<br /><a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn - 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"  style="font-size:12px"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-default" disabled="true" id="sbutton" style="height:30px"><font style="font-size:12px; color:white">&nbsp;&nbsp;</font></button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" onclick="frmreset()" style="height:30px"></span><font style="font-size:12px;font-weight:bold">Reset</font></button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn + 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"  style="font-size:12px"></span></a></form><br><br>';
            } else if ($_GET['t'] == $_GET['n'] && $_GET['n'] != 1 ) {
                echo '<br /><a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn - 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"  style="font-size:12px"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-default" disabled="true" id="sbutton" style="height:30px"><font style="font-size:12px;color:white">&nbsp;&nbsp;</font></button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" 
                class="btn btn-default" onclick="frmreset()" style="height:30px"></span><font style="font-size:12px;font-weight:bold">Reset</font></button>&nbsp;&nbsp;&nbsp;&nbsp;</form><br><br>';
            } else if ($_GET['t'] > $_GET['n'] && $_GET['n'] == 1) {
                echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-default" disabled="true" id="sbutton" style="height:30px"><font style="font-size:12px; color:white">&nbsp;&nbsp;<font></button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" onclick="frmreset()" style="height:30px"></span><font style="font-size:12px;font-weight:bold">Reset</font></button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn + 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"  style="font-size:12px"></span></a></form><br><br>';
            } else {
            }
            echo '</div>';
            echo '<div class="panel" style="text-align:center">';
            $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$_GET[eid]'") or die("Error222");
            $i = 1;
            while ($row = mysqli_fetch_array($q)) {
                $ques[$row['qid']] = $i;
                $i++;
            }
            $q = mysqli_query($con, "SELECT * FROM user_answer WHERE eid='$_GET[eid]' AND phone='$_SESSION[phone]'") or die("Error222a");
            $i = 1;
            while ($row = mysqli_fetch_array($q)) {
                if (isset($ques[$row['qid']])) {
                    $quesans[$ques[$row['qid']]] = true;
                }
            }
            for ($i = 1; $i <= $total; $i++) {
                echo '<a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=' . $i . '&t=' . $total . '"  style="margin:5px;padding:5px;background-color:';
                if ($quesans[$i]) {
                    echo "darkgreen";
                } else {
                    echo "darkred";
                }
                echo ';color:white;font-size:16px;font-family:calibri;border-radius:4px">&nbsp;' . $i . '&nbsp;</a>';
            }
        } else {
            unset($_SESSION['6e447159425d2d']);
            $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND username='$_SESSION[username]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                 if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
                    $q = mysqli_query($con, "SELECT * FROM rank WHERE username='$username'") or die('Error161');
                    $rowcount = mysqli_num_rows($q);
                    if ($rowcount == 0) {
                        $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$username','$s',NOW())") or die('Error165');
                    } else {
                        while ($row = mysqli_fetch_array($q)) {
                            $sun = $row['score'];
                        }
                        
                        $sun = $s + $sun;
                        $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE username= '$username'") or die('Error174');
                    }
                }
            header('location:account.php?q=result&eid=' . $_GET[eid]);
        }
    } else {
        unset($_SESSION['6e447159425d2d']);
        $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE phone='$_SESSION[phone]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND phone='$_SESSION[phone]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
                    $q = mysqli_query($con, "SELECT * FROM rank WHERE phone='$phone'") or die('Error161');
                    $rowcount = mysqli_num_rows($q);
                    if ($rowcount == 0) {
                        $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$username','$s',NOW())") or die('Error165');
                    } else {
                        while ($row = mysqli_fetch_array($q)) {
                            $sun = $row['score'];
                        }
                        
                        $sun = $s + $sun;
                        $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE username= '$username'") or die('Error174');
                    }
                }
            header('location:account.php?q=result&eid=' . $_GET[eid]);
    }
}
if (@$_GET['q'] == 'result' && @$_GET['eid']) {
    $eid = @$_GET['eid'];
    $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error157');
    while ($row = mysqli_fetch_array($q)) {
        $total = mysqli_num_rows(mysqli_query($con,"select * from questions where eid='$eid'"));
        $correct= $row['correct'];
    }
    $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND phone='$phone' ") or die('Error157');
    
    while ($row = mysqli_fetch_array($q)) {
        $s      = $row['score'];
        $w      = $row['wrong'];
        $r      = $row['correct'];
        $status = $row['status'];
    }
    if ($status == "finished") {
        if($s < 12){
            
            $decide = '<i style="color:red">Watsinzwe</i>';
        }
        else{
            
             $decide = '<i>Watsinzwe</i>';
        }
        echo '<div class="panel">
<center><h1 class="title" style="color:#660033">Reba uko wakoze</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';
        echo '<tr style="color:darkblue"><td style="vertical-align:middle">Umubare wibibazo byose</td><td style="vertical-align:middle">' . $total . '</td></tr>
      <tr style="color:darkgreen"><td style="vertical-align:middle">Ibyo wakoze neza&nbsp;<span class="glyphicon glyphicon-ok-arrow" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $r . '</td></tr> 
    <tr style="color:red"><td style="vertical-align:middle">Ibyo wishe&nbsp;<span class="glyphicon glyphicon-remove-arrow" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $w . '</td></tr>
    <tr style="color:orange"><td style="vertical-align:middle">Ibyo utasubije&nbsp;<span class="glyphicon glyphicon-ban-arrow" aria-hidden="true"></span></td><td style="vertical-align:middle">' . ($total - $r - $w) . '</td></tr>
     
      <tr style="color:darkgreen"><td style="vertical-align:middle">Amanota Wagize&nbsp;<span class="glyphicon glyphicon-ban-arrow" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $s .'/'. $correct * $total . '</td></tr>
      
      <tr style="color:darkgreen"><td style="vertical-align:middle">Amanota fatizo&nbsp;<span class="glyphicon glyphicon-ban-arrow" aria-hidden="true"></span></td><td style="vertical-align:middle">12</td></tr>
      
      <tr style="color:darkgreen"><td style="vertical-align:middle">Umwanzuro&nbsp;<span class="glyphicon glyphicon-ban-arrow" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $decide . '</td></tr>
      
      '
    
    ;
    
        echo '<tr></tr></table></div><div class="panel"><br /><h3 align="center" style="font-family:calibri">:: Reba uko wagombaga gusubiza ::</h3><br /><ol style="font-size:20px;font-weight:bold;font-family:calibri;margin-top:20px">';
        $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$_GET[eid]'") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $question = $row['qns'];
            $qid      = $row['qid'];
            $images = $row['image'];
            $q2 = mysqli_query($con, "SELECT * FROM user_answer WHERE eid='$_GET[eid]' AND qid='$qid' AND phone='$_SESSION[phone]'") or die('Error197');
            if (mysqli_num_rows($q2) > 0) {
                $row1         = mysqli_fetch_array($q2);
                $ansid        = $row1['ans'];
                $correctansid = $row1['correctans'];
                $q3 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$ansid'") or die('Error197');
                $q4 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$correctansid'") or die('Error197');
                $row2       = mysqli_fetch_array($q3);
                $row3       = mysqli_fetch_array($q4);
                $ans        = $row2['option'];
                $correctans = $row3['option'];
            } else {
                $q3 = mysqli_query($con, "SELECT * FROM answer WHERE qid='$qid'") or die('Error197');
                $row1         = mysqli_fetch_array($q3);
                $correctansid = $row1['ansid'];
                $q4 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$correctansid'") or die('Error197');
                $row2       = mysqli_fetch_array($q4);
                $correctans = $row2['option'];
                $ans        = "Unanswered";
            }
            if ($correctans == $ans && $ans != "Unanswered") {
                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:lightgreen;padding:10px;word-wrap:break-word;border:2px solid darkgreen;border-radius:10px;">' . $question . ' <span class="glyphicon glyphicon-ok" style="color:darkgreen"></span></div> <img src="upload/'. $images .'" width="80"; height="70px"> <br />';
                echo '<font style="font-size:14px;color:darkgreen"><b>icyo wasubije: </b></font><font style="font-size:14px;">' . $ans . '</font><br />';
                echo '<font style="font-size:14px;color:darkgreen"><b>igisubizo cyukuri: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
            } 
            else if ($ans == "Unanswered") {
                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:#f7f576;padding:10px;word-wrap:break-word;border:2px solid #b75a0e;border-radius:10px;">' . $question . ' </div><br />';
                echo '<font style="font-size:14px;color:darkgreen"><b>Igisubizo cyukuri: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
            } 
            else {
                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:#f99595;padding:10px;word-wrap:break-word;border:2px solid darkred;border-radius:10px;">' . $question . ' <span class="glyphicon glyphicon-remove" style="color:red"></span></div><br />';
                echo '<font style="font-size:14px;color:darkgreen"><b>icyo wasubije: </b></font><font style="font-size:14px;">' . $ans . '</font><br />';
                echo '<font style="font-size:14px;color:red"><b>Igisubizo cyukuri: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
                
            }
            echo "<br /></li>";
        }
        echo '</ol>';
        echo "</div>";
    } else {
?>
        	<script type="text/javascript">
						alert("Banza Ukore Ikizami Cya Mbere Cg Harikitagenze neza..");
						window.location = "account.php?q=1";
					</script>	
<?php 
    }
}
if (@$_GET['q'] == 2) {
    $q = mysqli_query($con, "SELECT * FROM history WHERE phone='$phone' AND status='finished' ORDER BY date DESC ") or die('Error197');
    echo '<div class="well table-responsive">
<table class="table table-striped title1" >
<tr><td style="vertical-align:middle"><b>Numero</b></td><td style="vertical-align:middle"><b>Ibazwa</b></td><td style="vertical-align:middle"><b>Umubare wibibazo</b></td><td style="vertical-align:middle"><b>ibyo wakoze</b></td><td style="vertical-align:middle"><b>ibyo wishe<b></td><td style="vertical-align:middle"><b>ibyo utasubije<b></td><td style="vertical-align:middle"><b>Amanota wagize</b></td><td style="vertical-align:middle"><b>igikorwa<b></td></tr>';
    $c = 0;
    while ($row = mysqli_fetch_array($q)) {
        $eid = $row['eid'];
        $s   = $row['score'];
        $w   = $row['wrong'];
        $r   = $row['correct'];
        $q23 = mysqli_query($con, "SELECT * FROM quiz WHERE  eid='$eid' ") or die('Error208');
        while ($row = mysqli_fetch_array($q23)) {
            $title = $row['title'];
            $tot = $row['eid'];
            $total = mysqli_num_rows(mysqli_query($con,"select * from questions where eid='$tot'"));
        }
        $c++;
        echo '<tr><td style="vertical-align:middle">' . $c . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $r . '</td><td style="vertical-align:middle">' . $w . '</td><td style="vertical-align:middle">' . ($total - $r - $w) . '</td><td style="vertical-align:middle">' . $s . '</td><td style="vertical-align:middle"><b><a href="account.php?q=result&eid=' . $eid . '" class="btn" style="margin:0px;background:darkred;color:white">&nbsp;<span class="title1"><b>Reba Amanota</b></td></tr>';
    }
    echo '</table></div>';
}
if (@$_GET['q'] == 3) {
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
<tr><td style="vertical-align:middle"><b>Numero</b></td><td style="vertical-align:middle"><b>Amazina bakoresha</b></td><td style="vertical-align:middle"><b>Amanota bagize</b></td></tr>';
    $c = $showfrom-1;
    $total = mysqli_num_rows($q);
    if($total >= $showfrom){
        $q = mysqli_query($con, "SELECT * FROM rank ORDER BY score DESC, time ASC LIMIT ".($showfrom-1).",10") or die('Error223');
        while ($row = mysqli_fetch_array($q)) {
            $e = $row['phone'];
            $s = $row['score'];
            $eid = $row['id'];
            $q12 = mysqli_query($con, "SELECT * FROM user WHERE phone='$e' ") or die('Error231');
            while ($row = mysqli_fetch_array($q12)) {
                $name     = $row['name'];
               
                $phone = $row['phone'];
            }
            $c++;
            echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td style="vertical-align:middle">' . $e . '</td><td style="vertical-align:middle">' . $s . '</td>
            <td style="vertical-align:middle">';
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
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="account.php?q=3&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="account.php?q=3&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
    }
    else if($show != 1 && $show==$total){
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="account.php?q=3&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';

        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="account.php?q=3&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
    }
    else{
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="account.php?q=3&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="account.php?q=3&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="account.php?q=3&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
    }
    echo '</tr></table></div>';
}
?>
</div></div></div></div>
<div class="row footer">
 <div class="col-md-2 box"></div>
<div class="col-md-6 box">
<span href="#" data-target="#login" style="color:lightyellow">Tuyishime Edward<br><br></span></div>
<div class="col-md-2 box">
<a href="#" style="color:lightyellow;text-decoration:underline; font-size:11px" onmouseover="this.style('color:yellow')" target="new">Professional Driving</a></div>
<div class="col-md-2 box">
<a href="#" s style="color:lightyellow;text-decoration:none" onmouseover="this.style('color:yellow')" target="new">@ 2019</a></div>
</div>
</body>
</html>
