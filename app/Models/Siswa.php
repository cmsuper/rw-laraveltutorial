<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
	
	// Nama tabel di database
    protected $table = 'siswa';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = ['nama', 'alamat'];

}
