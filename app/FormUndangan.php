<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormUndangan extends Model
{
  protected $table = 'notulen_rapat';
  protected $primaryKey = 'id_notulen';
  protected $fillable = [
      'id_notulen',
      'nama_rapat',
      'waktu_pelaksanaan',
      'id_ruang',
      'agenda_rapat'
   ];
}