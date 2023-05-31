<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrarProductos extends Controller
{
    public function __construct(){
        //Se protege la URL
        $this->middleware('auth');
    }

    //Mostrar la pagina productos
    public function index(){
        $productos = DB::table('products')->get();
        return view('products.products',['productos'=>$productos]);
    }

    
    //Retornar la vista de agregar producto
    public function newProduct(){
        return view('products.addproducts');
    }

    //Agregar un producto nuevo 
    public function store(Request $request){
        //Se añaden los productos 
        Products::create([
            'name'=>$request->name,
            'descripcion_corta'=>$request->desc_corta,
            'descripcion_larga'=>$request->desc_larga,
            'precio_venta'=>$request->precio_venta,
            'precio_compra'=>$request->precio_compra,
            'stock'=>$request->stock,
            'peso'=>$request->peso
        ]);
        //Vista de los productos
        return redirect()->route('productos')->with('success','El producto fue agregado con exito');

    }

    public function delete(Request $request){
        //Eliminar el producto
        $deleteProducto = DB::table('products')->where('id','=',$request->id)->delete();

        return redirect()->route('productos')->with('success','El producto fue eliminado con exito');

    }


}
