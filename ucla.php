<!DOCTYPE html>
<html>
<head>
<style>
body{
  	background-image:url('http://upload.wikimedia.org/wikipedia/commons/8/8e/UCLA_School_of_Law_library_tower_2.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
   

}




textarea {

width: 300px;
height: 10em;


}

a:visited {
    color: white;
}

li{

margin:20px 0;
font-family:"Comic Sans MS";
font-size: 20px;

}

form{

font-size:20px;


}



.title {
    background-color:blue;
    color:gold;
    opacity: 0.6;
    margin:20px;
    padding:20px;
    
    border-radius:5px 5px 5px 5px;
    
    
	box-shadow:10px 10px 5px #888
    
} 

.post{
	background-color:blue;
    color:gold;
	opacity: 0.5;
    height:2100px;
    width:700px;
	float:left;
	margin-left:5px;
 	margin-right:5px;
 	
 	padding:10px;

	
	
	border-radius:5px 5px 5px 5px;
	
	
	
	
	
	
	
	box-shadow:10px 10px 5px #888
	
	
}


.form{
	background-color:blue;
    color:gold;
    opacity: 0.5;
    
    float:right;
    height:600px;
    width:440px;
	
	margin-left:auto;
 	margin-right:0;
 	
 	


	padding:15px;
	
	margin-bottom:50px;
	
	border-radius:5px 5px 5px 5px;
	
	
	
	box-shadow:10px 10px 5px #888
}


.contact{

	background-color:blue;
	color:gold;
    opacity: 0.5;
    
    float:right;
    height:400px;
    width:440px;
	
	margin-left:auto;
 	margin-right:0

	padding:15px;
	
	border-radius:5px 5px 5px 5px;
	
	margin-bottom:100px;
	
	box-shadow:10px 10px 5px #888
	

}


.links{

	background-color:blue;
	color:gold;
    opacity: 0.5;
    
    float:right;
    height:200px;
    width:440px;
	
	margin-left:auto;
 	margin-right:0

	padding:15px;
	
	border-radius:5px 5px 5px 5px;
	
	
	box-shadow:10px 10px 5px #888
	

}


li.list{

margin-bottom:100px;

}


div.post{

font-size:25px;

}




</style>
</head>

<body>


    
    
<div class="title">
<h2><center><font size="40">Events At UCLA</font></center></h2>


</div> 


<div class="post">


<h1> Listings </h1>

	
	
	

	<?php

if(isset($_POST["title"]))
{
	// Open the text file
	$f = fopen("tf.txt", "a");

	// Write text line
	
	
	
	fwrite($f, $_POST["title"]); 

	fwrite($f,"</br>");
	
	
	fwrite($f, "Time: ");
	
	
	fwrite($f, $_POST["time"]); 
	
	fwrite($f,"</br>");

	fwrite($f,"Location: ");
	
	
	fwrite($f, $_POST["location"]); 
	
	fwrite($f,"</br>");
	
	fwrite($f,"Tag: "); 
	
	fwrite($f, $_POST["tag"]); 
	
	
	fwrite($f,"</br>");
	
	fwrite($f, $_POST["des"]);
	
	
	fwrite($f,"</br>");

	fwrite($f,"</br>");

	
	
	
		
		
	
	
	// Close the text file
	fclose($f); 



}

	// Open file for reading, and read the line
	$f = fopen("tf.txt", "r");
	echo fgets($f); 

	fclose($f);


	

	?>





</div>


<div class="form">

<h1> <center> Event Submissions  </center> </h1>

<form action="ucla.php" method=POST>


  Event Name: <input type="text"  name="title"   id="title"     size="33" maxlength="100"><br>
  Time: <input type="text"      name="time"   id="time"      size="42" maxlength="30"><br>
  Location: <input type="text"   name="location"   id="location"     size="37" maxlength="40"><br>
  Tag: <input type="text"    name="tag"    id="tag"     size="44" maxlength="15"><br>
  
  
  
  
  
  
	<p> Description:  </p>
  
  <p><textarea id="descrip" cols="50" rows="10" name="des" ></textarea></p>
  
  
 

  
  
<input type="submit" alt="Submit" width="200%" height="200%" >

<!-- button type="button" onClick="add()" alt="Submi>Click Me!</button-->


</form>


</div>



<div class="contact">
<h1> <center> Contact Information </center> </h1>
	<li> Answer Desk:  310-666-UCLA	</li>
	
	<li> Office: my bed XD </li>
	
	<li> Email: JoeBruin@ucla.edu </li>

	<li class="list"> Address: 330 De Neve Drive </li>
	
	
	<p style="color:white"><a href="usc.php">Events at the inferior school</a></p>
	
	
	<footer id="foot01"></footer>
</div>


<div class="links">

	<h1><center>External Links</center></h1>
	
	<li> <a href="http://uclaevents.com"> UCLAevents </a></li>
	<li> <a href="http://happenings.ucla.edu"> UCLA happenings </a></li>
	<li> <a href="https://www.eventbrite.com/d/united-states/ucla/"> UCLA EventBrite Page </a></li>


</div>






<div class="image">

 <img src="http://brand.ucla.edu/wp-content/uploads/2013/08/ucla-seal-main-31.jpg" alt="Mountain View" style="width:120px;height:100px; 
 position:relative; top:800px; right:-410px;">



</div>







<script>

document.getElementById("foot01").innerHTML =
"<p>&copy;  " + new Date().getFullYear() + " Crunch N Munchers.  All rights reserved.</p>";





</script>



</body>
</html>

