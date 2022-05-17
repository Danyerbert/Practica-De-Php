<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$calculo = $_POST['calculo'];
$ingreso = $_POST['ingreso'];
$sueldo = $_POST['sueldo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/stylecal.css">
</head>
<body>
    <div class="container">
        
        <?php
// Comprobacion de entrada de datos
            if ($sueldo <180 OR $sueldo >650 || $calculo<1990  OR $calculo>2022 || $ingreso<1990 OR $ingreso>2022){
        ?> 
    
            <div class="fallo">
                <p>Datos no validos Por favor regrese al menu principal</p>
                <a href="index.php" class="titulo">Regresar</a>
            </div>
        <?php
        }
            $añosdeservicio = $calculo-$ingreso;
                // Calculo de Prestaciones
            $diferencia = (($calculo-$ingreso)/100);
                // Verificación de Calculo
            if($diferencia>0.15) {
                $diferencia=0.15;
                $sueldototal=($sueldo+($diferencia*$sueldo));
                ?>
                <div class="content">
                <div class="titulo">Resultado de Prestaciones</div>
                <table>
                    <thead>
                        <th>Name</th>
                        <th>Apellido</th>
                        <th>Año de Calculo</th>
                        <th>Año de Ingreso</th>
                        <th>Sueldo</th>
                        <th>Diferencia</th>
                        <th>Sueldo Total</th>
                        <th>Años de servicios</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $apellido; ?></td>
                            <td><?php echo $calculo; ?></td>
                            <td><?php echo $ingreso; ?></td>
                            <td><?php echo $sueldo; ?></td>
                            <td><?php echo $diferencia; ?></td>
                            <td><?php echo $sueldototal; ?></td>
                            <td><?php echo $añosdeservicio; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php
            }else{
                $sueldototal=($sueldo+($diferencia*$sueldo));?>
                <div class="content">
                <div class="titulo">Resultado de Prestaciones</div>
                <table>
                    <thead>
                        <th>Name</th>
                        <th>Apellido</th>
                        <th>Año de Calculo</th>
                        <th>Año de Ingreso</th>
                        <th>Sueldo</th>
                        <th>Diferencia</th>
                        <th>Sueldo Total</th>
                        <th>Años de servicios</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $apellido; ?></td>
                            <td><?php echo $calculo; ?></td>
                            <td><?php echo $ingreso; ?></td>
                            <td><?php echo $sueldo; ?></td>
                            <td><?php echo $diferencia; ?></td>
                            <td><?php echo $sueldototal; ?></td>
                            <td><?php echo $añosdeservicio; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
         <?PHP   }?>
    </div>
    <footer>
        <div class="regresar">
            <p>Vuelva a calcular un dato</p>
            <a href="./index.php">Inicio</a>
        </div>
    </footer>
</body>
</html>
