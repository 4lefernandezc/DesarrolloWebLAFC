<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta3</title>
</head>
<body>
    <?php
        include "ListaAlum.php";
    ?>
        
    <div class="tablaAlum">
        <?php    
            $lista->mostrarLista();
        ?>
    </div>

    <div class="btnAgregar">
        <a>Insertar</a>
    </div>

    <div class="btnRegresar">
        <a href="../home.html">Regresar</a> 
    </div>

    <script>
        var eliminar = document.getElementsByClassName("eliminar");
        for (var i = 0; i < eliminar.length; i++) {
            eliminar[i].addEventListener("click", function() {
                var cu = this.getAttribute("id");
                console.log(cu);
                var ajax = new XMLHttpRequest();
                ajax.open("GET", "ListaAlum.php?cu=" + cu, true);
                ajax.send();
                location.reload();
                
            });

        }
        
    </script>
    
</body>
</html>

