<?php

namespace App\Models;

use App\Models\Gender;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','img','category_id','gender_id'];


public function category(){

return $this->belongsTo(Category::class);



}

public function gender(){

    return $this->belongsTo(Gender::class);
    
    
    
    }




}
