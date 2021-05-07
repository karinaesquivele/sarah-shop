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


/*Ruta de prueba para mostrar datos de la base---------------*/
Route::get('/home', 'PruebaController@mostrar')->name('home');

/*Ruta para uso de la plantilla, le asignamos su nombre*/

Route::get('plantilla', 'PlantillaController@mostrar')->name('layout');


/*Rutas de inicio y productos---------------------------------------------*/ 
Route::Group(['prefix'=>'inicio'], function () {

    Route::get('/',function(){return view('inicio'); })->name('inicio');
    Route::get('productos','ProductosController@mostrar')->name('productos');
    Route::post('filtro','ProductosController@filtrar')->name('filtro');
    Route::get('producto_individual/{id}','ProductosController@mostrarDetallado')->name('producto_individual');

});




//Rutas para el carrito y acciones------------------------------------------------------------------
Route::Group(['prefix'=>'carrito'], function(){
    Route::get('mostrar','CarritoController@mostrar')->name('carrito');
    Route::get('agregar/{producto}','CarritoController@agregar')->name('agregar');
    Route::get('quitar/{producto}','CarritoController@quitar')->name('quitar');
    Route::get('actualizar/{producto}/{quantity?}','CarritoController@actualizar')->name('actualizar');
});


/*Rutas para la compra----------------------------*/ 


Route::Group(['prefix'=>'realizar-compra'],function(){
    Route::get('compra/{total}','ComprasController@mostrar')->name('compra');
    Route::post('agregar/{total}','ComprasController@agregarCliente');
    Route::get('ver','ComprasController@mostrarCompra');
    Route::get('compra','ComprasController@compraHecha');
});



/*Rutas del panel de control---------------------------------------------------*/ 
 //Ruta de la plantilla
 Route::get('panel/panellayout', function(){
    return view('panel.panellayout');
})->name('panellayout');

/*Rutas para el panel de los productos */
 Route::Group(['prefix'=>'panel'], function(){
     Route::get('/index','PanelProductoController@mostrar')->name('index');
     Route::get('/agregar','PanelProductoController@agregar');
     Route::post('/insertar','PanelProductoController@insertar');
     Route::get('/editar/{_id}','PanelProductoController@editar');
     Route::post('/actualizar','PanelProductoController@actualizar');
     Route::get('/borrar/{_id}','PanelProductoController@borrar');
 });

