<?php


function carica_file($path){
	$p=$path;
	$f=fopen($p,'r');
	$ret=fread($f,filesize($p));
	fclose($f);
	return $ret;
}

?>