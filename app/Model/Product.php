<?php

namespace App\Model;


use App\User;
use App\Model\Producer;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description,','producer_id','price','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function producer(){
        return $this->belongsTo(Producer::class);
    }
}
