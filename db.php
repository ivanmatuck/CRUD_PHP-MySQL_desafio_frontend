<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'data_crud_php_mysql'
) or die(mysqli_erro($mysqli));

?>
