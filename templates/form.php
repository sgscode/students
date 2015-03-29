<?php include '/templates/header.php'; ?>
<div class="container">
  <?php if ($errorXsrf <> ''): ?>
    <div class="alert alert-danger" role="alert"><?= $errorXsrf; ?></div>   
  <?php endif; ?>
  <h3>
    <?php if ($cookieCode == ''): ?>
      Регистрация
    <?php else : ?>
      Редактировать профиль
    <?php endif; ?>
    <span style="font-size: 70%">(все поля обязательны для заполнения)</span>
  </h3>
  <hr>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    <input type="hidden" name="xsrfForm" value="<?= $cookieXsrf ?>">
    
    <div class="form-group <?php if (isset($err["name"])):?> has-error <?php endif;?>">
      <label class="control-label" for="name">Имя <?= $student->getErrors("name") ?> </label>
      <input type="text" class="form-control" id="name" name="name" value="<?= h($student->getName()) ?>">
    </div>
    
    <div class="form-group <?php if (isset($err["surname"])):?> has-error <?php endif;?>">
      <label class="control-label" for="surname">Фамилия <?= $student->getErrors("surname") ?> </label>
      <input type="text" class="form-control" id="surname" name="surname" value="<?= h($student->getSurname()) ?>">
    </div>
    
    <div class="form-group <?php if (isset($err["email"])||$emailExist):?> has-error <?php endif;?>">
      <label class="control-label" for="email">Email <?= $student->getErrors("email") ?>
        <?php if($emailExist): echo ' уже существует'; endif;?></label>
      <input type="email" class="form-control" id="email" name="email" value="<?= h($student->getEmail()) ?>">
    </div>
    
    <div class="form-group <?php if (isset($err["groupNumber"])):?> has-error <?php endif;?>">
      <label class="control-label" for="groupnumber">Номер группы <?= $student->getErrors("groupNumber") ?> </label>
      <input type="text" class="form-control" id="groupNumber" name="groupNumber" value="<?= h($student->getGroupNumber()) ?>">
    </div>
    
    <div class="form-group <?php if (isset($err["scores"])):?> has-error <?php endif; ?>">
      <label class="control-label" for="scores">Количество баллов <?= $student->getErrors("scores") ?> </label>
      <input type="number" class="form-control" id="scores" name="scores" value="<?= h($student->getScores()) ?>">
    </div>
    
    <div class="form-group <?php if (isset($err["yearOfBirth"])):?> has-error <?php endif; ?>">
      <label class="control-label" for="yearOfBirth">Год рождения <?= $student->getErrors("yearOfBirth") ?> </label>
      <input type="number" class="form-control" id="yearOfBirth" name="yearOfBirth" value="<?= h($student->getYearOfBirth()) ?>">
    </div>

    <label>Укажите ваш пол</label>

    <div class="radio">
      <label>
        <input type="radio" name="gender"  value="male" checked>
        Мужской
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="gender"  value="female" 
          <?php if ($student->getGender() == 'female'): ?>checked<?php endif; ?>>
        Женский
      </label>
    </div>

    <label>Укажите ваше место жительства</label>

    <div class="radio">
      <label>
        <input type="radio" name="residence"  value="notlocal" checked>
        Иногородний
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="residence"  value="local" 
          <?php if ($student->getResidence() == 'local'): ?>checked<?php endif; ?>>
        Местный
      </label>
    </div>

    <button type="submit" name="submit" class="btn btn-default">Отправить данные</button>
  </form>
</div>
<?php
include '/templates/footer.php';
