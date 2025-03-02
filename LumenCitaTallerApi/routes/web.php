<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/citas_taller', 'CitaTallerController@index');
$router->post('/citas_taller', 'CitaTallerController@store');
$router->get('/citas_taller/{cita_taller}', 'CitaTallerController@show');
$router->put('/citas_taller/{cita_taller}', 'CitaTallerController@update');
$router->patch('/citas_taller/{cita_taller}', 'CitaTallerController@update');
$router->delete('/citas_taller/{cita_taller}', 'CitaTallerController@destroy');