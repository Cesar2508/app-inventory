<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaterialSubFamily;
use App\Sku;

class Material extends Model
{
    //
    protected $fillable = [
        'material_sub_family_id','name','units',
    ];

    public function skus()
    {
      return $this->hasMany(Sku::class);
    }

    public function subFamily()
    {
      return $this->belongsTo(MaterialSubFamily::class,'material_sub_family_id');
    }

}
