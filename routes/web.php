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

Auth::routes();

Route::middleware(['auth'])->group(function(){
    //Roles: Ruta,Nombre de la ruta

    Route::post('roles/store','RoleController@store')->name('roles.store')
          ->middleware('permission:roles.create');

    Route::get('roles','RoleController@index')->name('roles.index')
          ->middleware('permission:roles.index');

    Route::get('roles/create','RoleController@create')->name('roles.create')
          ->middleware('permission:roles.create');

    Route::put('roles/{role}','RoleController@update')->name('roles.update')
          ->middleware('permission:roles.edit');

    Route::get('roles/{role}','RoleController@show')->name('roles.show')
          ->middleware('permission:roles.show');

    Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
          ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
          ->middleware('permission:roles.edit');

    //Permission: Ruta,Nombre de la ruta
    Route::post('permissions/store','PermissionController@store')->name('permissions.store')
          ->middleware('permission:permission.create');

    Route::get('permissions','PermissionController@index')->name('permissions.index')
          ->middleware('permission:permission.index');

    Route::get('permissions/create','PermissionController@create')->name('permissions.create')
          ->middleware('permission:permission.create');

    Route::put('permissions/{permission}','PermissionController@update')->name('permissions.update')
          ->middleware('permission:permission.edit');

    Route::get('permissions/{permission}','PermissionController@show')->name('permissions.show')
          ->middleware('permission:permission.show');

    Route::delete('permissions/{permission}','PermissionController@destroy')->name('permissions.destroy')
          ->middleware('permission:permission.destroy');

    Route::get('permissions/{permission}/edit','PermissionController@edit')->name('permissions.edit')
          ->middleware('permission:permission.edit');

    //Producto: Ruta,Nombre de la ruta
    Route::post('products/store','ProductController@store')->name('products.store')
          ->middleware('permission:products.create');

    Route::get('products','ProductController@index')->name('products.index')
          ->middleware('permission:products.index');

    Route::get('products/create','ProductController@create')->name('products.create')
          ->middleware('permission:products.create');

    Route::put('products/{product}','ProductController@update')->name('products.update')
          ->middleware('permission:products.edit');

    Route::get('products/{product}','ProductController@show')->name('products.show')
          ->middleware('permission:products.show');

    Route::delete('products/{product}','ProductController@destroy')->name('products.destroy')
          ->middleware('permission:products.destroy');

    Route::get('products/{product}/edit','ProductController@edit')->name('products.edit')
          ->middleware('permission:products.edit');

    //Familia de materiales: Ruta,Nombre de la ruta

    Route::post('materialsfamilies/store','MaterialFamilyController@store')->name('materialsfamilies.store')
          ->middleware('permission:materialsfamilies.create');

    Route::get('materialsfamilies','MaterialFamilyController@index')->name('materialsfamilies.index')
          ->middleware('permission:materialsfamilies.index');

    Route::get('materialsfamilies/create','MaterialFamilyController@create')->name('materialsfamilies.create')
          ->middleware('permission:materialsfamilies.create');

    Route::put('materialsfamilies/{materialFamily}','MaterialFamilyController@update')->name('materialsfamilies.update')
          ->middleware('permission:materialsfamilies.edit');

    Route::get('materialsfamilies/{materialFamily}','MaterialFamilyController@show')->name('materialsfamilies.show')
          ->middleware('permission:materialsfamilies.show');

    Route::delete('materialsfamilies/{materialFamily}','MaterialFamilyController@destroy')->name('materialsfamilies.destroy')
          ->middleware('permission:materialsfamilies.destroy');

    Route::get('materialsfamilies/{materialFamily}/edit','MaterialFamilyController@edit')->name('materialsfamilies.edit')
          ->middleware('permission:materialsfamilies.edit');


    //SubFamilia de materiales: Ruta,Nombre de la ruta
    Route::post('materialssubfamilies/store','MaterialSubFamilyController@store')->name('materialssubfamilies.store')
          ->middleware('permission:materialssubfamilies.create');

    Route::get('materialssubfamilies','MaterialSubFamilyController@index')->name('materialssubfamilies.index')
          ->middleware('permission:materialssubfamilies.index');

    Route::get('materialssubfamilies/create','MaterialSubFamilyController@create')->name('materialssubfamilies.create')
          ->middleware('permission:materialssubfamilies.create');

    Route::put('materialssubfamilies/{materialSubFamily}','MaterialSubFamilyController@update')->name('materialssubfamilies.update')
          ->middleware('permission:materialssubfamilies.edit');

    Route::get('materialssubfamilies/{materialSubFamily}','MaterialSubFamilyController@show')->name('materialssubfamilies.show')
          ->middleware('permission:materialssubfamilies.show');

    Route::delete('materialssubfamilies/{materialSubFamily}','MaterialSubFamilyController@destroy')->name('materialssubfamilies.destroy')
          ->middleware('permission:materialssubfamilies.destroy');

    Route::get('materialssubfamilies/{materialSubFamily}/edit','MaterialSubFamilyController@edit')->name('materialssubfamilies.edit')
          ->middleware('permission:materialssubfamilies.edit');

    //SubFamilia de materiales: Ruta,Nombre de la ruta
    Route::post('materials/store','MaterialController@store')->name('materials.store')
          ->middleware('permission:materials.create');

    Route::get('materials','MaterialController@index')->name('materials.index')
          ->middleware('permission:materials.index');

    Route::get('materials/create','MaterialController@create')->name('materials.create')
          ->middleware('permission:materials.create');

    Route::put('materials/{material}','MaterialController@update')->name('materials.update')
          ->middleware('permission:materials.edit');

    Route::get('materials/{material}','MaterialController@show')->name('materials.show')
          ->middleware('permission:materials.show');

    Route::delete('materials/{material}','MaterialController@destroy')->name('materials.destroy')
          ->middleware('permission:materials.destroy');

    Route::get('materials/{material}/edit','MaterialController@edit')->name('materials.edit')
          ->middleware('permission:materials.edit');


    //Users: Ruta,Nombre de la ruta

    Route::get('users','UserController@index')->name('users.index')
          ->middleware('permission:users.index');

    Route::put('users/{user}','UserController@update')->name('users.update')
          ->middleware('permission:users.edit');

    Route::get('users/{user}','UserController@show')->name('users.show')
          ->middleware('permission:users.show');

    Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
          ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
          ->middleware('permission:users.edit');

});

Route::get('test', function () {
    return 'sin validacion';
});



Route::get('/home', 'HomeController@index')->name('home');
