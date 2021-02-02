<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
     use HasFactory;
     protected $table ='jurusans';

      public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
}
