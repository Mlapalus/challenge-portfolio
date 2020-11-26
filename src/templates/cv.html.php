<h1>FORMATIONS</h1>

<div class="row">
  <?php
  foreach ($params['dataFormation'] as $key => $value) {
  ?>
  <div class="col-12">
    <div class="card" style="width: 18rem;">
      <div class="card-header">
        <strong>Titre: </strong> <?= $value['TITLE'] ?></br>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Lieux:<?= $value['SCHOOL'] ?></li>
        <li class="list-group-item">Diplôme:<?= $value['GRADUATE'] ?></li>
        <li class="list-group-item">Date de début:<?= $value['START_DATE'] ?></li>
        <li class="list-group-item"><?= $value['END_DATE'] ? 'Date de Fin: ' . $value['END_DATE'] : 'Encore en Poste' ?>
        </li>
        <li class="list-group-item">Sujet:<?= $value['DESCRIPTION'] ?></li>
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
        <strong>Titre: </strong> <?= $value['TITLE'] ?></br>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Société::<?= $value['COMPANY'] ?></li>
        <li class="list-group-item">Date de début:<?= $value['START_DATE'] ?></li>
        <li class="list-group-item"><?= $value['END_DATE'] ? 'Date de Fin: ' . $value['END_DATE'] : 'Encore en Poste' ?>
        </li>
        <li class="list-group-item">Sujet: </br> <?= $value['DESCRIPTION'] ?></li>
      </ul>
    </div>
  </div>

  <?php
  }
  ?>
</div>