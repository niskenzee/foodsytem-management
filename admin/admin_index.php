
<?php

session_start();
if(isset($_SESSION['email']))
{}
else
{
    header("location:admin_login.php");
}
include "connection.php";
$query="SELECT COUNT(id) FROM order_info where status='Not completed'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
$new_orders=$row[0];

$query2="SELECT count(id) from contact_us";
$res2=mysqli_query($conn,$query2);
$row2=mysqli_fetch_array($res2);
$contact_inquiries_total=$row2[0];

$query3="SELECT COUNT(product_name) FROM `tblproduct`";
$res3=mysqli_query($conn,$query3);
$row3=mysqli_fetch_array($res3);
$food_items_total=$row3[0];

$query4="SELECT COUNT(id) FROM order_info where status='Completed'";
$res4=mysqli_query($conn,$query4);
$row4=mysqli_fetch_array($res4);
$completed_orders=$row4[0];

$query5="SELECT COUNT(id) FROM `tblcustomers` WHERE city='Kabankalan City'";
$res5=mysqli_query($conn,$query5);
$row5=mysqli_fetch_array($res5);
$Kabankalan_orders=$row5[0];

$query6="SELECT COUNT(id) FROM `tblcustomers` WHERE city='Himamaylan City'";
$res6=mysqli_query($conn,$query6);
$row6=mysqli_fetch_array($res6);
$Himamaylan_orders=$row6[0];

$query7="SELECT COUNT(id) FROM `tblcustomers` WHERE city='Cadiz City'";
$res7=mysqli_query($conn,$query7);
$row7=mysqli_fetch_array($res7);
$Cadiz_orders=$row7[0];

$query8="SELECT COUNT(id) FROM `tblcustomers` WHERE city='Kanlaon City'";
$res8=mysqli_query($conn,$query8);
$row8=mysqli_fetch_array($res8);
$Kanlaon_orders=$row8[0];

$query9="SELECT COUNT(id) FROM `tblcustomers` WHERE city='Dumaguete City'";
$res9=mysqli_query($conn,$query9);
$row9=mysqli_fetch_array($res9);
$Dumaguete_orders=$row9[0];

$query10="SELECT COUNT(id) FROM `tblcustomers` WHERE city='Talisay City'";
$res10=mysqli_query($conn,$query10);
$row10=mysqli_fetch_array($res10);
$Talisay_orders=$row10[0];

$query11="SELECT COUNT(id) FROM `tblcustomers` WHERE city='Victorias City'";
$res11=mysqli_query($conn,$query11);
$row11=mysqli_fetch_array($res11);
$Victorias_orders=$row11[0];

$query12="SELECT count(id) from tblcustomers";
$res12=mysqli_query($conn,$query12);
$row12=mysqli_fetch_array($res12);
$new_customer=$row12[0];

$query13="SELECT count(Employee_id) from tblemployee";
$res13=mysqli_query($conn,$query13);
$row13=mysqli_fetch_array($res13);
$new_employee=$row13[0];

$query14="SELECT count(Supplier_Id) from tblsupplier";
$res14=mysqli_query($conn,$query14);
$row14=mysqli_fetch_array($res14);
$new_supplier=$row14[0];

$query15="SELECT count(inventoryid) from inventory";
$res15=mysqli_query($conn,$query15);
$row15=mysqli_fetch_array($res15);
$new_inventory=$row15[0];

$query16="SELECT count(purchaseid) from purchase";
$res16=mysqli_query($conn,$query16);
$row16=mysqli_fetch_array($res16);
$sales=$row16[0];
?>
<!doctype html>
<html lang="en">
<head>
    <title>Frozen Foods</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
        a {
            text-decoration: none;
        }
        img {
            float: left;
            width: 90px;
            height: 90px;
        }
        h4 {
            position: relative;
            left: 15px;
        }
    </style>
