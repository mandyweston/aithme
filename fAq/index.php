<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=mandywes_pht_db', 'mandywes_pht_user', 'myP4ssw@rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}

include 'fAq.html.php';

?>