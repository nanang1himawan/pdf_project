<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawaii extends Model
{
    use HasFactory;
    protected $table = "pegawaiis";
    protected $fillable = ['nama','email','alamat','telepon'];
}
