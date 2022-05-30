<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appoinment;
/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 * @class AppoinmentController
 */
class AppoinmentController extends Controller
{
    /**
     * @method store  -  Metodo que registra un doctor dentro del sistema
     * @param Request $request  - Parametro que tiene la informacion del doctor
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_patient' => 'required|numeric',
            'id_diaries' => 'required|numeric'
        ]) ;

        $appoinment = Appoinment::create([
            'id_patient' => $request->id_patient,
            'id_diaries' => $request->id_diaries

        ]);

        return $appoinment;
    }
}
