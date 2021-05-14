<?php 
include_once("config/Database.php");

$inscrito=filter_input(INPUT_GET,'inscrito',FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($inscrito) && !empty($inscrito)) {
    session_start();
    
    $bucaInscrito = $convite->selecionarInscritoPorId($inscrito);
   
    include_once("request/menu.php");
?>
<h2 class="text-center mt-4">VER DADOS</h2>
<div class="col-8 m-auto">
    
    <form action="request/editar.php" method="POST">
        <label for="">Primeiro Nome</label>
        <input type="text" class="form-control" value="<?php echo $bucaInscrito['primeiro_nome']; ?>" name="primeiro_nome" id="" placeholder="Nome">
        <input type="hidden"  value="<?php echo $bucaInscrito['id']; ?>" name="id">
        <label for="">Último Nome</label>
        <input type="text" class="form-control" value="<?php echo $bucaInscrito['ultimo_nome']; ?>" required="" name="ultimo_nome" id="" placeholder="Nome">
        <label>Género</label>
        <select  name="genero" class="form-control" >
            <option value="<?php echo $bucaInscrito['genero']; ?>"><?php echo $bucaInscrito['genero']; ?></option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>
        <label>Curso</label>
        <select name="curso" id="" class="form-control" >
            <option value="<?php echo $bucaInscrito['curso']; ?>"><?php echo $bucaInscrito['curso']; ?></option>
            <option value="Direito">Direito</option>
            <option value="Engenharia Infomatica">Engenharia Infomatica</option>
            <option value="Engermagem Geral">Engermagem Geral</option>
            <option value="Economia">Economia</option>
            <option value="Contabilidade">Contabilidade</option>
        </select>
        <label>Turno</label>
        <select  name="turno" class="form-control" >
            <option value="<?php echo $bucaInscrito['periodo']; ?>"><?php echo $bucaInscrito['periodo']; ?></option>
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select>
    <input class="btn btn-primary mt-3" type="submit" name="salvar" value="Actualizar">
    </form>

</div>    
</body>
</html>    
<?php
    
}else{
    echo '<script>window.location="../index.php"</script>';  
}

?>