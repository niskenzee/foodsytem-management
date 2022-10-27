<?php
include "connection.php";
//fetching values passed from "add food item" form
$Supplier_Name=$_REQUEST['Supplier_Name'];
$Supplier_Address=$_REQUEST['Supplier_Address'];
$Contact_Number=$_REQUEST['Contact_Number'];
$Email_Address=$_REQUEST['Email_Address'];

//query selects all attributes of "menu" table
$query="select * from tblsupplier";
$res=mysqli_query($conn,$query);
$flag=0;
//checking if food_item is already stored in the database
while($row=mysqli_fetch_array($res))
{
    if($product_name==$row[1])
    {
        $flag=1;
        break;
    }
}
//if food_item already stored
if($flag==1)
{
    header("location:admin_supplier.php?q=4");
}
//else insert the food_item and its fields into the "menu" table in the database
else {
    $query2 = "insert into tblsupplier values('','" . $Supplier_Name . "','" . $Supplier_Address . "','" . $Contact_Number . "','" . $Email_Address . "')";
    mysqli_query($conn, $query2);
    header("location:admin_supplier.php?q=2");
}
