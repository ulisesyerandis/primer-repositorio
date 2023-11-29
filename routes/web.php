<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

        //          CRUD -> StudentTable
$router->get('/students', 'StudentController@index');               //  get all students
$router->post('/students', 'StudentController@store');              //  create a new student
$router->get('/students/{id}', 'StudentController@show');           //  get an student by $id
$router->put('/students/{id}', 'StudentController@update');         //  update an student by $id
$router->delete('/students/{id}', 'StudentController@destroy');     //  delete an student by $id