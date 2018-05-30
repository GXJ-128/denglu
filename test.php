<?php
	$user=$_POST['id'].$_POST['name'].$_POST['pass'];
	$lists=array(
		array(
			'Id'=>'1',
			'username'=>'zhangsan',
			'password'=>'123123'
		),
		array(
			'Id'=>'2',
			'username'=>'lisi',
			'password'=>'123456'
		),
		array(
			'Id'=>'3',
			'username'=>'zhangsan',
			'password'=>'120102'
		),
		array(
			'Id'=>'4',
			'username'=>'lisi',
			'password'=>'123456'
		),
		array(
			'Id'=>'5',
			'username'=>'zhangsan',
			'password'=>'120102'
		),
	);
	foreach($lists as $key=>$val){ 
//	echo $key."<hr>";
		if($user==$val["Id"].$val["username"].$val["password"]){
			echo 'ok';
			return;
		}else{
			echo 'error';
			return;
			}
	}
?>