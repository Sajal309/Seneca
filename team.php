<?php $c = mysqli_connect("localhost", "id2538458_sajalrai", "NishaDhakad123");
      mysqli_select_db($c, "id2538458_dhakad");

?>
	
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Condensed:300" rel="stylesheet">
	  
	  
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
	  
	  
<style>@media screen and (min-width:800px){

#pop{
	padding:0px 31%;
}
	#row{
		width:100%;
		display:inline-block;
		
	}
	#footer{
	width:100%;
}
#f1{
	width:33.333%;
}
	.a1{
	padding:20px 30px;
}

	}
	
	@media screen and (max-width:800px){	

	#footer{
	width:100%;
}
#f1{
	width:100%;
}
#pop{
	padding:0px 3%;
}
	.a1{
	padding:20px 10px;
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
	height:50%;
}
#h1{
	font-family: 'Lato', sans-serif;
	font-size:50px;
	padding-top:7%;
	color:rgb(273, 273, 273);
	text-align:center;	
}

.a1:hover{
	background:rgb(200,200,200,0.5);
}

#footer{
	background:rgb(28, 35, 49);
	display:block;
}
#f1{
float:left;
background:rgb(28, 35, 49);
display:block;
padding:30px;
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
body{
		padding:0px;
		margin:0px;
		background:rgb(250,240,230,0.8)
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

display:inline-block; 	
width:100%;
border-radius:5px 5px 0px 0px;
text-align:center;

font-family: 'Open Sans Condensed', sans-serif;
height:60%;
padding:20px;
}

#social{

    background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
    opacity:0.95;display:inline-block; 	
width:100%;
text-align:center;
height:40%;
border-radius:0px 0px 5px 5px;
padding:20px;
font-family: 'Open Sans Condensed', sans-serif;
	
}

.container {
  position:relative;
}


.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background:white;
  overflow: hidden;
  width: 100%;
  height: 101%;
  -webkit-transform:scale(0);
  transition: .2s ease;
  border-radius:5px;
}

.container:hover .overlay {
  transform: scale(1)
}

.hello {

  display:inline-block; 	
  width:100%;
  height:101%;
  border-radius:5px;
  text-align:center;
  font-family: 'Open Sans Condensed', sans-serif;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);

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
						
						<i id="coll"  class="material-icons" onclick="myfunc()">menu</i>
						<i id="coll2"  class="material-icons" onclick="myfunc2()">close</i>
		</div>

		<div  id="side">
								<a href="home.php" style="text-decoration:none;"><p id="side2" style="">Home</p></a>
								<a href="about.php" style="text-decoration:none;"><p id="side2" style="">About</p></a>
								<a href="contact.php" style="text-decoration:none;"><p id="side2" style="">Contact</p></a>
								<a href="team.php" style="text-decoration:none;"><p id="side2" style="">Team</p></a>
								<a href="portfolio.php" style="text-decoration:none;"><p id="side2" style="">Portfolio</p></a>
		</div>
		
	<div id="main">
	<center>
						<div id="main2" style="background:rgb(40,40,40,0.2);height:100%;position:relative">
										<p id="h1">Our Projects</p>
										<p style="font-family: 'Roboto', sans-serif;font-size:24px;padding:0px 10px 10px 10px;color:rgb(245,245,245);line-height:24px;word-spacing:3px;">Website Development Android Application</p>

<div id="pop" style="width:100%;height:70px;background:rgb(0,0,0,0.7);position:absolute;bottom:0;min-width:300px">
<p class="a1" style="font-family: 'IBM Plex Sans Condensed', sans-serif;;font-size:22px;color:rgb(243, 243, 243);float:left;" >Developers</p>
<p class="a1" style="font-family: 'IBM Plex Sans Condensed', sans-serif;;font-size:22px;color:rgb(243, 243, 243);float:left;" >Designers</p>
<p class="a1" style="font-family: 'IBM Plex Sans Condensed', sans-serif;;font-size:22px;color:rgb(243, 243, 243);float:left;" >Leaders</p>
</div>
						</div>
				
	</center>
		</div>






<center>
<div id="row" style="padding:5%">
<?php 
$qry ="select * from team";
$result = mysqli_query($c,$qry);
$row = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result))
{
?>

<div  id="col" style="width:300px;padding:0px;border-radius:5px;;display:border-box; box-shadow: 5px 10px 18px #888888;float:left;margin:4%" class="container">

<img src="<?php echo $row['image'];?>" style="width:100%;border-radius:5px 5px 0px 0px;" class="image">

<div  id="box">
<p style="color:black;font-size:22px;font-style:bold;"><?php echo $row['name'];?></p> 

<p style="color:gray;font-size:16px;"><?php echo $row['post'];?></p>  

</div>
<div class="overlay"><div class="hello">
<div  id="box2" style="background:rgb(150,150,150,0.2)">
<p style="color:black;font-size:22px;font-style:bold;"><?php echo $row['name'];?></p> 
<p style="color:gray;font-size:16px;"><?php echo $row['details'];?></p>  

</div>
	
	<div id="social" style="">
	<div style="padding:20px">
	<a href="<?php echo $row['instagram'];?>"><img src="ins.png" style="width:30px;margin:10px"><a/>
	<a href="<?php echo $row['facebook'];?>"><img src="fb2.png" style="width:30px;margin:10px"></a>
	<a href="<?php echo $row['gmail'];?>"><img src="ma.png" style="width:30px;margin:10px"></a>
	</div>
	</div>
</div>

</div>

  </div>

<?php } ?>
</div>
  </center>
  
  <div style="" id="footer">

  <div id="f1">
<h3 style="font-family: 'Roboto', sans-serif;font-size:20px;font-style:bold;padding-left;color:white"> Get Updates</h3>
<form>
<input type="text" placeholder="Enter your Email" style="font-family: 'Roboto', sans-serif;width:250px;height:40px;margin:20px;;color:black;;padding:20px;background:rgb(255,255,255);border-radius:3px;border:1px solid rgb(150,150,150);">
<input type="submit" value="Submit" style="font-family: 'Roboto', sans-serif;width:250px;color:white;height:40px;margin:0px 20px;background:rgb(32, 187, 172);border:0px">
  
</div>
  <div id="f1">
<h3 style="font-family: 'Roboto', sans-serif;font-size:20px;font-style:bold;padding-left;color:white;">Useful Links</h3>
  <ul style="padding:20px;;font-family: 'Roboto', sans-serif;">
                    <li>
                        <a href="#!">About Us</a>
                    </li>
                    <li>
                        <a href="#!">Contact US</a>                  </li>
                    <li>
                        <a href="#!">Our Team</a>
                    </li>
                    <li>
                        <a href="#!">Projects</a>
                    </li>
                </ul>
</div> 
  <div id="f1">
<h3 style="font-family: 'Roboto', sans-serif;font-size:20px;font-style:bold;padding-left;color:white">ACM</h3>
<p style="font-family: 'Roboto Condensed', sans-serif;color:white;font-size:16px;font-style:bold;padding-left:20px;padding-top:20px">&copy; ACM.JEC</p> 

<p style="font-family: 'Roboto Condensed', sans-serif;;color:gray;font-size:16px;padding-left:20px;">All Rights Reserved.</p>  
</div>  </div>

</body>
</html>