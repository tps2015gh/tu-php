<html>
<head>
	<title>ร้าน ABC : {pagename}</title>
</head>
<body>
<h1>Header</h1>

<hr>
<font color=red>GET / POST = </font> 
<?php 
print_r($get) ;
print_r($post) ;
?>

<table border=1 width="100%"><tr><td><a href='?r='>หน้าแรก</a>
| <a href='?r=form1'>form1</a></td></tr>
<tr><td><table border='1' width="100%"> 
	<tr><td colspan="6">ขอ้มูลบุคคล</td></tr>
<tr><td>คุณคือ </td><td> {username} </td>
<td>หน่วยงาน </td><td> {user.org} </td>
<td>อายุ </td><td> {user.age} ปี </td></tr>

</table> </td></tr>
<tr><td>form1do
<?php 
	print_r($get) ;
	print_r($post) ;
?></td></tr>
</table>

<hr>
Copyright 2017 
</body>
</html>
