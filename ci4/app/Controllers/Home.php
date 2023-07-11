<?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    

    public function prueba ()
    {
        echo 'Pueba de Ricardo JosuE';
    }

    public function api ()
    {


        $usuarios= array (
            "usuario"=>"Rick",
            "nombres"=>"Ricardo Josue",
            "Ciudad"=>"Portoviejo",
            "Direccion"=>"Colon",
            "telefono"=>"+593964024980"

        );


        return $this->response->setJSON($usuarios);

    }


    public function login(){

return view('login');
    
    }


    public function testbd($cedula)
    {

        $this->db=\Config\Database::connect();
        $query=$this->db->query("SELECT idpersona, nombre, cedula, fecha_nacimiento, direccion, telefono, fecha_registro, fecha_actualizacion 
        FROM esq_datos_personales.persona where cedula='$cedula'  ");
        $result=$query->getResult();
        return $this->response->setJSON($result);


        // echo "hola";
    
    }
}
