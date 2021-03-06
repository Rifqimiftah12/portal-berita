<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $fillable = ['nama','id_mahasiswa'];
    public $timestamps = true;

    public function mahasiswa()
    {
        return $this->belogsTo('App\Mahasiswa','id_mahasiswa');
    }
}
