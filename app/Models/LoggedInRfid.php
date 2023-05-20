<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class LoggedInRfid extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table = 'login_rfid';

    protected $fillable = [
       'id', 'nama','rf_id', 'jenis_kelamin','telpon','waktu_login','created_at','updated_at'
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
