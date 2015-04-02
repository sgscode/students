<?php include '/templates/header.php'; ?>

<div class="container">

  <?php if ($success == 'create'): ?>
      <div class="alert alert-success" role="alert">Данные успешно добавлены</div>
  <?php elseif ($success == 'update'): ?>
      <div class="alert alert-info" role="alert">Данные успешно обновлены</div>   
  <?php endif; ?>

  <?php if (!$students): ?>
      Ничего не найдено, вернуться <a href="<?= $phpSelf ?>"> на главную</a>
  <?php else: ?>

      <table class="table table-bordered">

        <tr>
          <?php foreach ($orderColumns as $linkName => $url): ?>  
              <th>
                <a href="<?= h($url) ?>"><?= $linkName ?></a> 
              </th>
          <?php endforeach; ?>
        </tr>
        <?php if (!$students): ?> Ничего не найдено <?php endif; ?>
        <?php foreach ($students as $student) : ?>
            <tr>
              <td><?= highlighting(h($student->getName()), h($userSearch)) ?></td>
              <td><?= highlighting(h($student->getSurname()), h($userSearch)) ?> </td>
              <td><?= highlighting(h($student->getGroupNumber()), h($userSearch)) ?> </td>
              <td><?= highlighting(h($student->getScores()), h($userSearch)) ?> </td>
            </tr>
        <?php endforeach; ?>

      </table>

  <?php endif; ?> 

  <nav>
    <ul class="pagination">
      <?php foreach ($countPage as $pageNumber => $url) : ?>
          <li <?php if ($startRecord == ($pageNumber - 1) * $recordPerPage): ?>
                class="active"
            <?php endif; ?>>
            <a href="<?= h($url) ?>"><?= $pageNumber ?></a>
          </li>
      <?php endforeach; ?>
    </ul>
  </nav>
      
</div>


<?php include '/templates/footer.php'; ?>