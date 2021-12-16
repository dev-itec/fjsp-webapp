<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Entrepeuners;
use App\Http\Livewire\Routes;
use App\Http\Livewire\Ngos;
use App\Http\Livewire\Cases;
use App\Http\Livewire\Allies;
use App\Http\Livewire\Events;
use App\Http\Livewire\Audits;
use App\Http\Livewire\Projects;
use App\Http\Livewire\Hows;
use App\Http\Livewire\Directory;
use App\Http\Livewire\Configs;
use App\Http\Livewire\Users;
//use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
//use App\Http\Livewire\Tables;
//use App\Http\Livewire\StaticSignIn;
//use App\Http\Livewire\StaticSignUp;
//use App\Http\Livewire\Rtl;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Http\Controllers\GoogleController;

use Illuminate\Http\Request;

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
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/', Login::class)->name('login');

Route::get('/sign-up', SignUp::class)->name('sign-up');
//Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/entrepeuners', Entrepeuners::class)->name('entrepeuners');
    Route::get('/routes', Routes::class)->name('routes');
    Route::get('/ngos', Ngos::class)->name('ngos');
    Route::get('/cases', Cases::class)->name('cases');
    Route::get('/allies', Allies::class)->name('allies');
    Route::get('/events', Events::class)->name('events');
    Route::get('/audits', Audits::class)->name('audits');
    Route::get('/projects', Projects::class)->name('projects');
    Route::get('/hows', Hows::class)->name('hows');
    Route::get('/directory', Directory::class)->name('directory');
    Route::get('/configs', Configs::class)->name('configs');
    Route::get('/users', Users::class)->name('users');

    //Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    //Route::get('/tables', Tables::class)->name('tables');
    //Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    //Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    //Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});
/*
Emprendedores           entrepeuners
Rutas                   routes
Organizaciones          ngos
Casos                   cases
Alianzas                allies
Actividades Publicas    events
Rinde cuentas           audits
Banco de proyectos      projects
Apoyo técnico           hows
Directorio              directory
Roles                   config
Ajustes                 config
Usuarios                config
Parametros              config
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//