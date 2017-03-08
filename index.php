<?php 
 

$conf  = (object)['framework'=>'tu60-001'];

include("db.php");
include("app/route.php");
if(!$db){
	echo "no_db , ";
}


$routecode = @$_GET['r']; 
 
list($viewname1,$viewname2) = app\route\get_viewname2($routecode ) ; 
 
//======================
$get = $_GET;
$post = $_POST; 
// print_r($_GET);
// print_r($_POST);
// print_r($_SERVER);

//======================
 
include("app/objpage.php");
$master = file_get_contents("app/viewmaster/master1.php");
$view1  =  file_get_contents("app/view/$viewname1.php");
$view2  =  file_get_contents("app/view/$viewname2.php");
$tr_array  = ['{view1}'=>$view1
							,'{view2}'=>$view2] ; 
foreach($objpage as $tag => $viewname){
	$tr_array[$tag] = file_get_contents("app/objpage/$viewname.php");
}	
foreach($varpage as $tag => $value){
	$tr_array[$tag] = $value ;
}							
$master_mod = strtr($master, $tr_array);
$sha1 = @sha1_file("dist/cp_$routecode.php");
if($sha1 != sha1($master_mod)){
	echo "write";
	file_put_contents("dist/cp_$routecode.php",$master_mod );
}else{
	echo "cache ";
}
include("dist/cp_$routecode.php");




