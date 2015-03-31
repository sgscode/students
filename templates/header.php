<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Main</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/sticky-footer-navbar.css">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        
        <ul class="nav navbar-nav" id="mainmenu">
          
          <li <?php if ($section == 'formpage'): ?>
            class="active"
            <?php endif; ?>>
            <a href="formpage.php" >
              <?php if (!$loggedIn): ?>
                Регистрация
              <?php else : ?>
                Редактировать профиль
              <?php endif; ?>
            </a>
          </li>
          
          <li  <?php if ($section == 'listpage'): ?>
              class="active"
            <?php endif; ?>>
            <a href="listpage.php">Список студентов</a>
          </li>
          
        </ul>
        
        <?php if($section=="listpage"): ?>
        <form class="navbar-form navbar-right" role="search" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
          <div class="form-group">
            <input type="text" name="userSearch" class="form-control" placeholder="Поиск" value="<?= h($userSearch); ?>">
          </div>
          <button type="submit" class="btn btn-default">Поиск</button>
        </form>
        <?php endif; ?>
        
      </div>
    </nav>



