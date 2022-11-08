<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tb_mahasiswa';
    protected $fillable = ['nama', 'alamat','npm', 'jk', 'tgl_lahir', 'tempat_lahir', 'semester', 'status_perkawinan', 'ipk', 'penghasilan', 'email'];
}
