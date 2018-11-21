<!DOCTYPE html>
<html>
<head>
	<title>score display</title>
	<style>
	#above4{
		background-image: url("fireworks.jpeg");
    height: 600px; 
    width: 1430px;    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
	}
	#below4{
		background-image: url("road.jpg");
    height: 600px; 
    width: 1430px;    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
	}
	</style>
</head>
<body>
	<div id="xyz">
<?php
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];
    $answer9 = $_POST['question-9-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "A") { $totalCorrect++; }
    if ($answer2 == "C") { $totalCorrect++; }
    if ($answer3 == "B") { $totalCorrect++; }
    if ($answer4 == "A") { $totalCorrect++; }
    if ($answer5 == "D") { $totalCorrect++; }
    if ($answer6 == "D") { $totalCorrect++; }
    if ($answer7 == "C") { $totalCorrect++; }
    if ($answer8 == "B") { $totalCorrect++; }
    if ($answer9 == "A") { $totalCorrect++; }

    if($totalCorrect>4){
    echo "<div id='above4' align=left style='font-size:90px; color:white; padding:40px;'><b>$totalCorrect / 9 correct</b><br/>WELL <br/>DONE!!";
    echo "<img src=trophy.jpg align=right style='display: block; margin-left: auto; margin-right: auto; width: 20%; border-radius: 50%; padding:100px;'>";
    echo "</div>";
	}
	else{
    echo "<div id='below4' align=left style='font-size:90px; padding:40px;'><b>$totalCorrect / 9 correct</b><br/><br/><br/>";
    echo "<blockquote style='font-size:40px; color:white;'><b><i>The journey is never ending. There is always going to be growth, improvement and adversity. Be there with us to master the provided languages.</i></b></blockquote>";
    echo "</div>";
	}
    
?>

</div>
</body>
</html>

