<?php
  require_once('./loyauts/header.php');
  $heroh1 = "Design for the color impaired";
  $herop = "Color Oracle is a free color blindness simulator for Windows, Mac
            and Linux. It takes the guesswork out of designing for color
            blindness by showing you in real time what people with common color
            vision impairments will see.";

  $cards = [
    [
      "os" => 'Mac',
      'link' => 'https://support.apple.com/kb/DL2080?viewlocale=en_US&locale=en_US',
      'requeirestex' => ''
    ],
    [
        "os" => 'Windows',
        "link" => 'https://www.microsoft.com/en-us/software-download/windows10',
      'requeirestex' => "Requires Java 6 or higher"
    ],
    [
        "os" => 'Linux',
        "link" => 'https://ubuntu.com/download/desktop/thank-you?version=22.04.3&architecture=amd64',
      'requeirestex' => "Requires Java 6 or higher"
    ]
  ] 
?>
    <main>
      <section class="hero">
        <div class="hero__content_box">
          <h1 class="hero__title"><?= $heroh1?></h1>
          <p class="hero__desc">
            <?= $herop?>
          </p>
        </div>
        <div class="hero__down_links">
          <?php
          for($i = 0 ; $i < count($cards) ; $i ++){?>
               <article class="hero__down_links--item">
            <a Download class="hero__down_links--item--link" href="<?= $cards[$i]['link'] ?>">
              Downloads for <?= $cards[$i]['os'] ?>
            </a>
            <span class="hero__down_links--item--info">
              <?= $cards[$i]['requeirestex'] ?>
            </span>
          </article>
          <?php
          }
          ?>
        </div>
      </section>
    </main>
<?php
  require_once('./loyauts/footer.php');
?>