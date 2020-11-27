<?php
$lastName = $params['data']["LAST_NAME"] ?: 'Lapalus';
$userName = $params['data']["USERNAME"] ?: 'MLapalus';
$firstName = $params['data']["FIRST_NAME"] ?: 'Michel';
$birthDate = $params['data']["BIRTH_DATE"] ?: date_create();
$description = $params['data']["DESCRIPTION"] ?: date_create();
?>

<div class="card" style="width: 18rem;">
  <div class="card-header">
    <strong>Nom: </strong> <?= $lastName ?></br>
    <strong>Prenom: </strong> <?= $firstName ?></br>
    <strong>Surnom: </strong> <?= $userName ?></br>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Date de Naissance:<?= $birthDate ?></li>
    <li class="list-group-item">A mon sujet: </br><?= $description ?></li>
  </ul>
</div>

<?php

?>