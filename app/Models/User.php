<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'user';
    
    protected $fillable = ['username', 'password', 'nama', 'kelamin', 'alamat', 'level'];

    public function Pelanggaran()
    {
        return $this->hasMany(Pelanggaran::class, 'user_id');
    }
}
