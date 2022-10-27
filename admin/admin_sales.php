<?php include 'connection.php' ?>;
<?php include 'admin_header.php' ?>;
<body>

 <div class="container" style="padding-top: 100px;">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="card-header">
             <a href="" onClick="window.print();return false" class="btn btn-info pull-right hidden-print wow fadeInDown"><img src="images/printer.ico" style="max-width: 24px; max-height: 24px;"> Print</a>

                <script type="text/javascript" src="tcal.js"></script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
                     
                    
        
            <h1 class="page-header">Sales Report</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="salesTable">
                <thead>
                    <tr>
						<th class="hidden"></th>
                        <th>Sales Date</th>
						<th>Customer</th>
                        <th>Total Purchase</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$sq=mysqli_query($conn,"select * from sales left join tblcustomers on tblcustomers.id=sales.id order by sales_date desc");
					while($sqrow=mysqli_fetch_array($sq)){
					?>
						<tr>
							<td class="hidden"></td>
							<td><?php echo date('M d, Y h:i A',strtotime($sqrow['sales_date'])); ?></td>
							<td><?php echo ucfirst($row1[2])." ".ucfirst($row1[3])."!" ?></td>
							<td align="right"><?php echo $row3[0];?>],2); ?></td>
							<td>
								<a href="#detail<?php echo $sqrow['salesid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-fullscreen"></span> View Full Details</a>
								<?php include ('full_details.php'); ?>
							</td>
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
