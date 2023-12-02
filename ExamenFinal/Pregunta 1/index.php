<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>index</title>
</head>
<body>
    <?php
        session_start();
        $materias = array(
            array("usuario" => "Carlos", "materia" => "Desarrollo Web"),
            array("usuario" => "Carlos", "materia" => "Ing. de Software"),
            array("usuario" => "Carlos", "materia" => "Calculo"),
            array("usuario" => "Gisela", "materia" => "Algebra"),
            array("usuario" => "Gisela", "materia" => "Ing. de Software"),
            array("usuario" => "Gisela", "materia" => "Prog. Avanzada"),
        );
    ?>

    <div class="principal">

        <div class="arriba">

            <div class="izquierda">
                <div style="width: 100%; height: 20%;">
                    <img src="../img/logo.jpg" alt="logo" height="70%" width="60%">

                </div>

                <div class="sub-menu">
                    <div class="botonsubmenu" style="background-color: orange; color: white;">
                        Materias
                    </div>

                    <?php
                        if (isset($_SESSION["usuario"])) {
                            $usuario = $_SESSION["usuario"];
                            echo "<div>";
                            echo "<ul>";
                            foreach ($materias as $m) {
                                if ($m["usuario"] == $usuario) {
                                    echo "<li>" . $m["materia"] . "</li>";
                                }
                            }
                            echo "</ul>";
                            echo "</div>";
                        }
                    ?>
            
                </div>

            </div>

            <div class="derecha">
                
                    <div class="titulo" id="titulo">
                        Pregunta 1
                
                    </div>
                
                    <div class="contenido">
                        <?php
                            if (isset($_SESSION["usuario"])) {
                                echo "<h1>Bienvenido " . $_SESSION["usuario"] . "</h1>";
                            } else {
                                header("Location: login.html");
                            }
                        ?>
                    </div>

            </div>
        
        </div>

        <div class="abajo">

            <div class="pie">
                <a href="../home.html">Regresar</a>
            </div>

        </div>

    </div>
    
</body>
</html>