<?php if(!isset($_SESSION)) { session_start(); } ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Albanian Alps</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<?php include('function.php'); ?>


<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">




<form method="post" enctype="multipart/form-data">
<table border="0" width="400px" height="450px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Shto Paket</td></tr>
<tr><td class="lefttxt">Emri i Paketes</td><td><input type="text" name="t1" required pattern="[a-zA-z _-]{3,50}" title"Ju lutem fusni vetem karaktere dhe numra midis 3-50" /></td></tr>
<tr><td class="lefttxt">Zgjidh Kategori</td><td><select name="t2" required/><option value="">Zgjidh</option>

<?php
$cn=makeconnection();
$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
if(isset($_POST["show"])&& $data[0]==$_POST["t2"])
	{
			echo "<option value=$data[0] selected='selected'>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
}



?>

</select>
<input type="submit" value="Shfaq" name="show" formnovalidate/>

<tr><td class="lefttxt">Zgjidh Subkategori</td><td><select name="t3" required/><option value="">Zgjidh</option>

<?php
$cn=makeconnection();
$s="select * from subcategory";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"]))
	{
	if($data[2]==$_POST["t2"])
	{
		echo"<option value=$data[0] >$data[1]</option>";
	}
	else
	{
	//	echo "<option value=$data[0]>$data[1]</option>";
	}
	}
}



?>

</select>

<tr><td class="lefttxt">Cmimi i Paketes</td><td><input type="text" name="t8" /></td></tr>
<tr><td class="lefttxt">Ngarko Foton 1</td><td><input type="file" name="t4" /></td></tr>
<tr><td class="lefttxt">Ngarko Foton 2</td><td><input type="file" name="t5" /></td></tr>
<tr><td class="lefttxt">Ngarko Foton 3</td><td><input type="file" name="t6" /></td></tr>
<tr><td class="lefttxt">Detajet</td><td><textarea name="t7"></textarea></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Rregjistro" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$f1=0;
	$f2=0;
	$f3=0;
	
	$target_dir = "packimages/";
	//t4
	$target_file = $target_dir.basename($_FILES["t4"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t4"]["tmp_name"]);
	if($check!==false) {
		echo "Dosja eshte nje imazh - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "Dosja nuk eshte nje imazh.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "Me vjen keq, dosja ekziston.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t4"]["size"]>500000){
		echo "Me vjen keq, dosja eshte shume e madhe.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "Me vjen keq, vetem jpg, jpeg, png dhe gif lejohen.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
			$f1=1;
	} else{
			echo "Me vjen keq, pati nje error gjate ngarkimit te dosjes.";
		}
	}
	
	
	//t5
	$target_file = $target_dir.basename($_FILES["t5"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t5"]["tmp_name"]);
	if($check!==false) {
		echo "Dosja  eshte nje imazh - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "Dosja nuk eshte nje imazh.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "Me vjen keq, dosja eshte ngarkuar nje here.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t5"]["size"]>500000){
		echo "Me vjen keq, dosja juaj eshte shume e madhe.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "Me vjen keq, vetem jpg, jpeg, png dhe gif lejohen.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t5"]["tmp_name"], $target_file)){
			$f2=1;
	} else{
			echo "Me vjen keq, pati nje error gjate ngarkimit";
		}
	}
	//t6
	$target_file = $target_dir.basename($_FILES["t6"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t6"]["tmp_name"]);
	if($check!==false) {
		echo "Dosja eshte nje imazh - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "Dosja nuk eshte nje imazh.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "Me vjen keq. dosja juaj ekziston nje here.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t6"]["size"]>500000){
		echo "Me vjen keq, dosja juaj eshte shume e madhe.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "Me vjen keq, vetem jpg, jpeg, png dhe gif lejohen.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t6"]["tmp_name"], $target_file)){
			$f3=1;
	} else{
			echo "Me vjen keq, pati nje error gjate ngarkimit.";
		}
	}
	
		if($f1>0&& $f2>0&&$f3>0)
		{
	
	$s="insert into package(packname,category,subcategory,packprice,pic1,pic2,pic3,detail) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] ."','". $_POST["t8"] . "','" . basename($_FILES["t4"]["name"]) . "','" . basename($_FILES["t5"]["name"]) . "','" . basename($_FILES["t6"]["name"]) . "','" . $_POST["t7"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Te Dhenat u Rregjistruan');</script>";
		}
	
		
}
?>

</body>
</html>


