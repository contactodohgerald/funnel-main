<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Ebook\EbookController;
use App\Http\Controllers\Ecover\EcoverController;
use App\Http\Controllers\Funnel\FunnelController;
use App\Http\Controllers\Library\LibraryController;
use App\Http\Controllers\Others\ConversionToolController;
use App\Http\Controllers\Others\UnlimitedVersionController;
use App\Http\Controllers\Product\ProductController;
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

Route::get('/', [DashboardController::class, 'landing'])->name('landing');

Route::get('/login', function () {
    return view('front.pages.users.login');
});

//ecoverCreator
Route::get('/ecoverCreator', [EcoverController::class, 'ecoverCreator'])->name('ecoverCreator');
Route::get('/editorPage', [EcoverController::class, 'editorPage'])->name('editorPage');
Route::post('/createEcover', [EcoverController::class, 'ecoverCreatorPost'])->name('createEcover');

//ebookCreator
Route::get('/ebookCreator', [EbookController::class, 'ebookCreator'])->name('ebookCreator');
Route::get('/article-result', [EbookController::class, 'returnedArticle'])->name('article-result');
Route::post('/pullArticles', [EbookController::class, 'pullArticlesForView'])->name('pullArticles');

//library
Route::get('/library', [LibraryController::class, 'library'])->name('library');

//product
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');

//funnel
Route::get('/funnel', [FunnelController::class, 'funnel'])->name('funnel');
Route::get('/dfyFunnel', [FunnelController::class, 'dfyFunnel'])->name('dfyFunnel');

//others
Route::get('/version', [UnlimitedVersionController::class, 'unlimitedVersion'])->name('unlimitedVersion');
Route::get('/conversionTools', [ConversionToolController::class, 'conversionTools'])->name('conversionTools');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__ . '/auth.php';
