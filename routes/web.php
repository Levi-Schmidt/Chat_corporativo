<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Support\Facades\DB;
// Rota para verificar se as tabelas foram criadas
Route::get('/check-tables', function () {
    $tables = DB::select('SHOW TABLES');
    return response()->json($tables);
});
