    <?php


use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


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

Route::get('/', function(){
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "active" => "about",
        "nama" => "Bayu Dwi Kiswanto",
        "email" => "bayu.ashter60@gmail.com",
        "image" => "img/bayu.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);
Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories ', function(){
    return view('categories', [
        'title' => 'post category',
        'active' => 'categories',
        'categories' => category::all()
    ]);
});

// route login dan logout
Route::get("/login", [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post("/login", [LoginController::class, 'authenticate']);
Route::post("/logout", [LoginController::class, 'logout']);

// route register
Route::get("/register", [RegisterController::class, 'index'])->middleware('guest');
Route::post("/register", [RegisterController::class, 'store']);

// dashboard
Route::get("/dashboard", function (){
    return view('dashboard.index', [
        'title' => 'Dasboard'
    ]);
})->middleware('auth');

// crud route
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

// gates untuk admin
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');


// Route::get('/categories/{category:slug}', function (category $category) {
//     return view ('blog', [
//         'title' =>"Category $category->name",
//         'active' => 'categories',
//         'post' => $category ->post->load('author' , 'category'),
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author) {
//     return view ('blog', [
//         'title' => "Author $author->name",
//         'active' => "blog",
//         'post' => $author->posts->load('category' , 'author'),
//     ]);
// });