<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'deskripsi',
        'teknologi', // Tetap sebagai string jika menyimpan JSON
        'link_demo',
        'link_sc',
        'image'
    ];

    // Tambahkan casting untuk otomatis konversi array <-> JSON
    protected $casts = [
        'teknologi' => 'array',
    ];

    // Opsional: Accessor untuk memastikan selalu mengembalikan array
    public function getTeknologiAttribute($value)
    {
        return is_array($value) ? $value : json_decode($value, true) ?? [];
    }

    // Opsional: Mutator untuk memastikan penyimpanan sebagai JSON
    public function setTeknologiAttribute($value)
    {
        $this->attributes['teknologi'] = is_string($value) 
            ? $value 
            : json_encode($value);
    }
}