<footer class="footer">
    <div class="footer__wrapper">
        <?php
        if ($title != '')
        {
            ?>
            <div class="footer__heading">
                <h2 class="footer__title"><?php echo $title; ?></h2>
            </div>
            <?php
        }
        if ($content != '')
        {
            ?>
            <article class="footer__info">
                <p class="footer__paragraph"><?php echo $content; ?></p>
                <?php
                if ($button_link != '')
                {
                    ?>
                    <div class="footer__button-wrapper">
                        <a class="button button--<?php echo $button_theme; ?> footer__button footer__button--margin" href="<?php echo $button_link; ?>" target="_blank">
                            <span class="button__icon-wrapper">
                                <i class="button__icon icon fas fa-link"></i>
                            </span>
                             <span class="button__text"><?php echo $button_text; ?></span>
                        </a>
                    <?php
                }
                if ($button_link_2 != '')
                {
                    ?>
                    <a class="button footer__button button--<?php echo $button_theme_2; ?>" href="<?php echo $button_link_2; ?>" target="_blank">
                        <span class="button__icon-wrapper">
                            <i class="button__icon icon fas fa-link"></i>
                        </span>
                        <span class="button__text"><?php echo $button_text_2; ?></span>
                    </a>
                    <?php
                }
                ?>
                    <div class="c"></div>
                </div>
            </article>
            <?php
        }
        ?>
        
    </div>
    <div class="footer__social">
        <div class="footer__logo-wrapper">
            <a href="https://www.hu.nl/" class="footer__link" target="_blank">
                <img src="./assets/img/hu-logo.svg" alt="HU logo" class="footer__logo">
            </a>
        </div>
        <div class="footer__icons">
            <a href="" class="footer__link" target="_blank">
                <i class="icon--footer icon fab fa-facebook-f"></i>
            </a>
            <a href="" class="footer__link" target="_blank">
                <i class="icon--footer icon fab fa-twitter"></i>
            </a>
            <a href="" class="footer__link" target="_blank">
                <i class="icon--footer icon fab fa-instagram"></i>
            </a>
            <a href="" class="footer__link" target="_blank">
                <i class="icon--footer icon fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</footer>