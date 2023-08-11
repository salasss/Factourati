<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\CategorieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// la route de l'admin

Route::prefix('admin')->group(function (){
    Route::get('/login',[AdminController::class, 'Index'])->name('login-form');
    Route::post('login/owner',[AdminController::class, 'login'])->name('admin.login');
    Route::get('Dashboardadmin',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');


});


////////////////////////////////////
Route::get('/', function () {
    App::setlocale('fr');
    return view('welcome');
});
Route::get('/terms', function () {
    App::setlocale('fr');
    return view('terms')->name('terms');
});


Route::get('/dashboard', function () {
    Auth::routes(['verify' => true]);
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Compte', function () {
    Auth::routes(['verify' => true]);
    return view('Compte');
})->middleware(['auth', 'verified'])->name('Compte');



// Route::get('/factures', function () {
//     return view('factures.index');
// })->middleware(['auth', 'verified'])->name('factures');
// Route::get('/factures/ajoutfact', function () {
//     return view('factures.AjoutFact');
// })->middleware(['auth', 'verified'])->name('ajoutfactures');







// factures
Route::controller(FacturesController::class)->group( function() {
    Route::get('factures', 'index')->middleware(['auth', 'verified'])->name('factures');
    Route::get('factures/factures-ajout', 'create')->middleware(['auth', 'verified'])->name('factures-ajout');
    Route::get('/factures/factures-ajout/searchh', 'ind')->name('autocomplete');
    Route::get('/factures/factures-ajout/search', 'indd')->name('autoadresse');
    Route::get('/factures/factures-ajout/searchprod', 'inddo')->name('autoaprod');
    Route::post('factures/factures-ajout', 'store')->middleware(['auth', 'verified'])->name('factures-ajoutt');
    Route::delete('factures/factures-supprimer/{Facture_id}',[FacturesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('Facture.destroy');
    Route::get('/factures/factures-archive', 'archive')->name('archive');

});

//Route::get('/autocomplete', 'FacturesController@ind');

// produits
Route::controller(ProductController::class)->group( function() {
    Route::get('Produits', 'index')->middleware(['auth', 'verified'])->name('Produits');
    Route::get('Produit/Produits-ajout', 'create')->middleware(['auth', 'verified'])->name('Produits-ajout');
    Route::post('Produit/Produits-ajout', 'store')->middleware(['auth', 'verified'])->name('Produits-ajoutt');
    Route::GET('Produit/Produits-modifier/{Product_id}', 'edit')->middleware(['auth', 'verified'])->name('Product-modif');
    Route::put('Produit/Produits-maj/{Product_id}', 'update');
    Route::delete('Produit/Produits-supprimer/{Product_id}',[ProductController::class, 'destroy'])->middleware(['auth', 'verified'])->name('Product.destroy');

});

// Clients
Route::controller(ClientsController::class)->group( function() {
    Route::get('Clients', 'index')->middleware(['auth', 'verified'])->name('Clients');
    Route::get('Clients/Clients-ajout', 'create')->middleware(['auth', 'verified'])->name('Clients-ajout');
    Route::post('Clients/Clients-ajout', 'store')->middleware(['auth', 'verified'])->name('Clients-ajoutt');
    //Clients/Clients-modifier/'.$Client ->id
    Route::GET('Clients/Clients-modifier/{Client_id}', 'edit')->middleware(['auth', 'verified'])->name('Clients-modif');
    Route::put('Clients/Clients-maj/{Client_id}', 'update');
    Route::delete('Clients/Clients-supprimer/{Client_id}',[ClientsController::class, 'destroyy'])->middleware(['auth', 'verified'])->name('Client.destroy');

});

//categorie
Route::controller(CategorieController::class)->group( function() {
    Route::get('Categorie', 'index')->middleware(['auth', 'verified'])->name('Categorie');
    Route::get('Categorie/Categorie-ajout', 'create')->middleware(['auth', 'verified'])->name('Categorie-ajout');
    Route::post('Categorie/Categorie-ajout', 'store')->middleware(['auth', 'verified'])->name('Categorie-ajoutt');
    Route::GET('Categorie/Categorie-modifier/{Categorie_id}', 'edit');
    Route::put('Categorie/Categorie-maj/{Categorie_id}', 'update');
    Route::delete('Categorie/Categorie-supprimer/{Categorie_id}',[CategorieController::class, 'destroy'])->middleware(['auth', 'verified'])->name('Categorie.destroy');


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
