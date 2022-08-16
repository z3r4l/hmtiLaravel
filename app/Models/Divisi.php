<?php

namespace App\Models;

use App\Models\Struktur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Divisi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function struktur()
    {
        return $this->hasMany(Struktur::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
