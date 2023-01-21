<?php

use App\Models\User;
use App\Models\About;
use App\Models\Pages;
use App\Models\Category;
use App\Models\Formulir;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\ManagePsbController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardDocumentController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardEventController;

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

Route::get('/', fn () => view('home', ["title" => "HOME", "active" => 'home']));
Route::get('/pages/{pages:slug}', fn (Pages $pages) => view('about', ["title" => "ABOUT", "active" => 'about', 'abouts' => $pages]));
Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/category', fn () => view('categories', ['title' => 'List Category', 'categories' => Category::all(), 'active' => 'category']));
Route::get('/auth', [AuthController::class, 'index'])->name('auth')->middleware('guest');
Route::post('/auth', [AuthController::class, 'authenticate']);
Route::get('/auth/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/auth/register', [AuthController::class, 'register_action']);
Route::post('/auth/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', fn () => view('dashboard.index', ['users' => User::all()]))->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth')->middleware('student')->middleware('admin');
Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin')->middleware('auth');
Route::resource('/event', EventController::class);
Route::get('events/{event:slug}', [EventController::class, 'show']);
Route::resource('/dashboard/event', DashboardEventController::class)->middleware('auth')->middleware('admin');
Route::get('/dashboard/event/checkSlug', [DashboardEventController::class, 'checkSlug']);
Route::get('/psb', fn () => view('psb.index', ["title" => "PSB", "active" => 'psb']));
Route::resource('/psb/formulir', FormulirController::class)->middleware('auth');
Route::get('/psb/verivikasi', fn () => view('psb.formulir.verivikasi', ['title' => 'Verifikasi', 'active' => 'psb', 'datas' => Formulir::all()]))->middleware('auth');
Route::post('psb/payment/store', [PaymentController::class, 'store']);
Route::resource('/dashboard/managepsb', ManagePsbController::class)->middleware('auth');
Route::resource('/dashboard/cekdokumen', DashboardDocumentController::class)->middleware('auth');
Route::put('/dashboard/cekdokumen', [DashboardDocumentController::class, 'update'])->middleware('auth');
Route::get('/dashboard/cekstatus', [DashboardDocumentController::class, 'show'])->middleware('auth');
Route::resource('/dashboard/pages', PagesController::class)->middleware('auth')->middleware('admin');
Route::get('/dashboard/cetakkartu', [ManagePsbController::class, 'cetak'])->middleware('auth');
Route::get('/dashboard/cetakkartu/pdf', [ManagePsbController::class, 'cetakpdf'])->middleware('auth');
