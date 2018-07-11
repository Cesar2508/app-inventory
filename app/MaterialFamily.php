<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaterialSubFamily;

class MaterialFamily extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function subfamilies()
    {
      return $this->hasMany(MaterialSubFamily::class);
    }

}
