<?php

use Illuminate\Support\Facades\Route;

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

Route::get('anonimo', function () {
    return view('vista_general/anonimo');
});

Route::get('dama', function () {
    return view('vista_general/dama');
});


Route::get('dama/pantalones', function () {
    return view('vista_general/Dpantalones');
});

Route::get('dama/blusas', function () {
    return view('vista_general/Dblusas');
});


Route::get('dama/vestidos', function () {
    return view('vista_general/Dvestidos');
});

Route::get('dama/zapatos', function () {
    return view('vista_general/Dzapatos');
});

Route::get('dama/sueter', function () {
    return view('vista_general/Dsueter');
});

Route::get('dama/faldas', function () {
    return view('vista_general/Dfaldas');
});


Route::get('caballero', function () {
    return view('vista_general/Caballero');
});

Route::get('caballero/pantalones', function () {
    return view('vista_general/Cpantalones');
});

Route::get('caballero/playeras', function () {
    return view('vista_general/Cplayeras');
});

Route::get('caballero/zapatos', function () {
    return view('vista_general/Czapatos');
});

Route::get('niño', function () {
    return view('vista_general/niño');
});

Route::get('niño/pantalones', function () {
    return view('vista_general/Npantalones');
});

Route::get('niño/Playeras', function () {
    return view('vista_general/Nplayeras');
});

Route::get('niño/zapatos', function () {
    return view('vista_general/Nzapatos');
});

Route::get('accesorios', function () {
    return view('vista_general/accesorios');
});


Route::get('login', function () {
    return view('vista_general/login');
});

Route::get('registro', function () {
    return view('vista_general/registro');
});

Route::get('principal', function () {
    return view('vista_general/principal');
});

Route::get('Compras', function () {
    return view('vista_general/Compras');
});

Route::get('Acercade', function () {
    return view('vista_general/Acercade');
});

Route::get('Preguntar', function () {
    return view('vista_general/Preguntar');
});

Route::get('Calificar', function () {
    return view('vista_general/Calificar');
});




//SUPERVISOR1

Route::get('/supervisor/AgregarCate', function () {
    return view('supervisor1/AgregarCate');
});


Route::get('/supervisor/categorias', function () {
    return view('supervisor1/categorias');
});

Route::get('/supervisor/VerCate', function () {
    return view('supervisor1/VerCate');
});


Route::get('/supervisor/EditCate', function () {
    return view('supervisor1/EditCate');
});

Route::get('/supervisor/usuarios', function () {
    return view('supervisor1/usuarios');
});

Route::get('/supervisor/AltUsuario', function () {
    return view('supervisor1/AltUsuario');
});

Route::get('/supervisor/VerUsuario', function () {
    return view('supervisor1/VerUsuario');
});

Route::get('/supervisor/usuario/editar', function () {
    return view('supervisor1/editar');
});

Route::get('/supervisor/Produc', function () {
    return view('supervisor1/Productos');
});

Route::get('/supervisor/Produc/VerProduct', function () {
    return view('supervisor1/VerProduct');
});

Route::get('/supervisor/Produc/EditarProduct', function () {
    return view('supervisor1/EditarProduct');
});

Route::get('/supervisor/Histori', function () {
    return view('supervisor1/Historial');
});

Route::get('/supervisor/VerHisto', function () {
    return view('supervisor1/VerHisto');
});

Route::get('/supervisor/Kardex1', function () {
    return view('supervisor1/Kardex');
});

Route::get('/supervisor/SupRestContra', function () {
    return view('supervisor1/SupRestContra');
});

Route::get('/supervisor/Dash', function () {
    return view('supervisor1/Dash');
});

Route::get('/supervisor/VerP', function () {
    return view('supervisor1/VerP');
});











//encargado nesesita menu nueva 



Route::get('Encargado/RestContra', function () {
    return view('Encargado/RestContra');
});


Route::get('Encargado/RestContra/rest', function () {
    return view('Encargado/rest');
});

Route::get('Encargado/BusquedaProductos', function () {
    return view('Encargado/BusProductos');
});

Route::get('Encargado/EditProduct', function () {
    return view('Encargado/EditProduct');
});

Route::get('Encargado/VerProduct', function () {
    return view('Encargado/VerProduct');
});





//vendedor  actualizar falta



Route::get('Vendedor/actualizar', function () {
    return view('Vendedor/ActualizarP');
});

Route::get('Vendedor/CrearP', function () {
    return view('Vendedor/CrearP');
});

Route::get('Vendedor/Notificasiones', function () {
    return view('Vendedor/Notificasiones');
});

Route::get('Vendedor/Productos', function () {
    return view('Vendedor/Productos');
});

Route::get('Vendedor/Ventas', function () {
    return view('Vendedor/Ventas');
});

Route::get('Vendedor/Compras', function () {
    return view('Vendedor/Compras');
});




//contador 



Route::get('Contador/Cpago', function () {
    return view('Contador/CrearP');
});


Route::get('Contador/Lista', function () {
    return view('Contador/ListarP');
});


