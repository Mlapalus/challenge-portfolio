<h1>FORMATIONS</h1>

<div class="row">
  <?php
  foreach ($params['dataFormation'] as $key => $value) {
  ?>
  <div class="col-12">
    <div class="card" style="width: 18rem;">
      <div class="card-header">
        <strong>Titre: </strong> <?= htmlspecialchars($value['TITLE']) ?></br>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Lieux:<?= htmlspecialchars($value['SCHOOL']) ?></li>
        <li class="list-group-item">Diplôme:<?= htmlspecialchars($value['GRADUATE']) ?></li>
        <li class="list-group-item">Date de début:<?= htmlspecialchars($value['START_DATE']) ?></li>
        <li class="list-group-item">
          <?= htmlspecialchars($value['END_DATE']) ? 'Date de Fin: ' . htmlspecialchars($value['END_DATE']) : 'Encore en Poste' ?>
        </li>
        <li class="list-group-item">Sujet:<?= htmlspecialchars($value['DESCRIPTION']) ?></li>
      </ul>
    </div>
  </div>
  <?php
  }
  ?>
</div>
<h1>EXPERIENCES</h1>
<div class="row">
  <?php
  foreach ($params['dataExp'] as $key => $value) {
  ?>
  <div class="col-12">
    <div class="card" style="width: 18rem;">
      <div class="card-header">
        <strong>Titre: </strong> <?= htmlspecialchars($value['TITLE']) ?></br>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Société::<?= htmlspecialchars($value['COMPANY']) ?></li>
        <li class="list-group-item">Date de début:<?= htmlspecialchars($value['START_DATE']) ?></li>
        <li class="list-group-item">
          <?= htmlspecialchars($value['END_DATE']) ? 'Date de Fin: ' . htmlspecialchars($value['END_DATE']) : 'Encore en Poste' ?>
        </li>
        <li class="list-group-item">Sujet: </br> <?= htmlspecialchars($value['DESCRIPTION']) ?></li>
      </ul>
    </div>
  </div>

  <?php
  }
  ?>
</div>