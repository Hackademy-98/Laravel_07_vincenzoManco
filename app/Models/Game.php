<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [ 'title', 'description' , 'price' , 'img' , 'category_id' ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    
}
