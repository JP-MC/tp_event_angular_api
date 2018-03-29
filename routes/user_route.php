<?php
$controller = new UserController();

//login
Flight::route('POST /userlogin',[$controller,"login"]);
//OPTION
Flight::route('OPTIONS /userlogin',[$controller,"preflight"]);

//logout
Flight::route('GET /userlogout/@id:[0-9]+',[$controller,"logout"]);

//is logged
Flight::route('GET /islogged',[$controller,"isLogged"]);

//read all
Flight::route('GET /user',[$controller,"getAll"]);

//create
Flight::route('POST /user',[$controller,"create"]);

//read
Flight::route('GET /user/@id:[0-9]+',[$controller,"getById"]);

//update
Flight::route('PUT /user/@id:[0-9]+',[$controller,"update"]);
//OPTION
Flight::route('OPTIONS /user/@id:[0-9]+',[$controller,"preflight"]);

//delete
Flight::route('DELETE /user/@id:[0-9]+',[$controller,"delete"]);