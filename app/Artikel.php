<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul','slug','deskripsi','foto','user_id','kategori_id'];
    public $timestamps = true;

    public function kategori()
    {
        //data Model 'Artikel' bisa dimiliki oleh model 'kategori'
        //melalui 'kategori_id'
        return $this->belogsTo('App\Kategori','kategori_id');
    }

    public function user()
    {
        //data model 'artikel' bisa dimiliki oleh model 'user' melalui 'kategori_id'
        return $this->belogsTo('App\User','user_id');
    }

    public function tag()
    {
        //Model 'artikel memiliki relasi to many(belogsToMany)
        //terhadap model  'Tag' yang terhubung oleh table 'artikel_tag'
        // masing masing sebagai'tag_id'dan 'artikel_id'
        return $this->belogsToMany('App\Artikel','artikel_tag','artikel_id','tag_id');
    }
}
