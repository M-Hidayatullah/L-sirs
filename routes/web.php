<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\TempatTidurController;
use App\Http\Controllers\DataRawatController;
use App\Http\Controllers\ObatPerlengkapanController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\AuthController;

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

//data
Route::get('/', [AdminController::class, 'index'])->middleware('admin');
Route::get('/data_dokter', [AdminController::class, 'data_dokter'])->middleware('admin');
Route::get('/jadwal_praktek', [AdminController::class, 'jadwal_praktek'])->middleware('admin');
Route::get('/data_pasien', [AdminController::class, 'data_pasien'])->middleware('admin');
Route::get('/tempat_tidur', [AdminController::class, 'tempat_tidur'])->middleware('admin');
Route::get('/data_rawat', [AdminController::class, 'data_rawat'])->middleware('admin');
Route::get('/obat_perlengkapan', [AdminController::class, 'obat_perlengkapan'])->middleware('admin');
Route::get('/data_tindakan', [AdminController::class, 'data_tindakan'])->middleware('admin');

//CRUD dokter
Route::get('/tambah_dokter', [DokterController::class, 'tambah_dokter'])->middleware('admin');
Route::post('/store_dokter', [DokterController::class, 'store_dokter'])->middleware('admin');
Route::post('/hapus_dokter', [DokterController::class, 'hapus_dokter'])->middleware('admin');
Route::get('/edit_dokter/{id}', [DokterController::class, 'edit_dokter'])->middleware('admin');
Route::post('/update_dokter', [DokterController::class, 'update_dokter'])->middleware('admin');
Route::post('/cari_dokter', [DokterController::class, 'cari_dokter']);

//crud pegawai
Route::get('/tambah_pegawai', [PegawaiController::class, 'tambah_pegawai'])->middleware('admin');
Route::post('/store_pegawai', [PegawaiController::class, 'store_pegawai'])->middleware('admin');
Route::post('/hapus_pegawai', [PegawaiController::class, 'hapus_pegawai'])->middleware('admin');
Route::post('/cari_pegawai', [PegawaiController::class, 'cari_pegawai']);
Route::get('/edit_pegawai/{id}', [PegawaiController::class, 'edit_pegawai']);
Route::post('/update_pegawai', [PegawaiController::class, 'update_pegawai']);

//crud pasien
Route::get('/tambah_pasien', [PasienController::class, 'tambah_pasien'])->middleware('admin');
Route::post('/store_pasien', [PasienController::class, 'store_pasien'])->middleware('admin');
Route::post('/hapus_pasien', [PasienController::class, 'hapus_pasien'])->middleware('admin');
Route::get('/edit_pasien/{id}', [PasienController::class, 'edit_pasien'])->middleware('admin');
Route::post('/update_pasien', [PasienController::class, 'update_pasien'])->middleware('admin');

//crud jadwal praktek
Route::get('/tambah_jadwal', [JadwalController::class, 'tambah_jadwal'])->middleware('admin');
Route::post('/store_jadwal', [JadwalController::class, 'store_jadwal'])->middleware('admin');
Route::post('/hapus_jadwal', [JadwalController::class, 'hapus_jadwal'])->middleware('admin');
Route::get('/edit_jadwal/{id}', [JadwalController::class, 'edit_jadwal'])->middleware('admin');
Route::post('/update_jadwal', [JadwalController::class, 'update_jadwal'])->middleware('admin');
Route::post('/cari_jadwal', [JadwalController::class, 'cari_jadwal']);
Route::post('/cari_pasien', [PasienController::class, 'cari_pasien']);

//crud tempat tidur
Route::get('/tambah_tmptidur', [TempatTidurController::class, 'tambah_tmptidur'])->middleware('admin');
Route::post('/store_tmptidur', [TempatTidurController::class, 'store_tmptidur'])->middleware('admin');
Route::post('/hapus_tmptidur', [TempatTidurController::class, 'hapus_tmptidur'])->middleware('admin');
Route::get('/edit_tmptidur/{id}', [TempatTidurController::class, 'edit_tmptidur'])->middleware('admin');
Route::post('/update_tmptidur', [TempatTidurController::class, 'update_tmptidur'])->middleware('admin');
Route::post('/cari_tmptidur', [TempatTidurController::class, 'cari_tmptidur']);

//crud data rawat
Route::get('/tambah_datarawat', [DataRawatController::class, 'tambah_datarawat'])->middleware('admin');
Route::post('/store_datarawat', [DataRawatController::class, 'store_datarawat'])->middleware('admin');
Route::get('/edit_datarawat/{id}', [DataRawatController::class, 'edit_datarawat'])->middleware('admin');
Route::post('/hapus_datarawat', [DataRawatController::class, 'hapus_datarawat'])->middleware('admin');
Route::post('/update_datarawat', [DataRawatController::class, 'update_datarawat'])->middleware('admin');
Route::post('/cari_rawat', [DataRawatController::class, 'cari_rawat']);

//crud perlengkapan dan obat 
Route::get('/tambah_obat', [ObatPerlengkapanController::class, 'tambah_obat'])->middleware('admin');
Route::post('/store_obat', [ObatPerlengkapanController::class, 'store_obat'])->middleware('admin');
Route::post('/hapus_obat', [ObatPerlengkapanController::class, 'hapus_obat'])->middleware('admin');
Route::get('/edit_obat/{id}', [ObatPerlengkapanController::class, 'edit_obat'])->middleware('admin');
Route::post('/update_obat', [ObatPerlengkapanController::class, 'update_obat'])->middleware('admin');
Route::post('/cari_obat', [ObatPerlengkapanController::class, 'cari_obat']);

//crud tindakan 
Route::get('/tambah_tindakan', [TindakanController::class, 'tambah_tindakan'])->middleware('admin');
Route::post('/store_tindakan', [TindakanController::class, 'store_tindakan'])->middleware('admin');
Route::post('/hapus_tindakan', [TindakanController::class, 'hapus_tindakan'])->middleware('admin');
Route::get('/edit_tindakan/{id}', [TindakanController::class, 'edit_tindakan'])->middleware('admin');
Route::post('/update_tindakan', [TindakanController::class, 'update_tindakan'])->middleware('admin');
Route::post('/cari_tindakan', [TindakanController::class, 'cari_tindakan']);


//autentikasi
Route::get('/register', [AuthController::class, 'register']);
Route::post('/store_register', [AuthController::class, 'store_register']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/store_login', [AuthController::class, 'store_login']);
Route::get('/logout', [AuthController::class, 'logout']);