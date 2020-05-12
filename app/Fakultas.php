<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{

    protected $table = 'fakultas';
    protected $primaryKey = 'id_fakultas';
    protected $fillable = [
    'universitas_id',
    'kode_fakultas',
    'nama_fakultas',
   ];

 
}

  

