<?php

    //recebe a string com a data da postagem 
    //recebe a string com a data atual
    //esta função retorna uma string
    function tempoPassado(string $postagem, string $atual): string
    {
        //transforma as strings para tempo em segundos 
        $postagem = strtotime($postagem);
        $atual = strtotime($atual);

        //faz o tempo passado desde a postagem em segundos
        $diferenca = $atual - $postagem;

        //vê quanto tempo passou de acordo com cada unidade de tempo
        $segundos = $diferenca;
        $minutos = round(($diferenca / 60));
        $horas = round(($diferenca / 3600));
        $dias = round(($diferenca / 86400));
        $semanas = round(($diferenca / 604800));
        $meses = round(($diferenca / 2419200));
        $anos = round(($diferenca / 31104000));
    
        //verifica quanto tempo passou e retorna uma string do tempo passado
        if($segundos < 60){
            return "Agora mesmo!";
        } elseif($minutos < 60){
            return $minutos == 1 ? "Há 1 minuto" : "Há " . $minutos . " minutos";
        } elseif($horas < 24){
            return $horas == 1 ? "Há 1 hora" : "Há " . $horas . " horas";
        } elseif($dias < 7){
            return $dias == 1 ? "Há 1 dia" : "Há " . $dias . " dias";
        } elseif($semanas < 4){
            return $semanas == 1 ? "Há 1 semana" : "Há " . $semanas . " semanas";
        } elseif($meses < 12){
            return $meses == 1 ? "Há 1 mês" : "Há " . $meses . " meses";
        } elseif($anos < 100){
           return $anos == 1 ? "Há 1 ano" : "Há " . $anos . " anos";
        }

    }

?>