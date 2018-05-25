<html>
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

/* Header */

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
@media screen and (max-width:800px){	
	#three{
		width:95%;
		height:auto;
	}
}

@media screen and (min-width:800px){
	#three{
		width:45%;
		height:auto;
	}
}

#one{
	background-image:url("teambg.jpg");
	background-size:cover;
	background-width:50%;
	background-position:50% 50%;
	margin-left:auto;
	margin-right:auto;
	display:block;
	width:100%;
	height:90%;
}
#two{
background:rgb(0,0,0,0.2);	
height:100%;
width:100%;
padding-top:7%;
}
#three{
	background:rgb(25,25,25,0.95);
	  box-shadow: 5px 8px 20px rgba(0, 0, 0, 1);
}
#img{
	width:50%;
	padding:20px;	
}
#p1{
	padding:20px 30px;
	font-size:16px;
	font-family: 'Roboto Condensed', sans-serif;
	color:rgb(255,255,255);
	word-spacing:1.5px;
	letter-spacing:1px;
	line-height:25px;
}
#p2{
	padding:0px 30px 20px 30px;
	font-size:16px;
	font-family: 'Roboto Condensed', sans-serif;
	color:rgb(255,255,255);
	word-spacing:1.5px;
	letter-spacing:1px;
	line-height:25px;
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
						<i id="coll2" class="material-icons" onclick="myfunc2()">close</i>
		</div>

		<div style="" id="side">
								<a href="home.php" style="text-decoration:none;"><p id="side2" style="">Home</p></a>
								<a href="about.php" style="text-decoration:none;"><p id="side2" style="">About</p></a>
								<a href="contact.php" style="text-decoration:none;"><p id="side2" style="">Contact</p></a>
								<a href="team.php" style="text-decoration:none;"><p id="side2" style="">Team</p></a>
								<a href="portfolio.php" style="text-decoration:none;"><p id="side2" style="">Portfolio</p></a>
		</div>
		
		<div id="one" >
		<div id="two" >
		
		<center><div id="three">
		<img src=" img.png" id="img">
		<p id="p1">
		Hello,I'm Mahesh Sharma. I am a self taught computer programmer, web and android app developer. I always intend to make some cool stuff which can help people.
		</p>
		<p id="p2">		
		I have created several web and android applications for different clients and for myself as well. I generally use php/node, html css, mysql, javascript, bootstrap, jquery and ajax for developing web apps and android studio for developing android applications. I also like programming in c, c++. Also created 2 computer games using pygame library in pycharm IDE. I also worked for a startup company as a head web developer.
		</p>
		</div></center>
		
		</div>
		</div>
		
		
		
		
		
		</body>
		