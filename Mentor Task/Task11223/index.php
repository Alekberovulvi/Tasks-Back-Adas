<?php

require_once('./loyauts/header.php');
require_once('./database.php');

$getMain = $conn->prepare("SELECT * FROM mains");
$getMain->execute(); 
$mains = $getMain->fetch(PDO::FETCH_ASSOC);

?>

  <main>
        <section class="divimg">
            <div style="background-image: url('assets/img/<?=$mains["img"]?>'); height: 700px; width: 100%; background-repeat: no-repeat; background-size: cover; display: flex; align-items: flex-end; padding-bottom: 30px; padding-left: 60px;">
                <a href="menu.html"><button class="order_btn">Sipariş Ver</button></a></div>
        </section>
    </main>


    <?php
require_once('./loyauts/footer.php');

    ?>