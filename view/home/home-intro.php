<?php
global $web;
global $metaHome;
?>
<section id="intro">
    <div class="wrap3">
        <div class="left" >
            <div class="txt_intro">
                <h1>cvtech</h1>
            </div>
            <div class="para">
                <p><?= web_r($metaHome, 'intro_text')?></p>
            </div>
            <div class="link_intro">
                <a href="<?= path($web['page']['addcv']['slug']); ?>">Creer votre compte</a>
            </div>
        </div>
    </div>
    <div class="wave">
        <img class="wave_hover" src="<?php echo asset('img/svg/home/vague.svg'); ?>" alt="vague blanche">
    </div>
</section>
