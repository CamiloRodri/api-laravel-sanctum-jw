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

    /**
     * @method show  -  Metodo que devuelve la lista de citas medicas por usuario registrados en el sistema
     * @return collection cases - Lista de las citas medicas por usuario registrados en el sistema
     */
    public function show($id)
    {
        $appoinments = Appoinment::with(['Diary'])->where('id_patient', $id)->get();
        return $appoinments;
    }

    /**
     * @method update  -  Metodo que actualiza la cita medica
     *  @param Request $request  - Parametro que tiene la informacion de la cita medica
     * @param integer id Parametro que tiene el id del deudor
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'id_patient' => 'required|numeric',
            'id_diaries' => 'required|numeric'
        ]) ;

        $appoinment = Appoinment::find($id);
        $appoinment->id_patient = $request->id_patient;
        $appoinment->id_diaries = $request->id_diaries;
        $appoinment->save();

        return $appoinment;


    }
}
