<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $table = 'news';
    public function authors(){
        return $this->belongsToMany('App\Models\Author');
}
}
