<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $table = 'tb_training';
    protected $fillable = ['nama', 'ipk', 'smt', 'penghasilan', 'status', 'label', 'hasil'];
}
