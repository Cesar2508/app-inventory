<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaterialFamily;
use App\Material;

class MaterialSubFamily extends Model
{
    //
    protected $fillable = [
        'material_family_id','name',
    ];

    public function materials()
    {
      return $this->hasMany(Material::class,'material_sub_family_id');
    }

    public function family()
    {
      return $this->belongsTo(MaterialFamily::class,'material_family_id');
    }

}
