<?php
$lastName = $params['data']["LAST_NAME"] ?: 'Lapalus';
$userName = $params['data']["USERNAME"] ?: 'MLapalus';
$firstName = $params['data']["FIRST_NAME"] ?: 'Michel';
$birthDate = $params['data']["BIRTH_DATE"] ?: date_create();
$description = $params['data']["DESCRIPTION"] ?: date_create();
?>

<div class="card" style="width: 18rem;">
  <div class="card-header">
    <strong>Nom: </strong> <?= htmlspecialchars($lastName) ?></br>
    <strong>Prenom: </strong> <?= htmlspecialchars($firstName) ?></br>
    <strong>Surnom: </strong> <?= htmlspecialchars($userName) ?></br>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Date de Naissance:<?= htmlspecialchars($birthDate) ?></li>
    <li class="list-group-item">A mon sujet: </br><?= htmlspecialchars($description) ?></li>
  </ul>
</div>

<?php

?>