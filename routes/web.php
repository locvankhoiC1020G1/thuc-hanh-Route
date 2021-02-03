<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
//Trang chủ
Route::get('/', function(){
    echo "<h2>this is Home page</h2>";
});
Route::get('/about',function (){
   echo "<h2>This is About page</h2>";
});
Route::get('/contact',function (){
    echo "<h2>This is Contact page</h2>";
});


//Khi Routing thực thi thì nó có thể nhận và truyền các tham số, tại routes/web.php tạo thêm route như sau
Route::get('user',function (){
        return view('user',['name'=>'Khoi']);
});
//Trong đó ‘user’ là view sẽ hiển thị giao diện và ‘name’ là tham số mà routes sẽ nhận giá trị


Route::get('/user/{name}',function ($name){
   echo "<h2>User name is $name</h2>";
});
//Routing cũng hỗ trợ tham số mặc định, khi chạy web ta không cần truyền tham số vẫn được
Route::get('/user-name/{name?}',function ($name = 'Khoi1'){
    echo "<h2>User name is $name</h2>";
});
// tạo controller dùng câu lệnh terminal: php artisan make:controller HomeController
Route::get('/',[HomeController::class, 'index']);
