<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $query = "INSERT INTO task(nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Os dados não foram salvos.");
  }

  $_SESSION['message'] = 'Dados salvos com sucesso';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
