<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UserController;
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
Route::get('/',[GeneralController::class,'index'])->name('IndexPage');

    Route::get('/shirket-haqqinda/{id}',[GeneralController::class,'company_details'])->name('CompanyDetailsPage');
    
    Route::get('/lahiyeler',[GeneralController::class,'projects'])->name('ProjectsPage');

    Route::get('/{id}/lahiyeler',[GeneralController::class,'projects_cat'])->name('ByCatProjectsPage');
    
    Route::get('/lahiyeler/{id}',[GeneralController::class,'projects_details'])->name('ProjectDetailsPage');
    
    Route::get('/bloqlar',[GeneralController::class,'blogs'])->name('BlogsPage');
    
    Route::get('/bloq/{id}',[GeneralController::class,'blogs_details'])->name('BlogDetailsPage');
    
    Route::get('/əlaqə',[GeneralController::class,'contact'])->name('ContactPage');


Route::middleware('auth')->group(function () {
    
    //admim panel
    Route::get('/adminpanel/login',[GeneralController::class,'login'])->name('LogIn');

    Route::get('/adminpanel/register',[GeneralController::class,'register'])->name('Register');

    
    Route::get('/adminpanel',[GeneralController::class,'adminpanel'])->name('AdminPanel');
    
    Route::get('/adminpanel/projectsform',[GeneralController::class,'projectform'])->name('ProjectsForm');
    
    Route::get('/adminpanel/projectslist',[GeneralController::class,'projectlist'])->name('ProjectsList');
    
    Route::get('/adminpanel/blogform',[GeneralController::class,'blogform'])->name('BlogForm');

    Route::post('/adminpanel/bloglist',[GeneralController::class,'store'])->name('test');
    
    Route::get('/adminpanel/bloglist',[GeneralController::class,'bloglist'])->name('BlogList');

    Route::get('/adminpanel/companyform',[GeneralController::class,'companyform'])->name('CompanyForm');

    Route::get('/adminpanel/companylist',[GeneralController::class,'companylist'])->name('CompanyList');
    
    Route::post('/multi/ad',[GeneralController::class,'StoreImg'])->name('store.image');

    Route::post('/multi/add',[GeneralController::class,'StoreProjectImg'])->name('project.store.image');

    Route::post('/multi/images',[GeneralController::class,'StoreCompanyImg'])->name('company.store.image');

    Route::put('/adminpanel/blog-status/{id}', [GeneralController::class, 'blog_status']);

    Route::put('/adminpanel/project-status/{id}', [GeneralController::class, 'project_status']);

    Route::put('/adminpanel/company-status/{id}', [GeneralController::class, 'company_status']);

    Route::put('/adminpanel/company_image_status/{id}', [GeneralController::class, 'company_image_status']);
    
    Route::get('/admin-panel', [GeneralController::class, 'adminpanel'])->name('home');

    Route::get('/adminpanel/delete/{id}',[GeneralController::class,'delete'])->name("delete");

    Route::get('/adminpanel/destroyImg/{id}',[GeneralController::class,'destroyImg'])->name("destroyImg");

    Route::get('/adminpanel/destroyblogImg/{id}',[GeneralController::class,'destroyblogImg'])->name("destroyblogImg");

    Route::get('/adminpanel/destroyCompanyImg/{id}',[GeneralController::class,'destroyCompanyImg'])->name("destroyCompanyImg");

    Route::get('/adminpanel/deleteBlog/delete/{id}',[GeneralController::class,'deleteBlog'])->name("deleteBlog");

    Route::get('/adminpanel/deleteCompay/delete/{id}',[GeneralController::class,'deleteCompay'])->name("deleteCompay");

    Route::get('/adminpanel/edit/{id}',[GeneralController::class,'edit'])->name("edit");

    Route::get('/adminpanel/editBlog/{id}',[GeneralController::class,'editBlog'])->name("editBlog");

    Route::get('/adminpanel/editCompany/{id}',[GeneralController::class,'editCompany'])->name("editBlog");
    
    
    Route::post('/adminpanel/edit/{id}',[GeneralController::class,'update'])->name("update");

    Route::post('/adminpanel/editBlog/{id}',[GeneralController::class,'updateBlog'])->name("updateBlog");

    Route::post('/adminpanel/updateCompany/{id}',[GeneralController::class,'updateCompany'])->name("updateCompany");

});
    
Route::get('/adminpanel/reset',[GeneralController::class,'reset'])->name('Reset');
    
    Auth::routes();
