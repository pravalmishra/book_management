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
<title >View Book record</title>
<link rel="stylesheet" href="./css/viewStyle.css" />
</head>
<body>
<h1>Book Record Management</h1>
<form action="deletion.php" method="post">
<table id="view_table">
<tr>
<th>Book ID</th>
<th>Title</th>
<th>Price</th>
<th>Author</th>
<th>Delete</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	?>
	<tr>
	<td><?php echo $row['BOOKID'];?></td>
	<td><?php echo $row['TITLE'];?></td>
	<td><?php echo $row['PRICE'];?></td>
	<td><?php echo $row['AUTHOR'];?></td>
	<td><input type="checkbox" value="<?php echo $row['BOOKID'];?>" name="b<?php echo $i;?>"/></td>
	</tr>
	<?php
}
?>
<tr>
<td colspan="5"><input type="submit" value="Delete"/>
</td>
</tr>
</table>
</form>
</body>
</html>