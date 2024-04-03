<!DOCTYPE html>
<html lang="en">
<?php
  require_once('head.php');
  $logo = "CO";
  $color = "Color Oracle";
$how = "How To";
$manual = "Manual";
$design = "Design Tips";
$useful = "Useful Linkss"

?>
  <body>
    <header class="header">
      <div class="header__logo">
        <a href="#"><?=$logo?></a>
      </div>
      <nav>
        <ul>
          <li>
            <a class="header__link active" href="##"><?=$color?></a>
          </li>
          <li>
            <a class="header__link" href="##"><?= $how?></a>
          </li>
          <li>
            <a class="header__link" href="##"><?= $manual?></a>
          </li>
          <li>
            <a class="header__link" href="##"><?= $design?></a>
          </li>
          <li>
            <a class="header__link" href="##"><?= $useful?></a>
          </li>
        </ul>
      </nav>
    </header>

