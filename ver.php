<?php 
include_once("config/Database.php");

$inscrito=filter_input(INPUT_GET,'inscrito',FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($inscrito) && !empty($inscrito)) {
    
    $bucaInscrito = $convite->selecionarInscritoPorId($inscrito);

    if (empty($bucaInscrito)) {
        header('Location:index.php');
    }
    include_once("request/menu.php");
?>
<h2 class="text-center mt-4">VER DADOS</h2>
<div class="col-8 m-auto">
<ul class="list-group mt-4">
  <li class="list-group-item active">Informação de Cadastro</li>
  <li class="list-group-item"><strong>Primeiro Nome:</strong> <?php echo $bucaInscrito['primeiro_nome'];?></li>
  <li class="list-group-item"><strong>Último Nome:</strong> <?php echo $bucaInscrito['ultimo_nome'];?></li>
  <li class="list-group-item"><strong>Género:</strong> <?php echo $bucaInscrito['genero'];?></li>
  <li class="list-group-item"><strong>Curso:</strong> <?php echo $bucaInscrito['curso'];?></li>
  <li class="list-group-item"><strong>Periodo:</strong> <?php echo $bucaInscrito['periodo'];?></li>
</ul>
</div>    
</body>
</html>    
<?php
}else{
    echo '<script>window.location="../index.php"</script>';  
}

?>