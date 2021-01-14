<?php ob_start(); session_start(); ?>
<?php $con=mysqli_connect("localhost","root","","doc_appoint");?>
<?php $a = mysqli_query($con, "SELECT * FROM  `login` WHERE  `patient_id` LIKE  '".$_SESSION['patient_id']."'") ;
 $b = mysqli_fetch_array($a); ?>
<?php
$con=mysqli_connect("localhost","root","","doc_appoint");
$doc_id=$_POST['id'];
$doc_name=$_POST['name'];
$fee=$_POST['fee'];
$date=$_POST['date'];
$time=$_POST['time'];
$sql="INSERT INTO appointment(doc_id,patient_id,patient_name, doc_name, date, time, fees)
 VALUES ('$doc_id','$b[patient_id]','$b[username]','$doc_name','$date','$time','$fee')";
 if(mysqli_query($con,$sql))
 {
    header( 'location:bookingreceipt.php' );  exit();
 };
 ?>

