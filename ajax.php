<?php

include "connect.inc";

error_reporting( E_ALL );

function cl($t){
	$ret = trim($t);
	$ret = str_replace("'", "", $ret );
	$ret = str_replace(";", "", $ret );
	$ret = strip_tags($ret);
	return $ret;
}


$name  = cl($_REQUEST['sname']);
$email = cl($_REQUEST['email']);
$text  = cl($_REQUEST['tcomment']);


// по хорошему здесь нужно еще и капчу сделать, но в задании про неё не было ничего 
// а так проверки как в задении и обязательно на бекенде тоже  
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {	die (" не правильный формат email "); }
if (strlen($name)==0 ) { die ("не указано имя"); }; 
if (strlen($text)==0 ) { die ("не указан комментарий"); }; 



$sql = " INSERT INTO `comments`.`cmt` (  `name`, `email`, `text`) VALUES (  '$name', '$email', '$text' ); ";
$result = $conn->query($sql);

if ($result) { 
	echo "Ваш комментарий добавлен: "; 
}else {
	echo "Ошибка добавления комментария";
}
