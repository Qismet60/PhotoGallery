<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studios extends Model
{
    protected $table = 'studios';
    protected $fillable = ['name', 'email', 'logo', 'number', 'address', 'about'];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $logo = $model->logo->getClientOriginalName();
            $model->logo->move('web/images/logo', $logo);

            $model->logo = $logo;

        });
    }

    public function works()
    {
        return $this->hasMany(StudioWork::class, 'studios_id', 'id');
    }
}
