<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
  require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Simple request handling for basic Laravel functionality
// Handle basic routes
$uri = $_SERVER['REQUEST_URI'] ?? '/';
$uri = parse_url($uri, PHP_URL_PATH);

switch ($uri) {
  case '/':
  case '':
    // Load welcome view
    $welcomeView = __DIR__ . '/../resources/views/welcome.blade.php';
    if (file_exists($welcomeView)) {
      ob_start();
      include $welcomeView;
      echo ob_get_clean();
    } else {
      echo '<!DOCTYPE html>';
      echo '<html><head><title>Laravel - Ujikom 2025</title></head><body>';
      echo '<h1>Laravel 12 - Ujikom 2025</h1>';
      echo '<p>Welcome to your Laravel application!</p>';
      echo '<p>Framework berhasil ter-install dengan konfigurasi minimal.</p>';
      echo '<hr>';
      echo '<p><strong>Next Steps:</strong></p>';
      echo '<ul>';
      echo '<li>Buat database MySQL bernama: <code>ujikom_2025</code></li>';
      echo '<li>Jalankan: <code>php artisan migrate</code></li>';
      echo '<li>Start development: Build your amazing application!</li>';
      echo '</ul>';
      echo '</body></html>';
    }
    break;

  case '/up':
    // Health check endpoint
    header('Content-Type: application/json');
    echo json_encode(['status' => 'ok', 'timestamp' => time()]);
    break;

  default:
    // 404 handler
    http_response_code(404);
    echo '<!DOCTYPE html>';
    echo '<html><head><title>404 - Page Not Found</title></head><body>';
    echo '<h1>404 - Page Not Found</h1>';
    echo '<p>The page you are looking for could not be found.</p>';
    echo '<p><a href="/">← Back to Home</a></p>';
    echo '</body></html>';
}
