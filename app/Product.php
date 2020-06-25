<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\User;
use App\Category;
use App\Subcategory;


class Product extends Model
{

    protected $fillable = ['name', 'description', 'price','avatar','category_id', 'stock','promo'];
    protected $guarded = [];




    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function damesubcategory()
    {
      return $this->hasOneThrough(Subcategory::class, Category::class);
    }

    public function dameCategoria()
    {
      if($this->category_id){
        $categoria = Category::find($this->category_id);
        return $categoria->name;
      }
      return 'Sin Categoria';
    }

}
