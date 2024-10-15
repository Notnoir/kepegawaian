<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function golongan()
    {
        return $this->belongsTo(Golongan::class);
    }
}
