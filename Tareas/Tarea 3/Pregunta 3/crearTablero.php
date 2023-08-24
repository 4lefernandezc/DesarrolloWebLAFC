<table border="1px">
        <?php
        $size = $_GET['numero'];
        for($ancho=1;$ancho<=$size;$ancho++){
            echo "<tr>";
            for($alto=1;$alto<=$size;$alto++){
                $proporcion=$ancho+$alto;
                if($proporcion % 2==0){
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                }
		        else{
                echo "<td height=30px width=30px bgcolor=#000000></td>";
                }
            }
            echo "</tr>";
        }
        ?>
  </table>
