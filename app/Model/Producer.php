<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $fillable = [
        'name', 'web_site',
    ];


    public function product(){
        return $this->hasMany(Product::class);
    }
}
