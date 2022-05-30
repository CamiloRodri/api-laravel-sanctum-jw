<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 * @class Doctor
 */
class Doctor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'identification_number',
        'id_speciality'
    ];

    /**
     * @method speciality
     * Relacion Uno a muchos con especialidades
     * @return collection estados de especialidades
     */
    public function Speciality()
    {
        return $this->HasOne('App\Models\Speciality', 'id');
    }
}
