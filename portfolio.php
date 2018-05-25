<?php $c = mysqli_connect("localhost", "id2538458_sajalrai", "NishaDhakad123");
      mysqli_select_db($c, "id2538458_dhakad");

?>
	
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Condensed:300" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

<style>
@media screen and (min-width:800px){

	#logo{
		padding:10px 10px 10px 40px;
		width:280px;
	}
    #top3{
		width:100%;
		height:70px;
	}
	#coll{
		color:rgb(0,0,0,0);
	}
	#coll2{
		color:rgb(0,0,0,0);
	}
	#side{
		display:none;
	}
	#side2{
		display:none;
	}
}
	
@media screen and (max-width:800px){	

	#logo{
		width:180px;
		padding:15px;
	}
	#head{
		display:none;
	}
	#top3{
		width:100%;
		height:60px;
	}
	#coll{
		color:rgb(10,10,10);
		font-size:32px;
		margin-left:80%;
		margin-top:-50px;
		display:block;
	}
	#coll2{
		color:rgb(10,10,10);
		font-size:32px;
		margin-left:80%;
		margin-top:-50px;
		display:none;
	}
	#side{
		width:100%;
		display:none;
		background:rgb(255,255,255);
		position:absolute;
		z-index:9999;
	}
	#side2{
		font-family: 'Open Sans Condensed', sans-serif;
		font-size:20px;
		color:rgb(43, 43, 43);
		padding:5px 0px;
		margin:0px 15px;
		border-bottom:1px solid rgb(240, 240, 240);
		text-align:left;	
	}
}
		
#header{
	font-family: 'Open Sans Condensed', sans-serif;
	font-size:22px;
	color:rgb(43, 43, 43);
	float:left;
	padding-left:50px;
}
#head{
	margin-left:50%;
	position:absolute;
	margin-top:-50px;
}
 #top3{
	display:block;
	width:100%;
	background:rgb(255,255,255);
}

#header:hover{
	text-shadow: 0px 0px 1px black;
}
#side2:hover{
text-shadow: 0px 0px 1px black;
}
</style>

<style>
@media screen and (min-width:800px){
	
	#footer{
	width:100%;
}
#f1{
	width:33.333%;
}
#h1{
padding-top:6%;
	

}
}
	
	@media screen and (max-width:800px){	
	    

	#footer{
	width:100%;
}
#f1{
	width:100%;}

#h1{
padding-top:20%
    
}
	}
	

#main{
	background:url("y1.jpg");
	
	background-size:cover;
	background-width:50%;
	background-position:50% 50%;
	margin-left:auto;
	margin-right:auto;
	display:block;
	width:100%;
	height:40%;
}
#h1{
	font-family: 'Lato', sans-serif;
	font-size:50px;
	color:rgb(273, 273, 273);
	text-align:center;	
}



#footer{
	background:rgb(28, 35, 49);
	display:block;

}
#f1{
float:left;
background:rgb(28, 35, 49);
display:block;
padding:10px;
height:300px;
}

#f1 ul li a{
	color:rgb(32, 187, 172);
	font-size:16px;
	
}
#f1 ul li{
	color:rgb(32, 187, 172);
	padding-bottom:10px;
	
}
#f1 ul{
	margin:20px;
	list-style-type:none;
}

</style>
<style>
@media screen and (max-width:800px){	
	    
	#row{
		width:100%;
		padding:12%;
		display:inline-block;
		
	}
    
}
	
	@media screen and (min-width:800px){
	

	#row{
		width:100%;
		padding:5% 10%;
		display:inline-block;
	
	}
	    
	}
.container {
    min-width:300px;
    float:left;
    position:relative;
    width:300px;
    padding:0px;
    border-radius:5px;
    box-shadow: 5px 10px 18px #888888;
}

#box{
background:white;
display:inline-block; 	
width:100%;
text-align:center;
border-radius:0px 0px 5px 5px;
font-family: 'Open Sans Condensed', sans-serif;
padding:20px 0px;
}
#box2{
background:rgb(255,255,255);
display:inline-block; 	
width:100%;
border-radius:5px 5px 0px 0px;
text-align:center;
font-family: 'Open Sans Condensed', sans-serif;
height:60%;
padding:20px;
}

#social{

    background: linear-gradient(141deg, rgb(50,50,50) 0%, rgb(150,150,150) 51%, rgb(100,100,100) 75%);
    opacity:1;
	display:inline-block; 	
	width:100%;
	text-align:center;
	height:40%;
	border-radius:0px 0px 5px 5px;
	padding:20px;
	font-family: 'Open Sans Condensed', sans-serif;
	
}

.hello {
  display:inline-block; 	
  width:100%;
  height:100%;
  border-radius:5px;
  text-align:center;
  font-family: 'Open Sans Condensed', sans-serif;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);

}

.image {
  display: block;
  width: 100%;
  height: auto;
  border-radius:5px 5px 0px 0px;
}

.overlay {
      border-radius:5px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: 0.5s ease;
  background-color: rgb(255,255,255);
}

