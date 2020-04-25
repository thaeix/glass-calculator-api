<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
