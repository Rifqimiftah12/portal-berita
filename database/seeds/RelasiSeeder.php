<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Hobi;
use App\Mahasiswa;
use App\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        //Membuat Data Dosen
        $dosen = Dosen::create(array(
            'nipd'=>'1234567890',
            'nama'=>'Abdul Mustafa'
        ));
        $this->command->info('Data Dosen Telah Di Isi');

        //Membuat Data Mahasiswa
        $rifqi = Mahasiswa::create(array(
            'nama'=>'Rifqi Miftahudin',
            'nim'=>'10101023',
            'id_dosen'=>$dosen->id
        ));

        $fauzan = Mahasiswa::create(array(
            'nama'=>'Fauzan Muharram',
            'nim'=>'10101024',
            'id_dosen'=>$dosen->id
        ));

        $nau = Mahasiswa::create(array(
            'nama'=>'Nauly',
            'nim'=>'10101025',
            'id_dosen'=>$dosen->id
        ));
        $this->command->info('Data Mahasiswa Berhasil Di Isi');

        //Membuat Dta Wali
        $ikiw = Wali::create(array(
            'nama'=>'ikiw',
            'id_mahasiswa'=>$rifqi->id
        ));

        $agus = Wali::create(array(
            'nama'=>'Agus Sugandi',
            'id_mahasiswa'=>$fauzan->id
        ));

        $dobleh = Wali::create(array(
            'nama'=>'Dobleh Kabur',
            'id_mahasiswa'=>$nau->id
        ));
        $this->command->info('Data Wali Berhasil Di Isi');

        //Membuat Data Hobi
        $melukis_langit = Hobi::create(array('hobi'=>'Melukis Langit'));
        $mandi_hujan = Hobi::create(array('hobi'=>'Mandi Hujan'));
        $ambyar = Hobi::create(array('hobi'=>'Stalking Mantan'));

        //attach->malampirkan data baru ke table pivot(bantuan)
        //sync->mengupdate data di table pivot(bantuan)
        $rifqi->hobi()->attach($melukis_langit->id);
        $fauzan->hobi()->attach($mandi_hujan->id);
        $fauzan->hobi()->attach($ambyar->id);
        $nau->hobi()->attach($ambyar->id);

    }
}
