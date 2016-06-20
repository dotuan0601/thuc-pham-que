<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('errors.503');
//});

//Route::get('/dang-nhap/{username}/{id}', function($username, $id){
//    echo 'Day trang dang nhap ' . $username . '-' . $id;
//});
//
//
//Route::get('/','HomeController@index');
//Route::get('/about','HomeController@about');

Route::get('/trangchu', 'HomeController@index');

Route::get('/','PostController@index');
Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);

Route::get('/dangky', function (){
    return view('user/dangky');
});

//authentication
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
// Kiểm tra người dùng đăng nhập
Route::group(['middleware' => ['auth']], function()
{
    // hiển thị bài viết mới
    Route::get('new-post','PostController@create');
    // Lưu bài viết
    Route::post('new-post','PostController@save');
    // Sửa bài viết
    Route::get('edit/{slug}','PostController@edit');
    // Cập nhật bài viết
    Route::post('update','PostController@update');
    // Xóa bài viết
    Route::get('delete/{id}','PostController@delete');
    // Hiển thị danh sách bài viết của User
    Route::get('my-all-posts','UserController@user_posts_all');
    // Danh sách bài lưu nháp
    Route::get('my-drafts','UserController@user_posts_draft');
    // Thêm comments
    Route::post('comment/add','CommentController@add');
    // Xóa comment
    Route::post('comment/delete/{id}','CommentController@delete');
});
//Quản lý User
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

// Bài viết của User
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// Bài duy nhất
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');