<?php

session_start();

class lista_alumno
{
    public $nombre = [];
    public $apellido = [];
    public $cu = [];
    public $tope;

    public function __construct()
    {
        $this->nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : [];
        $this->apellido = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : [];
        $this->cu = isset($_SESSION['cu']) ? $_SESSION['cu'] : [];
        $this->tope = isset($_SESSION['tope']) ? $_SESSION['tope'] : 0;
    }

    public function insertarAlumno($nombre, $apellido, $cu)
    {
            $this->nombre[$this->tope] = $nombre;
            $this->apellido[$this->tope] = $apellido;
            $this->cu[$this->tope] = $cu;
            $this->tope++;
            $_SESSION['nombre'] = $this->nombre;
            $_SESSION['apellido'] = $this->apellido;
            $_SESSION['cu'] = $this->cu;
            $_SESSION['tope'] = $this->tope;
    }

    // eliminar Elemento 
    public function eliminarAlumno()
    {
            $this->tope--;
            $aux=[$this->nombre[$this->tope],$this->apellido[$this->tope],$this->cu[$this->tope]];
            $_SESSION['nombre'] = $this->nombre;
            $_SESSION['apellido'] = $this->apellido;
            $_SESSION['cu'] = $this->cu;
            $_SESSION['tope'] = $this->tope;
            
            return $aux;
    }

    function mostrarAlumno()
    {?>
        <h3>Lista de alumnos</h3>
        <table border=1>
            <tr>
                <td>
                    <?php echo "Nombre";?>
                </td>
                <td>
                    <?php echo "Apellido";?>
                </td>
                <td>
                    <?php echo "Cu";?>
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                        for ($i = 0; $i < $this->tope; $i++) {
                            echo $this->nombre[$i]. "<br>";    # code...
                        }
                    ?>
                </td>
                
                <td>
                <?php 
                        for ($i = 0; $i < $this->tope; $i++) {
                            echo $this->apellido[$i]. "<br>";    # code...
                        }
                    ?>

                    </td>
                    <td>
                    <?php 
                        for ($i = 0; $i < $this->tope; $i++) {
                            echo $this->cu[$i]. "<br>";    # code...
                        }
                    ?>
                </td>
                <td>
                <?php 
                        for ($i = 0; $i < $this->tope; $i++) {
                            echo  "<a href='#' onclick='eliminar()'>eliminar</a> <br>";    # code...
                        }
                    ?>
                
                </td>
                
            </tr>
           
        </table>
        <?php
    }
}
?>



