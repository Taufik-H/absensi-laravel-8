<?php

namespace App\Models;

use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable =['nis','nama', 'alamat','foto','kelas_id','jurusan_id', 'jenis_kelamin' ];






    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
