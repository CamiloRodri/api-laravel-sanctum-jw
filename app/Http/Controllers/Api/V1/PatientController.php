<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patient;
/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 * @class PatientController
 */
class PatientController extends Controller
{
    /**
     * @method index  -  Metodo que devuelve la lista de pacientes registrados en el sistema
     * @return collection cases - Lista de los pacientes registrados en el sistema
     */
    public function index()
    {
        $patients = Patient::all();
        return $patients;
    }

    /**
     * @method show  -  Metodo que devuelve la lista de pacientes registrados en el sistema
     * @return collection cases - Lista de los pacientes registrados en el sistema
     */
    public function show($id)
    {
        $patients = Patient::find($id);
        return $patients;
    }

    /**
     * @method store  -  Metodo que registra un paciente dentro del sistema
     * @param Request $request  - Parametro que tiene la informacion del paciente
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'identification_number' => 'required|min:3|numeric'
        ]) ;

        $patient = Patient::create([
            'name' => $request->name,
            'identification_number' => $request->identification_number,
        ]);

        return $patient;
    }
}
