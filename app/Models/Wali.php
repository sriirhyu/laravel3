<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;

    public $fillable = ['nama','foto', 'id_siswa'];
    public $timestamps = true;

    // membuat relasi one to one di model
    public function siswa(){
        // data dari model 'Wali' bisa dimiliki oleh model 'Siswa'
        // mealalui 'id_siswa'
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    // method menampilkan image (foto)
    public function image(){
        if($this->foto && file_exists(public_path('images/wali'.$this->foto))){
            return unlink(public_exists('images/wali/'.$this->foto));
    }else{
        return asset('image/no_image.jpg');
    }
}

    public function deleteImage() { 
    
        if($this->foto && file_exists(public_path('images/wali'.$this->foto))){
            return unlink(public_exists('images/wali/'.$this->foto));
        }
    }
}
