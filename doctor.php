

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="doc_appoint";
$con = mysqli_connect($servername, $username, $password,$db_name);
if(!$con)
{
die("failed");
}
echo "hey";
if(isset($_POST['location'])&&isset($_POST['speciality']))
{
$loc=$_POST['location'];
$speciality=$_POST['speciality'];
echo "hello";


$Q="select * from doctor where location='$loc' and speciality='$speciality'";
$res=mysqli_query($con,$Q);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{ 
    echo "hiii";
	echo     $row['doc_name'];
    echo     $row['speciality'];
     echo    $row['doc_id'];
      echo   $row['location'];
      echo   $row['adderess'];
      echo   $row['fees'];
       echo  $row['degree'];
       echo  $row['exp'];

}
}
?>
