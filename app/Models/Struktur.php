<?php

namespace App\Models;

use App\Models\Divisi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Struktur extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
