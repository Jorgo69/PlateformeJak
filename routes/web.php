<?php
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashBordController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\OurCoursesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminControllers;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [PostController::class, 'index']) -> name('accueil');
Route::get('A Propos de Nous', [PageController::class, 'about'] ) -> name('about');
Route::get('Questions Reponses', [PageController::class, 'faq'] ) -> name('faq');
Route::get('Contact', [PageController::class, 'contact'] ) -> name('contact');
Route::get('Mes Cours', [CoursesController::class, 'courses']) -> name('courses');
Route::get('Details du Cours/{courses}', [OurCoursesController::class, 'ourCourses']) -> name('ourCourses');
Route::get('Profiles', [ProfileController::class, 'profiles']) -> name('profile');
Route::get('Tableau de Bord', [DashBordController::class, 'dashBord']) -> name('dashBord');
Route::get('Inscription', [InscriptionController::class, 'inscription']) -> name('inscription');
Route::get('Connexion', [InscriptionController::class, 'connexion']) -> name('connexion');
Route::get('Mot de Passe Oublié', [InscriptionController::class, 'forgetPassword']) -> name('password');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  Admin
Route::get('/AdminDashboard', [App\Http\Controllers\AdminControllers::class, 'AdDash'])->name('AdminDashboard');
Route::get('/AddCours', [App\Http\Controllers\AdminControllers::class, 'AddCours'])->name('AddCours');
Route::get('/mesCours', [App\Http\Controllers\AdminControllers::class, 'mesCours'])->name('mesCours');


Auth::routes();

// Admin

Route::post('/createCours', [CoursesController::class, 'Enregistrer'])->name('EnregistrerCours');


Route::get('/consulterCours', [AdminControllers::class, 'consulterCours'])->name('consulterCours');

Route::get('/Mon Cours', [OurCoursesController::class, 'Formation'])->name('Mon cours');