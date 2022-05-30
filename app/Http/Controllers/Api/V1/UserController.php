<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 * @class UserController
 */
class UserController extends Controller
{
    public function index(){
        return User::all();
    }

    public function show(Request $request){
        return $request->user();
    }
}
