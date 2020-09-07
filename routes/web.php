    <?php

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

Route::get('/datasiswa/{nama}/{kelas}/{jurusan}/{sekolah}', 
    function($nama, $kelas, $jurusan, $sekolah){
        return view('sekolah.datasiswa')
        ->with ('nama', $nama)
        ->with ('kelas', $kelas) 
        ->with ('jurusan', $jurusan)
        ->with ('sekolah', $sekolah);
});

Route::fallback(function () {
    return view('not_found');
});
// Pertemuan 13
// Route::prefix('/datasiswa')->group(function () {

//     Route::get('/{nama}', function ($nama) {
//         return "<h1><center>Nama : <a href='./kelas/Masukan_kelas'>$nama</center></h1>";
//     });
//     Route::get('kelas/{class}', function ($class) {
//         return "<h1><center>Kelas :  $class<center></h1>";
//     })->where('class', '[0-9]{2}[A-Z]+[0-9]{1}');
    
// });

// Route::fallback(function () {
//     return '<h1 style="text-align: center">404 - Tidak Ditemukan</h1>';
// });


