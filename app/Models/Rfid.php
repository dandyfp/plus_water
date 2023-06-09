<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfid extends Model
{
    protected $fillable = [
        'rf_id', 'nama', 'jenis_kelamin','telpon','created_at','updated_at'
    ];

    protected $primaryKey = 'rf_id';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->rf_id = uniqid('RF-');
        });
    }
}
