<html>
<head>
<style type="text/css">
	#welcome{
	background-image: url("abcd.jpg");
    height: 600px; 
    width: 1430px;    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 30px;
    margin-left: 50px;
    
	}
</style>
</head>
<body>
	<div id="welcome">
<?php

#checking for connection
$servername="localhost";
$username="root";
$password="";
$dbname="mysql";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("connection failed:".mysqli_connect_error());
}

$sql="SELECT * FROM subdets";
$sq="SELECT email FROM subdets";
$result=mysqli_query($conn,$sql);
//echo mysqli_num_rows($result);
$res=mysqli_query($conn,$sq);
$first_name= $_POST['firstname'];
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['number'];

$flag=0;
	while($row=mysqli_fetch_assoc($res))
	{
		$riname=$row["email"];
		if($email==$riname)
		{
			$flag=1;
		}
	}
	if($flag)
		echo "<h1>U have already subscribed</h1>";

	else
		{
			$query2="INSERT INTO subdets(first_name,last_name,email,phone) VALUES('$first_name','$last_name','$email','$phone')";
			if(mysqli_query($conn,$query2)){
				echo " ";
					}
			else
			{
				echo "Error:".$sql."<br/>".mysqli_error($conn);
			}
		}

mysqli_close($conn);

?>
</div>
</body>
</html>