<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Village extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'created_by',
        'commune_id',
        'name',
        'slug',
        'status',
        'commune_code',
    ];

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
    
}
