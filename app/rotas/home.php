<?php

get('/', function(){

	require_once "config/connection.php";

	$datas = $database->select('todo',"*",
		[
			"ORDER" => ["id" => "DESC"]
		]);
	
    require "app/views/home.php";
});