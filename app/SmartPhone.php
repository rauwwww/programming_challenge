<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmartPhone extends Model
{
    public $table = "smartphones";

    public $fillable = ['modelname','manufacturer', 'barcode', 'price'];
}
