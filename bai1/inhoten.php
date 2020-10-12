<!DOCTYPE html>
<html>
<head>
	<title>In ho ten</title>
</head>
<body>
	<?php 
	 $ten = $_POST["ten"];
	 $_bienten = "Chào bạn ".$ten;
	 ?>
	 
<table width="271" border="1">
<tr>
<td colspan="2" bgcolor="#336699"><strong>In lời chào</strong></td>
</tr>
<tr>
 <td>
<?php echo $_bienten;  ?> </td>
</tr>
 
</table>
 

</body>
</html>