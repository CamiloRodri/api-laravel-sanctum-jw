<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 * @class DoctorController
 */
class DoctorController extends Controller
{
    /**
     * @method index  -  Metodo que devuelve la lista de doctores registrados en el sistema
     * @return collection cases - Lista de los doctores registrados en el sistema
     */
    public function index()
    {
        $doctors = Doctor::with(['Speciality'])->get();
        return $doctors;
    }

    /**
     * @method show  -  Metodo que devuelve la lista de doctores registrados en el sistema
     * @return collection cases - Lista de los doctores registrados en el sistema
     */
    public function show($id)
    {
        $doctors = Doctor::find($id);
        return $doctors;
    }

    /**
     * @method store  -  Metodo que registra un doctor dentro del sistema
     * @param Request $request  - Parametro que tiene la informacion del doctor
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'identification_number' => 'required|min:3|numeric',
            'id_speciality' => 'required|numeric'
        ]) ;

        $doctor = Doctor::create([
            'name' => $request->name,
            'identification_number' => $request->identification_number,
            'id_speciality' => $request->id_speciality

        ]);

        return $doctor;
    }
}
