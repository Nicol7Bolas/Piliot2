<?php

function f_checking_recommendation($email){
	$request = "SELECT COUNT(*) as c FROM request_history WHERE `email` = ".$email;
	return $request;
}
function f_getting_recommendation($email){
	$request = "SELECT recommend FROM recommendation WHERE `email` = ".$email;
	return $request;
}
function f_editing_recommendation($email,$sensor,$recommendation){
	$request = "UPDATE recommendation SET recommend = $recommendation.$sensor.'/' WHERE `email` = $email";
	return $request;
}
function f_creation_recommendation($email,$sensor){
	$request = "INSERT INTO recommendation (`email`,`recommend`) VALUES ('".$email."','/".$sensor."')";
	return $request;
}