<?php

$con=mysqli_connect("localhost","root","","doc_appoint");
if($con)
echo "connection successful"."<br>";
else 
echo("error encountered".mysqli_error($con));
global $sqql;
global $b;
/*if (isset($_POST["submitt"]))
{*/
    

   /* $date1 = $_REQUEST['field3'];

if($date1) {
    $date1 = date( 'Y-m-d', strtotime($date1));
} else {
    $date1 = '';
}
/**/
$datee=date('Y-m-d' , strtotime($_POST["field3"]));

/*if (is_array($_POST['field20']))
        {
            $b = implode(",", $_POST['field20']);
        }*/
$allergic=$_REQUEST["field20"];
$b=implode("," , $allergic);

 $sqql = "INSERT INTO patient_his (name, dob, mobile_no, emg_contact,
                             sex, street_add, city, state, zip,
                             age, blood_grp, weight, height, smoke,
                             alcohol, drugs, physician_care, hospitalize, tabacco,
                             pregnant, contraceptives, nursing, allergic, please_mention)
                             VALUES ('$_POST[field1]','$datee',$_POST[field4],$_POST[field5],
                             '$_POST[field6]','$_POST[field21]','$_POST[field31]','$_POST[field41]','$_POST[field51]',
                             '$_POST[field7]','$_POST[field8]','$_POST[field9]','$_POST[field10]','$_POST[field11]',
                             '$_POST[field12]','$_POST[field13]','$_POST[field14]','$_POST[field15]','$_POST[field16]',
                             '$_POST[field17]','$_POST[field18]','$_POST[field19]','$b','$_POST[field30]')";



if (mysqli_query($con,$sqql))
{
   // echo "data successfully stored";
   header('location: after_login.php');

}

else
{
    echo "not stored";
    echo mysqli_error($con);

}



?>