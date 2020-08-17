<?php 
  $db = mysqli_connect('localhost', 'root', '', 'quizzer');
$email = "";

    if(isset($_POST['save'])){//1st starts
      
$name     = $_POST['name'];
$gender   = $_POST['gender'];
$username = $_POST['username'];
$phone     = $_POST['phone'];
$password = $_POST['password'];
$email   = $_POST['email'];
$district   = $_POST['district'];                

  	$sql_e = "select * from teacher where email='$email'";
  
  	$res_e = mysqli_query($db, $sql_e);
if(mysqli_num_rows($res_e) > 0){
         echo 'Sorry... This Teacher Already Added';

  	}else{
  	$query = "INSERT INTO teacher (name, gender, username, phone, password, email, district) VALUES ('$name','$gender', '$username', '$phone', '$password', '$email', '$district')";
           $results = mysqli_query($db, $query);
           echo 'Saved!'; ?>
        	<script type="text/javascript">
						alert("Teacher Information Added Successful..");
						window.location = "ad.php?q=4";
					</script>	
        <?php   exit();
  	}
  }
?>

