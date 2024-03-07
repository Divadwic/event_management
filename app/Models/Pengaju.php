<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaju extends Model
{
    protected $fillable = ['nama_pengaju', 'email', 'no_telp', 'level', 'nama_instansi'];
    protected $primaryKey = 'id';
    protected $table = 'pengajus';
    public function Pengaju()
    {
        return $this->hasMany(Pengaju::class, 'id_pengaju', 'id');
    }
}
