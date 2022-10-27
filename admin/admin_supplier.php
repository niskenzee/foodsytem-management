<?php
include "admin_header.php";
include "connection.php";
$query="select * from tblsupplier";
$result=mysqli_query($conn,$query);

//alerts
if(isset($_REQUEST['q'])) {
    if ($_REQUEST['q'] == 1) {
        ?>

        <div class="alert alert-info" style="padding-top: 100px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Supplier deleted</center>
        </div>
        <?php
    }
    if ($_REQUEST['q'] == 2) {
        ?>
        <div class="alert alert-success"style="padding-top: 100px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Supplier added</center>
        </div>
        <?php
    }
    if ($_REQUEST['q'] == 3) {
        ?>
        <div class="alert alert-success"style="padding-top: 100px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Supplier updated</center>
        </div>
        <?php
    }
    if ($_REQUEST['q'] == 4) {
        ?>
        <div class="alert alert-danger"style="padding-top: 100px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Supplier already exists!</center>
        </div>
        <?php
    }
}
?>
<!doctype>
<html>
<head>
  <!-- Page shows all the food items in the db and also provides options such as editing, deleting food items -->
</head>
<body>
    <div class="container" style="padding-top: 100px;">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="card-header">
             
                     
                    <center><h2>List of Supplier</h2><a href="admin_add_supplier.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a></h2> </div></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th >Id</th>
                        <th>Supplier Name</th>
                        <th>Supplier Address</th>
                        <th>Contact Number</th>
                        <th>Email Address</th>
                       
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count=1;
                        while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $count."." ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        

                        
                       
                    </tr>
                    <?php
                    $count++;
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
