<?php

require_once('./loyauts/header.php');
require_once('./database.php');

$getAbout = $conn->prepare("SELECT * FROM about");
$getAbout->execute(); 
$about = $getAbout->fetch(PDO::FETCH_ASSOC);

?>


 <main>
        <section class="about">
            <div class="about__img"><img src="./assets/img/<?=$about["img"]?>" alt=""></div>
            <h2 class="about__title"><?=$about["title"]?></h2>
            <p><?=$about["desc"]?></p>
        </section>
    </main>



    <?php
require_once('./loyauts/footer.php');
?>