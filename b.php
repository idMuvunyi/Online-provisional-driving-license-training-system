<?php
session_start();
error_reporting(0);
include('config.php');

if(isset($_POST['submit']))
  {
$title=$_POST['title'];
$correct=$_POST['correct'];
$wrong=$_POST['wrong'];
$total=$_POST['total'];
$time=$_POST['time'];
$id= $_GET['id'];

$sql="update quiz set title=:title,correct=:correct,wrong=:wrong,total=:total,time=:time where eid=:id ";
$query = $dbh->prepare($sql);
$query->bindParam(':title',$title,PDO::PARAM_STR);
$query->bindParam(':correct',$correct,PDO::PARAM_STR);
$query->bindParam(':wrong',$wrong,PDO::PARAM_STR);
$query->bindParam(':total',$total,PDO::PARAM_STR);
$query->bindParam(':time',$time,PDO::PARAM_STR);

$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();

$msg="Data updated successfully";


}
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

<title>PROFFESIONAL&nbsp;DRIVING&nbsp;SCHOOL&nbsp;COOPERATIVE</title>
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
    echo 'class="active';
?>><a href="a.php">Kosora Ikizami</a></li>

      </ul>
          </div>
  </div>
</nav>
    </head>

<body>

	<div class="ts-main-content">
	
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
                        <br><br>
						<center><h4 class="page-title">Kosora Ikizamini</h4></center>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Ibyibanze</div>
									<div class="panel-body">


<form method="post" class="form-horizontal" enctype="multipart/form-data">
    	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

<?php	
$id=$_GET['id'];
$ret="select * from quiz where eid =:id";
$query= $dbh -> prepare($ret);
$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
    
{
foreach($results as $result)
{
?>											
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Umutwe:*<span style="color:red">*</span></label>
<div class="col-sm-10">
<input type="text" name="title" class="form-control" value="<?php echo htmlentities($result->title)?>" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Igisubizo&nbsp;Nyacyo:*<span style="color:red">*</span></label>
<div class="col-sm-10">
<input type="text" name="correct" class="form-control" value="<?php echo htmlentities($result->correct)?>" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Igisubizo&nbsp;Kitaricyo:*<span style="color:red">*</span></label>
<div class="col-sm-10">
<input type="text" name="wrong" class="form-control" value="<?php echo htmlentities($result->wrong)?>" required>
</div>
</div>
 
<div class="form-group">
<label class="col-sm-2 control-label">Ibibazo&nbsp;byose:*<span style="color:red">*</span></label>
<div class="col-sm-10">
<input type="text" name="total" class="form-control" value="<?php  echo $amt = mysqli_num_rows(mysqli_query($con,"select * from questions where eid='$result->eid'"));?>"  readonly>
</div>
</div>    
    
<div class="form-group">
<label class="col-sm-2 control-label">Igihe (min):*<span style="color:red">*</span></label>
<div class="col-sm-10">
<input type="number" max="20" min="1" name="time" class="form-control" value="<?php echo htmlentities($result->time)?>"  required>

</div>
</div>
    <?php }} ?>
    <br>
 <div class="form-group">
<div class="col-sm-8 col-sm-offset-2" >
													
<center><button class="btn btn-success" name="submit" type="submit" style="margin-top:4%">Kosora </button></center>
		</div>
	</div>
                                   
</form>
    </div>
                                    
 </div>
 </div>
                            
                            
<div class="col-md-12">        
<div class="panel panel-default">  
<div class="panel-heading">Ongeramo Ibibazo:</div>
<div class="panel-body">


<hr color="green">
   
 <div class="col-md-2 col-md-offset-4" style="margin-top:10px">
<?php  
$nu = $result->eid;
?>
</div>
 		 
 
<?php
    
if (@$_GET['id'] == $nu && !(@$_GET['step'])) {
    echo ' 
<div class="row">


<div class="col-md-6 col-md-offset-3" ></div><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="update.php?q=addquizs"  method="POST">
<fieldset>


<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="umubare wibibazo ushaka" class="form-control input-md" type="number" min="1" max="20" required>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-success" value="Ohereza" class="btn btn-success"/>
  </div>
</div>

</fieldset>
</form></div>';
    
    
    
}
if (@$_GET['id'] == $nu && (@$_GET['step']) == 2) {
    
echo'
<div class="row">
<br>

</div>


 <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqnss&n=' . @$_GET['n'] . '&eid=' . @$_GET['eid'] . '&ch=5 "  method="POST">
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
    
    ?>
   
</div>
                                    
                                    
</div>
     <hr color="green">
</div></div></div>
<br><br><br>

<div class="col-md-12">        
<div class="panel panel-default">  
<div class="panel-heading">Imitwe y'ibibazo bigize isuzuma:</div>
<div class="panel-body">
<!-- Zero Configuration Table -->
						<div class="well" style="background:white">
							<div class="panel-heading" style="font-size:14px"><center>Ibibazo Byose Bigize: <b><?php echo htmlentities($result->title)?></b> </center></div>
							<div class="table-responsive"  id="printablediv">
							
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>No</th>
                                            <th>Ikibazo</th>
                                            <th>Igikorwa</th>
										</tr>
									</thead>
									<tfoot>
										
									
									<tbody>

<?php
$i=0;
$id=$_GET['id'];
$ret2="select * from questions where eid ='$id'";
$query=mysqli_query($con,$ret2);
if($query > 0)
{
while($row = mysqli_fetch_array($query))
{		$i++;
        $sp_id = $row['id'];
        $qn = $row['qns'];
        $num = $row['eid'];
        $_SESSION['eds'] = $num;
        $_SESSION['nbr'] = $sp_id;
    
?>	
										<tr>
										
                                            <td  style="font-size:12px"><?php echo htmlentities($i);?></td>
											<td  style="font-size:12px"><?php echo htmlentities($qn);?></td>
											

										<td>


                                         
<a href="editOptions.php?edit=<?php echo $sp_id;?>" class="btn btn-xs btn-warning" onclick="return confirm('Ushaka guhindura amahitamo kuri iki kibazo ?');">Hindura</a>
</td>
										</tr>
                                        
                                        

										<?php }} ?>
										
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

    
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
    <script>
 function printDiv(divID) {
        //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = 
          "<html><head><title></title></head><body>" + 
          divElements + "</body>";
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

    }
</script>
    
    
</body>
</html>