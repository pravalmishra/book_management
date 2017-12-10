<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="SELECT * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<html>
<head>
<title >Update Book record</title>
<link rel="stylesheet" href="./css/viewStyle.css" />
</head>
<body>
<h1>Book Record Management</h1>
<form action="updation.php" method="post">
<table id="view_table">
<tr>
<th>Book ID</th>
<th>Title</th>
<th>Price</th>
<th>Author</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	?>
	<tr>
	<td><?php echo $row['BOOKID'];?><input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['BOOKID'];?>"/></td>
	<td><input type="text" name="title<?php echo $i;?>" value="<?php echo $row['TITLE'];?>"/></td>
	<td><input type="text" name="price<?php echo $i;?>" value="<?php echo $row['PRICE'];?>"/></td>
	<td><input type="text" name="author<?php echo $i;?>" value="<?php echo $row['AUTHOR'];?>"/></td>
	</tr>
	<?php
}
?>

</table>
<input type="submit" value="Update"/>
</form>
</body>
</html>