<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    use HasFactory;
    protected $table = 'tb_rekomendasi';
    protected $fillable = ['nama', 'npm', 'ipk', 'penghasilan','semester', 'status_perkawinan', 'label'];
}
