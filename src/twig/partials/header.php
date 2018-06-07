<?php
require './assets/php/config/config.php';
require './assets/php/config/dbconnect.php';
require './assets/php/fetch_header.php';
foreach ($result as $header_list)
{
    $title = $header_list['title'];
    $subtitle = $header_list['subtitle'];
}
?>

<header class="header">
    <div class="header__content">
        <h1 class="header__title"><?php echo $title; ?></h1>
        <?php
        if ($subtitle != '')
        {
            ?>
            <h2 class="header__subtitle"><?php echo $subtitle; ?></h2>
            <?php
        }
        ?>
        <a class="button header__link">
            <span class="button__icon-wrapper">
                <i class="button__icon icon fas fa-angle-down"></i>
            </span>
            <span class="button__text">Ontdek de toekomst</span>
        </a>
    </div>
</header>