<?php
session_start();
unset( $_SESSION['patient_id']);
header('location:index2.html');
exit();
?>