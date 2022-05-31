<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 * @class Appoinment
 */
class Appoinment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_patient',
        'id_diaries'
    ];

    /**
     * @method diary
     * Relacion Uno a muchos con agenda de citas
     * @return collection estados de agenda de citas
     */
    public function Diary()
    {
        return $this->HasOne('App\Models\Diary', 'id', 'id_diaries');
    }
}
