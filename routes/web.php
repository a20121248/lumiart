<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\UserController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', ['uses' => 'App\PageController@getHome'])->name('home');
//Route::get('/', ['uses' => 'API\ProductController@index'])->name('home');

/*Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
    Route::resource('products', ProductController::class)->names([
        'create' => 'products.build'
    ]);
});*/

//Route::group(['prefix' => 'admin', 'middleware' => 'is.admin', 'as'=> 'admin.'], function () {
Route::group(['middleware' => ['auth:sanctum', 'verified'], 'prefix' => 'admin', 'as'=> 'admin.'], function () {
    Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index')->name('dashboard');
    Route::get('/configuraciones', 'App\Http\Controllers\Admin\SettingsController@index')->name('settings');
    Route::get('/catalogo', 'App\Http\Controllers\Admin\CatalogController@index')->name('catalog');
    Route::get('/contacto', 'App\Http\Controllers\Admin\ContactController@index')->name('contact');
    Route::get('/imagenes', 'App\Http\Controllers\Admin\ImageController@index')->name('images');

    Route::resource('clientes', ClientController::class)->names([
        'index'  => 'clients.index',
        'create' => 'clients.create',
        'edit'   => 'clients.edit'
    ]);

    Route::resource('productos', ProductController::class)->names([
        'index'  => 'products.index',
        'create' => 'products.create',
        'edit'   => 'products.edit'
    ]);

    Route::resource('marcas', BrandController::class)->names([
        'index'  => 'brands.index',
        'create' => 'brands.create',
        'edit'   => 'brands.edit'
    ]);

    Route::resource('proyectos', ProjectController::class)->names([
        'index'  => 'projects.index',
        'create' => 'projects.create',
        'edit'   => 'projects.edit'
    ]);

    Route::resource('proveedores', SupplierController::class)->names([
        'index'  => 'suppliers.index',
        'create' => 'suppliers.create',
        'edit'   => 'suppliers.edit'
    ]);

    Route::resource('usuarios', UserController::class)->names([
        'index'  => 'users.index',
        'create' => 'users.create',
        'edit'   => 'users.edit'
    ]);

    Route::get('/perfil', 'App\Http\Controllers\Admin\UserController@profile')->name('users.profile');
});



Route::get('/', 'App\Http\Controllers\App\PageController@getHome')->name('home');
Route::get('/home2', 'App\Http\Controllers\App\PageController@getHome2')->name('home2');
Route::get('/home3', 'App\Http\Controllers\App\PageController@getHome3')->name('home3');
Route::get('/home4', 'App\Http\Controllers\App\PageController@getHome4')->name('home4');
Route::get('/home5', 'App\Http\Controllers\App\PageController@getHome5')->name('home5');

Route::get('/quienes-somos', ['uses' => 'App\PageController@getHome'])->name('about_us');
Route::get('/quienes-somos/perfil', ['uses' => 'App\PageController@getHome'])->name('profile');

Route::get('/servicios', ['uses' => 'App\PageController@getHome'])->name('services');

Route::get('/blog', ['uses' => 'App\PageController@getHome'])->name('blog');
Route::get('/blog/{slug}', ['uses' => 'App\PageController@getHome'])->name('post');

Route::get('/contactanos', ['uses' => 'App\PageController@getHome'])->name('contact_us');

Route::get('/buscar', ['uses' => 'App\PageController@getHome'])->name('search');

Route::get('/privacidad', ['uses' => 'App\PageController@getHome'])->name('privacy');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
