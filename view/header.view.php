
<?php global $app; ?>

<header class="main-wrapper">
    <div class="navigation-container">
        <div class="main-site-wrapper">
            <div class="navigation-logo">
                <a class="navigation-menu-link" href="#start"><img class="parameters-pictures" src="img\logo.png" id="top-logo"></a>
            </div>
            <div class="navigation-title">
                dizaina darbnīca
            </div>

            <div class="navigation-menu-language">

                <?php foreach($app->getSupportedLocales() as $locale) : ?>
              <a href="/?lang=<?= $locale; ?>"><?= $locale; ?>
               <?php endforeach; ?>

            </div>

            <div class="navigation-menu">
            <?php  echo render_nav($menu_lang,$menu_cfg); ?>
            </div>

        </div>
    </div>
</header>
