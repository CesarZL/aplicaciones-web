@extends('layouts.app')

@section('titulo')
    Agregar producto
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <!-- Formulario de agregar producto -->
    <div class="md:w-8/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="post" action="{{route('newproduct')}}">
                @csrf

                <div class="mb-5">
                    <label  class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>  
                        <input name="name"
                        class="border p-3 w-full rounded-lg"
                        placeholder="Ingrese nombre del producto" />
  
                    </div>
               
                <div class="mb-5">
                    <label  class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripcion corta
                    </label>  
                        <input name="desc_corta"
                        class="border p-3 w-full rounded-lg"
                            placeholder="Ingrese descripción corta del producto" />
   
                    </div>
                <div class="mb-5">
                    <label  class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripcion larga
                    </label>  
                        <input name="desc_larga"
                        class="border p-3 w-full rounded-lg"
                            placeholder="Ingrese descripción larga del producto" />
     
                    </div>
                <div class="mb-5">
                    <label  class="mb-2 block uppercase text-gray-500 font-bold">
                        Precio de venta
                    </label>  
                        <input type="number" name="precio_venta"
                        class="border p-3 w-full rounded-lg"
                            placeholder="Ingrese precio de venta del producto" />
  
                    </div>
                <div class="mb-5">
                    <label  class="mb-2 block uppercase text-gray-500 font-bold">
                        Precio de compra
                    </label>  
                        <input type="number" name="precio_compra"
                        class="border p-3 w-full rounded-lg"
                            placeholder="Ingrese precio de compra del producto" />
       
                    </div>
                <div class="mb-5">
                    <label  class="mb-2 block uppercase text-gray-500 font-bold">
                        Stock
                    </label>  
                        <input type="number" name="stock"
                        class="border p-3 w-full rounded-lg"
                            placeholder="Ingrese el stock del producto" />
       
                    </div>
                <div class="mb-5">
                    <label  class="mb-2 block uppercase text-gray-500 font-bold">
                        Peso en kilogramos
                    </label>  
                        <input type="number" name="peso"
                        class="border p-3 w-full rounded-lg"
                        placeholder="Ingrese el peso del producto" />
       
                    </div>
                <br>
                <div class="flex justify-end">
                    <button type="submit"
                        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                        <span>Agregar</span>
                    </button>
                </div>
            </form>


        </div>
    </div>
@endsection