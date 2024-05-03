<?php 

$routes = [];

// Rute dengan parameter
$routes['GET']['/'] = 'elektronikController@index';
$routes['GET']['/elektronik'] = 'elektronikController@ElektronikApp';
$routes['POST']['/create'] = 'elektronikController@create';
$routes['POST']['/update/{id}'] = 'elektronikController@update';
$routes['GET']['/delete/{id}'] = 'elektronikController@delete';
$routes['POST']['/login'] = 'elektronikController@login';
$routes['POST']['/register'] = 'elektronikController@register';
