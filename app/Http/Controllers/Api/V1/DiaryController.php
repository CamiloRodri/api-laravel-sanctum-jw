<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Diary;
use App\Models\Appoinment;
/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 * @class DiaryController
 */
class DiaryController extends Controller
{
    /**
     * @method store  -  Metodo que registra un doctor dentro del sistema
     * @param Request $request  - Parametro que tiene la informacion del doctor
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_doctor' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ]) ;

        $queries = DB::select("SELECT create_diary($request->id_doctor, STR_TO_DATE('$request->start_date', '%d/%m/%Y'), STR_TO_DATE('$request->end_date', '%d/%m/%Y'), '$request->start_time', '$request->end_time')");

        return $queries;
    }

    /**
     * @method show  -  Metodo que devuelve la lista de doctores registrados en el sistema
     * @return collection cases - Lista de los doctores registrados en el sistema
     */
    public function show($id)
    {
        $appoinments = Appoinment::all()->pluck('id_diaries')->toArray();
        $diaries = Diary::select('diaries.id', 'diaries.date_diary')
                ->where('id_doctor', $id)
                ->whereNotIn('id', $appoinments)
                ->get();
        return $diaries;
    }
}
