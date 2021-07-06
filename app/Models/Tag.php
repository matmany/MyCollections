<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'color',
    ];

    protected $casts = [
        'name' => 'string',
        'user_id' => 'integer',
        'color' => 'string',
    ];

    public function itens(){
        return $this->belongsToMany(Item::class);
    }
}
