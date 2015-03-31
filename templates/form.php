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

    <div class="form-group <?php if ($student->getError("name")): ?> has-error <?php endif; ?>">
      <label class="control-label" for="name">Имя 
        <?php if ($student->getError("name")): ?> введено не верно <?php endif; ?>
      </label>
      <input type="text" class="form-control" id="name" name="name" value="<?= h($student->getName()) ?>">
    </div>

    <div class="form-group <?php if ($student->getError("surname")): ?> has-error <?php endif; ?>">
      <label class="control-label" for="surname">Фамилия 
        <?php if ($student->getError("surname")): ?> введена не верно <?php endif; ?>
      </label>
      <input type="text" class="form-control" id="surname" name="surname" value="<?= h($student->getSurname()) ?>">
    </div>

    <div class="form-group <?php if ($student->getError("email") || $emailExist): ?> has-error <?php endif; ?>">
      <label class="control-label" for="email">Email
        <?php if ($student->getError("email")): ?> введен не верно <?php endif; ?>
        <?php if ($emailExist): ?> уже существует <?php endif; ?>
      </label>
      <input type="email" class="form-control" id="email" name="email" value="<?= h($student->getEmail()) ?>">
    </div>

    <div class="form-group <?php if ($student->getError("groupNumber")): ?> has-error <?php endif; ?>">
      <label class="control-label" for="groupnumber">Номер группы 
        <?php if ($student->getError("groupNumber")): ?>введен не верно <?php endif; ?> 
      </label>
      <input type="text" class="form-control" id="groupNumber" name="groupNumber" value="<?= h($student->getGroupNumber()) ?>">
    </div>

    <div class="form-group <?php if ($student->getError("scores")): ?> has-error <?php endif; ?>">
      <label class="control-label" for="scores">Количество баллов
        <?php if ($student->getError("scores")): ?>введено не верно <?php endif; ?> 
      </label>
      <input type="number" class="form-control" id="scores" name="scores" value="<?= h($student->getScores()) ?>">
    </div>

    <div class="form-group <?php if ($student->getError("yearOfBirth")): ?> has-error <?php endif; ?>">
      <label class="control-label" for="yearOfBirth">Год рождения 
        <?php if ($student->getError("yearOfBirth")): ?>введен не верно <?php endif; ?>
      </label>
      <input type="number" class="form-control" id="yearOfBirth" name="yearOfBirth" value="<?= h($student->getYearOfBirth()) ?>">
    </div>

    <label><?php if ($student->getError("gender")): ?> <span style="color: #a94442">Вы не указали пол</span>
      <?php else: ?> Укажите ваш пол
      <?php endif; ?>
    </label>

    <div class="radio">
      <label>
        <input type="radio" name="gender"  value="male"
               <?php if ($student->getGender() == 'male'): ?>checked<?php endif; ?>>
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

    <label><?php if ($student->getError("residence")): ?> <span style="color: #a94442">Вы не указали место жительства</span>
      <?php else: ?>Укажите ваше место жительства
      <?php endif; ?>
    </label>

    <div class="radio">
      <label>
        <input type="radio" name="residence"  value="notlocal"
               <?php if ($student->getResidence() == 'notlocal'): ?>checked<?php endif; ?>>
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
