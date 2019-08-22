<?php
class Connect
{
     
    private $server = "localhost";
    private $user = "enric";
    private $password = "developer";
    private $database = "wheel";
    private $chartset = "utf-8";
    private $conector;


    function conectBD()
    {
        $this->conector=new mysqli($this->server,$this->user,$this->password,$this->database);
        mysqli_query($this->conector,'SET NAMES "'.$this->chartset.'"');

        $response = "Conexiòn Exitosa";
        if($this->conector->connect_error)
        {
            $response = $this->conector->connect_error;
        }
        //echo $response;

    }
function listaUsuarios()
{
    $lista="SELECT id FROM usuarios WHERE estado=0";
    $exec=mysqli_query($conector, $lista);
    if ($exec)
    {
        $sacrificado= array_rand ($exec,1);
        print ($sacrificado);
    }
}


    
}


?>