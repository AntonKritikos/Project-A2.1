<?php
require './assets/php/fetch_about.php';
foreach ($list as $about_list)
{
    $title = $about_list['title'];
    $content = $about_list['content'];
    $button_text = $about_list['button_text'];
    $button_link = $about_list['button_link'];
    ?>
    <section class="about" id="about">
        <h2 class="about__title"><?php echo $title; ?></h2>
        <p class="about__paragraph">
            <?php echo $content; ?>
        </p>
        <a href="<?php echo $button_link; ?>" class="button button--small about__link">
            <span class="button__icon-wrapper">
                <i class="button__icon icon fas fa-angle-down"></i>
            </span>
            <span class="button__text"><?php echo $button_text; ?></span>
        </a>
    </section>
    <?php
}
?>