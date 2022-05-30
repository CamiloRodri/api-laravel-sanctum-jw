<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Speciality;
/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 * @class SpecialityController
 */
class SpecialityController extends Controller
{
    /**
     * @method index  -  Metodo que devuelve la lista de especialidades registradas en el sistema
     * @return collection cases - Lista de los especialidades registradas en el sistema
     */
    public function index()
    {
        $specialities = Speciality::all();
        return $specialities;
    }

    /**
     * @method store  -  Metodo que registra una especialidad dentro del sistema
     * @param Request $request  - Parametro que tiene la informacion de la especialidad
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]) ;

        $speciality = Speciality::create([
            'name' => $request->name
        ]);

        return $speciality;
    }
}
