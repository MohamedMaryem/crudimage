<?php
include 'config.php';
 $ID = $_GET['Id'];
 $sqlimg="select Image from tblcard where Id=$ID";
mysqli_query($con,$sqlimg);
mysqli_query($con,"DELETE FROM `tblcard` WHERE Id = $ID");

header('location:index.php');

?>