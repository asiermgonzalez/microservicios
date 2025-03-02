<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/marcas_vehiculos', 'MarcaVehiculoController@index');
$router->post('/marcas_vehiculos', 'MarcaVehiculoController@store');
$router->get('/marcas_vehiculos/{marca_vehiculo}', 'MarcaVehiculoController@show');
$router->put('/marcas_vehiculos/{marca_vehiculo}', 'MarcaVehiculoController@update');
$router->patch('/marcas_vehiculos/{marca_vehiculo}', 'MarcaVehiculoController@update');
$router->delete('/marcas_vehiculos/{marca_vehiculo}', 'MarcaVehiculoController@destroy');