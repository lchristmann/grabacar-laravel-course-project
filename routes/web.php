<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'about')->name('about');


/*
f
Code written practicing within the Laravel 12 in 11 hours Course

use App\Http\Controllers\AnApiController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowCarController;
use App\Http\Controllers\SomeController;

Route::get('/about', function () {
    return view('about');
});

Route::get('/product/{id}', function (string $id) {
    return "Product ID=$id";
})->whereNumber('id')
->whereIn('id', [1, 2, 3]);

Route::get('/user/{username}', function(string $username) {
   return "User=$username";
})->where('username', '[a-z]+');

Route::get("{lang}/product/{id}", function(string $lang, string $id) {
    return "lang=$lang and id=$id";
})->where(['lang' => '[a-z]+', 'id' => '\d{4,}'])
->name('product.view');

Route::get('/search/{search}', function (string $search) {
   return $search;
})->where('search', '.+');

Route::get('/user/profile', function () {

})->name('profile');

Route::get('/current-user', function () {
   return redirect()->route('profile');
//    return to_route('profile');
});

Route::get('/car', [CarController::class, 'index']);

Route::controller(CarController::class)->group(function () {
    Route::get('/car', 'index');
    Route::get('/my-cars', 'myCars');
});

Route::get('/car/invokable', CarController::class);
Route::get('/car', [CarController::class, 'index']);

Route::prefix('admin')->group(function () {
   Route::get('/users', function () {
      return '/admin/users';
   });
});

Route::resource('/products', ProductController::class);

Route::apiResource('/api', AnApiController::class);

Route::name('admin.')->group(function () {
   Route::get('/users', function () {
      return '/users'; // BUt the route name is "admin.users
   })->name('users');
});

Route::fallback(function () {
   return "fallback";
});

Route::get('/calculate/{a}/{b}', function ($a, $b) {
    return $a + $b;
})->whereNumber(['a', 'b']);

Route::get('/calc/{a}/{b}', function ($a, $b) {
    return $a . $b;
})->whereNumber(['a', 'b']);

*/
