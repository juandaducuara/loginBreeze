<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Inertia\Inertia;

class PermisosController extends Controller
{
    //
    public function index(){
        $permisos = Permission::select('id','name')->orderByDesc('id')->paginate(4);
        
        return view('seguridad.permisos', compact('permisos'));
    }
}
