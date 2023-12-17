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

//header("Access-Control-Allow-Origin:*");

$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::get('/', function () {
    return view('welcome');
});

        //          CRUD -> StudentTable
$router->get('/student', 'StudentController@index');               //  get all students
$router->post('/student', 'StudentController@store');              //  create a new student
$router->get('/student/{id}', 'StudentController@show');           //  get an student by $id
$router->put('/student/{id}', 'StudentController@update');         //  update an student by $id
$router->delete('/student/{id}', 'StudentController@destroy');     //  delete an student by $id

