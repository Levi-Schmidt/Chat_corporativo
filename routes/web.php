<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('index');
});

// Rota para verificar se as tabelas foram criadas
Route::get('/check-tables', function () {
    $tables = DB::select('SHOW TABLES');
    return response()->json($tables);
});
