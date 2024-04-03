<?php

require_once('./loyauts/header.php');
require_once('./database.php');

$getBurgers = $conn->prepare("SELECT * FROM burgers");
$getBurgers->execute(); 
$burgers = $getBurgers->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Burgerler</h1>

<main>
    <section>
        <div class="burgers">
          <?php
          foreach($burgers as $burger){
          ?>
           <div>
                <div class="content">
                    <div id="card" class="card">
                        <div class="side">
                            <div class="card-img"><img src="./assets/img/<?=$burger["img"]?>" alt="Cheese Burger"></div>
                            <div class="card-info">
                                <p class="card-info-title"><?=$burger["name"]?><span>R$ <?=$burger["price"]?></span></p>
                                <p class="card-info-text"><?=$burger["desc"]?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php  
          }
          ?>
        </div>
    </section>
</main>

<?php
require_once('./loyauts/footer.php');
?>