<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
  
	<title>{app-title} {pagename}</title>
	</head>
 
<body>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
{header}
<hr>
<font color=red>GET / POST = </font> 
<?php 
print_r($get) ;
print_r($post) ;
print_r($_SESSION);
?>

<div class="row">{menu1}</div>

<? if(@$_SESSION['uname']){ ?>
<div class="row">{view1} </div>
<? } ?>
<div class="row">{view2} </div>
 

{footer}


<div>
</body>
</html>
