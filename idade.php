<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Idade</title>
</head>
<body>
    <?php
    function idade($datanascto) {
        list($d,$m,$y) = explode("/",$datanascto);
        $date = new DateTime($y."-".$m.'-'.$d);
        $intervalo = $date->diff( new DateTime( date('Y-m-d')));
        return $intervalo->format('%Y');
    }
        echo "Olá ".$_GET['nome'];
        echo "<br>";
        echo "Você nasceu em: ".$_GET['datanascto'];
        echo "<br>";
        echo "Sua ídade: ".idade($_GET['datanascto']);
        echo "<br><br>";
        echo "<a href='idade.php'>Voltar</a>";
    ?>
</body>
</html>