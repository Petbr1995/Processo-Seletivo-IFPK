Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', function () {
    return view('client');
});

Route::get('/fornecedor', function () {
    return view('fornecedor');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/indicadores', function () {
    return view('indicadores');
});
