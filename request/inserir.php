<?php

include_once("../config/Database.php");

if(isset($_POST['salvar']))
{
    
    $primeiro_nome=filter_input(INPUT_POST,'primeiro_nome',FILTER_SANITIZE_SPECIAL_CHARS);
    $ultimo_nome=filter_input(INPUT_POST,'ultimo_nome',FILTER_SANITIZE_SPECIAL_CHARS);
    $genero=filter_input(INPUT_POST,'genero',FILTER_SANITIZE_SPECIAL_CHARS);
    $curso=filter_input(INPUT_POST,'curso',FILTER_SANITIZE_SPECIAL_CHARS);
    $periodo=filter_input(INPUT_POST,'periodo',FILTER_SANITIZE_SPECIAL_CHARS);
 
    
    $inserirInscricao = $convite->inserirInscricao($primeiro_nome,$ultimo_nome,$genero,$curso,$periodo);

    if ($inserirInscricao) {
        session_start();
        $_SESSION['sucesso']=true;
        echo '<script>window.location="../criar.php"</script>';
        exit;

     }
    }else{
            echo '<script>window.location="../index.php"</script>';
    }

?>