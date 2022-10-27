<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    include "admin_header.php"; 
    ?>
    <div class="container" style="padding-top: 100px;">
        <div class="col-md-3"></div>
        
        <div class="col-md-6">
            <div class="well">
                <div class="row">
                    <div class="form-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3><center>Add Employee</center></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="admin_add_employee_action.php" method="get">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>First Name</label>
                            <input type="text" name="First_Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Middle Name</label>
                            <input type="text" name="Middle_Name" placeholder="" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Last Name</label>
                            <input type="text" name="Last_Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Age</label>
                            <input type="number" name="Age" placeholder=""class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Address</label>
                            <textarea class="form-control" rows="3" name="Address" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Contact</label>
                            <input type="number" name="Contact_Number" maxlength="11"  placeholder=""class="form-control" required>
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
