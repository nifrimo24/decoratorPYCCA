<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'products_categories';
    protected $primaryKey = 'id_product_category';
    public $timestamps = false;

    protected $fillable = [
        'product_category_description'
    ];

    //Relationship 1:N for'products table'
    public function products(){

        return $this->hasMany(
            Product::class,             //Referenced model
            'product_category_id',      //Foreign key
            'id_product_category'       //Local Primary key
        );
    }

    //Read route by 'product_category_name'
    public function getRouteKeyName()
    {
        return 'product_category_name';
    }
}
