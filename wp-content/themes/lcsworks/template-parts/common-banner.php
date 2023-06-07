<section class="common-banner" data-lazy="<?php echo isset($banner) ? $banner : image('common-banner-fallback.jpg'); ?>">
    <div class="common-container">
        <h1 class="common-title common-banner__title">
            <strong>
                <?php echo $title; ?>
            </strong>

            <?php if (isset($subtitle)) { ?>
                <?php echo $subtitle; ?>
            <?php } ?>
        </h1>
    </div>
</section>
<?php echo load_svg('points', 'common-banner__points'); ?>