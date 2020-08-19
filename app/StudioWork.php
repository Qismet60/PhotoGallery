<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudioWork extends Model
{
    protected $table = 'studio_works';
    protected $fillable = ['studios_id','image'];
}
