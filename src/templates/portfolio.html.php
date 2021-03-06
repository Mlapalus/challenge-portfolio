<h1>PROJETS REALISES</h1>
<div class="row">
  <?php
  foreach ($params['dataPortfolio'] as $key => $value) {
  ?>
  <div class="col">
    <div class="card" style="width: 18rem;">
      <div class="card-header">
        <strong>Titre: </strong> <?= htmlspecialchars($value['TITLE']) ?: 'Mon Titre' ?></br>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Date de création: <?= htmlspecialchars($value['CREATION_DATE']) ?: date_create() ?>
        </li>
        <li class="list-group-item">Sujet:</br><?= htmlspecialchars($value['DESCRIPTION']) ?: 'Description' ?></li>
        <li class="list-group-item">Adresse: </br>
          <a href="<?= htmlspecialchars($value['URL']) ?: '#' ?>">
            <?= htmlspecialchars($value['URL']) ?: '#' ?>
          </a>
        </li>
        <li class="list-group-item">Tags: </br>
          <?php
            foreach ($params['dataPortfolioTags'] as $keyTag => $tag) {
              if (htmlspecialchars($tag['PORTFOLIO_ID']) == htmlspecialchars($value['ID'])) {
                echo '#' . $tag['TAG']; ?> </br> <?php
                                                }
                                              }
                                                  ?>
        </li>
      </ul>
    </div>
  </div>
  <?php
  }
  ?>
</div>