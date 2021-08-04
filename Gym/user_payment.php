<html>
<?php include 'db_connect.php'?>
<body>
<div class="container-fluid">
	<form method="post" action="" id="manage-payment">
		<div id="msg"></div>
			<div class="form-group">
				<label class="control-label">Email:</label>
				
					<?php
					if(isset($_SESSION['sess_user']))
					{
					$con=mysqli_connect('localhost','root','') or die(mysql_error());
					mysqli_select_db($con,'gym_db') or die("cannot select DB");  
						$query=mysqli_query($con,"SELECT * FROM payments"); 
	                      $numrows=mysqli_num_rows($query);
	                      if($numrows!=0)
	                      {
		                      while($row=mysqli_fetch_assoc($query))
		                     {
			                    $name=$row['member_email'];
			                    if($row['member_email']==$_SESSION['sess_user']){
				                  break;
			                    }
		                     }
	                      }
						  echo $name; 
					}
					?>
					
				</div>
				<div class="form-group">
				<label class="control-label">Plan_Amount</label>
				
					<?php
					$con=mysqli_connect('localhost','root','') or die(mysql_error());
					mysqli_select_db($con,'gym_db') or die("cannot select DB");  
						$query=mysqli_query($con,"SELECT * FROM payments"); 
	                      $numrows=mysqli_num_rows($query);
	                      if($numrows!=0)
	                      {
		                      while($row=mysqli_fetch_assoc($query))
		                     {
			                    $amount=$row['plan_amount'];
			                    if($row['member_email']==$_SESSION['sess_user']){
				                  break;
			                    }
		                     }
	                      }
						  echo $amount;
					?>
					
				</div>
				<div class="form-group">
				<label class="control-label">Package_Amount</label>
				
					<?php
					$con=mysqli_connect('localhost','root','') or die(mysql_error());
					mysqli_select_db($con,'gym_db') or die("cannot select DB");  
						$query=mysqli_query($con,"SELECT * FROM payments"); 
	                      $numrows=mysqli_num_rows($query);
	                      if($numrows!=0)
	                      {
		                      while($row=mysqli_fetch_assoc($query))
		                     {
			                    $amount=$row['package_amount'];
			                    if($row['member_email']==$_SESSION['sess_user']){
				                  break;
			                    }
		                     }
	                      }
						  echo $amount;
					?>
					
				</div>
				<div class="form-group">
				<label class="control-label">trainer_Amount</label>
				
					<?php
					$con=mysqli_connect('localhost','root','') or die(mysql_error());
					mysqli_select_db($con,'gym_db') or die("cannot select DB");  
						$query=mysqli_query($con,"SELECT * FROM payments"); 
	                      $numrows=mysqli_num_rows($query);
	                      if($numrows!=0)
	                      {
		                      while($row=mysqli_fetch_assoc($query))
		                     {
			                    $amount=$row['trainer_cost'];
			                    if($row['member_email']==$_SESSION['sess_user']){
				                  break;
			                    }
		                     }
	                      }
						  echo $amount;
					?>
					
				</div>
			</div>
			<input name="Save" type="submit" class="button" value="Save" onclick="Save">
			<?php save_payment();?>
	</form>
</div>
	
	<?php
        function save_payment(){
		extract($_POST);
		$con=mysqli_connect('localhost','root','') or die(mysql_error());
					mysqli_select_db($con,'gym_db') or die("cannot select DB");  
		$update = mysqli_query($con,"UPDATE payments set remark = 1 where member_email= '".$_SESSION['sess_user']."' ");
		
		if($update){
			return 1;
			echo "Payment Successfull";
		}
	}
	?>
</body>
</html>