<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $dateFormat = 'Y-m-d H:i:sO';
    protected $fillable = ['table_name', 'column_name', 'foreign_key', 'locale', 'value'];
}
