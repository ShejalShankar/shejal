<?php include 'db_connect.php' ?>
<html>
<head>
  <style>
  table{
    padding: 5px;
    color: black;
    border-color: black;
    border-spacing: 10px;
    font-size: 18px;
  }
  </style>
</head>
<body>



           <div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Member List</b>
						

					
					</div>
                    <div class="card-body">
						
						<table class="table table-bordered table-condensed table-hover">
							<colgroup>
								
								<col width="15%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								
							</colgroup>
							<thead>
								<tr>
									<th class="">ID</th>
								    <th class="">Date</th>
									<th class="">RID</th>
									<th class="">Email</th>
									<th class="text-center">TrainerCost</th>
									<th class="text-center">PackageAmount</th>
									<th class="text-center">PlanAmount</th>
									<th class="text-center">Total</th>
									<th class="text-center">Remark</th>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$payment =  $conn->query("SELECT * FROM payments");
								while($row=$payment->fetch_assoc()):
								?>
								<tr>
									
									<td class=""><?php echo ($row['id']) ?></td>
									
									<td class="">
										 <p><b><?php echo ucwords($row['date_created']) ?></b></p>
										 
									</td>
									<td class="">
										 <p><b><?php echo $row['registration_id'] ?></b></p>
									</td>
									<td class="">
										 <p><b><?php echo $row['member_email'] ?></b></p>
										 
									</td>
									<td class="">
										<p><b><?php echo $row['trainer_cost'] ?></b></p>
									</td>
									<td class="">
										 <p><b><?php echo $row['package_amount'] ?></b></p>
									</td>
									<td class="">
										 <p><b><?php echo $row['plan_amount'] ?></b></p>
									</td>
									<td class="">
										 <p><b><?php echo $row['total'] ?></b></p>
									</td>
									<td class="">
										 <p><b><?php echo $row['remark'] ?></b></p>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
</body>
</html>