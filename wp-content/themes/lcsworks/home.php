<?php
//Template name: Página inicial
require_once template-parts("head");
require_once controllers(basename(__FILE__, ".php"));
?>

<body <?php body_class(); ?> id="inicio">
    <?php if ($video) { ?>
        <div class="hero__video">
            <video muted autoplay loop>
                <source src="<?php echo $video; ?>" type="video/mp4">
            </video>
        </div>
    <?php } ?>