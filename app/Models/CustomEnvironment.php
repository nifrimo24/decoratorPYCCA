<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomEnvironment extends Model
{
    protected $table = 'custom_environments';
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'environment_id'
    ];
}
