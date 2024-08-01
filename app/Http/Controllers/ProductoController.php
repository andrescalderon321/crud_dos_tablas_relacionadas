<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){

        $productos=Producto::all();
        $categorias=Categoria::all();
        return view('producto.index',compact('productos','categorias'));
        }

    public function store(Request $request){
        $productos=new Producto;
        $productos->categoria_id=$request->input('categoria_id');
        $productos->nombre=$request->input('nombre');
        $productos->cantidad=$request->input('cantidad');
        $productos->precio=$request->input('precio');
        $productos->save();
        return redirect()->back();


    }

    public function edit($id){

    }


    public function update(Request $request, $id){

        $productos= Producto::find($id);
        $productos->categoria_id=$request->input('categoria_id');
        $productos->nombre=$request->input('nombre');
        $productos->cantidad=$request->input('cantidad');
        $productos->precio=$request->input('precio');
        $productos->update();
        return redirect()->back();

    }

    public function destroy($id){

        $productos= Producto::find($id);
        $productos->delete();
        return redirect()->back();

    }
}
