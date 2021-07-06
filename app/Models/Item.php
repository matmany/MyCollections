<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'collection_id',
        'url_img',
        'description',
        'notes',
        'score',
        'review',
        'position',
        'options',
    ];

    protected $casts = [
        'name' => 'string',
        'user_id' => 'integer',
        'collection_id' => 'integer',
        'url_img' => 'string',
        'description' => 'string',
        'notes' => 'string',
        'score'=>'float',
        'review' => 'string',
        'position' =>'integer',
        'options' =>'array',
    ];

    public function collection(){
        return $this->belongsTo(Collection::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
