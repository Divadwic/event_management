<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{
    protected $fillable = ['jenis_kegiatan', 'level_kegiatan'];
    protected $primaryKey = 'id';
    protected $table = 'jenis_kegiatans';
    public function JenisKegiatan()
    {
        return $this->hasMany(jeniskegiatan::class, 'id_jeniskegiatan', 'id');
    }
}
