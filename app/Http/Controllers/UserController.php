<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use raw;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $usuario = DB::select('SELECT u.id, u.name,
            CONCAT(d.domicilio, " " ,d.numero_exterior, " ", d.colonia, " ", d.cp, " ", d.ciudad) as domicilio,
            d.fecha_nacimento,
            (YEAR(CURDATE())-YEAR(d.fecha_nacimento)) as edad

         FROM users u
         INNER JOIN user_domicilios d ON u.id = d.user_id');
        return $usuario;
    }
}
