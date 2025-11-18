<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    public $timestamps = false;
    protected $fillable = [
        'nis',
        'nama',
        'kelamin',
        'agama',
        'alamat',
        'foto',
        'kelas_id'
    ];

    public function Kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function PelanggaranSiswa()
    {
        return $this->hasMany(Pelanggaran::class, 'siswa_id');
    }
}
