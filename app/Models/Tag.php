<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function posts(){
        //parameter are relation model::class, pivot_table, this_model_id, relation_modle_id
        return $this->belongsToMany(Post::class, 'post_tag', 'tag_id', 'post_id');
    }
}
