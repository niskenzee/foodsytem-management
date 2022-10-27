<?php
include "connection.php";
$Supplier_Name=$_REQUEST['Supplier_Name'];
$Supplier_Address=$_REQUEST['Supplier_Address'];
$Contact_Number=$_REQUEST['Contact_Number'];
$Email_Address=$_REQUEST['Email_Address'];

//updating the "menu" table 
$query="update tblsupplier set Supplier_Address='$Supplier_Address',Contact_Number='$Contact_Number',Email_Address='$Email_Address' where Supplier_Name='$Supplier_Name'";
mysqli_query($conn, $query);
header("location:admin_supplier.php?q=3");
