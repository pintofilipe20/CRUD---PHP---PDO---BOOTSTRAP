<?php
include_once("config/Database.php");
$convite;
$inscritos=$convite->candidatosInscritos();
session_start();
include_once("request/menu.php");
?>
<h2 class="text-center mt-4">CRUD - PHP - PDO - BOOTSTRAP</h2>
<div class="text-center mt-3 mb-4">
<a href="criar.php">
    <button class="btn btn-success">Cadastrar</button>
</a>
</div>
<div class="col-9 m-auto">
<?php
     if(isset($_SESSION['sucesso'])) {
         echo "
         <div class='alert alert-success text-center' role='alert'>
         A inscrição foi actualizada com sucesso.
            </div>
            ";
       }
       if(isset($_SESSION['sucesso-excluir'])) {
        echo "
        <div class='alert alert-warning text-center' role='alert'>
          A inscrição foi eliminado com sucesso da base de dados.
        </div>
           ";
          }
       unset($_SESSION['sucesso'],$_SESSION['sucesso-excluir']);
    ?>
<table class="table table-hover text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Primeiro</th>
      <th scope="col">Último</th>
      <th scope="col">Género</th>
      <th scope="col">Curso</th>
      <th scope="col">Período</th>
      <th scope="col">Acções</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($inscritos as $listainscrito){
    ?>
    <tr>
      <th scope="row"><?php echo $listainscrito['id']; ?></th>
      <td><?php echo $listainscrito['primeiro_nome']; ?></td>
      <td><?php echo $listainscrito['ultimo_nome']; ?></td>
      <td><?php echo $listainscrito['genero']; ?></td>
      <td><?php echo $listainscrito['curso']; ?></td>
      <td><?php echo $listainscrito['periodo']; ?></td>
      <td>
          <a href="ver.php?inscrito=<?php echo $listainscrito['id']; ?>">
              <button class="btn btn-dark">visualizar</button>
          </a>
          <a href="editar.php?inscrito=<?php echo $listainscrito['id']; ?>">
              <button name="editar" class="btn btn-primary">Editar</button>
          </a>
          <a href="request/excluir.php?inscrito=<?php echo $listainscrito['id']; ?>">
              <button class="btn btn-danger">Exluir</button>
          </a>
      </td>
    </tr>
    <?php }?>
</table>

</div>
</body>
</html>