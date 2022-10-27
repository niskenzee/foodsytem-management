<?php
include "connection.php";
$First_Name=$_REQUEST['First_Name'];
$Middle_Name=$_REQUEST['Middle_Name'];
$Last_Name=$_REQUEST['Last_Name'];
$Age=$_REQUEST['Age'];
$Address=$_REQUEST['Address'];
$Contact_Number=$_REQUEST['Contact_Number'];
$Email_Address=$_REQUEST['Email_Address'];


//updating the "menu" table 
$query="update tblemployee set Middle_Name='$Middle_Name',Last_Name='$Last_Name',Age='$Age',Address='$Address', Contact_Number='$Contact_Number', Email_Address='$Email_Address' where First_Name='$First_Name'";
mysqli_query($conn, $query);
header("location:admin_employee.php?q=3");
