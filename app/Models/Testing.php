<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    use HasFactory;
    protected $table = 'tb_testing';
    protected $fillable = ['nama', 'ipk', 'smt', 'penghasilan','status', 'label'];
}
