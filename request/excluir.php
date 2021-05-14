<?php

    include_once("../config/Database.php");

    $inscrito = filter_input(INPUT_GET,'inscrito',FILTER_VALIDATE_INT);

    if (isset($inscrito) && !empty($inscrito)) {
        $excluirInscrito = $convite->excluirInscrito($inscrito);

        if ($excluirInscrito){
            session_start();
            $_SESSION['sucesso-excluir']=true;
            echo '<script>window.location="../index.php"</script>';
            exit;
    
         }
       
    }

?>