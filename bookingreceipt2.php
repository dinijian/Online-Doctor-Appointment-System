 <?php ob_start(); session_start(); ?>
<?php
 $conn=mysqli_connect("localhost","root","","doc_appoint");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//else
//{
	//echo "connection established";
	// $sql=mysqli_select_db( $conn,"doctor");
	// if($sql)
	// 	echo "yeah";
//}
?>


<!DOCTYPE html>
<html>
<head>
	<title>APPOINTMENTS INFORMATION</title>
	<!-- <link rel="stylesheet " type="text/css" href="design3.css"> -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> -->
</head>
<style>
	*{
	margin:20px;
	/*background-color: grey;*/
}
body{
	background-color: lightgrey;
}
#heading{
	background-color: green;
	height: 60px;
	text-align: center;
	color: white;
	position: relative;
	padding-top: 30px;
	font-size: 30px;
}
#box{
	/*color: red;*/
	/*background-color: red;*/
	max-width: 950px;
            padding: 10px 20px;
            background: #f4f7f8;
            margin: 10px auto;
            padding: 20px;
            background: #f4f7f8;
            border-radius: 8px;
            font-family: Georgia, "Times New Roman", Times, serif;
            /*font-family: verdana;*/
}
#details{
	padding: 20px;
}
#try{
	/*color: red;
	text-decoration: underline;
	text-align: center;*/
	 position: relative;
            display: block;
            /*padding: 19px 39px 18px 39px;*/
            color: black;
            margin: 0 auto;
            background: lavender;
            font-size: 18px;
            
            font-style: normal;
            width: 100%;
            padding-top: 50px;
            /*border: 1px solid #16a085;*/
            border-width: 1px 1px 3px;
            margin-bottom: 10px;
            text-align: center;

}

tr{
	color:red;
}
#thank{
	font-weight: bold;
	font-family: verdana;
	color: OrangeRed;
	}

	 input[type="submit"],
         input[type="button"]
        {
            position: relative;
            display: block;
            padding: 19px 39px 18px 39px;
            /*color: #FFF;*/
            color: white;
            margin: 0 auto;
            /*background: #1abc9c;*/
            background:green;
            font-size: 18px;
            text-align: left;
            font-style: normal;
            width: 100px;
            border: 1px solid #16a085;
            border-width: 1px 1px 3px;
            margin-bottom: 10px;
            border-radius: 20px;
        }

         input[type="submit"]:hover,
        input[type="button"]:hover
        {
            background: #109177;
        }


        a:link, a:visited {
  /*background-color: #f44336;*/
  background-color:  green;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 20px;
}

a:hover, a:active {
  background-color:DarkGreen;
	</style>

 
<fieldset id="box">
  <body>
    <header id="heading" >APPOINTMENTS INFORMATION</header>
    <table border="3" cellpadding="10" width="1000">
      <tr>
        <th>PATIENT NAME</th>
        <th>DOCTOR  NAME</th>
        <th>DATE        </th>
        <th>TIME        </th>
      </tr>
<div id="try">
<?php
$a = mysqli_query($conn, "SELECT * FROM  `appointment` WHERE  `doc_id` LIKE  '".$_SESSION['doc_id']."'");
// $b = mysqli_fetch_array($a);
// if($b->num_rows>0)
// if($b && $b->num_rows)
if(mysqli_num_rows($a) > 0)
{
 while($row=mysqli_fetch_assoc($a)) 
{//$b = mysqli_fetch_array($a) ;
   // while($b=mysqli_fetch_assoc($a))
  {
    echo"<tr><td>".$row["patient_name"]."</td><td>".$row["doc_name"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td></tr>";
  }}
echo"</table>";
}
else
{
  echo"0 result";
}
?>
</table>

        
       <!--<div id="thank"> Thank You For Showing Your Trust To MrDoc. </div> -->

<!-- <input type="submit" value="HOME" placeholder="HOME" href="after_login.php"/> -->
<center><a href="index2.html" >Return back to Home</a></center>

             <hr>
        <br>

	</body>
</fieldset>
</html>

