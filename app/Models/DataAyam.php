<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAyam extends Model
{
    use HasFactory;

    protected $table = 'ayam';
    protected $fillable = ['periodeawal','periodeakhir','jmlawal','jmlmati','total'];
}
