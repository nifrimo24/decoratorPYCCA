<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    protected $table = 'environments';
    protected $primaryKey = 'id_environment';
    public $timestamps = false;

    protected $fillable = [
        'environment_description'
    ];

    //Relationship N:N for'Product table'
    public function products()
    {
        return $this->belongsToMany(
            Product::class,             //Referenced model
            'custom_environments',      //Referenced pivot table
            'environment_id',           //Foreign key for pivot table
            'product_id'                //Foreign key for pivot table
        );
    }

    //Read route by 'environment_description'
    public function getRouteKeyName()
    {
        return 'environment_name';
    }
}
