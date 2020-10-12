<!DOCTYPE html>
<html>
<head>
	<title>kết quả</title>
</head>
<body>
	 <?php 
	 $a = $_POST["a"];
	 $b = $_POST["b"];
	 $x = -($b/$a);  ?>
<form name="formxuat">
<table width="744" border="1">
<tr>
<td colspan="3" bgcolor="#336699"><strong>Giải phương trình bậc 1 </strong></td>
</tr>
<tr>
<td width="120">Phương trình </td>
<td width="250">
<textarea><?php echo $a; ?></textarea>
X + </td>
<td width="352"><label for="textfield"></label>
<textarea><?php echo $b;;  ?></textarea>
= 0</td>
</tr>
<tr>
<td colspan="3">
Nghiệm 
<label for="textfield2"> <?php
if($a==0){
	if($b==0){
		echo " Phương trình có vô số nghiệm";
	}
	else{
      echo "Phương trình vô nghiệm";
	}
} 
else{
	echo  $x;
} ?></label>
 </tr>
<tr>
 
</tr>
</table>
</form>
</body>
</html>