<?php
    include_once("config/Database.php");
    $convite;
    session_start();
    include_once("request/menu.php");
?>
<body>
<h2 class="text-center">INSCRIÇÃO</h2>
<div class="col-8 m-auto">
    <?php
     if(isset($_SESSION['sucesso'])) {
         echo "
         <div class='alert alert-success text-center' role='alert'>
         A inscrição foi criada com sucesso.
            </div>
            ";
       }unset($_SESSION['sucesso']);
    ?>
    <form action="request/inserir.php" method="POST">
        <label for="">Primeiro Nome</label>
        <input type="text" class="form-control" name="primeiro_nome" id="" placeholder="Nome">
        <label for="">Último Nome</label>
        <input type="text" class="form-control" required="" name="ultimo_nome" id="" placeholder="Nome">
        <label>Género</label>
        <select  name="genero" class="form-control">
            <option value="Masculino">Seleccione</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>
        <label>Curso</label>
        <select name="curso" id="" class="form-control">
            <option value="Direito">Seleccione</option>
            <option value="Direito">Direito</option>
            <option value="Engenharia Infomatica">Engenharia Infomatica</option>
            <option value="Engermagem Geral">Engermagem Geral</option>
            <option value="Economia">Economia</option>
            <option value="Contabilidade">Contabilidade</option>
        </select>
        <label>Turno</label>
        <select  name="turno" class="form-control">
            <option value="Manhã">Seleccione</option>
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select>
    <input class="btn btn-primary mt-3" type="submit" name="salvar" value="Cadastrar">
    </form>

</div>
</body>
</html>