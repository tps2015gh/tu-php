<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
  
	<title>ร้าน ABC : {pagename}</title>
	</head>
 
<body>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
<h1>Header</h1>

<hr>
<font color=red>GET / POST = </font> 
<?php 
print_r($get) ;
print_r($post) ;
print_r($_SESSION);
?>

<div class="row"><nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ร้าน ABC</a>
    </div>
    <ul class="nav navbar-nav">
     <? $islogon = (@$_SESSION['uname']!= '') ;?>

      <li class="<?=$routecode==''?'active':''?>"><a href='?r='>หน้าแรก</a></li>
  	  	
      <li class="<?=$routecode=='logon'?'active':''?>"><a href='?r=logon'>logon</a></li>
      <? if($islogon ){ ?> 
      <li class="<?=$routecode=='form1'?'active':''?>"><a href='?r=form1'>form1</a></li>
      <li class="<?=$routecode=='logout'?'active':''?>"><a href='?r=logout'>logout</a></li>
      <?  }  ?>
    </ul>
  </div>
</nav>


</div>

<? if(@$_SESSION['uname']){ ?>
<div class="row">กระดานข่าว  </div>
<? } ?>
<div class="row"><form action="?r=logon_do" method='post'>
  <div class="form-group">
    <label for="uname">user name:</label>
    <input name="uname" type="text"  class="form-control" id="uname">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input name="pwd" type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form> </div>
 

<hr>
Copyright 2017 


<div>
</body>
</html>
