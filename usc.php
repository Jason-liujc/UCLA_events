<!DOCTYPE html>
<html>
<head>
<style>
body{
  	background-image:url('https://research.usc.edu/files/2011/05/Bovard-vert5.jpg');
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
    background-color:#9E1B34;
    color:#ffd800;
    opacity: 0.6;
    margin:20px;
    padding:20px;
    
    border-radius:5px 5px 5px 5px;
    
    
	box-shadow:10px 10px 5px #888
    
} 

.post{
    background-color:#9E1B34;
    color:#ffd800;
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
    background-color:#9E1B34;
    color:#ffd800;
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

    background-color:#9E1B34;
    color:#ffd800;
    opacity: 0.5;
    
    float:right;
    height:400px;
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
<h2><center><font size="40">Events At USC</font></center></h2>


</div> 


<div class="post">


<h1> Listings </h1>

	
	
	

	<?php

if(isset($_POST["title"]))
{
	// Open the text file
	$f = fopen("tf2.txt", "a");

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
	$f = fopen("tf2.txt", "r");
	echo fgets($f); 

	fclose($f);


	

	?>





</div>


<div class="form">

<h1> <center> Event Submissions  </center> </h1>

<form action="usc.php" method=POST>


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
	<li> Answer Desk:  310-666-6USC	</li>
	
	<li> Office: my bed XD </li>
	
	<li> Email: JonnyTrojan@usc.edu </li>

	<li class="list"> Address: University Park Drive </li>
	
	
	<p style="color:white"><a href="ucla.php">Events at the superior school</a></p>
		
		
	<footer id="foot01"></footer>
</div>






<script>

document.getElementById("foot01").innerHTML =
"<p>&copy;  " + new Date().getFullYear() + " Crunch N Munchers.  All rights reserved.</p>";




Event.prototype.getTitle = function(p) 
{	
	return p.title;
};

Event.prototype.getDescription = function(p) 
{	
	return p.description;
};
Event.prototype.getTime = function(p) 
{	
	return p.time;
};
Event.prototype.getLocation = function(p) 
{	
	return p.location;
};
Event.prototype.getTag = function(p) 
{	
	return p.tag;
};



</script>



</body>
</html>

