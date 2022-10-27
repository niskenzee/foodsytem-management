<?php
include "connection.php";
$First_Name=$_REQUEST['First_Name'];
$Middle_Name=$_REQUEST['Middle_Name'];
$Last_Name=$_REQUEST['Last_Name'];
$Age=$_REQUEST['Age'];
$Address=$_REQUEST['Address'];
$Contact_Number=$_REQUEST['Contact_Number'];
$Email_Address=$_REQUEST['Email_Address'];
$query="select * from tblemployee";
$res=mysqli_query($conn,$query);
$flag=0;
while($row=mysqli_fetch_array($res))
{  if($product_name==$row[1]) {$flag=1;
        break;
    }
}
if($flag==1)
{   header("location:admin_employee.php?q=4");}
else {
    $query2 = "insert into tblemployee values('','" . $First_Name . "','" . $Middle_Name . "','" . $Last_Name . "','" . $Age . "','" . $Address . "','" . $Contact_Number . "','" . $Email_Address . "')";
    mysqli_query($conn, $query2);
    header("location:admin_employee.php?q=2");}
