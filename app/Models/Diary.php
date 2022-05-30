<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 * @class Diary
 */
class Diary extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'identification_number'
    ];
}
