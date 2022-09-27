<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class Pegawai extends Model
{
    use HasFactory, Notifiable;

    protected $table = "pegawai";

    protected $fillable = ['nama', 'email', 'alamat', 'telepone'];
}
