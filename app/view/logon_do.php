<?php 

echo "SESSION = ";
print_r($_SESSION);
print_r($post);
if($post['uname']=='a' && $post['pwd']=='b'){
	echo "OK/PASS";
	$_SESSION['uname'] = 'a';

}
?>