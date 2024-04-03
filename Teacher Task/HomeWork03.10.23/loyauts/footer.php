    <?php
      $card = [
        [
          "haq" => 'About',
          "desc" => 'Development: Bernie Jenny, Monash University, Australia. Ideas,
            testing and icon: Nathaniel Vaughn Kelso, California.'
        ],
        [
          "haq" => 'Feedback',
          "desc" => 'Color Oracle is a work in progress and will improve with time and
            your input. Please share your Color Oracle testimonial with us and
            send us an email.'
        ],
        [
          "haq" =>'Source',
          "desc" => ' Color Oracle is open source, available on GitHub for Mac and
            Windows/Java.'
        ]
        ];

      $paragraph = "© 2006–2018 by Bernie Jenny, Monash University, Melbourne, Australia.
          Last site update: 5 May 2018.";
    ?>

    
    <footer class="footer">
      <div class="footer__top">
        <?php
        for($i = 0; $i < count($card); $i++){?>
          <div class="footer__top__item">
          <h2 class="footer__top__title"><?= $card[$i]['haq']?></h2>
          <p class="footer__top__desc">
            <?= $card[$i]['desc']?>
          </p>
        </div>
        <?php

          }?>
      </div>
      <div class="footer__bottom">
        <p class="footer__bottom__copy">
          <?= $paragraph?>
        </p>
      </div>
    </footer>

  </body>
</html>