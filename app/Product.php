<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id', 'name', 'description', 'price', 'image', 'category', 'times'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
