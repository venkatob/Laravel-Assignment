<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table='book';

    public $primaryKey='id';

    public $timestamp=true;
}
