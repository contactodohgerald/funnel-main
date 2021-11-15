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
Route::prefix('ecoverCreator')->group(function () {
    Route::get('/', [EcoverController::class, 'ecoverCreator'])->name('ecoverCreator');
    Route::post('/', [EcoverController::class, 'ecoverCreatorPost'])->name('ecoverCreatorPost'); //from image editor. final stage
    Route::get('/editorPage', [EcoverController::class, 'editorPage'])->name('editorPage');
});

//ebookCreator
Route::prefix('ebookCreator')->group(function () {
    Route::get('/', [EbookController::class, 'ebookCreator'])->name('ebookCreator');
    Route::get('/article-result', [EbookController::class, 'returnedArticle'])->name('article-result');
    Route::post('/pullArticles', [EbookController::class, 'pullArticlesForView'])->name('pullArticles');
    Route::post('/ebookByArticleSelected', [EbookController::class, 'ebookByArticleSelected'])->name('ebookByArticleSelected');
    Route::get('/ebookPageEditor', [EbookController::class, 'ebookPageEditor'])->name('ebookPageEditor');
    Route::post('/saveEbook', [EbookController::class, 'saveEbook'])->name('saveEbook');
    Route::post('/fetchArticleFromUrl', [EbookController::class, 'fetchArticleFromUrl'])->name('fetchArticleFromUrl');
    Route::get('/returnedUrlArticle', [EbookController::class, 'returnedUrlArticle'])->name('returnedUrlArticle');
    Route::post('/articleUploads', [EbookController::class, 'articleUploads'])->name('articleUploads');
    Route::get('/ebookUploadInterface', [EbookController::class, 'ebookUploadInterface'])->name('ebookUploadInterface');
    Route::post('/saveUploadedEbook', [EbookController::class, 'saveUploadedEbook'])->name('saveUploadedEbook');
});

//library
Route::prefix('library')->group(function () {
    Route::get('/', [LibraryController::class, 'library'])->name('library');
});

//product
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'product'])->name('product');
    Route::get('/add', [ProductController::class, 'addProduct'])->name('addProduct');
});


//funnel
Route::prefix('funnel')->group(function () {
    Route::get('/', [FunnelController::class, 'funnel'])->name('funnel');
    Route::get('/dfy', [FunnelController::class, 'dfyFunnel'])->name('dfyFunnel');
});

//others
Route::get('/version', [UnlimitedVersionController::class, 'unlimitedVersion'])->name('unlimitedVersion');
Route::get('/conversionTools', [ConversionToolController::class, 'conversionTools'])->name('conversionTools');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__ . '/auth.php';
