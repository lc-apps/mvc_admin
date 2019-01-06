<?php

function dd($dump) {
	var_dump($dump);

	die();
}

function toJson($data){

	header('Content-Type: application/json');
	echo json_encode($data);

}