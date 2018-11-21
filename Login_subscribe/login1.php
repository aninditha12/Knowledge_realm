<?php
include('validation.php');
?>



<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="menu.css"/>
<link href="style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->

<!-- //web font -->
</head>
<body style="background-color: black">
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
	<!-- main -->
	<div id="t"  class="main-w3layouts wrapper">
		<h1>Login Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="login1.php" method="post">
					<?php include("errors1.php");?>
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<br>
					
					<input class="text" type="password" name="password" placeholder="Password" required="">
					
					
					<input type="submit" name="login" value="LOGIN">
				</form>
				<p>Don't have an Account? <a href="signup1.php">Sign Up Now!</a></p>
				<br>

				 
			</div>
		</div>
		
		
	</div>
	<!-- //main -->
</body>
</html>