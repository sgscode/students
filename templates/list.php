<?php include '/templates/header.php'; ?>

<div class="container">

  <?php if ($success == 'create'): ?>
    <div class="alert alert-success" role="alert">Данные успешно добавлены</div>
  <?php elseif ($success == 'update'): ?>
    <div class="alert alert-info" role="alert">Данные успешно обновлены</div>   
  <?php endif; ?>

  <table class="table table-bordered">

    <tr>
      <?php foreach ($orderColumns as $linkName => $url) { ?>  
        <th>
          <a href="<?= h($url) ?>"><?= $linkName ?></a> 
        </th>
      <?php } ?>
    </tr>

    <?php foreach ($students as $student) { ?>
      <tr>
        <td><?= highlighting(h($student->getName()), h($userSearch)) ?></td>
        <td><?= highlighting(h($student->getSurname()), h($userSearch)) ?> </td>
        <td><?= highlighting(h($student->getGroupNumber()), h($userSearch)) ?> </td>
        <td><?= highlighting(h($student->getScores()), h($userSearch)) ?> </td>
      </tr>
    <?php } ?>

  </table>

  <nav>
    <ul class="pagination">
      <?php foreach ($countPage as $linkName => $url) { ?>
        <li <?php if ($startRecord == ($linkName - 1) * $recordPerPage): ?>
            class="active"
          <?php endif; ?>>
          <a href="<?= h($url) ?>"><?= $linkName ?></a>
        </li>
      <?php } ?>
    </ul>
  </nav>
</div>


<?php include '/templates/footer.php'; ?>