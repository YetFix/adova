<?php

use Illuminate\Support\Facades\Route;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Settings;
use App\Models\Team;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);
  Route::get('/clear',function(){
       
      Artisan::call('migrate:fresh');
      Artisan::call('optimize:clear');
    
      return "done";
      
  });

Route::get('/', function () {
    $settings= Settings::get();
    $categories= Category::get();
    $sliders = Slider::get();
    $teams = Team::get();
    $uproducts=Product::where('type','=','upcoming')->paginate(5);
    $products=Product::where('type','=','recent')->paginate(5);
    return view('welcome',compact('sliders','categories','products','settings','teams','products','uproducts'));
});
Route::get('/f/contact', function(){
  $settings= Settings::get();
  $categories= Category::get();
  return view('contact',compact('settings','categories'));
});
Route::get('/f/gallery', function(){
  $settings= Settings::get();
  $categories= Category::get();
  $sliders = Slider::get();
  $products = Product::get();
  return view('gallery',compact('settings','categories','products','sliders'));
});
Route::get('/f/team', function(){
  $settings= Settings::get();
  $categories= Category::get();
  $teams = Team::get();
 
  return view('team',compact('settings','categories','teams'));
});
Route::get('/f/engineering', function(){
  $settings= Settings::get();
  $categories= Category::get();
  return view('engineering',compact('settings','categories'));
});
Route::get('/f/who-we-are', function(){
  $settings= Settings::get();
  $categories= Category::get();
  $teams = Team::get();
  return view('who',compact('settings','categories','teams'));
});
Route::get('/f/profile', function(){
  $settings= Settings::get();
  $categories= Category::get();

  return view('profile',compact('settings','categories'));
});
Route::get('/f/manufacturing', function(){
  $settings= Settings::get();
  $categories= Category::get();

  return view('manufacturing',compact('settings','categories'));
});
Route::get('/f/qa', function(){
  $settings= Settings::get();
  $categories= Category::get();

  return view('qa',compact('settings','categories'));
});
Route::get('/f/what-we-do', function(){
  $settings= Settings::get();
  $categories= Category::get();
  return view('what',compact('settings','categories'));
});

Route::get('/f/products', [App\Http\Controllers\ShopController::class, 'shop'])->name('f.product');
Route::get('/f/products/{id}', [App\Http\Controllers\ShopController::class, 'shopById'])->name('f.product.single');
Route::get('/products/category/{id}', [App\Http\Controllers\ShopController::class, 'productByCateId'])->name('product.cat');
Route::get('/products/type/{type}', [App\Http\Controllers\ShopController::class, 'productsByType'])->name('product.type');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout']);

//Backend Routes
Route::resource('categories',CategoryController::class);
Route::resource('sliders',SliderController::class);
Route::resource('teams',TeamController::class);
Route::resource('admins',AdminController::class);
Route::resource('products',ProductController::class);

//contacts
Route::post('/contact',[App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::get('/contacts',[App\Http\Controllers\ContactController::class, 'index'])->name('contact.all');
Route::get('/contact/delete/{id}',[App\Http\Controllers\ContactController::class, 'delete'])->name('contact.del');




//products controller rest
Route::get('product/{id}',[App\Http\Controllers\ProductController::class, 'show'])->name('pro.show');
Route::get('productsBySubcategory/{subcategory}',[App\Http\Controllers\ProductController::class, 'showBySubCat'])->name('pro.showBySubCat');
Route::get('product/view/{id}',[App\Http\Controllers\ProductController::class, 'viewPdf'])->name('pro.view');
Route::get('product/download/{id}',[App\Http\Controllers\ProductController::class, 'Download'])->name('pro.down');


Route::post('/news',[App\Http\Controllers\HomeController::class,'news'])->name('news');