</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
           
        </header>
        <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header">
                <img src="images/admin_logo.png" class="demo-avatar">
                <br>
                <div class="demo-avatar-dropdown">
                    <span><?php echo $_SESSION['email']?></span>
                </div>
            </header>
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                <a class="mdl-navigation__link" href="admin_index.php">Home</a>
                  <a class="mdl-navigation__link" href="admin_customer.php">Customer</a>
                <a class="mdl-navigation__link" href="admin_employee.php">Employees</a>
                <a class="mdl-navigation__link" href="admin_view_menu.php">View Product</a>
                <a class="mdl-navigation__link" href="admin_orders_view.php">Orders</a>
                <a class="mdl-navigation__link" href="admin_supplier.php">Supplier</a>
                <a class="mdl-navigation__link" href="admin_contact_inquiries.php">Contact inquiries</a>
                <a class="mdl-navigation__link" href="admin_logout.php">Logout</a>
            </nav>
        </div>
        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-grid demo-content">
                 <!-- <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--3-col mdl-grid">
                    <img src="images/sales.jpg">
                    <a href="admin_sales.php"> <center><h4><?php echo $sales ?><br><font size="3", color="gray">Sales</font></h4></center>
                    </a>
                </div> -->
                <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--3-col mdl-grid">
                    <img src="images/supplier.png">
                    <a href="admin_supplier.php"> <center><h4><?php echo $new_supplier ?><br><font size="3", color="gray">New Supplier</font></h4></center>
                    </a>
                </div>
                <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--3-col mdl-grid">
                    <img src="images/employee.jpg">
                    <a href="admin_employee.php"> <center><h4><?php echo $new_employee ?><br><font size="3", color="gray">New Employee</font></h4></center>
                    </a>
                </div>
                <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--3-col mdl-grid">
                    <img src="images/Large_group.png">
                    <a href="admin_customer.php"> <center><h4><?php echo $new_customer ?><br><font size="3", color="gray">New Customer</font></h4></center>
                    </a>
                </div>
                <!-- <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--3-col mdl-grid">
                    <img src="images/Large_group.png">
                    <a href="admin_inventory.php"> <center><h4><?php echo $new_inventory ?><br><font size="3", color="gray">Inventory</font></h4></center>
                    </a>
                </div> -->
            <div class="mdl-grid demo-content">
                <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--3-col mdl-grid">
                    <img src="images/bag.png">
                    <a href="admin_orders_view.php"> <center><h4><?php echo $new_orders ?><br><font size="3", color="gray">New orders</font></h4></center>
                    </a>
                </div>
                <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--3-col mdl-grid">
                    <img src="images/orders_complete.png">
                    <a href="admin_orders_view.php"> <center><h4><?php echo $completed_orders ?><br><font size="3", color="gray">Orders completed</font></h4></center>
                    </a>
                </div>
                <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--3-col mdl-grid">
                    <img src="images/product_logos.png">
                    <a href="admin_view_menu.php"> <center><h4><?php echo $food_items_total ?><br><font size="3", color="gray">Product Name</font></h4></center>
                    </a>
                </div>
                <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--3-col mdl-grid">
                    <img src="images/contact_logo.png">
                    <a href="admin_contact_inquiries.php"> <center><h4><?php echo $contact_inquiries_total ?><br><font size="3", color="gray">Contact inquiries</font></h4></center>
                    </a>
                </div>
                <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
                    <br>
                    <span class="mdl-layout-title" style="margin-left: 25px">Product Name offered</span>
                    <ul class="demo-list-three mdl-list">
                        <?php
                        $query11="SELECT * FROM `tblproduct` LIMIT 0,5";
                        $res11=mysqli_query($conn,$query11);
                        while($row11=mysqli_fetch_array($res11)){
                        ?>
                            <li class="mdl-list__item mdl-list__item--three-line">
                                <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar">keyboard_arrow_right</i>
                                    <span><?php echo $row11[1]?></span>
                                    <span class="mdl-list__item-text-body">
                                        <?php echo $row11[4]?>
                                    </span>
                                </span>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <div class="mdl-card__actions mdl-card--border">
                        <a href="admin_view_menu.php" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a>
                    </div>
                </div>
                <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
                    <div class="demo-options mdl-card mdl-color--blue-300 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
                        <div class="mdl-card__supporting-text mdl-color-text--blue-grey-50">
                            <h2 class="mdl-card__title-text">Updates</h2>
                            <br><br>
                            <marquee direction="up" scrollamount="1">
                                <li>You have <b><?php echo $Kabankalan_orders?> orders</b> from <b>Kabankalan City</b></li>
                                <li>You have <b><?php echo $Himamaylan_orders?> orders</b> from <b>Himamylan City</b></li>
                                <li>You have <b><?php echo $Cadiz_orders?> orders</b> from <b>Cadiz City</b></li>
                                <li>You have <b><?php echo $Kanlaon_orders?> orders</b> from <b>Kanlaon City</b></li>
                                <li>You have <b><?php echo $Dumaguete_orders?> orders</b> from <b>Dumaguete City</b></li>
                                <li>You have <b><?php echo $Talisay_orders?> orders</b> from <b>Talisay City</b></li>
                                <li>You have <b><?php echo $Victorias_orders?> orders</b> from <b>Victorias City</b></li>
                            </marquee>
                        </div>
                    </div>
                    <div class="demo-separator mdl-cell--1-col"></div>
                    <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div class="mdl-card__title mdl-card--expand mdl-color--blue-600">
                            <h2 class="mdl-card__title-text">Locations</h2>
                        </div>
                        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                            <marquee scrollamount="2">Kabankalan City, Himamylan City, Cadiz City, Kanlaon City, Dumaguete City, Talisay City, Victorias City</marquee>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
</body>
</html>