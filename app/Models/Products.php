<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $connection = 'mysql';
    protected $table = 'products';
    protected $primarykey = 'id';
   
}


