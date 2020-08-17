<?php
session_start();
error_reporting(0);
include('config.php');


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
						<center><h4 class="page-title">Guhindura amahitamo kukibazo</h4></center>

	</div>
<br><br><br>
<?php	
$id= $_SESSION['eds'];
$ids= @$_GET['edit'];
$ret="select * from questions where eid =:id and id=:ids";
$query= $dbh -> prepare($ret);
$query->bindParam(':id',$id, PDO::PARAM_STR);
$query->bindParam(':ids',$ids, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
    
{
foreach($results as $result)
{
    $qid = $result->qid;
   
?>
<?php }}?>
                    
<div class="col-md-12">        
<div class="panel panel-default">  
<div class="panel-heading"></div>
<div class="panel-body">
<!-- Zero Configuration Table -->
						<div class="well" style="background:white">
							<div class="panel-heading" style="font-size:14px"><center>Amahitamo yose Kukibazo: <b><?php echo htmlentities($result->qns)?></b> </center></div>
                       	<div class="table-responsive"  id="printablediv">
							
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>No</th>
                                            <th>Amahitamo</th>
                                            <th>Igikorwa</th>
										</tr>
									</thead>
									<tfoot>
										
									
									<tbody>

<?php
$bedit =$_GET['edit'];
$ret="select * from options where qid =:qid";
$query= $dbh -> prepare($ret);
$query->bindParam(':qid',$qid, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
    
{
$s=0;
foreach($results as $result)
{
     $id_opt = $result->id;
     $_SESSION['optid'] = $id_opt; 
     $s++;
    ?>									<tr>
										
         <td  style="font-size:12px"><?php echo htmlentities($s);?></td>
<td  style="font-size:12px"><?php echo htmlentities($result->option)?></td>
											

										<td>


                                         
<a href="editOptions.php?edit=<?php echo $bedit; ?>&ed=<?php echo $id_opt;?>" class="btn btn-xs btn-info">Hindura</a>
</td>
										</tr>
                                        
                                        

										<?php }} ?>
										
									</tbody>
								</table>


							</div>
                    
                 
            
						</div>
   
<?php
$nid = @$_GET['ed'];
$ret="select * from options where id ='$nid'";
$query=mysqli_query($con,$ret);
if($query > 0)
{
while($row = mysqli_fetch_array($query))
{		$i++;
        $opts= $row['option'];
        $quid = $row['qid'];
        
    
?>						
                   
						
<form method="post" class="form-horizontal" enctype="multipart/form-data">
                           
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label"><span style="color:red"></span></label>
<div class="col-sm-10">
<input type="text" name="optns" class="form-control" value="<?php echo $opts; ?>" required>
</div>
</div>
  <?php }} ?>  
    
    

<?php
$nid = @$_GET['ed'];
$ret="select * from answer where qid ='$quid'";
$query=mysqli_query($con,$ret);
if($query > 0)
{
while($row = mysqli_fetch_array($query))
{		$i++;
        $opts= $row['option'];
        
    
?>			   

<?php }} ?>  
    
    
<?php   
 if(isset($_POST['submit']))
  {
$option=$_POST['optns'];
$n = $_SESSION['eds'];
$getit = @$_GET['edit'];
$sql="update options set option=:option where id=:nid ";
$query = $dbh->prepare($sql);
$query->bindParam(':option',$option,PDO::PARAM_STR);
$query->bindParam(':nid',$nid,PDO::PARAM_STR);
$query->execute();
 echo "<script>window.open('editOptions.php?edit=$getit','_self')</script>";



}   
?>
    
    <br>
 <div class="form-group">
<div class="col-sm-8 col-sm-offset-2" >
													
<center><button class="btn btn-success" name="submit" type="submit" style="margin-top:4%">Byemeze </button></center>
		</div>
	</div>
                                   
</form>
                 
            
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