.container:hover .overlay {
  opacity: 1;
}

</style>	
	
<script>
function myfunc(){
	document.getElementById("side").style.display="block";
	document.getElementById("coll").style.display="none";
	document.getElementById("coll2").style.display="block";
}
function myfunc2(){
	document.getElementById("side").style.display="none";
	document.getElementById("coll").style.display="block";
	document.getElementById("coll2").style.display="none";
}
</script>

</head>
<body>
		<div id="top3" style="" >
						<img src="img.png" id="logo">
						<div style="" id="head">
												<a href="home.php" ><p id="header" style="">Home</p></a>
												<a href="about.php" ><p id="header" style="">About</p></a>
												<a href="contact.php" ><p id="header" style="">Contact</p></a>
												<a href="team.php" ><p id="header" style="">Team</p></a>
												<a href="portfolio.php" ><p id="header" style="">Portfolio</p></a>
						</div>
						
						<i id="coll" class="material-icons" onclick="myfunc()">menu</i>
						<i id="coll2" style="display:none" class="material-icons" onclick="myfunc2()">close</i>
		</div>

		<div style="" id="side">
								<a href="home.php" style="text-decoration:none;"><p id="side2" style="">Home</p></a>
								<a href="about.php" style="text-decoration:none;"><p id="side2" style="">About</p></a>
								<a href="contact.php" style="text-decoration:none;"><p id="side2" style="">Contact</p></a>
								<a href="team.php" style="text-decoration:none;"><p id="side2" style="">Team</p></a>
								<a href="portfolio.php" style="text-decoration:none;"><p id="side2" style="">Portfolio</p></a>
		</div>
		
	<div id="main">
	<center>
						<div id="main2" style="background:rgb(40,40,40,0.2);height:100%">
										<p id="h1">Our Projects</p>
										
																	<p style="font-family: 'Roboto', sans-serif;font-size:24px;padding:5px 10px 10px 10px;color:rgb(245,245,245);line-height:24px;word-spacing:3px;">Website Development Android Application</p>
						</div>
						
	</center>
		</div>
		
		
		
		<center>
		
<div id="row"><a href="<?php echo $row['link'];?>">
<?php 
$qry ="select * from portfolio";
$result = mysqli_query($c,$qry);
$row = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result))
{
?>

<center>
<div class="container" >
 <embed src="<?php echo $row['images'];?>"  class="image">
			<div id="box">
			<p style="color:black;font-size:22px;font-style:bold;"><?php echo $row['name'];?></p> 
            <p style="color:gray;font-size:16px;"><?php echo $row['details'];?></p>  
			</div>
			
  <div class="overlay">
   <div class="hello">
			<div  id="box2">
			<p style="color:black;font-size:22px;font-style:bold;"><?php echo $row['name'];?></p> 
			<p style="color:black;font-size:16px;"><?php echo $row['details'];?></p>  
			</div>
			<div id="social">
			<a href="<?php echo $row['link'];?>"><img src="branchbl.png" style="width:40px;margin:10px"><a/>
			<a href="<?php echo $row['videos'];?>"><img src="share1.png" style="width:40px;margin:10px"></a>
			</div>
			</div> 
  </div>
</div>
</center>
<?php } ?>
</div>


<div style="" id="footer">
								 <div id="f1">
											 <h3 style="font-family: 'Roboto', sans-serif;font-size:20px;font-style:bold;padding-left;color:white"> Get Updates</h3>
											 <form>
													<input type="text" placeholder="Enter your Email" style="font-family: 'Roboto', sans-serif;width:250px;height:40px;margin:20px;;color:black;;padding:20px;background:rgb(255,255,255);border-radius:3px;border:1px solid rgb(150,150,150);">
													<input type="submit" value="Submit" style="font-family: 'Roboto', sans-serif;width:250px;color:white;height:40px;margin:0px 20px;background:rgb(32, 187, 172);border:0px">
											 </form>
								 </div>
								 <div id="f1">
											  <h3 style="font-family: 'Roboto', sans-serif;font-size:20px;font-style:bold;padding-left;color:white;">Useful Links</h3>
											  
											  <ul style="padding:20px;;font-family: 'Roboto', sans-serif;">
																										   <li>
																											  <a href="about.php">About Us</a>
                                                                                                           </li>
																										   <li>
																											   <a href="contact.php">Contact US</a> 
																										   </li>
																										   <li>
                                                                                                               <a href="team.php">Our Team</a>
																										   </li>
																										   <li>
                                                                                                               <a href="portfolio.php">Portfolio</a>
																										   </li>
                                            </ul>
							     </div> 
								
								 <div id="f1">
											  	<img src="img.png" id="logo">
											  <p style="font-family: 'Roboto Condensed', sans-serif;color:white;font-size:16px;font-style:bold;padding-left:20px;padding-top:20px">&copy; Seneca</p> 
											  <p style="font-family: 'Roboto Condensed', sans-serif;;color:gray;font-size:16px;padding-left:20px;">All Rights Reserved.</p>  
							    </div> 
								</div>