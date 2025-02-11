<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
        // Nama tabel di database (opsional jika tabelnya 'students')
        protected $table = 'students';
    
        // Kolom yang dapat diisi secara massal
        protected $fillable = ['nama', 'alamat', 'jenis_kelamin'];
}
