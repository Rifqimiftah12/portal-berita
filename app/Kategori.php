<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $fillable = ['nama','slug'];
    public $timestamps = true;

    public function artikel()
    {
        //Model kategori bisa memiliki banyak data
        //data Model  artikel melalui kategori_id
        return $this->hasMany('App\Artikel','kategori_id');
    }
}
