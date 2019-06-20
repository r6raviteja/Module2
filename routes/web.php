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

use App\Notifications\SubscriptionRenewalFailed;
Route::get('/', function () {
    return view('welcome');
	//$user= App\User::first();
	//$user->notify(new SubscriptionRenewalFailed);
	//return "Done";
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get("/projects","projectscontroller@index");
// Route::get("/projects/create","projectscontroller@create");
// Route::get("/projects/{project}","projectscontroller@show");

// Route::post("/projects","projectscontroller@store");
 
// Route::get("/projects/{project}/edit","projectscontroller@edit");
// Route::patch("/projects/{project}","projectscontroller@update");
// Route::delete("/projects/{project}","projectscontroller@destroy");

 Route::resource("projects","projectscontroller");
Route::patch("/tasks/{task}","projectTaskController@update");
Route::post("/projects/{project}/tasks","projectTaskController@store");
// Route::post("/completed-tasks/{task}","CompletedTasksController@store");
// Route::delete("/completed-tasks/{task}","CompletedTasksController@destroy");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
