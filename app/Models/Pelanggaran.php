<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $table = 'pelanggaran';
    public $timestamps = false;
    protected $fillable = [
        'foto',
        'tanggal',
        'jenis_id',
        'siswa_id',
        'user_id'
    ];

    public function JenisPelanggaran()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }

    public function SiswaPelanggaran()
    {
        return $this->belongsTo(siswa::class, 'siswa_id');
    }

    public function UserPelanggaran()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
