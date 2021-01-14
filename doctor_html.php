<?php ob_start(); session_start(); ?>
<?php $con=mysqli_connect("localhost","root","","doc_appoint");?>
<?php $a = mysqli_query($con, "SELECT * FROM  `login` WHERE  `patient_id` LIKE  '".$_SESSION['patient_id']."'") ;
 $b = mysqli_fetch_array($a); ?>
 <?php
 echo ($b['username']);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' href='doctor.css'>
</head>
<body>
    <table>
        <tr>
            <th>DOCTOR NAME</th>
            <th>DEGREE</th>
            <th>EXPERIENCE</th>
            <th>BOOK YOUR APPOINMENT</th>
</tr>
        

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
if(isset($_POST['location'])&&isset($_POST['speciality']))
{
$loc=$_POST['location'];
$speciality=$_POST['speciality'];



$Q="select * from doctor where location='$loc' and speciality='$speciality'";
$res=mysqli_query($con,$Q);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{ 
    
    echo    "<tr>
       <td>".$row['doc_name']."</td>   
         <td>".$row['degree']."</td>
        <td>".$row['exp']."</td>
        <td><a href=".$row['link']."> BOOK </a></td>
        </tr>";

}
}
?>
</table>    
</body>
</html>