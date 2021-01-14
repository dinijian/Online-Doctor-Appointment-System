<?php $con=mysqli_connect("localhost","root","","doc_appoint");?>

<?php
// $username = $_POST['username'] ;
// $cpassword = $_POST['cpassword'] ;
$email = $_POST['email'] ;
$password  = $_POST['password'] ;

$row=mysqli_query($con,"select * from doctor where email like '$email'");
$result = mysqli_fetch_array( $row );
if($result['doc_id'] && $password=$result['password'])
{
	session_start(); 
$_SESSION['doc_id'] = $result['doc_id'];
// header( 'location:signup.php?status=Email Id Already Registred.' );  exit();
header( 'location:bookingreceipt2.php' );  exit();	
}
else
{
// if($cpassword==$password)
// {   $patient_id = mt_rand();
//     $md=md5($password);
//     // mysqli_query($con,"INSERT INTO `login` ( `patient_id`, `username`, `email`, `password`) VALUES ( '$patient_id', '$username', '$email', '$md');") ;
//     session_start(); 
// $_SESSION['patient_id'] = $patient_id;
// header( 'location:after_login.php' );  exit();
	// if($patient_id){
	header( 'location:docsignin.php?status=SORRY !! WE COULD NOT LOG YOU IN.' );  exit();


}
// else{
// header( 'location:signup.php?status=Password did not match.' );  exit();
// }
// }
?>












