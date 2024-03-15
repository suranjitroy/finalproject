<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\CompanieCategoryController;
use App\Http\Middleware\TokenVerificationMiddleware;

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



Route::resource('/blog', BlogController::class);
Route::resource('/registration', UserController::class);
//Route::resource('/companie', CompanieController::class);
//Route::resource('/companie-category', CompanieCategoryController::class);

Route::group(['prefix' => 'admin'], function(){

    Route::get('/dashboard', [DashBoardController::class, 'userProfile'])->name('dash')->middleware([TokenVerificationMiddleware::class]);

});
Route::group(['prefix' => 'user'], function(){
    Route::get('/register',[RegisterController::class,'index']);
    Route::post('/register',[RegisterController::class,'userRegistration'])->name('registration');

    Route::get('/login',[LoginController::class,'index']);
});

Route::group(['prefix' => 'companies'], function(){
    Route::get('companie-entry',[CompanieController::class,'create'])->name('admin.companie.index');
    Route::post('companie-entry',[CompanieController::class,'store'])->name('companyinfo');
    Route::get('companie-edit/{companie}',[CompanieController::class,'edit'])->name('companyedit')->middleware([TokenVerificationMiddleware::class]);
    Route::put('companie-update/{companie}',[CompanieController::class,'update'])->name('companyupdate')->middleware([TokenVerificationMiddleware::class]);
    Route::delete('companie-delete/{companie}',[CompanieController::class,'destroy'])->name('againdelete')->middleware([TokenVerificationMiddleware::class]); 
});

Route::group(['prefix' => 'blogs'], function(){
    Route::get('blog-entry',[BlogController::class,'create'])->name('admin.blog.create')->middleware([TokenVerificationMiddleware::class]);
    Route::post('blog-entry',[BlogController::class,'store'])->name('admin.blog.store')->middleware([TokenVerificationMiddleware::class]);
    Route::get('blog-edit/{blog}',[BlogController::class,'edit'])->name('admin.blog.edit');
    Route::put('blog-update/{blog}',[BlogController::class,'update'])->name('admin.blog.update');
    Route::delete('blog-delete/{blog}',[BlogController::class,'destroy'])->name('admin.blog.delete');
});

Route::group(['prefix' => 'jobs'], function(){
    Route::get('job-entry',[JobController::class,'create'])->name('admin.job.create');
    Route::post('job-entry',[JobController::class,'store'])->name('jobentry');
    Route::get('joblist',[JobController::class,'index'])->name('admin.job.index');
    Route::get('job-edit/{job}',[JobController::class,'edit'])->name('jobedit');
    Route::put('job-update/{job}',[JobController::class,'update'])->name('admin.jobupdate');
    Route::delete('job-delete/{job}',[JobController::class,'destroy'])->name('admin.job.delete');
});


Route::group(['prefix' => 'categories'], function(){
    Route::get('category-entry',[CompanieCategoryController::class,'create'])->name('admin.category.index');
    Route::post('category-entry',[CompanieCategoryController::class,'store'])->name('categoryinfo');
    Route::get('category-edit/{companycategory}',[CompanieCategoryController::class,'edit'])->name('categoryedit');
    //Route::put('category-update/{companycategory}',[CompanieCategoryController::class,'update'])->name('categoryupdate');
    Route::put('category-update/{companycategory}',[CompanieCategoryController::class,'update'])->name('categoryupdate');
   // Route::delete('category-delete/{blog}',[CompanieCategoryController::class,'destroy'])->name('categorydelete');
});

Route::get('/',[JobController::class,'datatest']);

Route::get('/user-login',[LoginController::class,'index'])->name('admin.user.log');
Route::post('/user-login',[UserController::class,'userLogin'])->name('admin.user.login');
Route::post('/user-logout',[UserController::class,'userLogout']);
Route::get('/user-logout',[UserController::class,'userLogout'])->name('logout');

Route::get('/user-register',[RegisterController::class,'index'])->name('admin.register.user');
Route::post('/user-register',[RegisterController::class,'store'])->name('admin.register.store');
Route::get('/user-profile',[UserController::class,'userProfile']);

Route::get('/', [HomeController::class,'homepage'] )->name('home');
Route::get('/about', [AboutController::class, 'aboutpage'])->name('about');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/jobs', [JobController::class, 'job'])->name('jobs');

Route::group(['prefix' => 'about'], function(){
    Route::get('/about', [AboutController::class, 'aboutpage'])->name('admin.about.index');
    Route::get('/about-entry', [AboutController::class, 'create'])->name('admin.about.create');
    Route::post('/about-entry', [AboutController::class, 'store'])->name('admin.about.store');
Route::get('/edit/{about}', [AboutController::class, 'edit'])->name('admin.about.edit');
    Route::put('/about/update/{about}', [AboutController::class, 'update'])->name('admin.about.update');
    Route::delete('/about/delete/{about}', [AboutController::class, 'destroy'])->name('admin.about.delete');
});

Route::get('/profile', [ProfileController::Class, 'show'])->name('admin.profile.show')->middleware([TokenVerificationMiddleware::class]);



