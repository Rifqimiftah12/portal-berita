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

Route::get('/', function () {
    return view('welcome');
});

//Relasi
Route::get('penulis' ,function(){

    $penulis =\App\User::find(1);

    foreach($penulis->artikel as $data){
        echo "judul : $data->judul <br>";
        echo "Deskripsi : $data->deskripsi<br>";
        echo "Slug : $data->slug <hr>";
    }
});

    // Relasi Seeder
    use App\Mahasiswa;
    use App\Dosen;
    use App\Hobi;

    Route::get('relasi-1',function(){
        # Mencari mahasiswa dengan NIM 10101023
        $mahasiswa = Mahasiswa::where('nim','=','10101023')->first();

        # Menampilkan nama wali dari mahasiswa tsb
        return $mahasiswa->wali->nama;
    });

    Route::get('relasi-2',function(){
        # Mencari mahasiswa dengan NIM 10101023
        $mahasiswa = Mahasiswa::where('nim','=','10101023')->first();

        # Menampilkan nama dosen
        return $mahasiswa->dosen->nama;
    });

    Route::get('relasi-3', function(){
        # Mencari dosen denga yang bernama Rifqi
        $dosen = Dosen::where('nama','=','Rifqi Miftahudin')->first();

        # Menampilkan seluru data mahasiswa dari dosen Rifqi Miftahudin
        foreach($dosen->mahasiswa as $temp)
        echo '<li>Nama : ' .$temp->nama
        .'<strong>' .$temp->nim. '</strong></li>';
    });

    Route::get('relasi-4',function(){
        # Mencari data Mahasiswa yang Memiliki Nama Fauzan
        $novay = Mahasiswa::where('nama','=','Fauzan')->first();

        # Menampilkan seluruh data hobi Mahasiswa yang bernama Fauzan
        foreach ($novay->hobi as $temp)
            echo '<li>'.$temp->hobi.'</li>';
    });

    Route::get('relasi-5',function(){
        # Mencari Data Hobi Mandi Hujan
        $mandi_hujan = Hobi::where('hobi','=','Mandi Hujan')->first();

        # Menampilkan semua Mahasiswa yang mempunyai hobi mandi hujan
        foreach($mandi_hujan->mahasiswa as $temp)
        echo '<li> Nama : '.$temp->nama.'<strong>'.$temp->nim.'</strong></li>';
    });

    // CRUD
    Route::resource('siswa','SiswaController');
    Route::get('tabungan/report','TabunganController@jumlah_tabungan');
    Route::resource('tabungan', 'TabunganController');
    Route::resource('hobi', 'HobiController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
