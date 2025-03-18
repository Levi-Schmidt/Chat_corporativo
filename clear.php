<?php
use Illuminate\Support\Facades\Artisan;

require __DIR__.'/bootstrap/autoload.php';

Artisan::call('cache:clear');
Artisan::call('config:clear');
Artisan::call('route:clear');
Artisan::call('view:clear');

echo "Cache limpo!";
