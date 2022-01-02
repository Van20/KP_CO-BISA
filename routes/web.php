<?php

use App\Http\Controllers\ccan\AdminDatinController;
use App\Http\Controllers\wan\AdminCnopController;
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

//CCAN
Route::get('/list_order', [AdminDatinController::class, 'index']);
Route::get('/dashboard_admin', [AdminDatinController::class, 'dashboard']);
Route::get('/add_order_datin', [AdminDatinController::class, 'create']);
Route::get('/customer_data', [AdminDatinController::class, 'customer_data']);
Route::post('/store', [AdminDatinController::class, 'store']);
Route::post('/store_order_manual', [AdminDatinController::class, 'store_order_manual']);
Route::get('/delete/order/{id}', [AdminDatinController::class, 'destroy_order'])->name('users.destroy');

Route::post('/update_order', [AdminDatinController::class, 'update_order']);
Route::get('/edit_order/{id}', [AdminDatinController::class, 'edit_order']);
Route::post('/assign_order', [AdminDatinController::class, 'assign_order']);
Route::post('/order/import', [AdminDatinController::class, 'order_import']);
Route::get('order/export', [AdminDatinController::class, 'order_export']);
Route::get('/login_page', [AdminDatinController::class, 'login']);
Route::get('/home_page', [AdminDatinController::class, 'home_page']);
Route::get('/profile_page', [AdminDatinController::class, 'profile_page']);
Route::get('/form_order_close/{id}', [AdminDatinController::class, 'form_order_close']);
Route::get('/form_order_reject', [AdminDatinController::class, 'form_order_reject']);
Route::get('/form_profile', [AdminDatinController::class, 'form_profile']);
Route::post('/update_data_customer', [AdminDatinController::class, 'update_data_customer']);
Route::post('/update_close_order', [AdminDatinController::class, 'update_close_order']);
Route::get('/order/{nik}', [AdminDatinController::class, 'order']);

//teknisi
Route::get('/delete/teknisi/{nik}', [AdminDatinController::class, 'destroy_teknisi'])->name('teknisi.destroy');
Route::post('/store_teknisi_manual', [AdminDatinController::class, 'store_teknisi_manual']);
Route::get('/add_data_teknisi', [AdminDatinController::class, 'create_teknisi']);
Route::post('/update_teknisi', [AdminDatinController::class, 'update_teknisi']);
Route::get('/detail_teknisi', [AdminDatinController::class, 'detail_teknisi']);
Route::get('/performansi_teknisi', [AdminDatinController::class, 'performansi_teknisi']);
Route::get('/detail_point/{nik}', [AdminDatinController::class, 'detail_point']);

Route::get('/jadwal_teknisi', [AdminDatinController::class, 'jadwal_teknisi']);
Route::post('/store_jadwal_teknisi', [AdminDatinController::class, 'store_jadwal_teknisi']);
Route::post('/update_jadwal_teknisi', [AdminDatinController::class, 'update_jadwal_teknisi']);
Route::post('/jadwal_ccan/import', [AdminDatinController::class, 'jadwal_ccan_import']);
Route::get('jadwal_ccan/export', [AdminDatinController::class, 'jadwal_ccan_export']);

Route::get('sto', [AdminDatinController::class , 'getSto']);
Route::get('/edit_order/{id}}',[AdminDatinController::class , 'getOlt']);


//WAN
Route::get('/list_assurance_wan', [AdminCnopController::class, 'index']);
Route::get('/dashboard_admin_wan', [AdminCnopController::class, 'dashboard']);
Route::get('/add_order_cnop', [AdminCnopController::class, 'create']);
Route::get('/customer_data_tsel', [AdminCnopController::class, 'customer_data_tsel']);
Route::get('/customer_data_olo', [AdminCnopController::class, 'customer_data_olo']);
Route::post('/store_wan', [AdminCnopController::class, 'store']);
Route::post('/store_order_manual_wan', [AdminCnopController::class, 'store_order_manual']);
Route::get('/delete/order_wan/{id}', [AdminCnopController::class, 'destroy_order'])->name('users.destroy');

Route::post('/update_order_wan', [AdminCnopController::class, 'update_order']);
Route::get('/edit_order_w an/{id}', [AdminCnopController::class, 'edit_order']);
Route::post('/assign_order_wan', [AdminCnopController::class, 'assign_order']);
Route::post('/order_wan/import', [AdminCnopController::class, 'order_import']);
Route::get('/order_wan/export', [AdminCnopController::class, 'order_export']);
Route::get('/login_page_wan', [AdminCnopController::class, 'login']);
Route::get('/home_page_wan', [AdminCnopController::class, 'home_page']);
Route::get('/profile_page_wan', [AdminCnopController::class, 'profile_page']);

Route::post('/update_data_customer_tsel', [AdminCnopController::class, 'update_data_customer_tsel']);
Route::post('/update_data_customer_olo', [AdminCnopController::class, 'update_data_customer_olo']);

//teknisi
Route::get('/delete/teknisi_wan/{nik}', [AdminCnopController::class, 'destroy_teknisi'])->name('teknisi.destroy');
Route::post('/store_teknisi_manual_wan', [AdminCnopController::class, 'store_teknisi_manual']);
Route::get('/add_data_teknisi_wan', [AdminCnopController::class, 'create_teknisi']);
Route::post('/update_teknisi_wan', [AdminCnopController::class, 'update_teknisi']);
Route::get('/detail_teknisi_wan', [AdminCnopController::class, 'detail_teknisi']);
Route::get('/performansi_teknisi_wan', [AdminCnopController::class, 'performansi_teknisi']);
Route::get('/detail_point_wan/{nik}', [AdminCnopController::class, 'detail_point']);

Route::get('/jadwal_teknisi_wan', [AdminCnopController::class, 'jadwal_teknisi']);
Route::post('/store_jadwal_teknisi_wan', [AdminCnopController::class, 'store_jadwal_teknisi']);
Route::post('/update_jadwal_teknisi_wan', [AdminCnopController::class, 'update_jadwal_teknisi']);
Route::post('/jadwal_wan/import', [AdminCnopController::class, 'jadwal_wan_import']);
Route::get('/jadwal_wan/export', [AdminCnopController::class, 'jadwal_wan_export']);

