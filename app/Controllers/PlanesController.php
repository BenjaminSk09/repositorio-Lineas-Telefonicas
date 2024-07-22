<?php

namespace App\Controllers;
use App\Models\PlanesModel;

class PlanesController extends BaseController
{
    public function index(): string
    {
        $planes = new PlanesModel(); //crear objeto
        $datos['datos']=$planes->findAll(); //Select * from planes; es un array
       // print_r($datos); //si esta correcto se van a mostrar los datos en un array en la pagina web
        return view('planes',$datos);
    }
}
