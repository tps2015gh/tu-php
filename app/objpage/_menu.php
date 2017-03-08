<nav class="navbar navbar-default">
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


