 <?php

  //Para el Administrador

  Route::get('/categoriecreate', 'CategoryController@category')->middleware(['auth', 'admin']);
  Route::post('/categoriecreate', 'CategoryController@save')->middleware(['auth', 'admin']);
  Route::get('/categoriecreate', 'CategoryController@createSub')->middleware(['auth', 'admin']);
  Route::get('/subcategoriecreate', 'SubcategoryController@subcategory')->middleware(['auth', 'admin']);
  Route::post('/subcategoriecreate', 'SubcategoryController@save')->middleware(['auth', 'admin']);


  Route::get('/productos/agregar', 'ProductoController@createProduct')->middleware(['auth', 'admin']);
  Route::post('/productos', 'ProductoController@save')->middleware(['auth', 'admin']);
  Route::get('/productos/editar/{id}', 'ProductoController@edit')->middleware(['auth', 'admin']);
  Route::post('/productos/editar/{id}', 'ProductoController@update')->middleware(['auth', 'admin']);
  Route::get('/productos/delete/{id}', 'ProductoController@borrarProducto')->middleware(['auth', 'admin']);
  Route::post('/productos/delete/{id}', 'ProductoController@borrar')->middleware(['auth', 'admin']);

  //PEDIDOS
  Route::get('/pedidos/cliente', 'UsuarioController@getpedidos')->middleware(['auth', 'admin']);
  Route::post('/pedidos/cliente', 'UsuarioController@postpedidos')->middleware(['auth', 'admin']);

  Route::get('/pedidos/cliente/{id}', 'UsuarioController@borrarPedido');
  Route::post('/pedidos/cliente/{id}', 'UsuarioController@borrarP');

  //Usuarios
  Route::get('/', 'PrincipalController@buscador');
  Route::get('/', 'PrincipalController@productosDestacados');
  Route::get('/productos/detalles/{id}', 'ProductoController@detalle');

  //CATEGORIAS
  Route::get('/productos/detallesSub', 'ProductoController@sub');

  //Perfumería y Limpieza
  Route::get('/productos/detallesSub/limp/higiene', 'ProductoController@subHig');
  Route::get('/productos/detallesSub/limp/super', 'ProductoController@subSuper');
  Route::get('/productos/detallesSub/limp/repelentes', 'ProductoController@subRepe');
  Route::get('/productos/detallesSub/limp/ropa', 'ProductoController@subRopa');
  Route::get('/productos/detallesSub/limp/varios', 'ProductoController@subVar')->name('varios');

  //limpiezaFiltrado
  Route::get('/productos/limp', 'ProductoController@catProdLimpi');

  Route::get('/productos/limp/Mayor-Lim', 'ProductoController@precLimMay');
  Route::get('/productos/limp/Menor-Lim', 'ProductoController@precLimMen');
  Route::get('/productos/limp/a-z-Lim', 'ProductoController@azLim');
  Route::get('/productos/limp/z-a-Lim', 'ProductoController@zaLim');
  Route::get('/productos/limp/Desc-Lim', 'ProductoController@stockMayLim');
  Route::get('/productos/limp/Asc-Lim', 'ProductoController@stockMenLim');
  Route::get('/productos/limp/promo-Lim', 'ProductoController@promoLim');

  //Bebidas
  Route::get('/productos/detallesSub/beb/alcohol', 'ProductoController@subCA');
  Route::get('/productos/detallesSub/beb/sinAlcohol', 'ProductoController@subSA');

  //bebidasFiltrado
  Route::get('/productos/beb', 'ProductoController@catProdBeb');

  Route::get('/productos/beb/Mayor-Beb', 'ProductoController@precBebMay');
  Route::get('/productos/beb/Menor-Beb', 'ProductoController@precBebMen');
  Route::get('/productos/beb/a-z-Beb', 'ProductoController@azBeb');
  Route::get('/productos/beb/z-a-Beb', 'ProductoController@zaBeb');
  Route::get('/productos/beb/Desc-Beb', 'ProductoController@stockMayBeb');
  Route::get('/productos/beb/Asc-Beb', 'ProductoController@stockMenBeb');
  Route::get('/productos/beb/promo-Beb', 'ProductoController@promoBeb');


  //ComestiblesCat
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

  Route::get('/productos/detallesSub/com/fideos', 'ProductoController@subFid')->name('fideos');
  Route::get('/productos/detallesSub/com/snacks', 'ProductoController@subSnacks');
  Route::get('/productos/detallesSub/com/reposteria', 'ProductoController@subRepo');
  Route::get('/productos/detallesSub/com/lacteos', 'ProductoController@subLac');

  Route::get('/productos/detallesSub/com/panes', 'ProductoController@subPan');
  Route::get('/productos/detallesSub/com/cereales', 'ProductoController@subCere');
  Route::get('/productos/detallesSub/com/congelados', 'ProductoController@subCong');

  //ComestiblesFiltrado
  Route::get('/productos/com', 'ProductoController@catProdCom');

  Route::get('/productos/com/Mayor-Com', 'ProductoController@precComMay');
  Route::get('/productos/com/Menor-Com', 'ProductoController@precComMen');
  Route::get('/productos/com/a-z-Com', 'ProductoController@azCom');
  Route::get('/productos/com/z-a-Com', 'ProductoController@zaCom');
  Route::get('/productos/com/Desc-Com', 'ProductoController@stockMayCom');
  Route::get('/productos/com/Asc-Com', 'ProductoController@stockMenCom');
  Route::get('/productos/com/promo-Com', 'ProductoController@promoCom');

  //BUSCADOR
  Route::get('/listaProductos', 'ProductoController@prueba');

  Route::get('/listaProductos/PrecioMay', 'ProductoController@precMay');
  Route::get('/listaProductos/PrecioMen', 'ProductoController@precMen');
  Route::get('/listaProductos/a-z', 'ProductoController@az');
  Route::get('/listaProductos/z-a', 'ProductoController@za');
  Route::get('/listaProductos/Desc', 'ProductoController@stockMay');
  Route::get('/listaProductos/Asc', 'ProductoController@stockMen');
  Route::get('/listaProductos/Promociones', 'ProductoController@promo');

  //CARRITO
  Route::get('/carrito', 'CarritoController@index')->middleware('auth');
  Route::get('/carrito', 'CarritoController@miCarrito')->middleware('auth');
  Route::post('/productos/agregarCarrito', 'CarritoController@agregarAlCarrito')
    ->middleware('auth');
  Route::post('/carrito/sacarCarrito', 'CarritoController@sacarDelCarrito')->middleware('auth');

  //CHECKOUT
  Route::get('/pedidos', 'OrderController@seccMigue')->middleware(['auth']);
  Route::post('/pedidos', 'OrderController@finalizar')->middleware(['auth']);


  Route::get('/preguntas', function () {
    return view('faqs');
  });

  Route::get('/login/facebook', 'Auth\LoginController@redirectToProviderFB');
  Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFB');

  Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home');

  Route::get('register/verify/{code}', 'Auth\RegisterController@verify');
