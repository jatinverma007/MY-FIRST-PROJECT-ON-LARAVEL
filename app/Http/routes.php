<?php

Route::get('/' ,function()
{
    return view('welcome');
});
/*Route::resource('articles','BlogController' , ['only=> index,show']);

Route::resource('tags', 'TagController');
Route::get('about','PageController@about');

Route::get('contact','PageController@contact');

Route::get('cerebro','ArticlesController@index');
Route::get('cerebro/create','ArticlesController@create');


Route::get('cerebro/{id}','ArticlesController@show');
Route::post('cerebro','ArticlesController@store');

Route::get('cerebro/{id}/edit', 'ArticlesController@edit');


Route::get('hello','HelloController@index');

Route::resource('students','StudentController', ['only' =>'index', 'store', 'destroy', 'show', 'update']);


Route::resource('cerebro','ArticlesController');
Route::get('hello','HelloController@index');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
interface BarInterface{}
class Baz{}
class Bar implements BarInterface{}

    App::bind('BarInterface' , 'bar');
Route::get('bar', function(BarInterface $bar){
    dd($bar);
});

Route::get('foo', 'FooController@foo');

Route::get('apitest/twitter/{message}' , 'ApiTestController@twitter');

Route::resource('users','UserController');
Route::get('user/profile','MemberController@profile');
Route::put('user/profile','MemberController@saveprofile');
*/


Route::model('tasks', 'Task');Route::model('projects', 'Project');
// Use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');