<?php

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

/*Route::get('/', function () {
    //return view('welcome');
    return view('custom_views/user_views/index');
});*/

//User & Product Routes - Start -> GET

Route::get('/', 'custom_controllers\user_controllers\indexController@IndexPage');
Route::get('/about', 'custom_controllers\user_controllers\indexController@AboutPage');
Route::get('/services', 'custom_controllers\user_controllers\indexController@ServicePage');
Route::get('/contact', 'custom_controllers\user_controllers\indexController@ContactPage');
Route::get('/user-profile/{uname}', 'custom_controllers\user_controllers\indexController@UserProfile');

Route::get('/login', 'custom_controllers\user_controllers\loginController@LoginPage');
Route::get('/logout', 'custom_controllers\user_controllers\logoutController@LogOut');
Route::get('/register', 'custom_controllers\user_controllers\registerController@RegisterPage');

Route::get('/allclothings', 'custom_controllers\user_controllers\productController@AllClothings');
Route::get('/mensclothing', 'custom_controllers\user_controllers\productController@MensClothing');
Route::get('/womensclothing', 'custom_controllers\user_controllers\productController@WomensClothing');
Route::get('/childsclothing', 'custom_controllers\user_controllers\productController@ChildsClothing');
Route::get('/cloth/{pid}', 'custom_controllers\user_controllers\productController@ClothDetails');
Route::get('/searchcloth', 'custom_controllers\user_controllers\productController@SearchCloth');
Route::get('/addtocart', 'custom_controllers\user_controllers\productController@AddToCart');
Route::get('/product/addtofavourite', 'custom_controllers\user_controllers\productController@AddToFavourite');
Route::get('/product/givarating', 'custom_controllers\user_controllers\productController@GiveRating');
Route::get('/cartlist', 'custom_controllers\user_controllers\productController@CartList');

//User & Product Routes - POST

Route::post('/login', 'custom_controllers\user_controllers\loginController@LoggedInReq', '_token');
Route::post('/register', 'custom_controllers\user_controllers\registerController@RegisterUser', '_token');
Route::post('/user/update-info/{id}', 'custom_controllers\user_controllers\indexController@UpdateInfo', '_token');
Route::post('/user/change-profilepic', 'custom_controllers\user_controllers\indexController@ChangePic', '_token');
Route::post('/checkout', 'custom_controllers\user_controllers\productController@CheckOut', '_token');
Route::post('/product/comments', 'custom_controllers\user_controllers\productController@AddProductComment', '_token');
Route::post('/product/comment/edit', 'custom_controllers\user_controllers\productController@UpdateProductComment', '_token');
Route::post('/product/comment/delete', 'custom_controllers\user_controllers\productController@DeleteProductComment', '_token');
Route::post('/notifications', 'custom_controllers\notification_controllers\notificationController@Store', '_token');
Route::post('/contactus', 'custom_controllers\user_controllers\messageController@ContactUs', '_token');
Route::post('/sendmessage', 'custom_controllers\user_controllers\messageController@SendMessage', '_token');



//User & Product - Ends


//Admin Routes - Start

Route::get('/admin', 'custom_controllers\admin_controllers\adminController@AdminHome');
Route::get('/allmessages', 'custom_controllers\admin_controllers\adminController@AllMessages');
Route::get('/admin/usertable', 'custom_controllers\admin_controllers\adminController@UserTable');
Route::get('/admin/purchasetable', 'custom_controllers\admin_controllers\adminController@PurchaseTable');
Route::get('/admin/adduser/{type}', 'custom_controllers\admin_controllers\adminController@AddUser');
Route::get('/admin/addproduct', 'custom_controllers\admin_controllers\adminController@AddProductGet');
Route::get('/admin/addproduct/category', 'custom_controllers\admin_controllers\adminController@AddProductGetCategory');
Route::get('/admin/updateproduct/{pid}', 'custom_controllers\admin_controllers\adminController@UpdateProductGet');
Route::get('/admin/updateuser/{id}', 'custom_controllers\admin_controllers\adminController@UpdateUserGet');
Route::get('/admin/msgfrom/{user}', 'custom_controllers\user_controllers\messageController@MesssageFrom');



Route::post('/admin/addproduct', 'custom_controllers\admin_controllers\adminController@AddProductPost', '_token');
Route::post('/admin/updateproduct/{pid}', 'custom_controllers\admin_controllers\adminController@UpdateProductPost', '_token');
Route::post('/admin/deleteproduct/{pid}', 'custom_controllers\admin_controllers\adminController@DeleteProduct', '_token');
Route::post('/admin/deleteuser/{id}', 'custom_controllers\admin_controllers\adminController@DeleteUser', '_token');
//@AddUserPost has been redirected to /register from @AddUserGet
Route::post('/admin/updateuser/{id}', 'custom_controllers\admin_controllers\adminController@UpdateUserPost', '_token');


//Admin Routes - Ends
