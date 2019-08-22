<?php
//echo "funciona maldito";
class Connect
{
     
    private $server = "localhost";
    private $user = "factoria";
    private $password = "facto123";
    private $database = "mydb";
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

    function getAsistencias()
    {
        $this->conectBD();

        $sql = "SELECT * FROM Asistencias";
        $result = $this->conector->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "Fecha y Hora: " . $row["Fecha y Hora"]. " - Presente: " . $row["Presente"]."<br>";
        }

    }
    
    function getListaDeUsuarios() {
        $sql = "SELECT * FROM Personas";
        $result = $this->conector->query($sql);
        $data = array();

        while($row = $result->fetch_assoc()) {
            $nombre =  array("nombre" => $row ["Nombre"], "apellido" => $row ["Apellido"]);
            array_push($data, $nombre);
        }

    return $data;

    }
    
}
            
/*$obj = new Connect;
$obj->getAsistencias(); esto es para instanciar*/

?>