
<?php

    if (isset($_GET["cu"])) {
        $cua = $_GET["cu"];
        $lista->eliminar($cua);
    }

    class Alumnos {
        public $cu;
        public $nombres;
        public $apellidos;

        public function __construct($cu, $nombres, $apellidos) {
            $this->cu = $cu;
            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
        }
    }

    class ListaAlumnos {
        public $alumnos;

        public function __construct() {
            $this->alumnos = array();
        }

        public function insertar($alumno) {
            array_push($this->alumnos, $alumno);
        }

        public function eliminar($cu) {
            foreach ($this->alumnos as $key => $alumno) {
                if ($alumno->cu == $cu) {
                    unset($this->alumnos[$key]);
                }
            }
        }

        public function mostrarLista() {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>CU</th>";
            echo "<th>Nombres</th>";
            echo "<th>Apellidos</th>";
            echo "<th>Acciones</th>";
            echo "</tr>";
            foreach ($this->alumnos as $alumno) {
                echo "<tr>";
                echo "<td>" . $alumno->cu . "</td>";
                echo "<td>" . $alumno->nombres . "</td>";
                echo "<td>" . $alumno->apellidos . "</td>";
                echo "<td><a class='eliminar' id='". $alumno->cu ."'>Eliminar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }

    $lista = new ListaAlumnos();
        
    $lista->insertar(new Alumnos("35-4978", "Alejandro", "Fernandez"));
    $lista->insertar(new Alumnos("35-123", "Maria", "Lopez"));
    $lista->insertar(new Alumnos("35-456", "Pedro", "Gonzales"));

?>