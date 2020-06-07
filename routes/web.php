<?php
Route::get('/categoriecreate','CategoryController@category');
Route::post('/categoriecreate', 'CategoryController@save');
Route::get('/categoriecreate','CategoryController@createSub');



Route::get('/subcategoriecreate','SubcategoryController@subcategory');
Route::post('/subcategoriecreate', 'SubcategoryController@save');


Route::get('/productos/agregar', 'ProductoController@createProduct');
Route::get('/productos/detalles/{id}', 'ProductoController@detalle');


//para el admin
 Route::get('/productos', 'ProductoController@index');

 Route::get('/productos/com', 'ProductoController@catProdCom');

 Route::get('/productos/limp', 'ProductoController@catProdLimpi');

 Route::get('/productos/beb', 'ProductoController@catProdBeb');

 Route::get('/listaProductos', 'ProductoController@prueba');


 Route::get('/productos/detallesSub', 'ProductoController@sub');

 Route::get('/productos/detallesSub/limp/higiene', 'ProductoController@subHig');
 Route::get('/productos/detallesSub/limp/super', 'ProductoController@subSuper');
 Route::get('/productos/detallesSub/limp/repelentes', 'ProductoController@subRepe');
 Route::get('/productos/detallesSub/limp/ropa', 'ProductoController@subRopa');
  Route::get('/productos/detallesSub/limp/varios', 'ProductoController@subVar');

 Route::get('/productos/detallesSub/beb/alcohol', 'ProductoController@subCA');
 Route::get('/productos/detallesSub/beb/sinAlcohol', 'ProductoController@subSA');

 Route::get('/productos/detallesSub/com/fiambresQuesos', 'ProductoController@subFiam');
 Route::get('/productos/detallesSub/com/aceites', 'ProductoController@subAcei');
 Route::get('/productos/detallesSub/com/dulces', 'ProductoController@subDul');
 Route::get('/productos/detallesSub/com/condimentos', 'ProductoController@subCon');
 Route::get('/productos/detallesSub/com/galletitas', 'ProductoController@subGalle');
 Route::get('/productos/detallesSub/com/infusiones', 'ProductoController@subInf');
  Route::get('/productos/detallesSub/com/yerbas', 'ProductoController@subYer');

 Route::get('/productos/detallesSub/com/conservas', 'ProductoController@subCons');
 Route::get('/productos/detallesSub/com/rebozadores', 'ProductoController@subRebo');
 Route::get('/productos/detallesSub/com/harinas', 'ProductoController@subHari');
 Route::get('/productos/detallesSub/com/arroz', 'ProductoController@subArroz');

 Route::get('/productos/detallesSub/com/fideos', 'ProductoController@subFid');
 Route::get('/productos/detallesSub/com/snacks', 'ProductoController@subSnacks');
 Route::get('/productos/detallesSub/com/reposteria', 'ProductoController@subRepo');
 Route::get('/productos/detallesSub/com/lacteos', 'ProductoController@subLac');

 Route::get('/productos/detallesSub/com/panes', 'ProductoController@subPan');
 Route::get('/productos/detallesSub/com/cereales', 'ProductoController@subCere');
 Route::get('/productos/detallesSub/com/congelados', 'ProductoController@subCong');













Route::post('/productos', 'ProductoController@save');
// ->middleware(['auth', 'admin']);

Route::get('/productos/editar/{id}', 'ProductoController@edit'); //->middleware(['auth', 'admin'])
Route::post('/productos/editar/{id}', 'ProductoController@update');//->middleware(['auth', 'admin']);

Route::get('/productos/delete/{id}', 'ProductoController@borrarProducto');//->middleware(['auth', 'admin']);
Route::post('/productos/delete/{id}', 'ProductoController@borrar');//->middleware(['auth', 'admin']);

Route::get('/carrito', 'CarritoController@index');//->middleware('auth');
Route::get('/carrito', 'CarritoController@miCarrito');//->middleware('auth');




Route::get('/pedidos', 'CarritoController@seecMigue');




Route::post('/productos/agregarCarrito', 'CarritoController@agregarAlCarrito')
->middleware('auth');

Route::post('/carrito/sacarCarrito', 'CarritoController@sacarDelCarrito');//->middleware('auth');

Route::post('/productos/delete/{id}', 'ProductoController@borrar');

Route::get('/', 'PrincipalController@buscador');

Route::get('/', 'PrincipalController@productosDestacados');


// Route::get('/home', 'HomeController@index')->name('home');




Route::get('/preguntas', function(){
  return view('faqs');
});

Route::get('/login/facebook', 'Auth\LoginController@redirectToProviderFB');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFB');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
