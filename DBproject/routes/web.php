<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*

    GET /projects (index) => Montre tous les projets.
    GET /projects/create (create) => Montre moi un form pour créer un nouveau projet.
    GET /projects/1/ (show) => Montre moi un projet.
    POST /projects (store)  => Ajoute le dans la liste des projets.
    GET /projects/1/edit (edit) => Montre moi un form pour éditer un projet.
    PATCH /projects/1 (update)  => Mets à jour ce projet.
    DELETE /projects/1 (destroy) => Supprime ce projet.

*/

Route::resource('projects', 'ProjectsController');
// Route::get('/projects','ProjectsController@index');
// Route::get('/projects/create','ProjectsController@create');
// Route::get('/projects/{project}','ProjectsController@show');
// // Route::get('/projects/1','ProjectsController@show');
// Route::post('/projects','ProjectsController@store');
// Route::get('/projects/{project}/edit','ProjectsController@edit');
// Route::patch('/projects/{project}','ProjectsController@update');
// Route::delete('/projects/{project}','ProjectsController@destroy');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');