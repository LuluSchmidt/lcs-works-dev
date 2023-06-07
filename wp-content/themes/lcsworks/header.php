<header id="main-header">
    <div class="common-container">
        <a href="<?php echo site_url(); ?>" class="header__logo">
            <span class="header__logo__image" data-lazy="<?php echo image('logo.png') ?>"></span>
        </a>

        <div class="header__mobile">
            <div class="header__mobile__line"></div>
            <div class="header__mobile__line"></div>
            <div class="header__mobile__line"></div>
        </div>

        <nav class="header__nav">
            <ul class="menu">
                <?php foreach ($main_menu as $menu) { ?>
                    <li class="menu__item">
                        <a href="<?php echo $menu->url; ?>" class="common-text--white menu__link <?php echo $menu->classes; ?>" <?php echo ($menu->target) ? "target='{$menu->target}'" : ''; ?>>
                            <?php echo $menu->title; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>

            <?php if ($contacts->facebook || $contacts->instagram || $contacts->linkedin || $contacts->tiktok) { ?>
                <ul class="social">
                    <?php if ($contacts->facebook) { ?>
                        <li class="social__item">
                            <a href="<?php echo $contacts->facebook; ?>" class="social__link" target="_blank" rel="noopener noreferrer">
                                <?php echo load_svg('facebook'); ?>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if ($contacts->instagram) { ?>
                        <li class="social__item">
                            <a href="<?php echo $contacts->instagram; ?>" class="social__link" target="_blank" rel="noopener noreferrer">
                                <?php echo load_svg('instagram'); ?>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if ($contacts->linkedin) { ?>
                        <li class="social__item--linkedin">
                            <a href="<?php echo $contacts->linkedin; ?>" class="social__link" target="_blank" rel="noopener noreferrer">
                                <?php echo load_svg('linkedin'); ?>
                            </a>
                        </li>
                    <?php } ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            <?php ?>
        </nav>
    </div>
</header>