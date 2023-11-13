<!DOCTYPE html>
<html lang="pt-br">
<?php
    include('adm/requires/functions.php'); 
    include('adm/requires/conexao.php');

    $sqlRestaurante = "SELECT * FROM restaurante WHERE cd_restaurante = 01";
    $dadosRestaurante = $conexao->query( $sqlRestaurante );
    $rowRestaurante = $dadosRestaurante->fetch_assoc();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo$rowRestaurante['nm_fantasia'];?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>

<?php
    $isOpen = true;
    if($isOpen != true) {
        $warning = '
        <div class="avisoArea">
            <div class="alert alert-danger text-center">
                <strong>Nosso restaurante está fechado</strong>
            </div>
        </div>';
        $close = 'disabled';
        $colorStatus =  '#dc3545';
        $txtStatus = 'FECHADO';
    } else {
        $colorStatus =  '#28a745';
        $txtStatus = 'ABERTO';
        $warning='';
        $close = '';
    }
?>

