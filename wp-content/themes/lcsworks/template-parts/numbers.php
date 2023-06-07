<section class="numbers" data-aos="fade-up">
    <div class="common-container numbers__list">
        <?php foreach ($numbers as $key => $number) { ?>
            <div class="numbers__item">
                <h3 class="common-title numbers__title">
                    <?php echo $number->quantity; ?>
                </h3>

                <p class="common-text numbers__text">
                    <?php echo $number->text; ?>
                </p>
            </div>
        <?php } ?>
    </div>
</section>