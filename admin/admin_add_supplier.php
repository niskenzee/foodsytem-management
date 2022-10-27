<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    include "admin_header.php"; //including header file for admin panel
    ?>
    <!-- bootstrap classes to improve UI -->
    <div class="container" style="padding-top: 100px;">
        <div class="col-md-3"></div>
        <!-- form to add new food items -->
        <div class="col-md-6">
            <div class="well">
                <div class="row">
                    <div class="form-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3><center>Add Supplier</center></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="admin_add_supplier_action.php" method="get">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Supplier Name</label>
                            <input type="text" name="Supplier_Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Supplier Address</label>
                            <input type="text" name="Supplier_Address" placeholder="" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Contact</label>
                            <input type="number" name="Contact_Number" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Email</label>
                            <input type="text" name="Email_Address" placeholder=""class="form-control" required>
                        </div>
                    </div>
                   
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
