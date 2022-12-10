<?php

use App\Http\Controllers\admin\GuruController;
use App\Http\Controllers\admin\KasusController;
use App\Http\Controllers\admin\PelanggaranController;
use App\Http\Controllers\admin\SiswaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
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

// home
Route::get('/', [BerandaController::class, 'index'])->name('/');


// admin--siswa
// admin
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
// crud-siswa
Route::post('/postsiswa', [SiswaController::class, 'store'])->name('postsiswa');
Route::get('/deletesiswa/{id}', [SiswaController::class, 'delete'])->name('delete');
Route::get('/formsiswa', [SiswaController::class, 'formsiswa'])->name('addsiswa');
// siswa--edit
Route::get('/getsiswa/{id}', [SiswaController::class, 'getsiswa'])->name('getsiswa');
Route::post('/editsiswa/{id}', [SiswaController::class, 'editsiswa'])->name('editsiswa');
// guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
// add
Route::get('/formguru', [GuruController::class, 'formguru'])->name('formguru');
Route::post('/addguru', [GuruController::class, 'store'])->name('addguru');
// edit
Route::get('/getguru/{id}', [GuruController::class, 'getguru'])->name('getguru');
Route::post('/editguru/{id}', [GuruController::class, 'editguru'])->name('editguru');
Route::get('/deleteguru/{id}', [GuruController::class, 'delete'])->name('deleteguru');


// list pelanggaran
Route::get('/datapelanggaran', [PelanggaranController::class, 'index'])->name('datapelanggaran');
// add
Route::get('/formpelanggaran', [PelanggaranController::class, 'formpelanggaran'])->name('formpelanggaran');
Route::post('/add-datapelanggaran', [PelanggaranController::class, 'store'])->name('addpelanggaran');
// edit
Route::get('/getpelanggaran/{id}', [PelanggaranController::class, 'getpelanggaran'])->name('getpelanggaran');
Route::post('/editpelanggar/{id}', [PelanggaranController::class, 'editpelanggaran'])->name('editpelanggaran');
Route::get('/deletepelanggaran/{id}', [PelanggaranController::class, 'delete'])->name('deletepelanggaran');


// kasus
Route::get('/addkasus', [KasusController::class, 'index'])->name('formkasus');
Route::get('/kasussiswa', [KasusController::class, 'kasussiswa']);
Route::get('/getpelanggar', [KasusController::class, 'getpelanggar']);
Route::post('/add-datapelanggaran', [KasusController::class, 'store'])->name('addpelanggaran');

// kelas
Route::get('/kelas', [PelanggaranController::class, 'index'])->name('kelas');


// hak akses
Route::group(['middleware' => ['auth','ceklevel:admin']], function() {

    Route::get('/dashboard',[SiswaController::class, 'halamandua']);
    route::get('/halamansatu','BerandaController@halamansatu')->name('halamansatu');
});


Route::group(['middleware' => ['auth','ceklevel:user']], function() {

    route::get('/halamansatu','BerandaController@halamansatu')->name('halamansatu');

});

// login
Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

// regis
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register/post', [LoginController::class, 'register_action'])->name('register.action');

// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');