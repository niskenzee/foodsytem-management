<?php include 'connection.php' ?>;
<?php include 'admin_header.php' ?>;

	
<body>
	 
<div class="container" style="padding-top: 100px;">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="card-header">
             
                     
                    <center><h2>Inventory</h2></h2> </div></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
						<th class="hidden"></th>
                        <th>Inventory Date</th>
						<th>User</th>
                        <th>Action</th>
						<th>Product Name</th>
						<th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$iq=mysqli_query($conn,"select * from inventory left join tblproduct on tblproduct.productid=inventory.productid order by inventory_date desc");
					while($iqrow=mysqli_fetch_array($iq)){
					?>
						<tr>
							<td class="hidden"></td>
							<td><?php echo date('M d, Y h:i A',strtotime($iqrow['inventory_date'])); ?></td>
							<td>
							<?php 
								$u=mysqli_query($conn,"select * from `user` left join tblcustomers on tblcustomers.id=user.id left join supplier on supplier.id=user.id where user.id='".$iqrow['id']."'");
								$urow=mysqli_fetch_array($u);
								if($urow['access']==1){
									echo "Admin";
								}
								elseif($urow['access']==2){
									echo $urow['first_name'];
								}
								else{
									echo $urow['company_name'];
								}
							?>
							</td>
							<td align="right"><?php echo $iqrow['action']; ?></td>
							<td align="right"><?php echo $iqrow['product_name']; ?></td>
							<td align="right"><?php echo $iqrow['quantity']; ?></td>
						</tr>
					<?php
					}
				?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>