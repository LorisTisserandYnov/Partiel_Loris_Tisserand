<?php
require_once '../../functions/db_nl.php';
require_once '../function/db.php';
require_once '../../views/layout/header.php';
?>

<h1>Editer une voiture</h1>

<?php if (!isset($_GET['id'])) { ?>
  <div class="alert alert-danger" role="alert">
    Paramètre manquant : id
  </div>
  <?php
  exit;
}

if (isset($_POST['email_nl']))
    $nom = $_POST['email_nl'];


if (isset($_POST['email']))
    $nom = $_POST['email'];