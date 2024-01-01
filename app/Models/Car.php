<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Car extends Model
{
    use HasFactory,softDeletes;
    protected $fillable = [
        'title',
        'cat_name',
        'description',
        'published',
        'category_id',
        'image',
        ];
        public function category(){
            return $this->belongsTo(Category::class);
        }
}
