<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    public $timestamps = false;

    protected $fillable = [
        'product_description'
    ];

    public function environments()
    {
        return $this->belongsToMany(
            Environment::class,
            'custom_environments',
            'product_id',
            'environment_id'
        );
    }

    //Relationship 1:N for'products_categories table'
    public function categories(){

        return $this->belongsTo(
            ProductCategory::class,    //Referenced model
            'product_category_id',     //Local Foreign key
            'id_product_category'      //Primary key from 'products_categories' table
        );
    }
}
