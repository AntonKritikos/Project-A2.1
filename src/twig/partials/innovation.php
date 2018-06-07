<?php
require './assets/php/fetch_content.php';
foreach ($list as $innovation_list)
{
    $id = $innovation_list['id'];
    $background = $innovation_list['background_image'];
    $title = $innovation_list['title'];
    $subtitle = $innovation_list['subtitle'];
    $content = $innovation_list['content'];
    $button_text = $innovation_list['button_text'];
    $button_link = $innovation_list['button_link'];
    $layout = $innovation_list['layout'];
    ?>
    <section class="innovation innovation-<?php echo $layout; ?>" id="anchor-<?php echo $layout; ?>" style="background:url(<?php echo $background; ?>) top center fixed no-repeat #ccc; background-size: 150%">
    <div class="innovation__container">
        <div class="innovation__content">
            <?php
            if ($title != '')
            {
                ?>
                <div class="innovation__heading">
                <?php
                    if ($title != '')
                    {
                        ?>
                        <h2 class="innovation__title"><?php echo $title; ?></h2>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            if ($content != '')
            {
                ?>
                <article class="innovation__wrapper">
                    <?php
                    if ($subtitle != '')
                    {
                        ?>
                        <h2 class="innovation__title"><?php echo $subtitle; ?></h2>
                        <?php
                    }
                    if ($content != '')
                    {
                        ?>
                        <p class="innovation__paragraph"><?php echo $content; ?></p>
                        <?php
                    }
                    if ($button_text != '')
                    {
                        ?>
                        <a href="<?php echo $button_link; ?>" class="button button--<?php echo $layout; ?>">
                            <span class="button__text"><?php echo $button_text; ?></span>
                        </a>
                        <?php   
                    }
                    ?> 
                </article>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
}