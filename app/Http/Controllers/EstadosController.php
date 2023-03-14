<?php

namespace App\Http\Controllers;

use App\Models\Estados;
use App\Models\Estudia;
use App\Models\Municipios;
use App\Models\Trabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;


class EstadosController extends Controller
{
    public function registro(){
        $estados = Estados::all();
        return view("estados/index")
        ->with(['estados'=>$estados]);
    }



    public function js_municipios(Request $request){
        $id_estado = $request->get('id_estado');
        $municipios = Municipios::where('id_estado',$id_estado)->get();

        return view("Estados/js_municipios")
        ->with(['municipios'=>$municipios]);
    }

    public function form01(){
        $estados = Estados::all();

        return view("Estados/index")->with(['estados'=>$estados]);
    }

    public function js_estudio(){
        return view("Estados/js_estudio");
    }
    public function js_trabajo(){
        return view("Estados/js_trabajo");
    }

    public function enviadatos(Request $request)
{
    // Recuperar los datos del formulario
    $matricula = $request->input('matricula');
    $nombre = $request->input('nombre');
    $app = $request->input('app');
    $fn = $request->input('fn');
    $genero = $request->input('gen');
    $direccion = $request->input('direccion');
    $id_estado = $request->input('id_estado');
    $id_municipio = $request->input('id_municipio');

    // Crear un nuevo registro en la tabla usuario
    $usuario = new Usuario;
    $usuario->matricula = $matricula;
    $usuario->nombre = $nombre;
    $usuario->app = $app;
    $usuario->fn = $fn;
    $usuario->gen = $genero;
    $usuario->direccion = $direccion;
    $usuario->id_estado = $id_estado;
    $usuario->id_municipio = $id_municipio;
    $usuario->save();

    // Obtener el ID del usuario recién creado
    $usuario_id = $usuario->id;

    // Verificar si el usuario estudia y guardar los datos en la tabla estudia si es así
    if ($request->has('estudia')) {
        $grado = $request->input('grado');
        $universidad = $request->input('universidad');
        $fecha = $request->input('fecha');
        $carrera = $request->input('carrera');

        $estudia = new Estudia;
        $estudia->grado = $grado;
        $estudia->universidad = $universidad;
        $estudia->fecha = $fecha;
        $estudia->carrera = $carrera;
        $estudia->usuario_id = $usuario_id;
        $estudia->save();
    }

    // Verificar si el usuario trabaja y guardar los datos en la tabla trabajo si es así
    if ($request->has('trabajo')) {
        $horast = $request->input('horast');
        $empresa = $request->input('empresa');
        $dirt = $request->input('dirt');
        $diast = $request->input('diast');

        $trabajo = new Trabajo;
        $trabajo->horast = $horast;
        $trabajo->empresa = $empresa;
        $trabajo->dirt = $dirt;
        $trabajo->diast = implode(',', $diast);
        $trabajo->usuario_id = $usuario_id;
        $trabajo->save();
    }

    // Redirigir al usuario a la página de inicio con un mensaje de éxito
    return redirect()->route('registro')->with('success', 'Usuario agregado con éxito');
}

    

    //------------------------------------------------------------------------------ //
    //-----------------Consulta Dinamica----------------------------- //
    //-------------------------------------------------------------------------//
    public function form02(){
        $usus = DB::select("SELECT usu.id AS id,usu.clave, CONCAT(usu.app,' ',usu.apm,', ',usu.nombre) AS usuario,
        usu.fn,usu.gn,usu.imagen,usu.email,usu.password, if(usu.activo > 0,'SI','NO') as activo,tip.nombre_tipo AS tipo,
        tip.detalle,usu.created_at AS registrado FROM tb_usuarios AS usu,tb_tipo_usuarios AS tip
        WHERE usu.tipousua_id=tip.id");

        return view("Estados/formulario2")->with(['usus' => $usus]);
    }

    public function js_buscar(Request $request){
        $busca=$request->get('busca');
        $usus= DB::select("SELECT usu.id AS id,usu.clave, CONCAT(usu.app,' ',usu.apm,', ',usu.nombre) AS usuario,
        usu.fn,usu.gn,usu.imagen,usu.email,usu.password, if(usu.activo > 0,'SI','NO') as activo,tip.nombre_tipo AS tipo,
        tip.detalle,usu.created_at AS registrado FROM tb_usuarios AS usu,tb_tipo_usuarios AS tip
        WHERE usu.tipousua_id=tip.id AND usu.nombre  LIKE '% ".$busca."%'");
        return view("Estados/js_buscar")->with(['usus' => $usus]);
    }

    public function js_defecto(){
        $usus = DB::select("SELECT usu.id AS id,usu.clave, CONCAT(usu.app,' ',usu.apm,', ',usu.nombre) AS usuario,
        usu.fn,usu.gn,usu.imagen,usu.email,usu.password, if(usu.activo > 0,'SI','NO') as activo,tip.nombre_tipo AS tipo,
        tip.detalle,usu.created_at AS registrado FROM tb_usuarios AS usu,tb_tipo_usuarios AS tip
        WHERE usu.tipousua_id=tip.id");

        return view("Estados/js_buscar")->with(['usus' => $usus]);

    }
}
?>
