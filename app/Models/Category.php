<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    protected $translatable = ['title'];

    protected $dateFormat = 'Y-m-d H:i:sO';
}
