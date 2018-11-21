<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="menu.css" />

<style>

body{
  background-color:white;
  font-size:20px;

}

#quiz {
    position: relative;
    color:black;
    font-size:25px;
    font-family: Verdana, sans-serif;
    
}
.header {
  padding: 2px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 20px;
  font-family: cursive;
}

</style>
</head>
</style>


</head>
<body>
	<div class="header">
	<h1>KNOWLEDGE REALM</h1>
</div>
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

<br/>

<form action="grade.php" method="post" id="quiz">
	<div id="xyz">
<ol style="list-style-type:none;">
	<li style="float:none;">
    <h3>1) Who is the creator of C?</h3>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
        <label for="question-1-answers-A">A) Dennis Ritchie </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
        <label for="question-1-answers-B">B) Robert Louis Stevenson</label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
        <label for="question-1-answers-C">C) Donald Knuth</label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
        <label for="question-1-answers-D">D) None of the above</label>
    </div>
	<br/>
</li>
<li style="float:none;">
    <h3>2) Who is the creator of Python?</h3>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
        <label for="question-2-answers-A">A) John Von Neumann</label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
        <label for="question-2-answers-B">B) Ada Lovelace</label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
        <label for="question-2-answers-C">C) Guido Van Rossum</label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
        <label for="question-2-answers-D">D) None of the above</label>
    </div>
    <br/>
</li>
<li style="float:none;">
    <h3>3) Who is the creator of R?</h3>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
        <label for="question-3-answers-A">A) Fred Brooks </label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
        <label for="question-3-answers-B">B) Ross Ihaka</label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
        <label for="question-3-answers-C">C) Tim Berners-Lee</label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
        <label for="question-3-answers-D">D) None of the above</label>
    </div>
<br/>
</li>
<li style="float:none;">
    <h3>4) Which of the following is not a valid datatype in C?</h3>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
        <label for="question-4-answers-A">A) String </label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
        <label for="question-4-answers-B">B) Bool</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
        <label for="question-4-answers-C">C) Double</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
        <label for="question-4-answers-D">D) Unsigned Char</label>
    </div>

<br/>
</li>
<li style="float:none;">

    <h3>5) What is the output of 13/4 and 13//4?</h3>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
        <label for="question-5-answers-A">A) 3.25 and 3.25  </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
        <label for="question-5-answers-B">B) 3 and 3</label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
        <label for="question-5-answers-C">C) 3 and 3.25</label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
        <label for="question-5-answers-D">D) 3.25 and 3</label>
    </div>
<br/>
</li>
<li style="float:none;">
    <h3>6) If you explicitely want an integer in R, what suffix needs to be specified?</h3>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
        <label for="question-6-answers-A">A) D </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
        <label for="question-6-answers-B">B) R </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
        <label for="question-6-answers-C">C) C </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
        <label for="question-6-answers-D">D) None of the above </label>
    </div>
<br/>
</li>
<li style="float:none;">
    <h3>7) In C, parameters are always ________.</h3>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
        <label for="question-7-answers-A">A) Pass by value </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
        <label for="question-7-answers-B">B) Pass by reference </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
        <label for="question-1-answers-C">C) Non-pointer variables are pass by value and pointers are pass by reference </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
        <label for="question-7-answers-D">D) Pass by value result </label>
    </div>

<br/>
</li>
<li style="float:none;">
    <h3>8) Which keyword is used to define a function in Python?</h3>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
        <label for="question-8-answers-A">A) function </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
        <label for="question-8-answers-B">B) def </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
        <label for="question-8-answers-C">C) define </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
        <label for="question-8-answers-D">D) void </label>
    </div>

<br/>
</li>
<li style="float:none;">
    <h3>9) Point out the wrong statement with respect to R programming language.</h3>
    
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
        <label for="question-9-answers-A">A) Functions in R are second class objects </label>
    </div>
    
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
        <label for="question-9-answers-B">B) Functions provide an abstraction of the code</label>
    </div>
    
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
        <label for="question-9-answers-C">C) Functions allow a developer to create an interface in the code </label>
    </div>
    
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
        <label for="question-9-answers-D">D) None of the above </label>
    </div>
<br/>
</li>
</ol>
<div align="center">
<input type="submit" value="Submit Quiz" style="font-size: 25px;background-color:#1abc9c;color: white;width: 200px;height:70px;"></input></div>
</div>
</form>


</body>
</html>

