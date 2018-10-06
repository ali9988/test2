<?php

	//接受传递来的值
	$un=$_POST['un'];
	//echo $un;
	
	//声明已有的数据名称
	$arr=["ali99","xiong","di","lian","haha","hehe","lihai"];
	//进行数据比对
	if(in_array($un,$arr)){
		//如果有 返回y
		echo 'y';
		
	}else{
		//没有 返回n
		echo 'n';		
	}