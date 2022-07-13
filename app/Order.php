<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

class Order extends Model
{
    public $timestamps = false;
}
