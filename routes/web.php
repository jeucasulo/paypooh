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
    return view('index');
});
Route::get('/admin', function () {
    return view('admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/* - - - anger routes - - - */
Route::get('/anger', ['uses' => 'AngerController@index', 'as' => 'anger']);

Route::get('/anger/users', ['uses' => 'AngerController@users', 'as' => 'anger.users']);
Route::get('/anger/user/{id}', ['uses' => 'AngerController@user', 'as' => 'anger.user']);
Route::post('/anger/user/store', ['uses' => 'AngerController@userRoleAttach', 'as' => 'anger.user-role-attach']);
Route::post('/anger/user/destroy', ['uses' => 'AngerController@userRoleDetach', 'as' => 'anger.user-role-detach']);


Route::get('/anger/roles', ['uses' => 'AngerController@roles', 'as' => 'anger.roles']);
Route::get('/anger/role/{id}', ['uses' => 'AngerController@role', 'as' => 'anger.role']);
Route::post('/anger/role/store', ['uses' => 'AngerController@rolePermissionAttach', 'as' => 'anger.role-permission-attach']);
Route::post('/anger/role/destroy', ['uses' => 'AngerController@rolePermissionDetach', 'as' => 'anger.role-permission-detach']);


Route::get('/anger/permissions', ['uses' => 'AngerController@permissions', 'as' => 'anger.permissions']);
Route::get('/anger/edit', ['uses' => 'Casulo\Anger\AngerController@edit', 'as' => 'anger.edit']);


Route::get('/anger/test', ['uses' => 'AngerController@test', 'as' => 'anger.test']);
Route::get('/anger/check', ['uses' => 'AngerController@check', 'as' => 'anger.check']);
Route::get('/anger/tutorial', ['uses' => 'AngerController@tutorial', 'as' => 'anger.tutorial']);

Route::get('/test', 'AngerController@test')->name('test');






/*---------- BLOCK Perfil CRUD----------*/
Route::get('/crud/perfil', ['uses' => 'RoleController@index', 'as' => 'cruds.perfil.index']);
Route::get('/crud/perfil/show/{id}', ['uses' => 'RoleController@show', 'as' => 'cruds.perfil.show']);
Route::get('/crud/perfil/create', ['uses' => 'RoleController@create', 'as' => 'cruds.perfil.create']);
Route::post('/crud/perfil/store', ['uses' => 'RoleController@store', 'as' => 'cruds.perfil.store']);
Route::get('/crud/perfil/edit/{id}', ['uses' => 'RoleController@edit', 'as' => 'cruds.perfil.edit']);
Route::put('/crud/perfil/update/{id}', ['uses' => 'RoleController@update', 'as' => 'cruds.perfil.update']);
Route::get('/crud/perfil/destroy/{id}', ['uses' => 'RoleController@destroy', 'as' => 'cruds.perfil.destroy']);
/*---------- BLOCK Perfil CRUD----------*/

/*---------- BLOCK Permission CRUD----------*/
Route::get('/crud/permission', ['uses' => 'PermissionController@index', 'as' => 'cruds.permission.index']);
Route::get('/crud/permission/show/{id}', ['uses' => 'PermissionController@show', 'as' => 'cruds.permission.show']);
Route::get('/crud/permission/create', ['uses' => 'PermissionController@create', 'as' => 'cruds.permission.create']);
Route::post('/crud/permission/store', ['uses' => 'PermissionController@store', 'as' => 'cruds.permission.store']);
Route::get('/crud/permission/edit/{id}', ['uses' => 'PermissionController@edit', 'as' => 'cruds.permission.edit']);
Route::put('/crud/permission/update/{id}', ['uses' => 'PermissionController@update', 'as' => 'cruds.permission.update']);
Route::get('/crud/permission/destroy/{id}', ['uses' => 'PermissionController@destroy', 'as' => 'cruds.permission.destroy']);
/*---------- BLOCK Permission CRUD----------*/
