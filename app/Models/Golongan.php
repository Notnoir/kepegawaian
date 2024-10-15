<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;
    protected $table = 'golongan';
    protected $primaryKey = 'id';
    public $timestamps = false;
    // protected $fillable = ['id','kode_golongan','nama_golongan'];
    protected $guarded = [];

    public function karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }
}
