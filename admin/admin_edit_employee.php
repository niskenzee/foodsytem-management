<!doctype>
<html>
<head></head>
<body>
    <?php
    include "admin_header.php";
    include "connection.php";
    $First_Name=$_REQUEST['First_Name'];
    $query="select * from tblemployee where First_Name='$First_Name'";
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
                            <div class="panel-heading"><h2><center>Edit Employee information</center></h2></div>
                        </div>
                    </div>
                </div>
                <form action="admin_edit_employee_action.php" method="get">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <table class="table table-condensed">
                                <thead></thead>
                                <tbody>
                                    <tr>
                                        <td>First Name</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="First_Name" value="<?php echo $row[1] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Middle Name</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="Middle_Name" value="<?php echo $row[2] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="Last_Name" value="<?php echo $row[3] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td></td>
                                        <td><input type="number" class="form-control"name="Age" value="<?php echo $row[4] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td></td>
                                        <td><textarea class="form-control" rows="3" name="Address"><?php echo $row[5] ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Contact</td>
                                        <td></td>
                                        <td><textarea type="number" class="form-control" name="Contact_Number"><?php echo $row[6] ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td></td>
                                        <td><textarea type="" class="form-control" name="Email_Address"><?php echo $row[7] ?></textarea></td>
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
