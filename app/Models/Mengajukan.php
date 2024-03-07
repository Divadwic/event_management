<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mengajukan extends Model
{
    protected $fillable = ['judul_acara', 'file_proposal', 'lampiran_peserta', 'status', 'id_pengaju', 'id_jeniskegiatan'];
    protected $primaryKey = 'id';
    protected $table = 'mengajukans';
    public function Mengajukan()
    {
        return $this->hasMany(Mengajukan::class, 'id_mengajukan', 'id');
    }
    public function Pengaju()
    {
        return $this->belongsTo(Pengaju::class, 'id_pengaju', 'id');
    }
    public function JenisKegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class, 'id_jeniskegiatan', 'id');
    }
}
