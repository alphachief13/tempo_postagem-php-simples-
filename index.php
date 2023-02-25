<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste -> Tempo Passado</title>
</head>
<body>
    <?php 

        //chama as configurações e funções para o programa atual
        include './functions.php';
        include './config.php';

        //cria uma data de postagem aleatoria 12h do Natal de 2010
        $dataPostagem = '12:00:00 2010-12-25';

        //printa o tempo passado desde o natal de 2010 as 12h até a data atual
        echo tempoPassado($dataPostagem, $data);

    
   ?>
</body>
</html>