<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;



class data extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table = 'data';

    protected $fillable = [
       'id', 'rf_id', 'nama', 'jenis_kelamin','telpon','created_at','updated_at'
    ];

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        /*static::creating(function ($model) {
            $model->id = uniqid();
        });*/
    }
}
