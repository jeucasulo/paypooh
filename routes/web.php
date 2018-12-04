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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', ['uses' => 'AppController@index', 'as' => 'index']);
Route::get('/show/{id}', ['uses' => 'AppController@show', 'as' => 'show']);
Route::get('/admin', ['uses' => 'AppController@admin', 'as' => 'admin']);

// Route::get('/admin', function () {
//     return view('admin');
// });
//
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
Route::get('/crud/role', ['uses' => 'RoleController@index', 'as' => 'cruds.role.index']);
Route::get('/crud/role/show/{id}', ['uses' => 'RoleController@show', 'as' => 'cruds.role.show']);
Route::get('/crud/role/create', ['uses' => 'RoleController@create', 'as' => 'cruds.role.create']);
Route::post('/crud/role/store', ['uses' => 'RoleController@store', 'as' => 'cruds.role.store']);
Route::get('/crud/role/edit/{id}', ['uses' => 'RoleController@edit', 'as' => 'cruds.role.edit']);
Route::put('/crud/role/update/{id}', ['uses' => 'RoleController@update', 'as' => 'cruds.role.update']);
Route::get('/crud/role/destroy/{id}', ['uses' => 'RoleController@destroy', 'as' => 'cruds.role.destroy']);
/*---------- BLOCK Perfil CRUD----------*/

/*---------- BLOCK Permission CRUD----------*/
Route::get('/crud/permission', ['uses' => 'PermissionController@index', 'as' => 'cruds.permission.index']);
Route::get('/crud/permission/show/{id}', ['uses' => 'PermissionController@show', 'as' => 'cruds.permission.show']);
Route::get('/crud/permission/create', ['uses' => 'PermissionController@create', 'as' => 'cruds.permission.create']);
Route::post('/crud/permission/store', ['uses' => 'PermissionController@store', 'as' => 'cruds.permission.store']);
Route::get('/crud/permission/edit/{id}', ['uses' => 'PermissionController@edit', 'as' => 'cruds.permission.edit']);
Route::put('/crud/permission/update/{id}', ['uses' => 'PermissionController@update', 'as' => 'cruds.permission.update']);
Route::get('/crud/permission/destroy/{id}', ['uses' => 'PermissionController@de stroy', 'as' => 'cruds.permission.destroy']);
/*---------- BLOCK Permission CRUD----------*/

/*---------- BLOCK Platform CRUD----------*/
Route::get('/crud/platform', ['uses' => 'PlatformController@index', 'as' => 'cruds.platform.index']);
Route::get('/crud/platform/show/{id}', ['uses' => 'PlatformController@show', 'as' => 'cruds.platform.show']);
Route::get('/crud/platform/create', ['uses' => 'PlatformController@create', 'as' => 'cruds.platform.create']);
Route::post('/crud/platform/store', ['uses' => 'PlatformController@store', 'as' => 'cruds.platform.store']);
Route::get('/crud/platform/edit/{id}', ['uses' => 'PlatformController@edit', 'as' => 'cruds.platform.edit']);
Route::get('/crud/platform/img/{id}', ['uses' => 'PlatformController@img', 'as' => 'cruds.platform.img']);
Route::post('/crud/platform/img-store', ['uses' => 'PlatformController@imgUpdate', 'as' => 'cruds.platform.img-store']);
Route::put('/crud/platform/update/{id}', ['uses' => 'PlatformController@update', 'as' => 'cruds.platform.update']);
Route::get('/crud/platform/destroy/{id}', ['uses' => 'PlatformController@destroy', 'as' => 'cruds.platform.destroy']);
/*---------- BLOCK Platform CRUD----------*/

/*---------- BLOCK Instruction CRUD----------*/
Route::get('/crud/instruction', ['uses' => 'InstructionController@index', 'as' => 'cruds.instruction.index']);
Route::get('/crud/instruction/show/{platform_id}', ['uses' => 'InstructionController@show', 'as' => 'cruds.instruction.show']);
Route::get('/crud/instruction/create/{platform_id}', ['uses' => 'InstructionController@create', 'as' => 'cruds.instruction.create']);
Route::post('/crud/instruction/store', ['uses' => 'InstructionController@store', 'as' => 'cruds.instruction.store']);
Route::get('/crud/instruction/edit/{id}', ['uses' => 'InstructionController@edit', 'as' => 'cruds.instruction.edit']);
Route::get('/crud/instruction/img/{id}', ['uses' => 'InstructionController@img', 'as' => 'cruds.instruction.img']);
Route::post('/crud/instruction/img-store', ['uses' => 'InstructionController@imgUpdate', 'as' => 'cruds.instruction.img-store']);
Route::put('/crud/instruction/update/{id}', ['uses' => 'InstructionController@update', 'as' => 'cruds.instruction.update']);
Route::get('/crud/instruction/destroy/{id}', ['uses' => 'InstructionController@destroy', 'as' => 'cruds.instruction.destroy']);
/*---------- BLOCK Instruction CRUD----------*/


/*---------- BLOCK Topic CRUD----------*/
Route::get('/crud/topic', ['uses' => 'TopicController@index', 'as' => 'cruds.topic.index']);
Route::get('/crud/topic/show/{id}', ['uses' => 'TopicController@show', 'as' => 'cruds.topic.show']);
Route::get('/crud/topic/create', ['uses' => 'TopicController@create', 'as' => 'cruds.topic.create']);
Route::post('/crud/topic/store', ['uses' => 'TopicController@store', 'as' => 'cruds.topic.store']);
Route::get('/crud/topic/edit/{id}', ['uses' => 'TopicController@edit', 'as' => 'cruds.topic.edit']);
Route::put('/crud/topic/update/{id}', ['uses' => 'TopicController@update', 'as' => 'cruds.topic.update']);
Route::get('/crud/topic/destroy/{id}', ['uses' => 'TopicController@destroy', 'as' => 'cruds.topic.destroy']);
/*---------- BLOCK Topic CRUD----------*/

/*---------- BLOCK Comment CRUD----------*/
Route::get('/crud/comment', ['uses' => 'CommentController@index', 'as' => 'cruds.comment.index']);
Route::get('/crud/comment/show/{id}', ['uses' => 'CommentController@show', 'as' => 'cruds.comment.show']);
Route::get('/crud/comment/create', ['uses' => 'CommentController@create', 'as' => 'cruds.comment.create']);
Route::post('/crud/comment/store', ['uses' => 'CommentController@store', 'as' => 'cruds.comment.store']);
Route::get('/crud/comment/edit/{id}', ['uses' => 'CommentController@edit', 'as' => 'cruds.comment.edit']);
Route::put('/crud/comment/update/{id}', ['uses' => 'CommentController@update', 'as' => 'cruds.comment.update']);
Route::get('/crud/comment/destroy/{id}', ['uses' => 'CommentController@destroy', 'as' => 'cruds.comment.destroy']);
/*---------- BLOCK Comment CRUD----------*/
