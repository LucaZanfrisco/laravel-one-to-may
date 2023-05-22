<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['immagine','slug'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
    public function type(){
        $this->belongsTo(Type::class);
    }
}
