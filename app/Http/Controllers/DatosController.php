<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datos;

class DatosController extends Controller
{
    
  
    public function index()
    {
     
          $datos = Datos::all();
        return response()->json(["datos"=>$datos]);

   
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validamos que haya datos en el formulario
        $this->validate($request,[
            'valor1' => 'required',
            'valor2' => 'required'
        ]);

        Datos::create($request->all());

        return;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'valor1' => 'required',
            'valor2' => 'required'
        ]);

        Datos::find($id)->update($request->all());

        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = Datos::findOrFail($id);
        $dato->delete();
    }
}
