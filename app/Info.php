<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = "info";
    protected $fillable = ['gambar','judul','keterangan','selengkapnya'];
    public function tag () 
    {
        return $this->belongsToMany ('App\Tag');
    }
}