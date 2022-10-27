<!doctype>
<html>
<head></head>
<body>
    <?php
    include "admin_header.php";
    include "connection.php";
    $Supplier_Name=$_REQUEST['Supplier_Name'];
    $query="select * from tblsupplier where Supplier_Name='$Supplier_Name'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
    ?>
    <div class="container" style="padding-top: 100px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="well">
                <div class="row">
                    <div class="form-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h2><center>Edit Supplier information</center></h2></div>
                        </div>
                    </div>
                </div>
                <form action="admin_edit_supplier_action.php" method="get">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <table class="table table-condensed">
                                <thead></thead>
                                <tbody>
                                    <tr>
                                        <td>Supplier Name</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="First_Name" value="<?php echo $row[1] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Supplier Address</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="Middle_Name" value="<?php echo $row[2] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Contact Number</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="Last_Name" value="<?php echo $row[3] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td></td>
                                        <td><input type="number" class="form-control"name="Age" value="<?php echo $row[4] ?>"></td>
                                    </tr>
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
