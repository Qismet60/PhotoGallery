<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudioWork extends Model
{
    protected $table = 'studio_works';
    protected $fillable = ['studios_id', 'works'];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $works = $model->works->getClientOriginalName();
            $model->works->move('web/images/works', $works);
            $model->works = $works;

        });
    }
}
