<!doctype html>  
<html>  
<head>  
<title>user_signup</title>  
<link rel="stylesheet" href="./login.css">
<style>
body{
  background-image: url('img/12.jpg');
}
</style>

</head>  
<body>  
     <div class="container">
         <div class="main">
    <h2>User SignUp</h2>
    <h3>Sign-up Form</h3>
<form action="" method="POST" id="form_id">   
First Name: <input type="text" name="firstname" id="firstname"><br />
Middle Name: <input type="text" name="middlename" id="middlename"><br />
Last Name: <input type="text" name="lastname" id="lastname"><br />
Gender: <input type="text" name="gender" id="gender"><br />
Contact: <input type="text" name="contact" id="contact"><br />
Address: <input type="text" name="address" id="address"><br />
email: <input type="email" name="user_email" id="user_email"><br />    
Password: <input type="password" name="pass" id="password"><br />   
<input type="submit" value="submit" name="submit" id="submit" />  
        
</form> 
</div>
</div> 
<?php  
if(isset($_POST["submit"])){  
if( !empty($_POST['pass']) && !empty($_POST['firstname']) && !empty($_POST['middlename'])&& !empty($_POST['lastname'])&& !empty($_POST['gender'])&& !empty($_POST['contact'])&& !empty($_POST['address'])&&!empty($_POST['user_email'])) { 
    $fname=$_POST['firstname'];
	$mname=$_POST['middlename'];
    $lname=$_POST['lastname'];
	$gen=$_POST['gender'];
	$cont=$_POST['contact'];
	$add=$_POST['address'];
    $useremail=$_POST['user_email']; 
    $pass=$_POST['pass'];  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'gym_db') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM members WHERE firstname='".$fname."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO members (firstname,middlename,lastname,gender,contact,address,email,password) VALUES('$fname','$mname','$lname','$gen','$cont','$address','$useremail','$pass');";  
    
    $result=mysqli_query($con,$sql); 
        if($result){  
    echo '<script>alert("Account Successfully Created!")</script>';  
    } else {  
    echo '<script>alert("Failed to create account!")</script>';  
    }  
    } else {  
    echo '<script>alert("Username already exists. Try with a different username.")</script>';  
    }  
  
} else {  
    echo '<script>alert("All Fields are required!")</script>';  
}  
}  
?>  
</body>  
</html>   