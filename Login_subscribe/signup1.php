
<?php
//include("validation.php");
session_start();
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password,"authentication");
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
$password1="";
$password2="";
$sql="SELECT * FROM users";
$sq="SELECT Username FROM users";
$result=mysqli_query($conn,$sql);
//echo mysqli_num_rows($result);
$res=mysqli_query($conn,$sq);
if(isset($_POST['Username']))
	$Username= $_POST['Username'];
if(isset($_POST['email']))
	$email=$_POST['email'];
if(isset($_POST['password']))
	$password1=$_POST['password'];
if(isset($_POST['password1']))
	$password2=$_POST['password1'];
$errors=array();



if(!empty($password1)){
	if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password1)){
	    array_push($errors,"Your password is strong.");
	} else {
		if(!empty($password1))
	    	array_push($errors, "Your password is not safe.");

	}
}



if(($password1 == $password2) && !empty($password1))
{
$flag=0;
	while($row=mysqli_fetch_assoc($res))
	{
		$riname=$row["Username"];
		if($Username==$riname)
		{
			$flag=1;
		}
	}
	if($flag)
		array_push($errors,"Username already exists");

	else
		{
			$query2="INSERT INTO users(Username,email,password) VALUES('$Username','$email','$password1')";
			if(!mysqli_query($conn,$query2)){
				array_push($errors,"successfully inserted");
					}
			else
			{
				//echo "Error:".$sql."<br/>".mysqli_error($conn);
			}
		}	
}
else
{
	if(!empty($password1))
		array_push($errors,"Password doesnt match");
}



?>


<!DOCTYPE html>
<html>
<head>
<title> SignUp Form</title>
<link href="style1.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="menu.css"/>
</head>
<body style="background-color: black">
	<!-- main -->
	<ul>
  <li><a href="Homepage.html">Home</a></li>

  <li class="dropdown">
    <a class="dropbtn" href="CHomepage.html">C</a>
    <div class="dropdown-content">
      
      <a href="basicC.html">Basics</a>
      <a href="loopsC.html">Loops</a>
      <a href="functionC.html">Functions</a>
   </div>
  </li>
  <li class="dropdown">
    <a class="dropbtn" href="PythonHomepage.html">Python</a>
    <div class="dropdown-content">
      
      <a href="basicP.html">Basics</a>
      <a href="loopsP.html">Loops</a>
      <a href="functonP.html">Functions</a>
   </div>
  </li>
  <li class="dropdown">
    <a class="dropbtn" href="RHomepage.html">R</a>
    <div class="dropdown-content">
      
      <a href="basicR.html">Basics</a>
      <a href="loopsR.html">Loops</a>
      <a href="functonR.html">Functions</a>
   </div>

  </li>
  <li><a href="Quiz.html">Quiz</a></li>
  <li><a href="subscribe.html">Subscribe</a></li>  
  <li><a href="About_us.html">About Us</a></li>
</ul>
	<div id="t" class="main-w3layouts wrapper">
		<h1 >SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="signup1.php" method="post">
					<?php include("errors1.php"); ?>
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password1" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit"'name="submit1" value="SIGN UP!">
				</form>
				
			</div>
		</div>
		
		
	</div>
	<!-- //main -->
</body>
</html>