<?php

namespace App\Library;

use Illuminate\Database\Eloquent\Model;

class Forums extends Model
{
    const FORUM_NAME = 'name';

    public function getAllForums()
    {
        return self::all();
    }

    public function getById($id)
    {
        return self::find($id);
    }
}
