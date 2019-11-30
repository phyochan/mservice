<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class isp extends Model
{
    //

    use Searchable;
    //
    protected $table = "testpoints";
    protected $fillable = ['name'];
    public function toSearchableArray()
    {
        $array = $this->toArray();
        // Customize array...
        return $array;
    }
}
