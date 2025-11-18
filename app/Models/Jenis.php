<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $table = 'jenis';
    public $timestamps = false;
    protected $fillable = [
        'jenis',
        'keterangan',
        'poin'
    ];

    public function siswa()
    {
        return $this->hasMany(Pelanggaran::class, 'jenis_id');
    }
}
