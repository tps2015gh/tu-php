<?php 
namespace app\route ;
$route_table = 
	[ ''  => ['view'=> ['banner','home',],'title'=>'หน้าแรก' ],
		'form1' => ['view'=> ['userinfo','form1'],'title'=>'ป้อนข้อมูล'],
	 'logon' => ['view'=> ['banner','logon'],'title'=>'ล้อกออน'],
	 'logon_do' => ['view'=> ['banner','logon_do'],'title'=>'ล้อกออน'],
	 'logout' => ['view'=> ['_','logout'],'title'=>'ออกจากระบบ'],
	 'form1do' => ['view'=> ['userinfo','form1do'],'title'=>'ป้อนข้อมูล-ประมวลผล'] 
	 ];

function get_viewname2($routecode){ 
	global $route_table ; 
	$a_node = @$route_table[@$routecode];
	$a_viewname = $a_node['view'];
	if($a_viewname == ""){
		echo "no route ";
		exit();
	}
	$viewname1 = @$a_viewname[0];
	$viewname2 = @$a_viewname[1];
	return [$viewname1 ,$viewname2] ;
}
function get_node($routecode){
	global $route_table ; 
	$a_node = @$route_table[@$routecode];
	return $a_node ; 	
}