
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
// RUTAS PÚBLICAS (Solo invitados: guest)
Route::middleware('guest')->group(function () {
 Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
 Route::post('/login', [AuthController::class, 'login'])->name('login.post');
 Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
 Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});
// RUTAS PROTEGIDAS (Solo autenticados: auth)
Route::middleware('auth')->group(function () {
 Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
 Route::resource('productos', ProductoController::class);
 Route::get('/', function () {
 return redirect()->route('productos.index');
 });
});



