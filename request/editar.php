<?php 
include_once("../config/Database.php");

if (isset($_POST['salvar'])) {
    $primeiro_nome = filter_input(INPUT_POST,'primeiro_nome',FILTER_SANITIZE_STRING);
    $ultimo_nome = filter_input(INPUT_POST,'ultimo_nome',FILTER_SANITIZE_STRING);
    $genero = filter_input(INPUT_POST,'genero',FILTER_SANITIZE_STRING);
    $curso = filter_input(INPUT_POST,'curso',FILTER_SANITIZE_STRING);
    $periodo = filter_input(INPUT_POST,'turno',FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
    $editarInscrito= $convite->editarInscritoPorId($primeiro_nome,$ultimo_nome,$genero,$curso,$periodo, $id);
   
    if ($editarInscrito) {
        session_start();
        $_SESSION['sucesso']=true;
        echo '<script>window.location="../index.php"</script>';
        exit;

     }
    }
  
?>