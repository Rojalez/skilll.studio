<?php

use App\Http\Controllers\AdminControllers\CategoryController;
use App\Http\Controllers\AdminControllers\ContactController;
use App\Http\Controllers\AdminControllers\FaqController;
use App\Http\Controllers\PublicControllers\BlogController;
use App\Http\Controllers\PublicControllers\CookieController;
use App\Http\Controllers\PublicControllers\HomeController;
use App\Http\Controllers\PublicControllers\PortfolioController;
use App\Http\Controllers\PublicControllers\PostController;
use App\Http\Controllers\PublicControllers\PricingController;
use App\Http\Controllers\PublicControllers\ReviewController;
use App\Http\Controllers\PublicControllers\ServiceController;
use App\Http\Controllers\PublicControllers\StoreLoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/', [HomeController::class, 'store'])->name('contact.us.store');

Route::get('pricing', [PricingController::class, 'index'])->name('pricing.index');

Route::get('cookie', [CookieController::class, 'index'])->name('cookie.index');

Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{slug}', [BlogController::class, 'category'])->name('blog.category');

Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
//Route::get('portfolio/{slug}', [PortfolioController::class, 'item'])->name('portfolio.item');


Route::get('author/{id}', [BlogController::class, 'author'])->name('blog.author');
Route::get('services', [ServiceController::class, 'index'])->name('services.index');

Route::get('post/{slug}', [PostController::class, 'index'])->name('post.index');

Route::get('reviews', [ReviewController::class, 'index'])->name('review.index');
Route::get('login-store', [StoreLoginController::class, 'index'])->name('login.index');


Route::get('admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('admin/reviews', [App\Http\Controllers\AdminControllers\ReviewController::class, 'index'])->middleware(['auth'])->name('reviews.index');
Route::get('admin/reviews/create', [App\Http\Controllers\AdminControllers\ReviewController::class, 'create'])->middleware(['auth'])->name('reviews.create');
Route::post('admin/reviews', [\App\Http\Controllers\AdminControllers\ReviewController::class, 'store'])->middleware(['auth'])->name('reviews.store');
Route::get('admin/reviews/{id}/edit', [App\Http\Controllers\AdminControllers\ReviewController::class, 'edit'])->middleware(['auth'])->name('reviews.edit');
Route::put('admin/reviews/{id}', [\App\Http\Controllers\AdminControllers\ReviewController::class, 'update'])->middleware(['auth'])->name('reviews.update');
Route::delete('admin/reviews/{id}', [\App\Http\Controllers\AdminControllers\ReviewController::class, 'delete'])->middleware(['auth'])->name('reviews.destroy');

Route::get('admin/contact', [ContactController::class, 'index'])->middleware(['auth'])->name('contact.index');


Route::get('admin/faqs', [FaqController::class, 'index'])->middleware(['auth'])->name('faqs.index');
Route::get('admin/faqs/create', [FaqController::class, 'create'])->middleware(['auth'])->name('faqs.create');
Route::post('admin/faqs', [FaqController::class, 'store'])->middleware(['auth'])->name('faqs.store');
Route::get('admin/faqs/{id}/edit', [FaqController::class, 'edit'])->middleware(['auth'])->name('faqs.edit');
Route::put('admin/faqs/{id}', [FaqController::class, 'update'])->middleware(['auth'])->name('faqs.update');
Route::delete('admin/faqs/{id}', [FaqController::class, 'delete'])->middleware(['auth'])->name('faqs.destroy');

Route::get('admin/blog/posts', [\App\Http\Controllers\AdminControllers\BlogController::class, 'index'])->middleware(['auth'])->name('posts.index');
Route::get('admin/blog/post/create', [\App\Http\Controllers\AdminControllers\BlogController::class, 'create'])->middleware(['auth'])->name('posts.create');
Route::post('admin/blog/post', [\App\Http\Controllers\AdminControllers\BlogController::class, 'store'])->middleware(['auth'])->name('posts.store');
Route::get('admin/blog/post/{id}/edit', [\App\Http\Controllers\AdminControllers\BlogController::class, 'edit'])->middleware(['auth'])->name('posts.edit');
Route::put('admin/blog/post/{id}', [\App\Http\Controllers\AdminControllers\BlogController::class, 'update'])->middleware(['auth'])->name('posts.update');
Route::delete('admin/blog/post/{id}', [\App\Http\Controllers\AdminControllers\BlogController::class, 'delete'])->middleware(['auth'])->name('posts.destroy');

Route::get('admin/portfolio/portfolios', [\App\Http\Controllers\AdminControllers\PortfolioController::class, 'index'])->middleware(['auth'])->name('portfolios.index');
Route::get('admin/portfolio/portfolios/create', [\App\Http\Controllers\AdminControllers\PortfolioController::class, 'create'])->middleware(['auth'])->name('portfolios.create');
Route::post('admin/portfolio/portfolio', [\App\Http\Controllers\AdminControllers\PortfolioController::class, 'store'])->middleware(['auth'])->name('portfolios.store');
Route::get('admin/portfolio/portfolio/{id}/edit', [\App\Http\Controllers\AdminControllers\PortfolioController::class, 'edit'])->middleware(['auth'])->name('portfolios.edit');
Route::put('admin/portfolio/portfolio/{id}', [\App\Http\Controllers\AdminControllers\PortfolioController::class, 'update'])->middleware(['auth'])->name('portfolios.update');
Route::delete('admin/portfolio/portfolio/{id}', [\App\Http\Controllers\AdminControllers\PortfolioController::class, 'delete'])->middleware(['auth'])->name('portfolios.destroy');

Route::get('admin/cookie', [\App\Http\Controllers\AdminControllers\CookieController::class, 'index'])->middleware(['auth'])->name('admin.cookie.index');
Route::get('admin/cookie/{id}/edit', [\App\Http\Controllers\AdminControllers\CookieController::class, 'edit'])->middleware(['auth'])->name('cookie.edit');
Route::put('admin/cookie/{id}', [\App\Http\Controllers\AdminControllers\CookieController::class, 'update'])->middleware(['auth'])->name('cookie.update');

Route::get('admin/blog/categories', [CategoryController::class, 'index'])->middleware(['auth'])->name('categories.index');
Route::get('admin/blog/category/create', [CategoryController::class, 'create'])->middleware(['auth'])->name('categories.create');
Route::post('admin/blog/category', [CategoryController::class, 'store'])->middleware(['auth'])->name('categories.store');
Route::get('admin/blog/category/{id}/edit', [CategoryController::class, 'edit'])->middleware(['auth'])->name('categories.edit');
Route::put('admin/blog/category/{id}', [CategoryController::class, 'update'])->middleware(['auth'])->name('categories.update');
Route::delete('admin/blog/category/{id}', [CategoryController::class, 'delete'])->middleware(['auth'])->name('categories.destroy');

require __DIR__.'/auth.php';
