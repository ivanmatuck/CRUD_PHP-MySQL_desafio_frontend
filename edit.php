<?php
include("db.php");
$nome = '';
$email= '';
$telefone= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nome = $row['nome'];
    $email = $row['email'];
    $telefone = $row['telefone'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nome= $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];

  $query = "UPDATE task set nome = '$nome', email = '$email', telefone = '$telefone' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Alterado com sucesso!';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nome" type="text" class="form-control" value="<?php echo $nome; ?>" placeholder="Atualizar nome">
        </div>
        <div class="form-group">
            <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" placeholder="Atualizar e-mail">
        </div>
        <div class="form-group">
            <input name="telefone" type="text" class="form-control" value="<?php echo $telefone; ?>" placeholder="Atualizar telefone">
        </div>
        <button class="btn-success" name="update">
          Atualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
