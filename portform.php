<?php $c = mysqli_connect("localhost", "id2538458_sajalrai", "NishaDhakad123");
      mysqli_select_db($c, "id2538458_dhakad");

?>
<form method="post" action="portform.php" enctype="multipart/form-data">

<input type="text" placeholder="name" Name="a">
<input type="file" title="choose"  name="b" >
<input type="text" placeholder="details" Name="c">
<input type="text" placeholder="link" Name="d">
<input type="file" placeholder="video" Name="e">


<input type="submit" Value="upload" >

</form>
<?php 
if(!empty($_POST["a"])){

		$name = $_FILES['b'];
		$target = "uploads/".basename($_FILES['b']['name']);
		move_uploaded_file($_FILES['b']['tmp_name'],$target);
		$name2 = $_FILES['e'];
		$target2 = "uploads/".basename($_FILES['e']['name']);
		move_uploaded_file($_FILES['e']['tmp_name'],$target2);

			$q = "INSERT  INTO  portfolio(name,images,details,link,videos) VALUES ('$_POST[a]','$target','$_POST[c]','$_POST[d]','$target2')" ;
			if($r = mysqli_query($c,$q)  or die("connect failed" .mysql_error())){
			echo "uploaded";
		 }
      }


?>