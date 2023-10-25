<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido=$_POST['Apellidos'];
$titulo=$_POST['titulo'];
$celular=$_POST['celular'];
$mi= $_POST['sobre_mi'];
$correo = $_POST['correo'];
$estudios1 = $_POST['estudios1'];
$titulo1=$_POST['titulo1'];
$date1=$_POST['date1'];
$estudios2 = $_POST['estudios2'];
$titulo2=$_POST['titulo2'];
$date2=$_POST['date2'];
$lugar1=$_POST['lugar1'];
$trabajo1 = $_POST['trabajo1'];
$lugar2=$_POST['lugar2'];
$trabajo2 = $_POST['trabajo2'];
$lugar3=$_POST['lugar3'];
$trabajo3 = $_POST['trabajo3'];
$nombreref1=$_POST['nombreref1'];
$trabajosref1=$_POST['trabajosref1'];
$nombreref2=$_POST['nombreref2'];
$trabajosref2=$_POST['trabajosref2'];
$nombreref3=$_POST['nombreref3'];
$trabajosref3=$_POST['trabajosref3'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
</head>
<style>
h1 {
    color: black;
    text-align: center;
    font-family: Imprint MT Shadow;
    font-weight: bold;
    font-size: 50px;
}

h2 {
    color: rgb(137, 14, 231);
    text-align: left;
    font-family: Mongolian Baiti;
    font-weight: bold;
    font-size: 30px;
}

h3 {
    color: #00BF63;
    text-align: center;
    font-family: Mongolian Baiti;
    font-weight: bold;
    font-size: 25px;
}

td {
    font-family: Mongolian Baiti;
    font-size: 18px;
}

.mi {
    text-align: center;
    padding: 10px;
    font-family: Mongolian Baiti;
    font-size: 20px;
}
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <br>
                        <?php echo "<h1> $nombre $apellido</h1>";
                        echo "<h3> $titulo </h3>";?>
                        <div class="table">
                            <table width="100%" bgcolor="#D5BEFF" height="40px">
                                <tr>
                                    <td class="contacto" style="text-align: center;"><?php echo $celular; ?></td>
                                    <td class="contacto" style="text-align: center;"><?php echo $correo; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <table width="100%" bgcolor="#82C1FA">
                            <tr>
                                <th class="mi"></th>
                            </tr>
                            <tr>
                                <th class="mi" colspan="2">Sobre mi</th>
                            </tr>
                            <tr>
                                <td colspan="2"><?php echo $mi; ?></td>
                            </tr>
                            <tr>
                                <th class="mi"></th>
                            </tr>
                            <tr>
                                <th class="mi" colspan="2">Referencias</th>
                            </tr>
                            <tr>
                                <td><?php echo $nombreref1; ?></td>
                                <td><?php echo nl2br($trabajosref1); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $nombreref2; ?></td>
                                <td><?php echo nl2br($trabajosref2); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $nombreref3; ?></td>
                                <td><?php echo nl2br($trabajosref3); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-5">
                        <table width="100%" bgcolor="#EACEFD">
                            <tr>
                                <th class="mi" colspan="2">Estudios</th>
                            </tr>
                            <tr>
                                <th><?php echo $estudios1; ?></th>
                                <td><?php echo $titulo1; ?></td>
                                <td><?php echo $date1; ?></td>
                            </tr>
                            <tr>
                                <th><?php echo $estudios2; ?></th>
                                <td><?php echo $titulo2; ?></td>
                                <td><?php echo $date2; ?></td>
                            </tr>
                            <tr>
                                <th class="mi"></th>
                            </tr>
                            <tr>
                                <th class="mi" colspan="2">Experiencia Laboral</th>
                            </tr>
                            <tr>
                                <th><?php echo $lugar1; ?></th>
                                <td colspan="2"><?php echo nl2br ($trabajo1); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo $lugar2; ?></th>
                                <td colspan="2"><?php echo nl2br($trabajo2); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo $lugar3; ?></th>
                                <td colspan="2"><?php echo nl2br($trabajo3); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>