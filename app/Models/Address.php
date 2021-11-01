<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'country'];

    //belongs to methods parameters
    /*
     * 1. relational model name (User::class)
     * 2. relational table foreign key (user_id)
     * 3. local key
     * */
    public function user(){
        return $this->belongsTo(User::class, 'user_id');//
    }
}
