<?php include '/templates/header.php'; ?>

<div class="container">

  <?php if ($success == 'create'): ?>
    <div class="alert alert-success" role="alert">Данные успешно добавлены</div>
  <?php elseif ($success == 'update'): ?>
    <div class="alert alert-info" role="alert">Данные успешно обновлены</div>   
  <?php endif; ?>

  <table class="table table-bordered">

    <tr>
      <?php foreach ($orderColumns as $key => $value) { ?>  
        <th>
          <a href="<?= $value ?>"><?= $key ?></a> 
        </th>
      <?php } ?>
    </tr>

    <?php foreach ($students as $student) { ?>
      <tr>
        <td><?= hlw(h($student->getName()), h($userSearch)) ?></td>
        <td><?= hlw(h($student->getSurname()), h($userSearch)) ?> </td>
        <td><?= hlw(h($student->getGroupNumber()), h($userSearch)) ?> </td>
        <td><?= hlw(h($student->getScores()), h($userSearch)) ?> </td>
      </tr>
    <?php } ?>

  </table>

  <nav>
    <ul class="pagination">
      <?php foreach ($countPage as $key => $value) { ?>
        <li <?php if ($startRecord == ($key - 1) * 10): ?>
            class="active"
          <?php endif; ?>>
          <a href="<?= $value ?>"><?= $key ?></a>
        </li>
      <?php } ?>
    </ul>
  </nav>
</div>


<?php include '/templates/footer.php'; ?>