<?php
$title = $params['data']["TITLE"];
$company = $params['data']["COMPANY"];
$startDate = $params['data']["START_DATE"];
$endDate = $params['data']["END_DATE"];
$description = $params['data']["DESCRIPTION"];
?>

<div class="card" style="width: 18rem;">
  <div class="card-header">
    <strong>Titre: </strong> <?= $title ?></br>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Société::<?= $company ?></li>
    <li class="list-group-item">Date de début:<?= $startDate ?></li>
    <li class="list-group-item">Date de fin:<?= $endDate ?></li>
    <li class="list-group-item">Sujet:<?= $description ?></li>
  </ul>
</div>

<?php

?>