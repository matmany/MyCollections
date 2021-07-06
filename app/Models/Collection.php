<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'type_id',
        'category_id',
        'active',
    ];

    protected $casts = [
        'name' => 'string',
        'user_id' => 'integer',
        'type_id' => 'integer',
        'category_id' => 'integer',
        'active' => 'boolean',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function type(){
        return $this->belongsTo(Types::class);
    }

    public function itens(){
        return $this->hasMany(Item::class);
    }


}
