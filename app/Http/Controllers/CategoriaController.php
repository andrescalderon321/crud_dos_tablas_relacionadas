<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index(){
    $categorias=Categoria::all();
    return view('categoria.index',compact('categorias'));
    }

    public function store(Request $request)
    {
        $categorias=new Categoria;
        $categorias->nombre=$request->input('nombre');
        $categorias->descripcion=$request->input('descripcion');
        $categorias->save();
        return redirect()->back();
    }

    public function edit($id){

    }

    public function update(Request $request,$id){

        $categorias=Categoria::find($id);
        $categorias->nombre=$request->input('nombre');
        $categorias->descripcion=$request->input('descripcion');
        $categorias->update();
        return redirect()->back();

    }

    public function destroy($id)
    {

        $categorias=Categoria::find($id);
        $categorias->delete();
        return redirect()->back();

    }

}
