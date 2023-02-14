<?php
global $metaHome;
?>

<section id="conclu">
    <div class="wave">
        <img class="wave_hover" src="<?php echo asset('img/svg/home/vague.svg'); ?>" alt="vague blanche">
    </div>
    <div class="wrap4">
        <div class="title">
            <h1><?= web_r($metaHome, 'advice_title') ?></h1>
        </div>
        <div class="content">
            <p><?= web_r($metaHome, 'advice_text1') ?></p>
            <p id="important">"<?= web_r($metaHome, 'intro_text') ?>"</p>

        </div>
    </div>
</section>
