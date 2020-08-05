<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studios extends Model
{
    protected $table = 'studios';
    protected $fillable = ['name', 'email', 'logo', 'number', 'address', 'about'];

    public function works()
    {
        return $this->hasMany(StudioWork::class,'studios_id','id');
    }
}
