<?php require_once(template('head')); ?>

<body <?php body_class('page-404'); ?> id="inicio">
    <?php if ($video) { ?>
        <div class="hero__video">
            <video muted autoplay loop>
                <source src="<?php echo $video; ?>" type="video/mp4">
            </video>
        </div>
    <?php } ?>

    <?php require_once(template('header')); ?>

    <section class="page-title common-container">
        <h2 class="common-title">
            Que pena!
        </h2>
        <h4 class="common-title small">
            Parece que esta página não foi encontrada ou não existe mais.
        </h4>

        <a href="<?php echo site_url(); ?>" class="common-button">
            Voltar para a home
        </a>
    </section>

    <?php require_once template("footer"); ?>