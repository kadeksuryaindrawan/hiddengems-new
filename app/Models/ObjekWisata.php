<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjekWisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengelola_id',
        'kategori_id',
        'nama',
        'harga_tiket',
        'alamat',
        'longitude',
        'latitude',
        'deskripsi',
        'fasilitas',
        'sosial_media',
        'kontak',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id');
    }

    public function pengelola(){
        return $this->belongsTo(User::class,'pengelola_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
