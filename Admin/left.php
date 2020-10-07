<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table style="width:100%">
<tr><td style="font-size:28px">Paneli Adminit</td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td><a href="adduser.php">Shto User</a></td></tr>
<tr><td><a href="updateuser.php">Perditeso User</a></td></tr>
<tr><td><a href="deleteuser.php">Fshi User</a></td></tr>

<?php }?>

<tr><td><a href="addcategory.php">Shto Kategori</a></td></tr>


<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatecategory.php">Perditeso kategori</a></td></tr>
<tr><td><a href="deletecategory.php">Fshi Kategori</a></td></tr>
<?php }?>


<tr><td><a href="viewcategory.php">Shiko Kategori</a></td></tr>
<tr><td><a href="addsubcategory.php">Shto Subkategori</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatesubcategory.php">Perditeso Subkategori</a></td></tr>
<tr><td><a href="deletesubcategory.php">Fshi Subkategori</a></td></tr>
<?php }?>

<tr><td><a href="viewsubcategory.php">Shiko Subkategori</a></td></tr>
<tr><td><a href="addpackage.php">Shto Paket</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatepackage.php">Perditeso Paket</a></td></tr>
<tr><td><a href="deletepackage.php">Fshi Paket</a></td></tr>

<?php }?>

<tr><td><a href="viewpackage.php">Shiko Paket</a></td></tr>



<tr><td><a href="viewenquiry.php">Shiko Prenotimet</a></td></tr>
</table>


</body>
</html>