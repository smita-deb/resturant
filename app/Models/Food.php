<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class Food extends Model
{
	protected $fillable =['name', 'description','price','category_id','image'];

public function category()
{
    return $this->hasOne(Category::class,'id','category_id');
}
}